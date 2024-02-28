<?php
use himiklab\yii2\recaptcha\ReCaptcha3;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\VarDumper;
?>
<div class="rates-form applyrate-form-section widget <?=$position;?>" style="width:<?=$width;?>;">
	<?php $form = ActiveForm::begin(['id' => 'applyrate-form', 'action' => '/post/', 'options' => ['class' => 'rates-form__form'], 'fieldConfig' => ['options' => ['tag' => false]]]);?>
	<?=$form->field($customer_data, 'form_name')->hiddenInput(['value' => 'applyrate', 'id' => ''])->label(false);?>
	<?=$form->field($customer_data, 'redirect')->hiddenInput(['value' => $redirect, 'id' => ''])->label(false);?>	
	<?php
		unset($customer_data::$term_lengths['rt']);
	?>
	<?php if($display_title):?>
		<h2 class="rates-form__title heading-6"><?=$title;?></h2>
	<?php endif;?>

	<div class="row rates-form__row">
		<div class="col-12 col-md-6 col-lg-6 rates-form__label d-flex flex-column">
			<label for="term"><span class="tags">Term Length</span></label>
			<?=$form->field($customer_data, 'term_length')->dropDownList($customer_data::$term_lengths, [
				'required' => 'required',
				'class' => 'rates-form__select js_selectpicker',
				'id' => 'js_term_length',
				'data-style' => 'btn-light',
				'data-mobile' => (string)$isMobile,
				'data-trigger' => 'js_action_change',
				'data-action' => 'change_term_length',
				'data-target' => '#an_avarage_amount',
				'options' => ['10' => ['selected' => 'selected']]
			])->label(false);?>
		</div>

		<div class="col-12 col-md-6 col-lg-6 rates-form__label d-flex flex-column">
			<label for="amount"><span class="tags">Coverage amount</span></label>
			<?=$form->field($customer_data, 'avg_amount')->dropDownList($customer_data::$avg_amounts, [
				'required' => 'required',
				'class' => 'rates-form__select js_selectpicker',
				'id' => 'an_avarage_amount',
				'data-style' => 'btn-light',
				'data-mobile' => (string)$isMobile,
				'options' => ['250' => ['selected' => 'selected']]
			])->label(false);?>
		</div>

		<div class="col-6 col-md-3 col-lg-3 rates-form__label pair-item-left d-flex flex-column">
			<label for="state"><span class="tags">State</span></label>
			<?=$form->field($customer_data, 'state')->dropDownList($customer_data::$states_short, [
				'required' => 'required',
				'class' => 'js_selectpicker show-tick online-app-step-1__select online-app-step-1__label--state',
				'id' => 'state',
				'data-dropup-auto' => true,
				'data-live-search' => 'true',
				'data-style' => '',
				'data-size' => 5,
				'data-title' => 'Select state',
				'data-mobile' => (string)$isMobile,
				#'data-header' => 'Select state',
				'options' => Yii::$app->Helpers->createDropdownOptionsSubtext($customer_data::$states)
			])->label(false)->error(false);?>
		</div>

		<label class="col-6 col-md-3 col-lg-3 rates-form__label pair-item-right d-flex flex-column">
			<span class="tags">Age</span>
			<?=$form->field($customer_data, 'age')->textInput(['required' => 'required', 'class' => 'rates-form__input fontBodyM', 'placeholder' => 'Your age', 'autocomplete' => 'on', 'autofocus' => false])->label(false);?>
		</label>

		<div class="col-12 col-md-6 col-lg-6 rates-form__label d-flex flex-column">
			<label for="tobacco"><span class="tags">Do you use tobacco?</span></label>
			<?=$form->field($customer_data, 'tobaco')->dropDownList(['0' => 'No', '1' => 'Yes'], ['required' => 'required', 'class' => 'js_selectpicker rates-form__select', 'id' => 'tobaco', 'data-style' => 'btn-light', 'data-title' => '-', 'data-mobile' => (string)$isMobile])->label(false);?>
		</div>
	</div>

	<h2 class="rates-form__subtitle main-title">Contact Details</h2>
	<div class="row rates-form__row">
		<label class="col-12 col-md-6 col-lg-6 rates-form__label d-flex flex-column">
			<span class="tags">First Name</span>
			<?=$form->field($customer_data, 'first_name')->textInput(['required' => 'required', 'class' => 'rates-form__input fontBodyM', 'placeholder' => 'First Name', 'autocomplete' => 'on', 'autofocus' => false])->label(false);?>
		</label>
		<label class="col-12 col-md-6 col-lg-6 rates-form__label d-flex flex-column">
			<span class="tags">Last Name</span>
			<?=$form->field($customer_data, 'last_name')->textInput(['required' => 'required', 'class' => 'rates-form__input fontBodyM', 'placeholder' => 'Last Name', 'autocomplete' => 'on', 'autofocus' => false])->label(false);?>
		</label>
		<label class="col-12 col-md-6 col-lg-6 rates-form__label d-flex flex-column">
			<span class="tags">Email</span>
			<?=$form->field($customer_data, 'email')->input('email', ['required' => 'required', 'class' => 'rates-form__input fontBodyM', 'placeholder' => 'Email Address', 'autocomplete' => 'on', 'autofocus' => false])->label(false);?>
		</label>
		<label class="col-12 col-md-6 col-lg-6 rates-form__label d-flex flex-column">
			<span class="tags">Phone Number</span>
			<?=$form->field($customer_data, 'phone_number')->input('tel', ['required' => 'required', 'class' => 'rates-form__input fontBodyM phone-input', 'placeholder' => 'Phone Number', 'autocomplete' => 'on', 'autofocus' => false])->label(false);?>
		</label>
	</div>
	<?= $form->field($customer_data, 'reCaptcha')->widget(
    \himiklab\yii2\recaptcha\ReCaptcha3::class,
    [
			'name' => 'reCaptcha'
    ]
) ?>

	<div class="rates-form__decor-line"></div>

	<?=Html::submitButton('See My Quotes', [
		#'id' => 'submit_btn',
		'class' => 'rates-form__btn main-btn button-big',
		'data-trigger' => 'js_action_click',
		'data-action' => 'apply_rate_form_submit',
	]);?>

	<label class="col-12 rates-form_disclosure"><?=$disclosure; ?></label>
	<?php ActiveForm::end();?>
</div>
