<?php


namespace app\widgets;

use app\assets\AppAsset;
use app\models\CustomerData;
use Yii;
use yii\base\Widget;
use yii\bootstrap\BootstrapAsset;
use yii\helpers\Html;
use yii\web\JqueryAsset;
use app\components\BaseController;
use yii\helpers\VarDumper;

class ApplyRateForm extends Widget{
	
	public $form = 'apply-rate-form';
	public $title = 'To receive the most accurate quote, we need a little more info.';
	public $position = 'center';
	public $width = 'auto';
	public $redirect;
	public $display_title = true;
	public $disclosure = "By submitting your quote request, you agree to NoExam's privacy policy; NoExam may contact you at the number(s) you entered on this webpage and any numbers you may provide to us later using our automatic dialing system to market our products and services and/or for any purpose, including to keep in touch with you should you become a customer; and if we're unable to reach you when we call, we may leave you a pre-recorded message so you'll know we called and have a way to call us back. This electronically signed consent is not required to get a quote or buy anything from NoExam, and you may instead reach us at 800-4070714";
	private $customer_data;
	private $isMobile;
	private $days = [];
	private $months = [];
	private $years = [];
	private $wigths = [];
	
	public function init(){
		parent::init();
		
		$bc = new BaseController('BaseController', null);
		$model = $bc->getCustomeData(['create', 'new', 'completed'], false);
		if(!is_null($model)){
			$model->attributes = $model->decodeData();
			$this->customer_data = $model;
		}else{
			$this->customer_data = new CustomerData();
		}
		#VarDumper::dump($this->customer_data, 10, 1);
		
		$this->isMobile = Yii::$app->params['devicedetect']['isMobile'];
		
		for($i = 1; $i <= 31; $i++){
			if(strlen($i) == 1){
				$n = '0'.$i;
			}else{
				$n = $i;
			}
			$this->days[$n] = $i;
			if($i <= 12){
				$this->months[$n] = $i;
			}
		}
		
		$y = date('Y');
		
		for($i = $y; $i >= $y - 100; $i--){
			$this->years[$i] = $i;
		}
		
		for($i = 80; $i <= 400; $i++){
			$this->wigths[$i] = $i.' lbs';
		}

		if($this->redirect === null) {
			$this->redirect = '/';
		}
		
		$this->view->registerCssFile('@web/v2/widgets/css/apply-rate-form.css', ['depends' => [BootstrapAsset::className(), AppAsset::className()]]);
		$this->view->registerJsFile('@web/v2/widgets/js/apply-rate-form.js', ['depends' => [JqueryAsset::className(), AppAsset::className()]]);
		
	}
	
	public function run(){
		return $this->render(sprintf('@app/views/widgets/%s.php', $this->form), [
			'title' => $this->title,
			'position' => $this->position,
			'width' => $this->width,
			'display_title' => $this->display_title,
			'customer_data' => $this->customer_data,
			'isMobile' => $this->isMobile,
			'days' => $this->days,
			'months' => $this->months,
			'years' => $this->years,
			'wigths' => $this->wigths,
			'disclosure' => $this->disclosure,
			'redirect' => $this->redirect,
		]);
	}
	
}
