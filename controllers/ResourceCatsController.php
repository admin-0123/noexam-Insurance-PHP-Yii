<?php

namespace app\controllers;

use app\components\BaseController;
use app\models\ResourcesCompanies;
use app\models\ResourceCatsSearch;
use app\models\ResourcesCats;
use app\models\ResourcesCatsLive;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\VarDumper;
use yii\web\Cookie;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

/**
 * ResourceCatsController implements the CRUD actions for ResourcesCats model.
 */
class ResourceCatsController extends BaseController {

	public $db_server = 'dev';

	public function behaviors(){
		return [
			'access' => [
				'class' => AccessControl::className(),
				'except' => ['site/error', 'admin/auth/login'],
				'only'  => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow'   => true,
						'roles'   => ['@'],
					],
				],
			],
			'verbs' => [
				'class'   => VerbFilter::className(),
				'actions' => [
					'delete' => ['POST'],
					'import' => ['POST'],
					'export' => ['POST'],
					'post' => ['POST'],
					'logout' => ['post'],
				],
			],
		];
	}

	public function beforeAction($action){
		$cookies = Yii::$app->request->cookies;
		$cookie = $cookies->get('db_server');

		#VarDumper::dump($cookie, 10, 1);

		if($cookie !== null){
			$this->db_server = $cookie->value;
		}else{
			$cookies = Yii::$app->response->cookies;
			$cookies->add(new Cookie([
				'name' => 'db_server',
				'value' => $this->db_server, // Продолжить отсюда
				'expire' => time()+(86400*30),
			]));
		}

		#VarDumper::dump($cookie->value, 10, 1);

		return parent::beforeAction($action); // TODO: Change the autogenerated stub
	}

	public function actionChangeDbServer(){
		$cookies = Yii::$app->response->cookies;
		$db_server = Yii::$app->request->get('db_server');
		if($db_server){
			$this->db_server = $db_server;
			$cookies->add(new Cookie([
				'name' => 'db_server',
				'value' => $this->db_server, // Продолжить отсюда
				'expire' => time()+(86400*30),
			]));
		}
		//VarDumper::dump(Yii::$app->request->get('db_server'), 10, 1);
		$redirect_url = !is_null($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/resource-cats/';
		return $this->redirect($redirect_url);
	}

	private function get_server_model(){
		#VarDumper::dump($this->db_server, 10, 1);
		if($this->db_server == 'live'){
			return new ResourcesCatsLive();
		}else{
			return new ResourcesCats();
		}
	}

	public function actionIndex(){
		$this->layout = '../../modules/admin/views/layouts/main';

		$searchModel  = $this->get_server_model();

		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		/*$dataProvider = new ActiveDataProvider([
			'query' => ResourcesCats::find(),
		]);*/

		return $this->render('index', [
			'dataProvider' => $dataProvider,
			'searchModel' => $searchModel,
			'db_server' => $this->db_server,
		]);
	}

	public function actionView($id){
		#VarDumper::dump($this->db_server, 10, 1); exit;
		#VarDumper::dump($id, 10, 1); exit;
		#VarDumper::dump($this, 10, 1); exit;
		$this->layout = 'admin';

		return $this->render('view', [
			'model' => $this->findModel($id),
			'db_server' => $this->db_server,
		]);
	}

	public function actionCreate(){
		$this->layout = 'admin';
		$model        = $this->get_server_model();
		$old_header_image = $model->header_image;

		if($model->load(Yii::$app->request->post())){
			if(!empty($_POST['ResourcesCats']['custom_childs_links'])){
				$model->custom_childs_links = implode(",", $_POST['ResourcesCats']['custom_childs_links']);
			}else{
				$model->custom_childs_links = '';
			}

			$model->header_image = $this->doUpload($old_header_image);
			$model->save();
			return $this->redirect(['view', 'id' => $model->id]);
		}else{
			return $this->render('create', [
				'model' => $model,
				'db_server' => $this->db_server,
			]);
		}
	}

	public function actionUpdate($id){
		$this->layout = 'admin';
		$model = $this->findModel($id);
		$old_header_image = $model->header_image;

		if(!empty($model->custom_childs_links)){
			$model->custom_childs_links = explode(',', $model->custom_childs_links);
		}

		if($model->load(Yii::$app->request->post())){
			#VarDumper::dump($_POST, 10, 1); exit;
			if(!empty($_POST['ResourcesCats']['custom_childs_links'])){
				$model->custom_childs_links = implode(",", $_POST['ResourcesCats']['custom_childs_links']);
			}else{
				$model->custom_childs_links = '';
			}
			if(intval(Yii::$app->request->post()['remove_header_image']) == 1){
				$model->header_image = '';
			}else{
				$model->header_image = $this->doUpload($old_header_image);
			}
			$model->save();
			return $this->redirect(['view', 'id' => $model->id]);
		}else{
			return $this->render('update', [
				'model' => $model,
				'db_server' => $this->db_server,
			]);
		}
	}

	public function actionDelete($id){
		#VarDumper::dump($id, 10, 1);
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	public function actionExport($id){
		if($this->db_server == 'live'){
			$action = 'export_to_dev';
		}elseif($this->db_server == 'dev'){
			$action = 'export_to_live';
		}
		Yii::$app->request->setBodyParams(['fields' => 'all', 'src_id' => $id, 'dst_id' => $id, $action => '1']);
		$this->actionPost();
	}

	public function actionImport($id){
		if($this->db_server == 'live'){
			$action = 'import_from_dev';
		}elseif($this->db_server == 'dev'){
			$action = 'import_from_live';
		}
		Yii::$app->request->setBodyParams(['fields' => 'all', 'src_id' => $id, 'dst_id' => $id, $action => '1']);
		$this->actionPost();
	}

	public function actionCompare($id){
		$this->layout = 'admin';

		$dev_model = ResourcesCats::findOne(['id' => $id]);
		$live_model = ResourcesCatsLive::findOne(['id' => $id]);

		$fields = $dev_data = $live_data = [];

		if(!is_null($dev_model)){
			$fields = $dev_model->attributes;
			foreach($fields as $k => $v){
				$fields[$k] = ['label' => $dev_model->getAttributeLabel($k), 'value' => '-'];
			}
		}elseif(!is_null($live_model)){
			$fields = $live_model->attributes;
			foreach($fields as $k => $v){
				$fields[$k] = ['label' => $live_model->getAttributeLabel($k), 'value' => '-'];
			}
		}

		if(!empty($fields)){
			$dev_data = $live_data = $fields;

			if(!is_null($dev_model)){
				foreach($dev_model->attributes as $col => $value){
					$dev_data[$col]['value'] = $value;
				}
			}

			if(!is_null($live_model)){
				foreach($live_model->attributes as $col => $value){
					$live_data[$col]['value'] = $value;
				}
			}
		}

		/*VarDumper::dump($fields, 10, 1);
		VarDumper::dump($dev_data, 10, 1);
		VarDumper::dump($live_data, 10, 1);
		exit;*/

		$display_export_btn = $display_import_btn = true;

		if($this->db_server == 'live'){
			$src_data = $live_data;
			$dst_data = $dev_data;
			if(is_null($dev_model)){
				$display_import_btn = false;
			}
			if(is_null($live_model)){
				$display_export_btn = false;
			}
		}else{
			$src_data = $dev_data;
			$dst_data = $live_data;
			if(is_null($dev_model)){
				$display_export_btn = false;
			}
			if(is_null($live_model)){
				$display_import_btn = false;
			}
		}

		return $this->render('compare', [
			'src_data' => $src_data,
			'dst_data' => $dst_data,
			'db_server' => $this->db_server,
			'display_export_btn' => $display_export_btn,
			'display_import_btn' => $display_import_btn,
		]);

	}

	public function actionPost(){
		$_post = Yii::$app->request->post();
		VarDumper::dump($_post, 10, 1);


		if(is_array($_post['fields'])){

		}else{
			if($_post['fields'] == 'all'){

			}
		}

		if(isset($_post['export_to_dev']) || isset($_post['import_from_live'])){
			//$dev_model = ResourcesCats::findOne(['id' => $id]);
			//$live_model = ResourcesCatsLive::findOne(['id' => $id]);
		}

		if(isset($_post['export_to_live']) || isset($_post['import_from_dev'])){

		}

		#return $this->redirect(['index']);
	}

	protected function findModel($id){
		//$model = $this->get_server_model()::findOne($id);

		if(($model = $this->get_server_model()::findOne($id)) !== null){
			return $model;
		}else{
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}

	public function doUpload($old_image){
		$ret = $old_image;

		$model = $this->get_server_model();

		if(Yii::$app->request->isPost){
			$model->file = UploadedFile::getInstance($model, 'file');
			if($model->file){
				$model->file->saveAs(Yii::getAlias('@web').'/uploads/'.$model->file->baseName.'.'.$model->file->extension);
				$ret = '/uploads/'.$model->file->baseName.'.'.$model->file->extension;
			}
		}
		return $ret;
	}

	public function getCatsTree(){
		$ret       = [];
		$catsModel = $this->get_server_model();
		$cats      = $cats2 = $catsModel->getCategories();

		foreach($cats as $cat){
			if($cat->parent_id == 0){
				$ret[$cat->id] = $cat->title;
				foreach($cats2 as $cat2){
					if($cat2->parent_id == $cat->id){
						$ret[$cat2->id] = '- '.$cat2->title;
					}
				}
			}
		}

		return $ret;
	}

	public function getTemplatesTree($dir = ''){
		$result = [];

		$root = Yii::getAlias('@app');

		if(empty($dir)){
			$dir = $root.'/views/main/resources';
		}

		$cdir = array_diff(scandir($dir), ['..', '.']);
		//VarDumper::dump($cdir, 10, 1);

		foreach($cdir as $key => $value){
			if(is_dir($dir.DIRECTORY_SEPARATOR.$value)){
				if(substr($value, 0, 1) != '_'){
					$result[$value] = $this->getTemplatesTree($dir.DIRECTORY_SEPARATOR.$value);
				}
			}else{
				$path = str_replace($root, '', $dir.DIRECTORY_SEPARATOR.$value);
				$result[$path] = $value;
			}
		}

		ksort($result);
		reset($result);
		//VarDumper::dump($result, 10, 1);

		return $result;
	}

	public function getLayouts($dir = ''){
		$result = [];

		$root = Yii::getAlias('@app');

		if(empty($dir)){
			$dir = $root.'/views/layouts';
		}

		$cdir = array_diff(scandir($dir), ['..', '.']);
		//VarDumper::dump($cdir, 10, 1);

		foreach($cdir as $key => $value){
			if(is_dir($dir.DIRECTORY_SEPARATOR.$value)){
				/*if(substr($value, 0, 1) != '_'){
					$result[$value] = $this->getLayouts($dir.DIRECTORY_SEPARATOR.$value);
				}*/
			}else{
				$path = str_replace($root, '', $dir.DIRECTORY_SEPARATOR.$value);
				if($layout_name = $this->get_file_description($dir.DIRECTORY_SEPARATOR.$value)){
					$result[$value] = $layout_name;
				}
			}
		}

		ksort($result);
		reset($result);
		//VarDumper::dump($result, 10, 1);

		return $result;
	}

	public function get_file_description($file_path){
		$template_data = implode('', file($file_path));
		if(preg_match('|Layout Name:(.*)$|mi', $template_data, $name)){
			return sprintf('%s', trim(preg_replace('/\s*(?:\*\/|\?>).*/', '', $name[1])));
		}
		return false;
		return trim(basename($file_path));
	}

}