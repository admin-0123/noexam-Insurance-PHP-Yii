<?php

namespace app\controllers;

use app\components\BaseController;
use app\models\ApplyNow2;
use app\models\CustomerData;
use app\models\Faqs;
use app\models\NaPrices;
use app\models\NaRates;
use app\models\Questions;
use app\models\ResourcesCats;
use app\models\ResourcesCompanies;
use app\models\ResourcesGrid;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\helpers\VarDumper;
use yii\web\Cookie;
use yii\web\Response;
use yii\widgets\ActiveForm;

class MainController extends BaseController {

	public $url = '';
	public $current_cat;

	public function beforeAction($action){
		$this->enableCsrfValidation = ($action->id !== "crl");

		return parent::beforeAction($action);
	}

	public $needle;

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

	public function actionValidation(){
		if(Yii::$app->request->isAjax){


			switch(Yii::$app->request->post('CustomerData')['form_name']){

				case 'term':
					$scenario     = CustomerData::SCENARIO_TERM;
					$redirect_url = '/personalinfo/';
					break;
				case 'plan':
					$scenario     = CustomerData::SCENARIO_PI;
					$redirect_url = '/personalinfo/';
					break;
				case 'pi':
					$scenario     = CustomerData::SCENARIO_PI;
					$redirect_url = '/personalinfo2/';
					break;
				case 'pi2':
					$scenario     = CustomerData::SCENARIO_PI2;
					$redirect_url = '/questions2/';
					break;
				case 'benef':
					$scenario     = CustomerData::SCENARIO_BENEFICIARY;
					$redirect_url = '/beneficiary/';
					break;
				case 'payment':
					$scenario     = CustomerData::SCENARIO_PAYMENT;
					$redirect_url = '/paymentinfo/';
					break;
				default:
					echo "Не та форма.";
					return false;
					break;
			}

			Yii::$app->response->format = 'json';

			$model           = new CustomerData;
			$model->scenario = $scenario;
			$model->load(Yii::$app->request->post());

			return ActiveForm::validate($model);
		}
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

	public function actionTest3(){
		header("Content-Type: text/xml; charset=utf-8");
		$request = Yii::$app->request;
		$session = Yii::$app->session;

		$customer_data = CustomerData::find()->where(['sid' => $session->id])->one();
		$json_decoded  = json_decode($customer_data->data, true);
		/* print_r($json_decoded['questions']);
		 die;*/
		$ARDCounter    = 1;
		$FRCounter     = 2;
		$FRCounterLvl1 = 1;
		$FRCounterLvl2 = 1;
		$FRCounterLvl3 = 1;
		echo '<?xml version="1.0" encoding="utf-8"?>';
		echo '<FormInstance id="Form_2">';
		// $mainQuesstions = Questions::find()->where(['type'=>'question'])->all();

		foreach($json_decoded['questions'] as $mainQusteionName => $mainQuestions){
			$FRCounterLvl1 = ($FRCounter == 2) ? 1 : $FRCounter++;
			// $subQuestions = $mainQuestion->subquestion;
			$q_data = Questions::find()->where(['xml_num' => $mainQusteionName])->one();
			echo '<FormResponse id="Form_Response_'.$FRCounterLvl1++.'">';
			echo '<QuestionNumber>'.$q_data->xml_num.'</QuestionNumber>';
			echo '<QuestionText>'.$q_data->text.'</QuestionText>';

			if($mainQuestions['answer']){
				echo '<ResponseCode>'.(($mainQuestions['answer'] == 'yes') ? 1 : 2).'</ResponseCode>';
				echo '<ResponseData>'.$mainQuestions['answer'].'</ResponseData>';
			}

			if($q_data->group_num){
				echo '<SectionIdentifier>'.$q_data->group_num.'</SectionIdentifier>';
			}

			if($mainQuestions){
				$FRCounterLvl1 = $FRCounter;
				foreach($mainQuestions as $q_name => $mainQuestion){
					if($q_name == 'answer'){
						continue;
					}
					echo '<AssociatedResponseData id="Assoc_Response_Data_'.$ARDCounter++.'" ActualObjectID="Form_Response_'.$FRCounter++.'"/>';
				}

			}

			echo '</FormResponse>';

			if($mainQuestions){

				$FRCounterLvl2 = $FRCounter;
				foreach($mainQuestions as $mq_name => $subQuestions){
					$reflexQuestions = $subQuestions->reflexquestion;
					$q_data          = Questions::find()->where(['xml_num' => $mq_name])->one();
					echo '<FormResponse id="Form_Response_'.$FRCounterLvl1++.'">';
					echo '<QuestionNumber>'.$q_data->xml_num.'</QuestionNumber>';
					echo '<QuestionText>'.$q_data->text.'</QuestionText>';

					if($subQuestions['answer']){
						echo '<ResponseCode>'.(($subQuestions['answer'] == 'y') ? 1 : 2).'</ResponseCode>';
						echo '<ResponseData>'.$subQuestions['answer'].'</ResponseData>';
					}
					if($q_data->group_num){
						echo '<SectionIdentifier>'.$q_data->group_num.'</SectionIdentifier>';
					}

					if($subQuestions){
						$FRCounterLvl2 = $FRCounter;
						foreach($subQuestions as $subq_name => $reflexQuestion){
							if($subq_name == 'answer'){
								continue;
							}
							echo '<AssociatedResponseData id="Assoc_Response_Data_'.$ARDCounter++.'" ActualObjectID="Form_Response_'.$FRCounter++.'"/>';
						}

					}

					echo '</FormResponse>';

					/* if($reflexQuestions){

						 $FRCounterLvl3 = $FRCounter;
						 foreach ($reflexQuestions as $reflexQuestion) {

							 $reflexQuestionsLvl2 = $reflexQuestion->reflexquestion;

							 echo '<FormResponse id="Form_Response_'.$FRCounterLvl2++.'">';
							 echo '<QuestionNumber>'.$reflexQuestion->xml_num.'</QuestionNumber>';
							 echo '<QuestionText>'.$reflexQuestion->text.'</QuestionText>';
							 if(count($reflexQuestion->conditions)){
								 echo '<ResponseCode>'.(($reflexQuestion->conditions[0]->answer[0]=='y')?1:2).'</ResponseCode>';
								 echo '<ResponseData>'.$reflexQuestion->conditions[0]->answer[0].'</ResponseData>';
							 }
							 if($reflexQuestion->group_num){
								 echo '<SectionIdentifier>'.$reflexQuestion->group_num.'</SectionIdentifier>';
							 }

							 if($reflexQuestionsLvl2){
								 $FRCounterLvl3=$FRCounter;
								 foreach ($reflexQuestionsLvl2 as $reflexQuestion) {
									 echo '<AssociatedResponseData id="Assoc_Response_Data_'.$ARDCounter++.'" ActualObjectID="Form_Response_'.$FRCounter++.'"/>';
								 }

							 }

							 echo '</FormResponse>';

							 if($reflexQuestionsLvl2){
								 foreach ($reflexQuestionsLvl2 as $reflexQuestion) {
									 echo '<FormResponse id="Form_Response_'.$FRCounterLvl3++.'">';
									 echo '<QuestionNumber>'.$reflexQuestion->xml_num.'</QuestionNumber>';
									 echo '<QuestionText>'.$reflexQuestion->text.'</QuestionText>';
									 if(count($reflexQuestion->conditions)){
										 echo '<ResponseCode>'.(($reflexQuestion->conditions[0]->answer[0]=='y')?1:2).'</ResponseCode>';
										 echo '<ResponseData>'.$reflexQuestion->conditions[0]->answer[0].'</ResponseData>';
									 }
									 if($reflexQuestion->group_num){
										 echo '<SectionIdentifier>'.$reflexQuestion->group_num.'</SectionIdentifier>';
									 }
									 echo '</FormResponse>';
								 }

							 }
						 }

					 }*/


				}
			}
		}
		echo '</FormInstance>';
	}

	public function actionTest2(){

		/*$arr = [
			'one'=>[
				'one-1'=>[
					'one-2'=>['one-3'=>'asd']
				],
				'one-11'=>[
					'one-2'=>['one-3'=>'asd']
				]
			],
			'two'=>[
				'two-1'=>[
					'two-2'=>'asd'
				]
			],
			'three'=>[
				'three-1'=>[
					'three-2'=>[
						'three-3'=>[
							'three-4'=>[
								'three-5'=>[
									'three-6'=>''
								]
							]
						]
					]
				]
			],
			'four'=>[
				'four-1'=>[
					'four-2'=>[
						'four-3'=>[
							'four-4'=>[
								'four-5'=>''
							]
						]
					]
				]
			],
		];
		if(!$this->arraySearchRecursive2($arr, 'one',['one-11'=>'1'])){
			$arr['three-35'] = ['three-4'=>'1'];
		}
		print_r($arr);*/
		/*    $rawPost  = "Input:\r\n";
			$rawPost .= file_get_contents('php://input');
			$rawPost .= "\r\n---\r\nmessageData:\r\n";
			$rawPost .= 'ddsds';
			file_put_contents("log.txt",$rawPost);*/

		$string = '{"questions":{"med10Years":{"medPAD":{"answer":"no"},"medCAD":{"answer":"no"},"medIrregHeartBeatECGMurmur":{"answer":"no"},"medNeural":{"answer":"no"},"medCancer":{"answer":"no"},"medHIV":{"answer":"no"}},"med5Years":{"medHypertensionLipids":{"answer":"no"},"medRespiratory":{"answer":"no"},"medMuscles":{"answer":"no"},"medArthritis":{"answer":"no"},"medDiabetes":{"answer":"no"},"medGland":{"answer":"no"},"medUrinary":{"answer":"no"},"medBloodDisorder":{"answer":"no"},"medGastrointestinal":{"answer":"no"},"medMental":{"answer":"no"}},"needXmlNum":{"DrugUsage":{"answer":"no"},"AlcoholCessationOrTreatment":{"answer":"no"},"CriminalHistory":{"answer":"no"},"Bankruptcy":{"answer":"no"}},"needXmlNum2":{"MotorVehcleReport":{"answer":"no"},"Aviation":{"answer":"no"},"Avocations":{"answer":"no"},"ResideOutsideUSDuration":{"answer":"no"}},"needXmlNum3":{"MemberofMilitary":{"answer":"no"},"medWeightLoss15LbOrMore":{"answer":"no"},"FamilyHistory":{"answer":"no"},"FamilyHistoryHuntingtonDiseaseFamilialPolyposisPolycysticKidneyDisease":{"answer":"no"},"tobaccoUse":{"answer":"no"}}}}';


		/*  <FormResponse id="Form_Response_37">
				<QuestionNumber>med5Years</QuestionNumber>
				<QuestionText>In the past 5 years, have you been diagnosed by a licensed health professional with, or been treated or advised to receive medical treatment by a licensed health professional, or have you taken medication for:</QuestionText>
				<SectionIdentifier>31</SectionIdentifier>
				<AssociatedResponseData id="Assoc_Response_Data_1" ActualObjectID="Form_Response_38"/>
				<AssociatedResponseData id="Assoc_Response_Data_2" ActualObjectID="Form_Response_39"/>
				<AssociatedResponseData id="Assoc_Response_Data_3" ActualObjectID="Form_Response_40"/>
				<AssociatedResponseData id="Assoc_Response_Data_4" ActualObjectID="Form_Response_41"/>
				<AssociatedResponseData id="Assoc_Response_Data_5" ActualObjectID="Form_Response_42"/>
				<AssociatedResponseData id="Assoc_Response_Data_6" ActualObjectID="Form_Response_43"/>
				<AssociatedResponseData id="Assoc_Response_Data_7" ActualObjectID="Form_Response_44"/>
				<AssociatedResponseData id="Assoc_Response_Data_8" ActualObjectID="Form_Response_45"/>
				<AssociatedResponseData id="Assoc_Response_Data_9" ActualObjectID="Form_Response_46"/>
				<AssociatedResponseData id="Assoc_Response_Data_10" ActualObjectID="Form_Response_47"/>
			  </FormResponse>*/

		$decoded = json_decode($string, true);

		$sss       = $this->format_questions($decoded);
		$names     = explode(',', $sss);
		$questions = Questions::find()->where(['xml_num' => $names])->all();

		$formatted_questions;
		foreach($questions as $key => $value){
			$formatted_questions[$value->xml_num]['text'] = $value->text;
			if($value->type == 'question'){
				$formatted_questions[$value->xml_num]['q_num'] = $value->group_num;
			}elseif($value->type == 'sub'){
				$formatted_questions[$value->xml_num]['q_num'] = $value->num;
			}


		}
		$counter = 1;
		$this->xml_questions($decoded['questions'], $formatted_questions, $counter);

	}

	public function xml_questions($decoded, $formatted_questions, &$counter){
		foreach($decoded as $key => $value){
			if($key == 'answer'){
				continue;
			}

			echo '<FormResponse id="Form_Response_'.$counter.'">';
			echo '<QuestionNumber>'.$key.'</QuestionNumber>';
			echo '<QuestionText>'.$formatted_questions[$key]['text'].'</QuestionText>';

			if($formatted_questions[$key]['q_num']){
				echo '<SectionIdentifier>'.$formatted_questions[$key]['q_num'].'</SectionIdentifier>';
			}

			if(is_array($value)){
				$i2 = $counter;
				$i  = 1;


				foreach($value as $val){
					$i2++;
					echo '<AssociatedResponseData id="Assoc_Response_Data_'.$i.'" ActualObjectID="Form_Response_'.$i2.'"></AssociatedResponseData>';
					$i++;
				}
			}

			echo '</FormResponse>';
			$counter++;
			// if(is_array($value) ) {}
			$this->xml_questions($value, $formatted_questions, $counter);
		}
	}

	public function format_questions($arr){
		$result;
		foreach($arr as $key => $value){
			if($key == 'answer'){
				continue;
			}

			if(is_array($value)){
				$result .= $this->format_questions($value);
			}
			$result .= $key.',';

		}

		return $result;
	}

	public function actionPost(){

		$request = Yii::$app->request;
		$session = Yii::$app->session;

		$redirect_url = '/';

		if($request->isPost){
			$request_post = $request->post();

			$scenario = null;

			$model = CustomerData::find()->where(['sid' => $session->id, 'status' => 'new'])->one();

			//VarDumper::dump($request->post('CustomerData'), 10, 1);
			switch($request->post('CustomerData')['form_name']){
				case 'term':
					Yii::info( 'Step - "term". Planing redirect to "/personalinfo/" page.', 'noexam' );
					$scenario = CustomerData::SCENARIO_TERM;
					$status = 'new';
					$iniciator = $request->post('CustomerData')['form_name'];
					$redirect_url = '/personalinfo/';
					break;
				case 'plan':
					Yii::info( 'Step - "plan". Planing redirect to "/personalinfo/" page.', 'noexam' );
					$scenario     = CustomerData::SCENARIO_PLAN;
					$redirect_url = '/personalinfo/';
					break;
				case 'pi':
					Yii::info( 'Step - "pi". Planing redirect to "/personalinfo2/" page.', 'noexam' );
					$scenario     = CustomerData::SCENARIO_PI;
					$redirect_url = '/personalinfo2/';
					break;
				case 'pi2':
					Yii::info('Step - "pi2". Planing redirect to "/questions2/" page.', 'noexam' );
					$scenario     = CustomerData::SCENARIO_PI2;
					$redirect_url = '/questions2/';
					$model->attributes = $model->decodeData();
					if($model->company_code != 'sagicor'){
						$redirect_url = '/beneficiary/';
					}
					break;
				case 'benef':
					if(!count($model)){
						$model = CustomerData::find()->where(['sid' => $session->id])->one();
					}
					Yii::info('Step - "benef". Planing redirect to "/paymentinfo/" page.', 'noexam' );
					$scenario     = CustomerData::SCENARIO_BENEFICIARY;
					$redirect_url = '/paymentinfo/';
					$model->attributes = $model->decodeData();
					$model->beneficiary = $request_post['CustomerData']['beneficiary'];
					$model->completed_application = 'No';
					if($model->company_code != 'sagicor'){
						$model->success = $this->generatePDFReport(25, $session->id);
						$model->completed_application = 'Yes';
						$model->status   = 'completed';
						$redirect_url = '/success/';
					}
					break;
				case 'payment':
					if(!count($model)){
						$model = CustomerData::find()->where(['sid' => $session->id])->one();
					}
					Yii::info('Step - "payment". Model: '.count($model), 'noexam');
					Yii::info('Step - "payment". Session ID: '.$session->id, 'noexam');
					Yii::info('Step - "payment". Planing redirect to "/success/" page.', 'noexam');
					$scenario     = CustomerData::SCENARIO_PAYMENT;
					$redirect_url = '/success/';
					$model->attributes = $model->decodeData();
					$model->payment = $request_post['CustomerData']['payment'];
					$model->success = $this->generatePDFReport(25);
					$model->completed_application = 'Yes';
					break;
				case 'success':
					Yii::info( 'Step - "success". All done.', 'noexam' );
					$scenario     = CustomerData::SCENARIO_SUCCESS;
					//$redirect_url = '/success/';
					break;
				case 'applynow':
				case 'homeform':
				case 'contentform':
					$scenario     = CustomerData::SCENARIO_APPLY_NOW;
					$redirect_url = '/'.$request->post('CustomerData')['redirect'];
					Yii::info( 'Step - "'.$request->post('CustomerData')['form_name'].'". Planing redirect to "' . $redirect_url . '".', 'noexam' );
					$status = 'new';
					$iniciator = $request->post('CustomerData')['form_name'];

					#VarDumper::dump($request_post, 10, 1); exit;
					$day = intval($request_post['CustomerData']['birthday']['day']);
					$month = intval($request_post['CustomerData']['birthday']['month']);
					$year = intval($request_post['CustomerData']['birthday']['year']);
					$birthday = date('d/m/Y', strtotime($day.'.'.$month.'.'.$year));
					$request_post['CustomerData']['birthday'] = $birthday;
					//VarDumper::dump($request_post, 10, 1); exit;

					$height_arr = explode('|', $request_post['CustomerData']['height']);
					$request_post['CustomerData']['h_foot'] = $height_arr[0];
					$request_post['CustomerData']['h_inch'] = $height_arr[1];
					unset($request_post['CustomerData']['height']);
					//VarDumper::dump($scenario);
					break;
				case 'quote-result':
					Yii::info( 'Step - "quote-result". Planing redirect to "personalinfo".', 'noexam' );
					$scenario     = CustomerData::SCENARIO_QUOTE_RESULT;
					$redirect_url = '/personalinfo/';
					$model->attributes = $model->decodeData();
					if($request->post('CustomerData')['company_code'] != 'sagicor'){
						Yii::info('Step - "quote-result". company_code = '.$request->post('CustomerData')['company_code'].'. Planing redirect to "intermediary-questions".', 'noexam' );
						$redirect_url = '/intermediary-questions/';
					}else{
						Yii::info('Step - "quote-result". Planing redirect to "personalinfo".', 'noexam' );
					}
					//VarDumper::dump($redirect_url, 10, 1); exit;
					break;
				case "intermediary_questions":
					Yii::info('Step - "intermediary-questions". Planing redirect to "personalinfo".', 'noexam' );
					$scenario     = CustomerData::SCENARIO_IMQ;
					//VarDumper::dump($scenario, 10, 1);
					$status = 'new';
					$iniciator = $request->post('CustomerData')['form_name'];
					$redirect_url = '/personalinfo/';
					break;
				default:
					Yii::info('Requested wrong form name in post request.', 'noexam' );
					return false;
					break;
			}

			if(count($model)){

				$model->load($request_post);
				$model->scenario = $scenario;

				if($model->validate()){

					if($model->save()){
						Yii::info('CustomerData - updated record - '.$model->id, 'noexam');

						$SF_process_flag = false;

						if($model->company_code == 'sagicor' && $model->scenario == CustomerData::SCENARIO_PAYMENT){
							$SF_process_flag = true;
						}elseif($model->company_code != 'sagicor'){
							$SF_process_flag = true;
						}

						if($SF_process_flag){
							$json_decoded  = json_decode($model->data, true);
							$search_result = $this->searchSFLead($json_decoded);

							if(is_array($search_result)){
								Yii::info('Updating lead with existing email --- '.$json_decoded['email'], 'noexam');
								// $completed = $this->getSFLeadField( $search_result[ 'id' ], 'Completed_Application__c' );
								// $completed = $completed['records'][0]['Completed_Application__c'];
								// if( 'Yes' == $completed){
								$json_decoded['Updated_Lead_to_App'] = 'Yes';
								// }

								//VarDumper::dump($json_decoded, 10, 1); exit;

								$lead_result = $this->updateSFLead($search_result['id'], $json_decoded, $item->sid);
								if($lead_result){
									Yii::info('Lead --- '.$search_result['id'].' --- successfuly updated.', 'noexam');
								}else{
									Yii::info('Lead --- '.$search_result['id'].' --- didn\'t updated.', 'noexam');
								}
							}else{
								$search_result = $this->searchSFLead($json_decoded, 'email');

								if(is_array($search_result)){
									$random_int = random_int(10000, 99999);
									preg_match_all("/^(?<user>[\w.']+)@(?<domain>[\w.']+)/", $json_decoded['email'], $email_match, PREG_SET_ORDER);
									$parsed_email = $email_match[0]['user'].'+'.$random_int.'@'.$email_match[0]['domain'];

									$json_decoded['email'] = $parsed_email;
									Yii::info('Creating lead with special email --- '.$json_decoded['email'], 'noexam');
									$lead_result = $this->createSFLead($json_decoded, $item->sid);
								}else{
									Yii::info('Creating new lead.', 'noexam');
									$lead_result = $this->createSFLead($json_decoded, $item->sid);
								}
							}

							if($lead_result){
								if($model->company_code == 'sagicor' && $model->scenario == CustomerData::SCENARIO_PAYMENT){
									$model->scenario = CustomerData::SCENARIO_COMPLETED;
									$model->status   = 'completed';
									if($model->save()){
										Yii::info('Record - '.$model->id.' marked as "completed".', 'noexam');
									}
								}
							}
						}
					}else{
						Yii::info('CustomerData - record hasn\'t updated - '.$model->id, 'noexam');
					}
				}else{
					VarDumper::dump($model->getErrors(), 10, 1);
					//VarDumper::dump($request_post, 10, 1);
					//VarDumper::dump($model, 10, 1);
				}

				Yii::info('Redirecting to "'.$redirect_url.'"', 'noexam');

				//VarDumper::dump($redirect_url, 10, 1); exit;
				return $this->redirect([$redirect_url]);
				//header("Location:$redirect_url", true, 200);
				//return Yii::$app->getResponse()->redirect($redirect_url, 303, false);
			}else{

				$model = new CustomerData(['scenario' => $scenario]);
				$model->load($request_post);
				$model->sid       = $session->id;
				$model->status    = $status;
				$model->iniciator = $iniciator;

				if($model->validate()){

					if($model->save()){
						Yii::info('CustomerData - new record is created - '.$model->id, 'noexam');
					}else{
						Yii::info('CustomerData - new record didn\'t created.', 'noexam');
					}

				}
				Yii::info('Redirecting to "'.$redirect_url.'"', 'noexam');

				return $this->redirect([$redirect_url]);
			}

		}// END if POST

		Yii::info( 'This is not POST request. Redirecting to "' . $redirect_url .'"', 'noexam' );
		return $this->redirect([$redirect_url]);
	}

	public function actionPost2(){

		$request = Yii::$app->request;
		$session = Yii::$app->session;

		$redirect_url = '/';

		if($request->isPost){

			$request_post = $request->post();
			//VarDumper::dump($request_post, 10, 1);

			$scenario = null;

			$model = ApplyNow2::find()->where(['sid' => $session->id])->one();
			switch($request->post('ApplyNow2')['form_name']){
				case 'applynow2':
					$scenario     = ApplyNow2::SCENARIO_DEFAULT;
					$redirect_url = '/'.$request->post('ApplyNow2')['redirect'];
					Yii::info( 'Apply Now 2 - step "applynow2". Planing redirect to - "' . $redirect_url . '"', 'noexam' );

					$day = $request_post['ApplyNow2']['birth_date']['day'];
					$month = $request_post['ApplyNow2']['birth_date']['month'];
					$year = $request_post['ApplyNow2']['birth_date']['year'];
					$request_post['ApplyNow2']['birth_date'] = date('Y-m-d', strtotime($year.'-'.$month.'-'.$day));
					//$request_post['ApplyNow2']['birth_date'] = $day.'/'.$month.'/'.$year;

					$height_arr = explode('|', $request_post['ApplyNow2']['height']);
					$request_post['ApplyNow2']['height'] = $height_arr[0] * 12 + $height_arr[1];
					//$model->universal_leadid = $request_post['ApplyNow2']['universal_leadid'];
					break;
				default:
					echo "Не та форма 2.";
					return false;
					break;
			}

			if(count($model)){

				$model->load($request_post);
				$model->scenario = $scenario;
				$model->universal_leadid = $request_post['ApplyNow2']['universal_leadid'];

				if($model->validate()){

					if( $model->save() ){

						Yii::info( 'Apply Now 2 - record is UPDATED - ' . $model->id, 'noexam' );

					}else{

						Yii::info( 'Apply Now 2 - record is not UPDATED - ' . $model->id, 'noexam' );

					}

				}else{
					Yii::info( 'Apply Now 2 - validate is falied on record UPDATE - ' . $model->id, 'noexam' );
				/*	VarDumper::dump($model->getErrors(), 10, 1);
					VarDumper::dump($request_post, 10, 1);
					VarDumper::dump($model, 10, 1)*/;
				}

				return $this->redirect([$redirect_url]);
			
			}else{

				$model = new ApplyNow2();
				$model->load( $request_post );
				$model->sid = $session->id;
				$model->universal_leadid = $request_post['ApplyNow2']['universal_leadid'];

				if($model->validate()){

					if( $model->save() ){

						Yii::info( 'Apply Now 2 - new record is CREATED - ' . $model->id, 'noexam' );

					}else{

						Yii::info( 'Apply Now 2 - record is not CREATED. ', 'noexam' );
					}

				}else{
					Yii::info( 'Apply Now 2 - validate is falied on record CREATE - ' . $model->id, 'noexam' );
				/*	VarDumper::dump($model->getErrors(), 10, 1);
					VarDumper::dump($request_post, 10, 1);
					VarDumper::dump($model, 10, 1)*/;
				}

				Yii::info( 'Apply Now 2 - redirecting to - "' . $redirect_url . '"', 'noexam' );
				return $this->redirect([$redirect_url]);
			}

		}// END if POST

		return $this->redirect([$redirect_url]);
	}

	public function actionPostRateCalc(){
		$ret = ['error' => 0, 'message' => '', 'request' => '', 'html' => ''];

		$request = Yii::$app->request;
		$session = Yii::$app->session;
		Yii::$app->response->format = Response::FORMAT_JSON;

		if($request->isPost){
			$request_post        = $request->post();
			$requestCustomerData = $request->post('CustomerData');
			$model               = CustomerData::find()->where(['sid' => $session->id, 'status' => 'new'])->one();
			$status              = 'new';
			$iniciator           = $requestCustomerData['form_name'];
			$scenario            = CustomerData::SCENARIO_RATE_CALC;
			if(intval($request_post['CustomerData']['avg_amount']) > 1000){
				$request_post['CustomerData']['avg_amount'] = intval($request_post['CustomerData']['avg_amount']) / 1000;
			}
			if(count($model)){
				$model->load($request_post);
				//$model->sid   = $session->id;
				$model->scenario = $scenario;
				/*if(is_null($model->user_ip)){
					$model->user_ip = $_SERVER['HTTP_X_REAL_IP'];
				}*/
				$ret['message'] = 'CustomerData - updated record - '.$model->id;
			}else{
				$model = new CustomerData(['scenario' => $scenario]);
				$model->load($request_post);
				$model->status    = $status;
				$model->iniciator = $iniciator;
				$ret['message'] = 'CustomerData - new record is created - '.$model->id;
			}
			$model->sid       = $session->id;
			$model->user_ip = $_SERVER['HTTP_X_REAL_IP'];
			#VarDumper::dump($model->guess_price);

			if(isset($requestCustomerData['guess_price']) && $model->guess_price == 0){
				$requestCustomerData['guess_price'] = intval($requestCustomerData['guess_price']);
				#VarDumper::dump($guess_price);
				if($requestCustomerData['guess_price'] > 0){
					$model->guess_price = $requestCustomerData['guess_price'];
				}

			}

			$requestCustomerData['igonre_get_params'] = true;

			//VarDumper::dump($model->user_ip, 10, 1);
			$ret['request'] = $requestCustomerData;

			if($model->validate()){
				if($model->save()){
					$RateCalcAPIsData = $this->getRateCalcAPIsData($requestCustomerData);

					$guessing_statistic = $this->getGuessingStatistic($requestCustomerData, $RateCalcAPIsData);

					$avg_price = round($RateCalcAPIsData['plans']['avg_price']);

					if($requestCustomerData['guess_price'] > $avg_price){
						$model->guess_result = 'high';
					}elseif($requestCustomerData['guess_price'] < $avg_price){
						$model->guess_result = 'low';
					}else{
						$model->guess_result = 'correct';
					}
					$model->save();

					$ret['html'] = $this->renderPartial('partials/quote-results-ajax', [
						'request' => $requestCustomerData,
						'avg_price' => $RateCalcAPIsData['plans']['avg_price'],
						'plans' => $RateCalcAPIsData['plans'],
						'apis_data' => $RateCalcAPIsData['apis_data'],
						'display_default_desc' => false,
						'guessing_statistic' => $guessing_statistic,
						'guessing_statistic_type' => $requestCustomerData['guessing_statistic_type'],
					]);
				}else{
					$ret['error']   = 1;
					$ret['message'] = "CustomerData - new record didn't created.";
				}
			}else{
				$ret['error']   = 1;
				$ret['message'] = $model->getErrors();
			}

		}

		return $ret;
	}

	public function actionPostRateCalcSimple(){
		$ret = ['error' => 0, 'message' => '', 'request' => '', 'html' => ''];

		$request = Yii::$app->request;
		$session = Yii::$app->session;
		Yii::$app->response->format = Response::FORMAT_JSON;

		if($request->isPost){
			$request_post        = $request->post();
			$requestCustomerData = $request->post('CustomerData');
			$model               = CustomerData::find()->where(['sid' => $session->id, 'status' => 'new'])->one();
			$status              = 'new';
			$iniciator           = $requestCustomerData['form_name'];
			$scenario            = CustomerData::SCENARIO_RATE_CALC;
			if(intval($request_post['CustomerData']['avg_amount']) > 1000){
				$request_post['CustomerData']['avg_amount'] = intval($request_post['CustomerData']['avg_amount']) / 1000;
			}
			if(count($model)){
				$model->load($request_post);
				//$model->sid   = $session->id;
				$model->scenario = $scenario;
				/*if(is_null($model->user_ip)){
					$model->user_ip = $_SERVER['HTTP_X_REAL_IP'];
				}*/
				$ret['message'] = 'CustomerData - updated record - '.$model->id;
			}else{
				$model = new CustomerData(['scenario' => $scenario]);
				$model->load($request_post);
				$model->status    = $status;
				$model->iniciator = $iniciator;
				$ret['message'] = 'CustomerData - new record is created - '.$model->id;
			}
			$model->sid       = $session->id;
			$model->user_ip = $_SERVER['HTTP_X_REAL_IP'];
			#VarDumper::dump($model->guess_price);

			if(isset($requestCustomerData['guess_price']) && $model->guess_price == 0){
				$requestCustomerData['guess_price'] = intval($requestCustomerData['guess_price']);
				#VarDumper::dump($guess_price);
				if($requestCustomerData['guess_price'] > 0){
					$model->guess_price = $requestCustomerData['guess_price'];
				}

			}

			$requestCustomerData['igonre_get_params'] = true;

			//VarDumper::dump($model->user_ip, 10, 1);
			$ret['request'] = $requestCustomerData;

			if($model->validate()){
				if($model->save()){

					$ret['html'] = $this->renderPartial('partials/quote-results-simple-ajax', [
						'request' => $requestCustomerData,
					]);
				}else{
					$ret['error']   = 1;
					$ret['message'] = "CustomerData - new record didn't created.";
				}
			}else{
				$ret['error']   = 1;
				$ret['message'] = $model->getErrors();
			}

		}

		return $ret;
	}

	public function getRateCalcDefaultResults(){
		$requestCustomerData = [
			'age' => 30,
			'sex' => 'm',
			'avg_amount' => 250000,
			'term_length' => 15,
			'health' => 'very-good',
			'igonre_get_params' => true,
		];

		$RateCalcAPIsData = $this->getRateCalcAPIsData($requestCustomerData);

		return $this->renderPartial('partials/quote-results-ajax', [
			'request' => $requestCustomerData,
			'plans' => $RateCalcAPIsData['plans'],
			'apis_data' => $RateCalcAPIsData['apis_data'],
			'display_default_desc' => false,
			'guess_price_desc_data' => [],
		]);
	}

	public function getRateCalcSimpleResults(){
		$requestCustomerData = [
			'age' => 30,
			'sex' => 'm',
			'avg_amount' => 250000,
			'term_length' => 15,
			'health' => 'very-good',
			'igonre_get_params' => true,
		];

		return $this->renderPartial('partials/quote-results-simple-ajax', [
			'request' => $requestCustomerData,
		]);
	}

	/**
	 * Displays on homepage (AJAX request).
	 * @return string
	 */
	public function actionTest(){
		/*$reflex = [
		   ["name"=>"Within the last 12 months?", "xml_num"=>"tobaccoUseCigarettesLastUse","type"=>"checkbox"],
		   ["name"=>"More than 13 months to 24 months ago?", "xml_num"=>"tobaccoUseChewingTobaccoSnuffLastUse","type"=>"checkbox"],
		   ["name"=>"More than 24 months to 36 months ago?", "xml_num"=>"tobaccoUsePipeLastUse","type"=>"checkbox"],
		   ["name"=>"More than 36 months to 5 years ago?", "xml_num"=>"tobaccoUseNicotinePatchGumLastUse","type"=>"checkbox"],
		   ["name"=>"More than 5 years ago?", "xml_num"=>"","type"=>"checkbox"],
		];
		$reflex = json_encode($reflex);
		print_r($reflex);*/
		// return;

		$request = Yii::$app->request;
		//$this->_debug($request);

		$birthdate      = $request->post('birthdate');
		$age            = $this->getAge($birthdate);
		$foot           = $request->post('h_foot');
		$inch           = $request->post('h_inch');
		$weight         = $request->post('weight');
		$avarage_amount = $request->post('avarage_amount').'000';
		$smoker         = $request->post('tobaco');
		$sex            = $request->post('sex');
		$rate = 0;
		$band = 0;


		$na_rates = NaRates::find()->where(['foot' => $foot, 'inch' => $inch, 'sex' => $sex])->all();
		/// Получаем Band
		$band = $this->getNaBand($avarage_amount);

		//Получаем rate в зависимости курящий или нет.
		$rate = $this->getNaRate($na_rates, $weight, $smoker);

		//$this->_debug(['type' => $rate, 'age' => $age, 'sex' => $sex]);

		$na_prices = NaPrices::find()->where(['type' => $rate, 'age' => $age, 'sex' => $sex])->orderBy('term ASC')->all();
		//$this->_debug($na_prices);


		//Получаем цены.
		$prices = $this->calculateAllPrices($na_prices, $avarage_amount, $band);
		//$this->_debug($prices);
		// print_r($age);

		// Передаем массив во вью yii-my/views/main/test.php
		return $this->renderPartial('test', ['prices' => $prices]);

	}

	public function actionAjaxGetSagicorPlans(){
		$sagicor = Yii::$app->Sagicor;
		$result = $sagicor->getSagicorPlans([]);
		return $this->renderPartial('quoteresult', ['result' => $result]);
	}

	public function actionAjaxGoBack(){
		$redirect = '/';

		$current_url = Yii::$app->request->post('current_url');
		$u = explode($_SERVER['HTTP_HOST'], $current_url);
		$current_uri = $u[1];
		//VarDumper::dump($current_uri);

		switch($current_uri){
			case "/personalinfo/":
				$redirect = "/";
				break;
			case "/personalinfo2/":
				$redirect = "/personalinfo/";
				break;
			case "/questions2/":
				$redirect = "/personalinfo2/";
				break;
			case "/beneficiary/":
				$redirect = "/questions2/";
				break;
			case "/paymentinfo/":
				$redirect = "/beneficiary/";
				break;
			default:
				$session = Yii::$app->session;
				$customer_data = CustomerData::find()->where(['sid' => $session->id])->one();
				if(count($customer_data)){
					$attributes = $customer_data->decodeData();
					if(!empty($attributes['referer'])){
						if(strstr($attributes['referer'], 'apply-now') !== false){
							$redirect = '/apply-now/';
						}
					}
				}
				break;
		}

		return $redirect;
	}

	function actionTest4(){
		$json         = '{"avg_amount":"250","birthday":"07\/02\/1971","h_foot":"4","h_inch":"10","weight":"180","sex":"f","state":"AZ","tobaco":"0","term":"15","step":"add-question","first_name":"CHRSTINE","middle_name":"W","last_name":"CULLEN","street_address":"1024, W GEORGIA AVE","city":"PHOENIX","zip":"85013","phone_number":"18002332742","email":"christine@test.com","birth_state":"AZ","birth_country":"US","occupation":"Sales manager","household_income":"2000","ssn":"666290913","dls":"AZ","dln":"D02569514","questions":{"med10Years":{"medCAD":{"answer":"no"},"medPAD":{"answer":"no"},"medIrregHeartBeatECGMurmur":{"answer":"no"},"medNeural":{"answer":"no"},"medCancer":{"answer":"no"},"medHIV":{"answer":"no"}},"med5Years":{"medHypertensionLipids":{"answer":"no"},"medRespiratory":{"answer":"no"},"medMuscles":{"answer":"no"},"medArthritis":{"answer":"no"},"medDiabetes":{"answer":"no"},"medGland":{"answer":"no"},"medUrinary":{"answer":"no"},"medBloodDisorder":{"answer":"no"},"medGastrointestinal":{"answer":"no"},"medMental":{"answer":"no"}},"needXmlNum":{"DrugUsage":{"answer":"no"},"AlcoholCessationOrTreatment":{"answer":"no"},"CriminalHistory":{"answer":"no"},"Bankruptcy":{"answer":"no"}},"needXmlNum2":{"MotorVehcleReport":{"answer":"no"},"Aviation":{"answer":"no"},"Avocations":{"answer":"no"},"ResideOutsideUSDuration":{"answer":"no"}},"needXmlNum3":{"MemberofMilitary":{"answer":"no"},"medWeightLoss15LbOrMore":{"answer":"no"},"FamilyHistory":{"answer":"no"},"FamilyHistoryHuntingtonDiseaseFamilialPolyposisPolycysticKidneyDisease":{"answer":"no"},"tobaccoUse":{"answer":"no"}}}}';
		$json_decoded = json_decode($json);
		// print_r($json_decoded);
		unset($json_decoded->step);
		$json_decoded->height     = ($json_decoded->h_foot * 12 + $json_decoded->h_inch).'.00';
		$json_decoded->weight     = $json_decoded->weight.'.0';
		$json_decoded->avg_amount = $json_decoded->avg_amount * 1000;
		unset($json_decoded->h_foot);
		unset($json_decoded->h_inch);
		$json_decoded->productcode = 'NA5J1700';
		$json_decoded->birthday    = date('Y-m-d', strtotime($json_decoded->birthday));
		print_r(json_encode($json_decoded));


	}

	/**
	 * Homepage
	 * @return string|\yii\web\Response
	 */
	public function actionIndex(){
		$customer_data = $this->getCustomeData();
		//VarDumper::dump($customer_data,10,1);
		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();
			if(!empty($customer_data->step)){
				//return $this->redirect($this->getStepUrl($customer_data->step));
			}
		}else{
			$customer_data = new CustomerData();
		}

		return $this->render('index', ['customer_data' => $customer_data]);
	}

