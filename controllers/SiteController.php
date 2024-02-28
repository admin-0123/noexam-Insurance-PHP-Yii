<?php

namespace app\controllers;

use app\components\BaseController;
use app\models\ContactForm;
use app\models\LoginForm;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use app\models\User;

class SiteController extends BaseController {

	/**
	 * @inheritdoc
	 */
	public function behaviors(){
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only'  => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow'   => true,
						'roles'   => ['@'],
					],
				],
			],
			'verbs'  => [
				'class'   => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function actions(){
		return [
			'error'   => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class'           => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	/**
	 * Displays homepage.
	 * @return string
	 */
	public function actionIndex(){
		return $this->render('index');
	}

	/**
	 * Login action.
	 * @return string
	 */
	public function actionLogin(){
		if(!Yii::$app->user->isGuest){
			return $this->goHome();
		}

		$model = new LoginForm();
		if($model->load(Yii::$app->request->post()) && $model->login()){
			return $this->goBack();
		}

		return $this->render('login', [
			'model' => $model,
		]);
	}

	/**
	 * Logout action.
	 * @return string
	 */
	public function actionLogout(){
		Yii::$app->user->logout();

		return $this->goHome();
	}

	/**
	 * Displays contact page.
	 * @return string
	 */
	public function actionContact(){
		$model = new ContactForm();
		if($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])){
			Yii::$app->session->setFlash('contactFormSubmitted');

			return $this->refresh();
		}

		return $this->render('contact', [
			'model' => $model,
		]);
	}

	/**
	 * Displays about page.
	 * @return string
	 */
	public function actionAbout(){
		return $this->render('about');
	}

	/**
	 * Requests password reset.
	 *
	 * @return mixed
	 */
	public function actionRequestPasswordReset(){
		$model = new PasswordResetRequestForm();

		if($model->load(Yii::$app->request->post()) && $model->validate()){
			if($model->sendEmail()){
				Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

				return $this->goHome();
			}else{
				Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
			}
		}

		return $this->render('requestPasswordResetToken', [
			'model' => $model,
		]);
	}

	/**
	 * Resets password.
	 *
	 * @param string $token
	 * @return mixed
	 * @throws BadRequestHttpException
	 */
	public function actionResetPassword($token){
		try{
			$model = new ResetPasswordForm($token);
		}catch(InvalidParamException $e){
			throw new BadRequestHttpException($e->getMessage());
		}

		if($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()){
			Yii::$app->session->setFlash('success', 'New password was saved.');

			return $this->goHome();
		}

		return $this->render('resetPassword', ['model' => $model]);
	}

	public function actionAddAdmin() {
		$model = User::find()->where(['username' => 'admin'])->one();
		if (empty($model)) {
			$user = new User();
			$user->username = 'admin';
			$user->email = 'admin@noexam.com';
			$user->setPassword('admin');
			$user->generateAuthKey();
			if ($user->save()) {
				echo 'good';
			}
		}
	}

}
