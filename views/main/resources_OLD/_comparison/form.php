<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\VarDumper;

$comparison_companies = [
	'aarp' => 'AARP Life Insurance',
	'aig' => 'AIG Life Insurance',
	'american-geneal' => 'American Geneal Life Insurance',
	'american-national' => 'American National Life Insurance',
	'banner' => 'Banner Life Insurance',
	'colonial-penn' => 'Colonial Penn Life Insurance',
	'globe' => 'Globe Life Insurance',
	'metlife' => 'MetLife Life Insurance',
	'mutual-of-omaha' => 'Mutual of Omaha Life Insurance',
	'sagicor' => 'Sagicor Life Insurance',
	'transamerica' => 'Transamerica Life Insurance',
	'protective' => 'Protective Life Insurance',
];
//$comparison_companies = array_chunk($comparison_companies, round(count($comparison_companies)/2), true);
//VarDumper::dump($comparison_companies, 10, 1);
?>
<section class="comparison-form">
	<div class="title">Let’s compare</div>
	<div class="desc">Make the most informed decision possible with side by side comparisons.</div>
	<?php $form = ActiveForm::begin([
		'enableAjaxValidation'   => false,
		'enableClientValidation' => false,
		'id'                     => 'compare-form',
		'action'                 => '',
		'method'                 => 'get',
		'options'                => ['class' => 'compare-form'],
	]); ?>
	<div class="fields-box">
		<div>I would like to compare</div>
		<div style="line-height: 1;">
			<?=Html::dropDownList('insurance_company1', '', $comparison_companies, ['class' => 'selectpicker', 'id' => 'insurance_company1', 'data-style' => 'btn-info', 'data-title' => 'Select a provider']);?>
		</div>
		with
		<?=Html::dropDownList('insurance_company2', '', $comparison_companies, ['class' => 'selectpicker', 'id' => 'insurance_company2', 'data-style' => 'btn-info', 'data-title' => 'Select a provider']);?>
	</div>
	<div class="button-box">
		<?=Html::submitButton('Compare', ['class' => 'btn btn-success']) ?>
	</div>
	<?php ActiveForm::end(); ?>
</section>