	public function actionQuestions(){
		$this->layout = 'questions';
		$question     = Questions::findOne(211);
		$subquestions = $question->subquestions;
		if($subquestions){
			$subquestions = array_chunk($subquestions, 3);
		}
		//print_r($subquestions);

		return $this->render('questions', ['question' => $question, 'subquestions' => $subquestions]);
	}

	public function actionPersonalinfo(){
		$this->layout = 'questions';

		$customer_data = $this->getCustomeData();

		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();

			if($customer_data->step != 'term'){
				if($customer_data->step == CustomerData::SCENARIO_PI){

				}else{
					//return $this->redirect($this->getStepUrl($customer_data->step));
				}
			}

		}else{
			return $this->redirect('/');
		}

		return $this->render('personal-info', ['customer_data' => $customer_data]);
	}

	public function actionPersonalinfo2(){
		$this->layout  = 'questions';
		$customer_data = $this->getCustomeData();

		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();

			if($customer_data->step != 'personal-info'){
				if($customer_data->step == CustomerData::SCENARIO_PI2){

				}else{
					//return $this->redirect($this->getStepUrl($customer_data->step));
				}
			}

		}else{
			return $this->redirect('/');
		}

		return $this->render('personal-info2', ['customer_data' => $customer_data]);
	}

	public function actionBeneficiary(){
		$this->layout = 'questions';
		//$customer_data = new CustomerData();

		$customer_data = $this->getCustomeData();

		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();
			//VarDumper::dump($customer_data->step, 10, 1); exit;
			if($customer_data->step != CustomerData::SCENARIO_ADDQ && $customer_data->step != CustomerData::SCENARIO_PI2){
				if($customer_data->step == CustomerData::SCENARIO_BENEFICIARY){

				}else{
					return $this->redirect($this->getStepUrl($customer_data->step));
				}
			}

		}else{
			return $this->redirect('/');
		}

		$bf_id = 1;

		return $this->render('beneficiary', ["bf_id" => $bf_id, 'customer_data' => $customer_data]);
	}

	public function actionBeneficiaryAjax(){
		$this->layout = 'questions';
		$customer_data = new CustomerData();
		$form = new ActiveForm();
		$request = Yii::$app->request;
		$bf_id   = $request->get('bf_id');

		return $this->renderPartial('_beneficiary', ["bf_id" => $bf_id, 'customer_data' => $customer_data, 'form' => $form]);
	}

	public function actionPaymentinfo(){
		$this->layout = 'questions';

		/*$session = Yii::$app->session;
		$customer_data = CustomerData::find()->where(['sid' => $session->id])->one();
		if($customer_data){
			$customer_data->scenario = CustomerData::SCENARIO_PAYMENT;
			$customer_data->save();
		}else{
			return $this->redirect('/');
		}*/

		$customer_data = $this->getCustomeData();

		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();

			if($customer_data->step != CustomerData::SCENARIO_BENEFICIARY){
				if($customer_data->step == CustomerData::SCENARIO_PAYMENT){

				}else{
					//return $this->redirect($this->getStepUrl($customer_data->step), 200);
				}
			}

		}else{
			return $this->redirect('/');
		}


		return $this->render('payment-info', ['customer_data' => $customer_data]);
	}

	public function actionSuccess(){
		$this->layout = 'questions';
		$session = Yii::$app->session;

		$cookies = Yii::$app->response->cookies;


		$report = ['path' => '', 'url' => ''];

		$customer_data = CustomerData::find()->where(['sid' => $session->id])->one();

		if( count($customer_data) ){

			$customer_data->attributes = $customer_data->decodeData();
			$report = $customer_data->success;

			if( $customer_data->step == CustomerData::SCENARIO_COMPLETED ){
				//$customer_data->scenario = CustomerData::SCENARIO_SUCCESS;
				// if($customer_data->step == CustomerData::SCENARIO_SUCCESS){

				// }
				Yii::info(  'Success page - COMPLETED' ,'noexam');
			}else{
				Yii::info(  'Success page - redirecting to step - ' . $customer_data->step ,'noexam');
				//return $this->redirect($this->getStepUrl($customer_data->step));
			}

		}else{
			return $this->redirect('/');
		}

		$cookies->add(new Cookie([
		    'name' => 'PHPSESSID',
		    'expire' => -3600,
		]));
		/*$report = $this->generatePDFReport(25);

		$customer_data->attributes = $customer_data->decodeData();
		$customer_data->success = $report;
		$customer_data->save();*/

		//Yii::$app->session->close();

		return $this->render('success', ['report_data' => $report]);
	}

	public function actionApproved(){
		$this->layout = 'questions';

		return $this->render('approved');
	}

	public function actionDeclined(){
		$this->layout = 'questions';

		return $this->render('declined');
	}

	public function actionNotEligible(){
		$this->layout = 'questions';

		return $this->render('not-eligible');
	}

	public function actionRtu(){
		$this->layout = 'questions';

		return $this->render('rtu');
	}

	public function actionLegalDisclosures(){
		$this->layout = 'questions';

		return $this->render('legal-disclosures');
	}

	/*
	public function dev_actionBeneficiary()
	{
		$this->layout = 'questions';
		$bf_id = 1;
		$beneficiaryModels = Model::createMultiple(Beneficiary::classname());
		$beneficiaryContingentModels = Model::createMultiple(ContingentBeneficiary::classname());

		if( count($beneficiaryModels) ) {
			Model::loadMultiple($beneficiaryModels, Yii::$app->request->post());
		}else{
			$beneficiaryModels = [new Beneficiary];
		}

		if( count($beneficiaryContingentModels) ) {
			Model::loadMultiple($beneficiaryContingentModels, Yii::$app->request->post());
		}else{
			$beneficiaryContingentModels = [new ContingentBeneficiary];
		}

		return $this->render('beneficiary',["beneficiaryModels"=>$beneficiaryModels,"beneficiaryContingentModels"=>$beneficiaryContingentModels]);
	}

	public function dev_actionBeneficiaryAjax()
	{
		$this->layout = 'questions';

		$request = Yii::$app->request;
		$bf_id =$request->get('bf_id');
		$beneficiaryModel = new Beneficiary();
		return $this->renderPartial('_beneficiary',["bf_id"=>$bf_id, "beneficiaryModel"=>$beneficiaryModel]);
	}
	*/

	public function actionProcessing(){
		$this->layout = 'questions';

		return $this->render('processing');
	}

	public function actionGetQuestions(){
		$isMobile = Yii::$app->params['devicedetect']['isMobile'];
		$request = Yii::$app->request;
		$reflexes;

		if(isset($_POST['answers']) && !empty($_POST['answers'])){
			foreach($_POST['answers'] as $key => $answer){
				// if($answer['answer']=='yes'){
				/*          $reflexes['id'][] = $answer['id'];
						  $reflexes['xml_num'][] = $answer['xml_num'];*/

				$result_q[$key] = Questions::findOne(['id' => $answer['id']]);
				$result_q[$key]->q_answer = $answer['answer'];

				// }

				$condition = $result_q[$key]->getCondition($answer['answer'])->one();

				if($condition->spec_q){
					$result_q[$key]->spec_q = $condition->spec_q;
				}

				$result_q[$key]->q_answer = $answer['answer'];

				switch($condition->condition){
					case 'ne':
						echo 'ne';
						exit;
						break;
					case 'rtu':
						echo 'rtu';
						exit;
						break;
					/*  case 'reflex':$questions[] = $result_q[$key];

							   break;*/
				}


			}
		}

		if(!count($questions)){
			//Next question
			//$questions = Questions::find()->where(['type' => $_POST['question_type'], 'num' => $_POST['number'] + 1])->one();
			$questions = Questions::find()->where(['type' => 'question', 'num' => $_POST['number'] + 1])->one();

			if(!count($questions)){
				//echo 'No More questions';
				//$session      = Yii::$app->session;
				//$customer_data = CustomerData::find()->where(['sid' => $session->id])->one();
				//$customer_data->attributes = $customer_data->decodeData();
				//$customer_data->scenario = CustomerData::SCENARIO_BENEFICIARY;;
				//$customer_data->step = CustomerData::SCENARIO_BENEFICIARY;
				//VarDumper::dump($customer_data->step, 10, 1);
				//$customer_data->save();

				/*if($_POST['question_type'] == 'question_nq'){
					return $this->redirect($this->getStepUrl(CustomerData::SCENARIO_QUOTE_RESULT), 200);
				}else{
					return $this->redirect($this->getStepUrl(CustomerData::SCENARIO_BENEFICIARY), 200);
				}*/

				return $this->redirect($this->getStepUrl(CustomerData::SCENARIO_BENEFICIARY), 200);
			}

			$subquestions = $questions->subquestion;
			if(count($subquestions)){
				$subquestions = array_chunk($subquestions, ($isMobile ? 1 : 3));
			}

			return $this->renderPartial('_questions', ['question' => $questions, 'subquestions' => $subquestions]);
		}


	}

	public function actionQuestions2(){
		$isMobile = Yii::$app->params['devicedetect']['isMobile'];
		$session      = Yii::$app->session;
		$this->layout = 'questions';

		$customer_data = $this->getCustomeData();

		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();
			if($customer_data->step != 'add-question' && $customer_data->step != 'personal-info2'){
				//return $this->redirect($this->getStepUrl($customer_data->step));
			}
		}else{
			return $this->redirect('/');
		}

		$questions    = Questions::find()->where(['type' => 'question', 'num' => '1'])->one();
		$subquestions = $questions->subquestion;

		if(count($subquestions)){
			$subquestions = array_chunk($subquestions, ($isMobile ? 1 : 3));
		}
		//VarDumper::dump($questions, 10, 1);

		return $this->render('questions', ['question' => $questions, 'subquestions' => $subquestions]);
	}

	public function actionGetReflex(){

		$this->layout = 'questions';
		$request      = Yii::$app->request;
		$session      = Yii::$app->session;

		$customer_data = $this->getCustomeData();

		if(!count($customer_data)){
			return false;
		}
		$questionId     = $request->post('questionId');
		$parentId       = $request->post('parentId');
		$questionNumber = $request->post('questionNumber');
		$questionAnswer = $request->post('questionAnswer');

		// $questionId = 3;
		// $parentId = 2;
		// $questionNumber = $request->post('questionNumber');
		// $questionAnswer = 'yes';


		$parent = Questions::findOne($parentId);


		if(!count($parent)){
			return false;
		}

		switch($parent->type){
			case 'question':
			//case 'question_nq':
				$question = $parent->getSubquestionById($questionId)->one();
				break;
			case 'sub':
				$question = $parent->getReflexQuestionById($questionId)->one();
				break;
			case 'reflex':
				$question = $parent->getReflexQuestionById($questionId)->one();
				break;

			default:
				return false;
				break;
		}

		$customer_data->attributes = $customer_data->decodeData();

		if(!is_array($customer_data->questions)){
			$customer_data->questions = [];
		}

		$preparedQuestionsData = [
			$question->xml_num => [
				'answer' => $questionAnswer[0],
			],
		];

		if(!$this->arraySearchRecursive2($customer_data->questions, $parent->xml_num, $preparedQuestionsData)){
			$customer_data->questions[$parent->xml_num] = $preparedQuestionsData;
		}
		/*  print_r($customer_data->questions);

		  die;*/
		$customer_data->scenario = CustomerData::SCENARIO_ADDQ;
		$customer_data->save();


		// print_r($customer_data->questions);

		// die;

		if($question->getCondition($questionAnswer[0])->one()->condition != 'reflex'){
			return false;
		}
		if($question->getCondition($questionAnswer[0])->one()->spec_q){
			$reflexQuestions = Questions::find()->where(['id' => explode(',', $question->getCondition($questionAnswer[0])->one()->spec_q)])->all();

		}else{

			$reflexQuestions = $question->reflexquestion;
		}

		if(!$reflexQuestions){
			return false;
		}

		//Saving Qusteions data to DB.

		return $this->renderPartial('reflex5', ['reflex' => $reflexQuestions, 'questionNumber' => $questionNumber, 'parentQustionId' => $questionId]);

	}

	public function actionWsdl(){
		header("Content-Type: text/xml; charset=utf-8");
		header('Cache-Control: no-store, no-cache');
		ini_set("soap.wsdl_cache_enabled", "0");
		// echo Url::home(true);
		// header("Content-Type: text/xml; charset=utf-8");

		$wsdl = '<?xml version="1.0" encoding="utf-8"?>
<definitions    xmlns="http://schemas.xmlsoap.org/wsdl/"  
                xmlns:wsp="http://www.w3.org/ns/ws-policy" 
                xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd" 
                xmlns:wsp1_2="http://schemas.xmlsoap.org/ws/2004/09/policy" 
                xmlns:tns="'.Url::home(true).'" 
                xmlns:xsd="http://www.w3.org/2001/XMLSchema" 
                xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/"  
                xmlns:wsam="http://www.w3.org/2007/05/addressing/metadata" 
                targetNamespace="'.Url::home(true).'" 
                name="CRLService">
    <types>
        <xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema"
                   targetNamespace="'.Url::home(true).'">
            <xs:element name="request" type="tns:request"/>
            <xs:element name="response" type="tns:response"/>
            <xs:complexType name="request">
                <xs:sequence>
                    <xs:element name="xmlcontent" minOccurs="1" maxOccurs="unbounded" type="xs:base64Binary" />
                </xs:sequence>
            </xs:complexType>
            <xs:complexType name="response">
                <xs:sequence>
                    <xs:element name="status"  minOccurs="1" type="xs:boolean" />
                    <xs:element name="errors"  minOccurs="0" type="xs:base64Binary" />
                </xs:sequence>
            </xs:complexType>
        </xs:schema>
    </types>
    <message name="sendDecisionRequest">
        <part name="parameters" element="tns:request" />
    </message>
    <message name="sendDecisionResponse">
        <part name="parameters" element="tns:response" />
    </message>
    <portType name="CRLServicePortType">
        <operation name="sendDecision">
            <input message="tns:sendDecisionRequest" />
            <output message="tns:sendDecisionResponse" />
        </operation>
    </portType>
    <binding name="CRLServiceBinding" type="tns:CRLServicePortType">
        <soap:binding style="document" transport="http://schemas.xmlsoap.org/soap/http" />
        <operation name="sendDecision">
            <soap:operation soapAction="" />
            <input>
                <soap:body use="literal" />
            </input>
            <output>
                <soap:body use="literal" />
            </output>
        </operation>
    </binding>
    <service name="CRLService">
        <port name="CRLServicePort" binding="tns:CRLServiceBinding">
            <soap:address location="'.Url::home(true).'crl" />
        </port>
    </service>
</definitions>';
		echo $wsdl;
	}

	public function actionCrl(){
		header("Content-Type: text/xml; charset=utf-8");
		header('Cache-Control: no-store, no-cache');
		header('Expires: '.date('r'));
		$server = new \SoapServer(Url::home(true).'wsdl', ['cache_wsdl' => WSDL_CACHE_NONE]);
		$server->setClass('app\components\Soap');
		$server->handle();
	}

	public function actionIntermediaryQuestions(){
		$isMobile     = Yii::$app->params['devicedetect']['isMobile'];
		$session      = Yii::$app->session;
		$this->layout = 'planinformation';

		//$customer_data = $this->getCustomeData();
		$customer_data = CustomerData::find()->where(['sid' => $session->id])->one();
		//VarDumper::dump($customer_data, 10, true);
		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();
			//if($customer_data->step != 'add-question' && $customer_data->step != 'personal-info2'){
			//return $this->redirect($this->getStepUrl($customer_data->step));
			//}
		}else{
			return $this->redirect('/');
		}

		$_questions = [];
		$_subquestions = [];

		$questions    = Questions::find()->where(['type' => 'question_nq'])->orderBy('item_order ASC')->all();
		foreach($questions as $k => $question){
			$questions[$k]->sub_questions = $question->getSubquestion()->all();
		}
		//VarDumper::dump($questions, 10, true);
		//$subquestions = $questions->subquestion;
		//VarDumper::dump($subquestions, 10, true);

		//VarDumper::dump($questions, 10, 1);

		return $this->render('intermediary', ['questions' => $questions]);
	}

	// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	public function actionSoap(){
		// header("Content-Type: charset=utf-8");
		header('Cache-Control: no-store, no-cache');
		header('Expires: '.date('r'));
		$client = new \SoapClient(Url::home(true).'wsdl', ["trace" => true, 'exceptions' => 1, 'cache_wsdl' => WSDL_CACHE_NONE]);

		$result = $client->sendDecision(['asd']);

		print_r($result);
		/* $xml = 'sd';
		 libxml_use_internal_errors( true );

			 $doc = new \DOMDocument('1.0', 'utf-8');

			 $doc->loadXML( $xml );

			 $errors = libxml_get_errors();

			 print_r($errors);*/

	}

	public function actionPlanInformation(){
		$this->layout = 'planinformation';
		$customer_data = $this->getCustomeData();

		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();
			if($customer_data->step != 'term'){
				//return $this->redirect($this->getStepUrl($customer_data->step));
			}
		}else{
			return $this->redirect('/');
		}
		$customer_data->agree = 2; // Strange value for setting value in htmml as 1. Need to be setted as any value apart of 1.
		$customer_data->view_data = $this->getCustomerViewData($customer_data);

		return $this->render('planinformation', ['customer_data' => $customer_data]);
	}

	public function actionIframe(){
		$ch = curl_init();

		$data = [
			'access_key'                  => '5c23b25521b23121aef3ba9090951ac6',
			'profile_id'                  => '22CB5BAD-3F31-4FD7-A8F5-2E3CD47C21AA',
			'transaction_uuid'            => uniqid(),
			'signed_field_names'          => 'access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,card_type,card_expiry_date,transaction_type,reference_number,bill_to_address_line1,bill_to_address_city,bill_to_address_country,bill_to_address_state,bill_to_address_postal_code,bill_to_email,bill_to_forename,bill_to_surname,amount,currency,card_number',
			'unsigned_field_names'        => '',
			'signed_date_time'            => gmdate("Y-m-d\TH:i:s\Z"),
			'locale'                      => 'en',
			'card_type'                   => '001',
			'card_expiry_date'            => '12-2022',
			'transaction_type'            => 'sale',
			'reference_number'            => 'T2000',
			'bill_to_address_line1'       => 'test billing address 1024',
			'bill_to_address_city'        => 'Dnepr',
			'bill_to_address_country'     => 'UA',
			'bill_to_address_state'       => 'GA',
			'bill_to_address_postal_code' => '35265',
			'bill_to_email'               => 'tester@test.com',
			'bill_to_forename'            => 'Tester',
			'bill_to_surname'             => 'Tester2',
			'amount'                      => '47',
			'currency'                    => 'USD',
			'card_number'                 => '4111111111111111',
		];
		// print_r($data);
		// die;
		$data['signature'] = $this->sign($data);
		// print_r($data);
		// die;
		curl_setopt($ch, CURLOPT_URL, "https://testsecureacceptance.cybersource.com/embedded/pay");
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

		// receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec($ch);

		curl_close($ch);
		$server_output = preg_replace('/href="/', 'href="https://testsecureacceptance.cybersource.com', $server_output);
		$server_output = preg_replace('/src="/', 'src="https://testsecureacceptance.cybersource.com', $server_output);
		$server_output = preg_replace('/action="/', 'action="https://testsecureacceptance.cybersource.com', $server_output);
		echo $server_output;
		// further processing ....
		// if ($server_output == "OK") { ... } else { ... }
		// return $this->renderPartial('iframe');
	}

	function sign($params){
		return $this->signData($this->buildDataToSign($params), '170c029b8b92441a8917fd950bc122d2e187cf8033564c34be0a99f11584ef19c7a3455dcfa74e2a90f6137f32db14e88c562db6168042209ff336646974bed8b1d19ace3df6410faa8b28c0c974227564bf3d2ac2b74d09acecd55d2c7ecbe6a573769e4a414841b85864556489ae7a411a77253fe5410885169ec9215e80f8');
	}

	function signData($data, $secretKey){
		return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
	}

	function buildDataToSign($params){
		$signedFieldNames = explode(",", $params["signed_field_names"]);
		foreach($signedFieldNames as $field){
			$dataToSign[] = $field."=".$params[$field];
		}

		return $this->commaSeparate($dataToSign);
	}

	function commaSeparate($dataToSign){
		return implode(",", $dataToSign);
	}

	function actionInsert(){
		return;
		$types = ['NT', 'P', 'PP', 'PT', 'SSNT', 'SST', 'T'];
		$ages = ['min' => 18, 'max' => 50];
		$sexes = ['M', 'F'];
		$term = 25;
		$band1 = '0.00';
		$band2 = '0.00';
		$band3 = '0.00';

		//$_sql_pattern = "INSERT INTO na_prices (sex, term, type, age, band1, band2, band3) VALUES ('%s', '%d', '%s', '%d', '%s', '%s', '%s')";
		//$_sql = [];

		foreach($sexes as $sex){
			foreach($types as $type){
				for($a = $ages['min']; $a <= $ages['max']; $a++){
					//$_sql[] = sprintf($_sql_pattern, $sex, $term, $type, $a, $band1, $band2, $band3);
					Yii::$app->db->createCommand()->insert('na_prices', [
						'sex' => $sex,
						'term' => $term,
						'type' => $type,
						'age' => $a,
						'band1' => $band1,
						'band2' => $band2,
						'band3' => $band3,
					])->execute();
				}
			}
		}

		//$result = NaPrices::i
		//$this->_debug($_sql);
	}

	public function actionAbout(){
		return $this->render('about');
	}

	public function actionFaq(){
		return $this->render('faq');
	}

	public function actionPrivacy(){
		return $this->render('privacy');
	}

	public function actionCareers(){
		return $this->render('career');
	}

	public function actionApplyNow(){
		$this->layout = 'planinformation';

		/*$session       = Yii::$app->session;
		$customer_data = CustomerData::find()->where(['sid' => $session->id])->one();

		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();

			if($customer_data->step != 'term'){
				return $this->redirect($this->getStepUrl($customer_data->step));
			}

		}else{
			$customer_data = new CustomerData();
			//return $this->redirect('/');
		}*/

		$customer_data = new CustomerData();

		return $this->render('applynow', ['customer_data' => $customer_data, 'display_form' => true]);
	}

	public function actionQuoteresult(){
		$this->layout = 'planinformation';
		$display_form = false;
		$prices = [];

		$request = Yii::$app->request;
		$session = Yii::$app->session;
		$sagicor = Yii::$app->Sagicor;
		$nq_client = Yii::$app->NQClient;

		$customer_data = $this->getCustomeData();

		if(is_null($customer_data)){
			$display_form = true;
			$customer_data = new CustomerData();
		}else{
			$customer_data->attributes = $customer_data->decodeData();
			$age            = $this->getAge($customer_data->birthday);
			$foot           = $customer_data->h_foot;
			$inch           = $customer_data->h_inch;
			$weight         = $customer_data->weight;
			$avarage_amount = $customer_data->avg_amount.'000';
			$smoker         = isset($customer_data->tobaco) ? $customer_data->tobaco : 0;
			$sex            = $customer_data->sex;

			$db = $sagicor->getBirthdates($customer_data->birthday);
			$args = [
				'birthdate'      => $db[1].'/'.$db[0].'/'.$db[2],
				'sex'            => $sex,
				'avarage_amount' => $customer_data->avg_amount,
				'h_foot'         => $foot,
				'h_inch'         => $inch,
				'weight'         => $weight,
				'tobaco'         => $smoker,
				'state'          => isset($customer_data->state) ? $customer_data->state : 'AL',
				'term_length' => $customer_data->term_length,
			];

			//VarDumper::dump($args, 10, 1);

			$sg_prices = $sagicor->getSagicorPlans($args);
			$prices['plans']['exam_no']['sagicor'] = $sg_prices['plans']['sagicor'];
			$prices['plans']['exam_yes'] = [];

			$nq_prices = $nq_client->get_quotes($args);
			//VarDumper::dump($nq_prices, 10, 1);
			if(intval($nq_prices['status']) == 200 && !empty($nq_prices['response']['results'])){
				foreach($nq_prices['response']['results'] as $k => $result){
					switch($result['company_code']){
						case "sagicor":
							$prices['plans']['exam_no'][$result['company_code']] = [];
							$prices['plans']['exam_no'][$result['company_code']][$result['term']] = $result;
							break;
						case "sagicor_express_issue":
							break;
						case "mutual_omaha":
							$prices['plans']['exam_yes'][$result['company_code']][$result['term']] = $result;
							break;
						case "mutual_omaha_express":
							$prices['plans']['exam_no'][$result['company_code']][$result['term']] = $result;
							break;
						case "phoenix":
							$prices['plans']['exam_no'][$result['company_code']][$result['term']] = $result;
							break;
						case "phoenix_express":
							break;
						case "protective":
							$pc = implode("_", array_slice(explode("_", $result['product_code']), 0, 3));
							switch($pc){
								case "protective_classic_choice":
									$prices['plans']['exam_yes'][$result['company_code']][$result['term']] = $result;
									break;
								case "protective_custom_choice":
									break;
							}
							break;
						case "north_american":
							break;
						case "pacific_life":
							break;
						case "principal":
							break;
						case "foresters":
							break;
						case "foresters_express":
							break;
						case "john_hancock":
							break;
						case "american_general":
							break;
						case "assurity":
							break;
						case "transamerica_lb":
							switch($result['product_code']){
								case "transamerica_trendsetter_lb_10":
									break;
								case "transamerica_trendsetter_lb_10_all":
									break;
							}
							break;
						case "transamerica":
							break;
						case "banner":
							break;
						case "prudential":
							break;
						case "lincoln_financial":
						case "lincoln_financial_express":
							break;
						case "sbli":
							break;
						case "sbli_express":
							break;
						case "american_national":
							break;
					}
				}
			}

			$total_terms_count = 0;
			foreach($prices['plans']['exam_no'] as $company_terms){
				$total_terms_count += count($company_terms);
			}
			foreach($prices['plans']['exam_yes'] as $company_terms){
				$total_terms_count += count($company_terms);
			}

			$total_plans_count = count($prices['plans']['exam_no']) + count($prices['plans']['exam_yes']);


			/*$na_rates = NaRates::find()->where(['foot' => $foot, 'inch' => $inch, 'sex' => $sex])->all();
			/// Получаем Band
			$band = $this->getNaBand($avarage_amount);
			//Получаем rate в зависимости курящий или нет.
			$rate = $this->getNaRate($na_rates, $weight, $smoker);
			$na_prices = NaPrices::find()->where(['type' => $rate, 'age' => $age, 'sex' => $sex])->orderBy('term ASC')->all();
			//Получаем цены.
			$prices = $this->calculateAllPrices($na_prices, $avarage_amount, $band);*/
		}

		return $this->render('applynow', ['customer_data' => $customer_data, 'display_form' => $display_form, 'prices' => $prices, 'total_plans_count' => $total_plans_count, 'total_terms_count' => $total_terms_count]);
	}

	/* for NA
	public function actionQuoteresult(){
		$this->layout = 'planinformation';
		$display_form = false;
		$prices = [];

		$request = Yii::$app->request;
		$session = Yii::$app->session;

		$customer_data = CustomerData::find()->where(['sid' => $session->id])->one();

		if(is_null($customer_data)){
			$display_form = true;
			$customer_data = new CustomerData();
		}else{
			$customer_data->attributes = $customer_data->decodeData();
			$age            = $this->getAge($customer_data->birthday);
			$foot           = $customer_data->h_foot;
			$inch           = $customer_data->h_inch;
			$weight         = $customer_data->weight;
			$avarage_amount = $customer_data->avg_amount.'000';
			$smoker         = $customer_data->tobaco;
			$sex            = $customer_data->sex;

			$na_rates = NaRates::find()->where(['foot' => $foot, 'inch' => $inch, 'sex' => $sex])->all();
			/// Получаем Band
			$band = $this->getNaBand($avarage_amount);

			//Получаем rate в зависимости курящий или нет.
			$rate = $this->getNaRate($na_rates, $weight, $smoker);

			$na_prices = NaPrices::find()->where(['type' => $rate, 'age' => $age, 'sex' => $sex])->orderBy('term ASC')->all();

			//Получаем цены.
			$prices = $this->calculateAllPrices($na_prices, $avarage_amount, $band);
			//VarDumper::dump($customer_data);
		}

		return $this->render('applynow', ['customer_data' => $customer_data, 'display_form' => $display_form, 'prices' => $prices]);
	}
	*/

	public function actionLifeInsurance(){
		$this->layout = 'resource_fw';

		$request = Yii::$app->request;
		$request_type = $request->get('request_type', 'normal');


		if($request_type == 'ajax'){
			$this->layout = 'only_content';
			Yii::$app->response->format = Response::FORMAT_JSON;
		}

		$view_path = Yii::$app->getViewPath();

		//VarDumper::dump($view_path, 10, true);
		//VarDumper::dump($_SERVER['REQUEST_URI'], 10, true);
		//VarDumper::dump($_GET['slug'], 10, 1);

		$this->url = $_SERVER['REQUEST_URI'];
		$this->current_cat = $this->getResourcesCatByUrl($this->url);
		//VarDumper::dump($this->current_cat, 10, true);

		if($request_type != 'ajax'){
			if(!empty($this->current_cat->layout)){
				$this->layout = $this->current_cat->layout;
			}
		}

		if(is_null($this->current_cat) && strstr($this->url, '-vs-') !== false){
			$compare_data = $this->getComparisonCompaniesData();
			#VarDumper::dump($compare_data, 10, true);

			if($request_type == 'ajax'){
				$page = $this->render('/main/templates/comparison-ratings-result.php', ['compare_data' => $compare_data]);
				return ['error' => 0, 'html' => $page];
			}else{
				return $this->render('/main/templates/comparison-result.php', ['compare_data' => $compare_data]);
			}
		}



		$template = str_replace('views/', '', $this->current_cat->template);
		//VarDumper::dump($template, 10, true);

		if(!file_exists($view_path.$template) || empty($this->current_cat)){
			$template = '404';
		}else{
			$grid_data = $this->getResourceCatGrid($this->current_cat->id);
		}

		return $this->render($template, ['grid_data' => $grid_data]);
	}

	public function getCatsTree(){
		$catsModel  = new ResourcesCats();
		$cats = $catsModel->getCategories();
		return $cats;
	}

	public function buildCatsTree($cats, $current_cat){
		$ret = [];
		$cats2 = $cats;
		$dropdown_cats = [];
		$categories = [];

		#VarDumper::dump($current_cat, 10, 1);

		$parent_url = '';
		$custom_childs_links = [];

		foreach($cats as $cat){
			if($cat->parent_id == 0){
				$display_subcats = ($current_cat->id == $cat->id || $current_cat->parent_id == $cat->id) ? true : false;
				$categories[$cat->id] = (object) [
					'id' => $cat->id,
					'parent_id' => $cat->parent_id,
					'url' => $cat->url,
					'title' => $cat->title,
					'active' => ($current_cat->id == $cat->id ? 'active' : ''),
					'cols' => 0,
					'count' => 0,
					'subcats' => []
				];
				$dropdown_cats[$cat->url] = $cat->title;
				if($display_subcats){
					foreach($cats2 as $cat2){
						if($cat2->parent_id == $cat->id){

							if($cat2->child_to_parent_links && $cat2->id == $current_cat->id){
								$parent_url = $cat->url;
								if(!empty($cat2->custom_childs_links)){
									$custom_childs_links = explode(',', $cat2->custom_childs_links);
								}
							}

							$dropdown_cats[$cat2->url] = '- '.$cat2->title;
							$categories[$cat->id]->subcats[$cat2->id] = (object) [
								'id' => $cat2->id,
								'parent_id' => $cat2->parent_id,
								'url' => $cat2->url,
								'title' => $cat2->title,
								'active' => ($current_cat->id == $cat2->id ? 'active' : ''),
							];
						}
					}
					if(!empty($parent_url)){
						foreach($categories[$cat->id]->subcats as $cat_id => $subcat){
							if(!in_array($cat_id, $custom_childs_links)){
								unset($categories[$cat->id]->subcats[$cat_id]);
							}
						}
					}
					#VarDumper::dump($categories[$cat->id], 10, 1);

					$categories[$cat->id]->count = count($categories[$cat->id]->subcats);
					if($categories[$cat->id]->count < 15){
						$categories[$cat->id]->cols = 1;
					}elseif($categories[$cat->id]->count >= 15){
						$categories[$cat->id]->cols = 3;
					}
				}
			}
		}



		$first_cat = $last_cat = $next_cat = [];
		foreach($categories as $id => $cat){
			if($cat->cols == 1){
				$first_cat[] = $cat;
				continue;
			}
			if($cat->cols == 3){
				$last_cat[] = $cat;
				continue;
			}
			$next_cat[] = $cat;
		}

		$class = '';
		if(!empty($first_cat) && empty($last_cat)){
			$class = 'v1';
		}elseif(empty($first_cat) && !empty($last_cat)){
			$class = 'v3';
		}

		if(!empty($last_cat)){
			$last_cat[0]->subcats = array_chunk($last_cat[0]->subcats, ceil($last_cat[0]->count / 3), true);
			//VarDumper::dump($last_cat, 10, 1);
		}

		return [
			'class' => $class,
			'cats' => [
				'first_cat' => $first_cat,
				'next_cat' => $next_cat,
				'last_cat' => $last_cat,
			],
			'dropdown_cats' => $dropdown_cats
		];
	}

	public function getResourcesCatByUrl($url = ''){
		if(empty($url)){
			$url = $_SERVER['REQUEST_URI'];
		}
		//VarDumper::dump($url, 10, 1);
		$cat = ResourcesCats::findOne(['url' => $url]);

		return $cat;
	}

	public function getCurrentResource(){
		//$url = $this->url;

		/*if(strstr($url, '/') !== false){
			$a          = explode('/', $this->url);
			if($key === 'last'){
				$url = end($a);
			}else{
				$url = $a[$key];
			}
		}*/

		//VarDumper::dump($url, 10, true);
		/*if($_GET['url'] != null && strstr($_GET['url'], $url) === false){
			if(strstr($_GET['url'], '/') !== false){
				$a          = explode('/', $_GET['url']);
				$url = end($a);
			}else{
				$url = $_GET['url'];
			}
		}*/

		return ['url' => $this->url, 'cat' => $this->current_cat];
	}

	public function getResourceCatGrid($cat_id = 0, $cat_url = ''){
		$ret = [];
		$resourcesGridModel = new ResourcesGrid();
		$grid_data = $resourcesGridModel->getGridData($cat_id, $cat_url);
		//VarDumper::dump($grid_data, 10, 1);

		if(!empty($grid_data)){
			foreach($grid_data as $data){
				foreach($data as $k => $v){
					$ret[$data->placement][$k] = $v;
				}
				$ret[$data->placement] = (object)$ret[$data->placement];
			}
		}
		//VarDumper::dump($ret, 10, 1);

		return $ret;
	}

	public function getComparisonCompaniesData(){
		$ret = ['companies' => [], 'compare_content' => []];

		$url = $this->url;
		if(strstr($this->url, '?') !== false){
			$a = explode('?', $this->url);
			$url = $a[0];
		}

		$uri_arr = explode('/', trim($url, '/'));
		$last_el = end($uri_arr);
		#VarDumper::dump($last_el);
		$companies = $_companies = explode('-vs-', $last_el);
		$companies = ResourcesCompanies::findAll(['slug' => $companies]);
		if(count($companies) == 2){
			/*$compare_content = ResourcesCompare::find()->
				where(['company1_id' => $companies[0]->id, 'company2_id' => $companies[1]->id])->
				orWhere(['company1_id' => $companies[1]->id, 'company2_id' => $companies[0]->id])->one();*/


			$compare_content = (object) include __DIR__.'/../views/main/templates/comparison-content.php';

			if($_companies[0] == $companies[0]->slug && $_companies[1] == $companies[1]->slug){
				$company_1 = $companies[0]->title;
				$company_2 = $companies[1]->title;
			}elseif($_companies[1] == $companies[0]->slug && $_companies[0] == $companies[1]->slug){
				$company_1 = $companies[1]->title;
				$company_2 = $companies[0]->title;
			}

			$compare_content->title = str_replace(['{company_1}', '{company_2}'], [$company_1, $company_2], $compare_content->title);
			$compare_content->content = str_replace(['{company_1}', '{company_2}'], [$company_1, $company_2], $compare_content->content);
			//VarDumper::dump($_companies, 10, 1);

			$ret['companies'] = $companies;
			$ret['compare_content'] = $compare_content;
			$ret['meta_keys'] = $compare_content->meta_keys;
		}
		//VarDumper::dump($compare_content, 10, true);

		return $ret;
	}

	public function getCompaniesRatingsTableData(){
		$ret = [
			'am_best'       => ['title' => 'AM Best', 'logo' => '/img/company_logos/logo_am_best.png', 'ratings' => []],
			'bbb'           => ['title' => 'BBB', 'logo' => '/img/company_logos/logo_bbb.png', 'ratings' => []],
			'comdex_score'  => ['title' => 'Comdex', 'logo' => '/img/company_logos/logo_comdex_score.png', 'ratings' => []],
			'fitch'         => ['title' => 'Fitch', 'logo' => '/img/company_logos/logo_fitch.png', 'ratings' => []],
			'jd_power'      => ['title' => 'J.D. Power', 'logo' => '/img/company_logos/logo_jd_power.png', 'ratings' => []],
			'moodys'        => ['title' => "Moody's", 'logo' => '/img/company_logos/logo_moodys.png', 'ratings' => []],
			'standard_poor' => ['title' => "S&P", 'logo' => '/img/company_logos/logo_standard_poor.png', 'ratings' => []],
		];
		$rating_values = [
			"AAA" => 53,
			"AA+" => 52,
			"AA" => 51,
			"AA-" => 50,
			"A+" => 49,
			"A" => 48,
			"A-" => 47,
			"Aaa" => 46,
			"Aa1" => 45,
			"Aa2" => 44,
			"Aa3" => 43,
			"A1" => 42,
			"A2" => 41,
			"A3" => 40,
			"A++" => 39,
			"BBB+" => 38,
			"BBB" => 37,
			"BBB-" => 36,
			"BB+" => 35,
			"B" => 34,
			"BB-" => 33,
			"B+" => 32,
			"B-" => 31,
			"Baa1" => 30,
			"Baa2" => 29,
			"Baa3" => 28,
			"Ba1" => 27,
			"Ba2" => 26,
			"Ba3" => 25,
			"B1" => 24,
			"B2" => 23,
			"B3" => 22,
			"B++" => 21,
			"BB" => 20,
			"CCC+" => 19,
			"CCC" => 18,
			"CCC-" => 17,
			"CC" => 16,
			"C" => 15,
			"Caa1" => 14,
			"Caa2" => 13,
			"Caa3" => 12,
			"Ca" => 11,
			"C++" => 10,
			"C+" => 9,
			"C-" => 8,
			"RD" => 7,
			"D" => 6,
			"D+" => 5,
			"D-" => 4,
			"SD" => 3,
			"F" => 2,
			"R" => 1,
			"N/A" => 0,
		];

		$companies = ResourcesCompanies::find()->all();
		if($companies){

			$keys = array_keys($rating_values);
			$a = array_keys($ret);
			foreach($companies as $k => $company){
				#VarDumper::dump($company, 10, 1);
				foreach($company->attributes() as $attribute){
					if(in_array($attribute, $a)){
						$rate = $company->{$attribute};
						if(isset($rating_values[$rate])){
							$value = $rating_values[$rate];
						}elseif(strstr($rate, '/') !== false){
							$value = intval(substr($rate, 0, 1));
						}else{
							$value = $rate;
						}
						$ret[$attribute]['ratings'][$k] = [
							'title' => $company->title,
							'logo'  => $company->logo,
							'rate'  => $rate,
							'value'  => $value,
						];
					}
				}
			}
		}

		return $ret;
	}

	public function actionApplyNow2(){
		$this->layout = 'planinformation';
		$this->body_class = 'applynow';
		$model_data = new ApplyNow2();
		$model_data->illnesses = 'no';

		return $this->render('applynow2', ['model_data' => $model_data, 'display_form' => true]);
	}

	public function actionQuoteresult2(){

		$IEIClient = Yii::$app->IEIClient;

		$this->layout = 'results';
		$session      = Yii::$app->session;
		$model        = ApplyNow2::find()->where(['sid' => $session->id])->one();
		$cookies      = Yii::$app->response->cookies;

		if(count($model)){
			$json_decoded = json_decode($model->data, true);
			$this->processApplyNow2($json_decoded);
		}else{
			return $this->redirect('/');
		}

		$cookies->add(new Cookie([
			'name'   => 'PHPSESSID',
			'expire' => -3600,
		]));

		return $this->render('quoteresult2', ['model_data' => $model]);
	}

	public function actionPdfReport(){
		$this->layout = 'questions';
		$report = $this->generatePDFReport(25);

		return $this->render('pdf_repoprt', ['report_data' => $report]);
	}

	public function getFaqs($cats){
		$cats[] = 'anywhere';
		$cats = array_unique($cats);
		$model = Faqs::find()->where(['IN', 'category', $cats])->orderBy('item_order ASC')->all();

		return $model;
	}

	public function actionQuoteOptions(){
		$this->layout = 'results';
		return $this->render('quote-options');
	}


	/**
	 * Testing methods
	 */
	public function actionViewCsd(){
		//$customer_data = $this->getCustomeData();
		$request      = Yii::$app->request;
		$get_sid = $request->get('sid');
		$session      = Yii::$app->session;

		$get_sid = is_null($get_sid) ? $session->id : $get_sid;
		//VarDumper::dump($get_sid, 10, 1);

		$customer_data = CustomerData::find()->where(['sid' => $get_sid])->one();
		if(count($customer_data)){
			$customer_data->attributes = $customer_data->decodeData();
		}
		return $this->render('debug/view_csd', ['customer_data' => $customer_data]);
	}

	public function actionReflexForm(){
		$request      = Yii::$app->request;

		VarDumper::dump($request->get(), 10, 1);

		return $this->render('debug/reflex_form');
	}

	public function actionTestsf(){

		$customer_data = $this->getCustomeData();
		$json_decoded  = json_decode( $customer_data->data, true );
		$SFClient = Yii::$app->SFClient;

		$prepared_data = $SFClient->prepare_data( $json_decoded  );
		
		VarDumper::dump($customer_data, 10, 1);
		// VarDumper::dump($prepared_data, 10, 1);

		// $this->createSFLead( $json_decoded );
		

	}

	public function actionTestAttach(){


		// $json_decoded  = json_decode( $customer_data->data, true );
		// VarDumper::dump($result_pdf, 10, 1);
		return true;

	}


	public function actionTestPing(){
		
		$customer_data = $this->getCustomeData();
		$json_decoded  = json_decode($customer_data->data, true);
		$IEIClient = Yii::$app->IEIClient;

		$model_data	= json_decode($model->data, true);
		$test =['asd'];
		$IEIData = [
			'api_token' => 'wmqyyrgichattvm3Dk4IiP',
			'placement_id' => 'SyCDCAg3oAsgpS1KeQXRwagnQ7bZ5A',
			'version' => 18,
			'local_hour' => 12,
			'date_time' => '2018-10-11 16:40:00',
			'ip' => '45.26.156.154',
			'ua' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.44 Safari/537.36',
			'url' => 'http://phpstack-223893-690316.cloudwaysapps.com/apply-now/',
			'data' => [
				'birth_date' => '1970-05-19',
				'coverage_amount' => '500000',
				'coverage_type' => 'Term 10 Years',
				'currently_insured' => 0,
				'dui' => 0,
				'gender' => 'M',
				'height' => 64,
				'high_risk' => 0,
				'military' => 0,
				'tobacco' => 0,
				'weight' => 170,
				'zip' => '30075',
				'tcpa' => [
					'text' => 'By submitting your quote request, you represent that you are at least 18 and agree to our Privacy Policy and Terms of Use. You also authorize QuoteLab and/or its marketing partners to contact you for marketing/telemarketing purposes at the number and address provided above, including your wireless number, if provided, using live operators, automated telephone dialing systems, pre-recorded messages, text messages and/or emails. You are not required to consent as a condition of purchasing goods or services and may revoke consent at anytime.',
					'url' => 'http://www.quotelab.com/privacy-policy.html'
				]
			]
		];

		$IEIClient->add_params( $IEIData );
		$IEIClient->ping_request();
		// Yii::trace( $IEIData, 'noexam' );
		if( $IEIClient->has_error() ){

			Yii::info('IEI - ping request has error.', 'noexam');
			Yii::trace($IEIClient->get_error());
			VarDumper::dump($IEIClient->get_error(),10,1);

		}else{

			Yii::info('IEI - success ping request.', 'noexam');

			// VarDumper::dump($IEIClient->get_result(),10,1);
			// VarDumper::dump($IEIClient->get_ping_id(),10,1);

			$buyers = $IEIClient->get_buyers();
			// VarDumper::dump( $buyers, 10, 1 );
			if( !count( $buyers ) ){
				
				Yii::info('IEI - no buyers.', 'noexam');

			}

			$filters[] = 'exclusive';
			$filters[] = 'shared';

			$max_bid_buyer = $this->maxBidBuyer( $buyers );
			VarDumper::dump( $max_bid_buyer, 10, 1 );





		}





		// echo max('1.1','1.265','1.264');
	}
	public function actionTestPost(){

		$bid_filters = [ 'exclusive' ];
		$IEIClient = Yii::$app->IEIClient;

		$IEIPingData = [
			'api_token' => 'wmqyyrgichattvm3Dk4IiP',
			'placement_id' => 'SyCDCAg3oAsgpS1KeQXRwagnQ7bZ5A',
			'version' => 18,
			'local_hour' => 12,
			'date_time' => '2018-10-11 16:40:00',
			'ip' => '45.26.156.154',
			'ua' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.44 Safari/537.36',
			'url' => 'http://phpstack-223893-690316.cloudwaysapps.com/apply-now/',
			'data' => [
				'birth_date' => '1970-05-19',
				'coverage_amount' => '50000',
				'coverage_type' => 'Term 10 Years',
				'currently_insured' => 0,
				'dui' => 0,
				'gender' => 'M',
				'height' => 64,
				'high_risk' => 0,
				'military' => 0,
				'tobacco' => 0,
				'weight' => 170,
				'zip' => '30075',
				'tcpa' => [
					'text' => 'By submitting your quote request, you represent that you are at least 18 and agree to our Privacy Policy and Terms of Use. You also authorize QuoteLab and/or its marketing partners to contact you for marketing/telemarketing purposes at the number and address provided above, including your wireless number, if provided, using live operators, automated telephone dialing systems, pre-recorded messages, text messages and/or emails. You are not required to consent as a condition of purchasing goods or services and may revoke consent at anytime.',
					'url' => 'http://www.quotelab.com/privacy-policy.html'
				]
			]
		];

		$IEIPostData = [
			"api_token" => "wmqyyrgichattvm3Dk4IiP",
			"placement_id" => "SyCDCAg3oAsgpS1KeQXRwagnQ7bZ5A",
			"version" => 18,
			// "ping_id" => "9-0rtb7EEtbyindXLNK6KccQKz1-EA",
			// "bid_ids" => [ "d_DUfAbwkBPZfwQ-VbrZDM5b8DTH5g", "an4-uVpu2VE-0oV_fI2qznuQmH6bcQ" ],
			"data" => [
				"address" => "120 Jenkins Rd",
				"address_2" => "Apt 12",
				"contact" => "Pamela L. Silverman",
				"email" => "silverman@gmail.com",
				"phone" => "(229) 942-9943"
			]
		];

		$IEIClient->add_params( $IEIPingData );
		$IEIClient->ping_request();
		// Yii::trace( $IEIData, 'noexam' );
		// VarDumper::dump( $IEIClient->params, 10, 1 );
		if( $IEIClient->has_error() ){

			// Push data to SF.
			if( $IEIClient->get_error() == 'No match.' ){
				Yii::info( 'Pushing data to SF becuse Ping request error - No match.', 'noexam' );

			}
			Yii::error( $IEIClient->get_error(), 'noexam' );

		}else{

			$buyers = $IEIClient->get_buyers();

			if( !is_null( $buyers ) ){

				$max_bid_buyer = $this->maxBidBuyer( $buyers, $bid_filters );

				if( is_object( $max_bid_buyer ) && count( $max_bid_buyer ) ){

					$IEIPostData[ 'bid_ids' ] = [ $max_bid_buyer->bid_id ];
					$IEIPostData[ 'ping_id' ] = $IEIClient->get_ping_id();

					$IEIClient->add_params( $IEIPostData );
					$IEIClient->post_request();


					if( $IEIClient->has_error() ){

						$IEIClient->post_request();

						if( $IEIClient->has_error() ){

							// Second time error, push data to SF.
							Yii::info( 'Pushing data to SF becuse Pos request second time error.', 'noexam' );

						}

					}

					$post_result = $IEIClient->get_result();

					if( is_object( $post_result ) ){

						if( property_exists( $post_result, 'status' ) ){

							if( $post_result->status == 'succeeded' ){

								Yii::info( 'Post request is succeeded', 'noexam' );

								// VarDumper::dump( $IEIClient->get_result(), 10, 1 );

							}

						}else{
							Yii::error( 'No STATUS.', 'noexam' );
						}

					}else{
						Yii::error( 'No result after POST request', 'noexam' );
					}



				}else{
					Yii::error( 'No Max Bid Buyer.', 'noexam' );
				}

			}else{
				Yii::error( 'No buyers.', 'noexam' );
			}


		}



	}
	public function actionDsr( $dsr_key = NULL ){
		Yii::info('Cron - actionDsr', 'cron');

		if( is_null( $dsr_key ) || Yii::$app->params[ 'dsr_key' ] != $dsr_key ) {

			Yii::info( 'DSR - trying to get page without or with wrong "dsr_key".', 'noexam' );
			throw new \yii\web\HttpException( 404 );
		}

		$session      = Yii::$app->session;
		$customer_data = CustomerData::find()->where( [ 'status' => 'new' ] )
		                             ->andWhere( 'updated < date_sub(now(), interval 7 minute)' )
		                             ->all();
		#VarDumper::dump($customer_data, 10, 1);
		if( is_array( $customer_data ) && count( $customer_data ) ){


			Yii::info( 'DSR - founded ' . count( $customer_data ) . ' records.', 'noexam' );

			foreach ( $customer_data as $key => $item ) {
				
				Yii::info( 'DSR - processing - ' . $key .' element.', 'noexam' );

				$json_decoded  = json_decode( $item->data, true );

				if( $json_decoded[ 'first_name' ] != '' && $json_decoded[ 'last_name' ] != ''  && $json_decoded[ 'email' ] != '' && $json_decoded[ 'phone_number' ] != '' ){

					// if(  $json_decoded[ 'premium_amount' ] < 700 && ( empty( $json_decoded[ 'street_address' ] ) || !array_key_exists('street_address', $json_decoded) ) ){
						
/*						Yii::info( 'DSR - sending data to Velocify.', 'noexam' );
						$velocify_result = $this->createVelocifyRecord( $json_decoded );

						if( $velocify_result ){

							$customer_data[ $key ]->status = 'velocify';
							Yii::info( 'DSR - sending data to Velocify.', 'noexam' );

						}else{

							$customer_data[ $key ]->status = 'velocify-wrongdata';

						}

						$customer_data[ $key ]->scenario = CustomerData::SCENARIO_DSR;
						if( $customer_data[ $key ]->save() ){

							Yii::info( 'DSR - record ' . $customer_data[ $key ]->id . '  marked as ' . $customer_data[ $key ]->status, 'noexam' );
						
						}
					*/
					// }else{


						Yii::info( 'DSR - sending data to SF.', 'noexam' );

						

						$search_result = $this->searchSFLead( $json_decoded );

						if( is_array( $search_result ) ){ 

							Yii::info( 'DSR - updating lead with existing email --- ' . $json_decoded[ 'email' ], 'noexam' );
							
							$completed = $this->getSFLeadField( $search_result[ 'id' ], 'Completed_Application__c' );
							$completed = $completed['records'][0]['Completed_Application__c'];
							
							if( 'Yes' == $completed){

								$json_decoded['Updated_Lead_to_App'] = 'Yes';
							}

							$lead_result = $this->updateSFLead( $search_result[ 'id' ], $json_decoded, $item->sid);

							if( $lead_result ){
								$dsr_status = 'dsrsfupdated';
								Yii::info( 'Lead --- ' . $search_result[ 'id' ] . ' --- successfuly updated.', 'noexam' );
							
							}else{

								Yii::info( 'Lead --- ' . $search_result[ 'id' ] . ' --- didn\'t updated.', 'noexam' );
							
							}

						}else{

							$search_result = $this->searchSFLead( $json_decoded, 'email' );
							
							if( is_array( $search_result ) ){

								$random_int = random_int( 10000, 99999);
								preg_match_all( "/^(?<user>[\w.']+)@(?<domain>[\w.']+)/", $json_decoded[ 'email' ], $email_match, PREG_SET_ORDER );
								$parsed_email = $email_match[0][ 'user' ] . '+' . $random_int . '@' . $email_match[0][ 'domain' ];

								$json_decoded[ 'email' ] = $parsed_email;
								Yii::info( 'DSR - creating lead with special email --- ' . $json_decoded[ 'email' ], 'noexam' );
								$lead_result = $this->createSFLead( $json_decoded, $item->sid );
								$dsr_status = 'dsrsfupdated-special';

							
							}else{
								Yii::info( 'DSR - creating new lead.', 'noexam' );
								$lead_result = $this->createSFLead( $json_decoded, $item->sid );
								$dsr_status = 'dsrsf';
							
							}
						
						}


						if( !$lead_result ){

							Yii::info( 'DSR - lead hasn\'t created.', 'noexam' );
							$customer_data[ $key ]->status = 'dsrerror';
							$customer_data[ $key ]->scenario = CustomerData::SCENARIO_DSR;
							if( $customer_data[ $key ]->save() ){

								Yii::info( 'DSR - record ' . $customer_data[ $key ]->id . '  marked as ' . $customer_data[ $key ]->status, 'noexam' );
							
							}

						}else{

							$customer_data[ $key ]->status = $dsr_status;
							$customer_data[ $key ]->scenario = CustomerData::SCENARIO_DSR;
							if( $customer_data[ $key ]->save() ){

								Yii::info( 'DSR - record ' . $customer_data[ $key ]->id . '  marked as ' . $customer_data[ $key ]->status, 'noexam' );
							
							}

						}

					// }

				}else{

					Yii::info( 'DSR - one of required elemets is empty.', 'noexam' );
					$customer_data[ $key ]->status = 'wrongdata';
					$customer_data[ $key ]->scenario = CustomerData::SCENARIO_DSR;
					if( $customer_data[ $key ]->save() ){

						Yii::info( 'DSR - record ' . $customer_data[ $key ]->id . '  marked as ' . $customer_data[ $key ]->status, 'noexam' );
					
					}
				}

			}

		}else{

			Yii::info( 'DSR - customer data is not array or in array 0 elements.', 'noexam' );
		}



	}

	public function actionTestvel(){

		$session      = Yii::$app->session;
		$cookies = Yii::$app->response->cookies;
		$customer_data = CustomerData::find()->where(['sid' => $session->id])->one();
		
		
		$decoded = json_decode( $customer_data->data, true );

		$velocify_result = $this->createVelocifyRecord( $decoded );
	}

	public function actionTestNq(){
		$Client = Yii::$app->NQClient;

		$data = $Client->get_quotes();

		VarDumper::dump($data, 10, 1);
	}

	public function actionTestHl(){
		$Client = Yii::$app->HLClient;

		$data = $Client->get_quotes();

		VarDumper::dump($data, 10, 1);
	}

	public function actionTestLp(){
		$Client = Yii::$app->LPClient;
		$args = [
            'smoker' => false,
            'avarage_amount' => 400,
            'term_length' => 15,
            'health_rating' => 5,
            'h_foot' => 5,
            'h_inch' => 9,
            'weight' => 200,
            'sex' => 'male',
            'age' => 43,
            'igonre_get_params' => true,
		];
		$data = $Client->get_quotes($args);

		VarDumper::dump($data, 10, 1);
	}

	public function actionTestEt(){
		$Client = Yii::$app->ETClient;
		$args = [
            'smoker' => false,
            'avarage_amount' => 500,
            'term_length' => 15,
            'health_rating' => 5,
            'h_foot' => 5,
            'h_inch' => 9,
            'weight' => 200,
            'sex' => 'male',
            'age' => 43,
            'igonre_get_params' => true,
		];
		$data = $Client->get_quotes($args);

		VarDumper::dump($data, 10, 1);
	}

	public function actionTestdbga(){

		$params = [

			"source_id" =>'9d119bab-c348-44fe-8f40-4dc5d80224c6',
			"first_name" =>'Test',
			"last_name" =>'LTest',
			"state" =>'LA',
			"email" =>'test@test.com',
			"phone1" =>'1234567890',
			"gender" =>'male',
			"rate_class" =>'PP',
			"birthdate" =>'1965-07-24',
			"company_name" =>'Sagicor Life Insurance Company',
			"product_name" =>'Sage Term',
			"annual_premium" =>'1111.22',
			"monthly_premium" =>'123.54',
			"tobacco_use" =>'true',
			"coverage" =>'700000',
			"term" =>'20'

		];

		$DBGAClient = Yii::$app->DigitalBGA;
		$DBGAClient->add_params( $params );
		$result = $DBGAClient->push();

		if( $DBGAClient->has_error() ){
			var_dump($DBGAClient->get_error());
		}else{
			var_dump($DBGAClient->get_result());
		}

	}

	public function actionCrontest($type = null){
		Yii::info('Cron - actionCrontest - '.$type, 'cron');
		file_put_contents($_SERVER['DOCUMENT_ROOT'].'/log.txt', 'Cron - actionCrontest - '.$type, FILE_APPEND);
	}

	/**
	 * временные методы
	 */
	public function actionTempFillGuessResult($limit = 1){
		return;
		$model = CustomerData::find()->where(["!=", "guess_price", 0])->andWhere(["guess_result" => null])->limit($limit)->all();

		if(!empty($model)){
			foreach($model as $entry){
				VarDumper::dump($entry->id, 10, 1);
				$data = json_decode($entry->data, true);
				$data['igonre_get_params'] = true;
				#VarDumper::dump($data, 10, 1);
				$RateCalcAPIsData = $this->getRateCalcAPIsData($data);
				#VarDumper::dump($RateCalcAPIsData, 10, 1);

				$avg_price = round($RateCalcAPIsData['plans']['avg_price']);
				//$entry->data = json_encode($data);
				//VarDumper::dump($entry->data, 10, 1);
				if($entry->guess_price > $avg_price){
					//$entry->guess_result = 'high';
					$entry->updateAttributes(['guess_result' => 'high']);
				}elseif($entry->guess_price < $avg_price){
					//$entry->guess_result = 'low';
					$entry->updateAttributes(['guess_result' => 'low']);
				}else{
					//$entry->guess_result = 'correct';
					$entry->updateAttributes(['guess_result' => 'correct']);
				}
				//$entry->scenario = CustomerData::SCENARIO_RATE_CALC;
				//$entry->save(false);
				//VarDumper::dump($entry, 10, 1);

				VarDumper::dump($avg_price, 10, 1);
				//VarDumper::dump($RateCalcAPIsData['apis_data']['LP'], 10, 1);
			}
		}

	}

	public function actionTempFillCustomerData($limit = 1){
		return;
		$y = date('Y');
		$genders = ['m', 'f'];

		$model = CustomerData::find()->where("data LIKE '%\"age\":null%'")->limit($limit)->all();
		#VarDumper::dump($model, 10, 1);

		if(!empty($model)){
			foreach($model as $entry){
				VarDumper::dump($entry->id, 10, 1);
				$data = json_decode($entry->data, true);

				if(is_null($data['age'])){
					if(isset($data['birthday'])){
						$data['age'] = $y - intval(date('Y', strtotime($data['birthday'])));
					}else{
						$data['age'] = rand(21, 75);
					}
				}
				if(is_null($data['term_length'])){
					if(isset($data['term'])){
						$data['term_length'] = $data['term'];
					}else{
						$data['term_length'] = array_rand(CustomerData::$term_lengths3);
					}
				}
				if(is_null($data['sex'])){
					$data['sex'] = $genders[array_rand($genders)];
				}
				if(is_null($data['avg_amount'])){
					$data['avg_amount'] = CustomerData::$avg_amounts2[array_rand(CustomerData::$avg_amounts2)] / 1000;
				}
				if(is_null($data['health'])){
					$data['health'] = array_rand(CustomerData::$healths);
				}
				VarDumper::dump($data, 10, 1);

				$entry->updateAttributes(['data' => json_encode($data)]);

			}
		}

	}

	public function actionRemoveDuplicateStatisticData(){
		$this->layout = "autorefresh";

		return $this->render('temp', ['content' => $this->removeDuplicateStatisticData()]);
	}

}
