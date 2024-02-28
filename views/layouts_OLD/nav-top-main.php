<?php
use yii\bootstrap\Nav;

$nav_items = [
	['label' => 'Home', 'url' => ['/']],
	['label' => 'About', 'url' => ['/about/']],
	//['label' => 'Blog', 'url' => ['/main/test']],
	//['label' => 'No Exam Life Insurance', 'url' => ['https://noexam.staging.wpengine.com/companies/']],
	['label' => 'Resources', 'items' => [
		['label' => 'Life Insurance', 'url' => ['/life-insurance/']],
		['label' => 'Life Insurance Rates', 'url' => ['/life-insurance/term/rates/']],
		['label' => 'Life Insurance Companies', 'url' => ['/life-insurance/companies/']],
		['label' => 'Term Life Insurance', 'url' => ['/life-insurance/term/']],
		['label' => 'Whole Life Insurance', 'url' => ['/life-insurance/whole/']],
		['label' => 'Life Insurance for Seniors', 'url' => ['/life-insurance/seniors/']],
		['label' => 'Health Conditions', 'url' => ['/life-insurance/health-conditions/']],
	]],
	['label' => 'Get A Quote', 'url' => ['/apply-now/']],
];
?>
<nav class="header-nav">
	<div class="container navbar hidden-xs">
		<div class="row">
			<div class="col-md-2 col-sm-3 full-height">
				<div class="logo"></div>
			</div>
			<div class="col-md-8 col-sm-6 full-height text-center trans_all">
				<?=Nav::widget(['options' => ['class' => 'navbar-nav'], 'items' => $nav_items]);?>
			</div>
			<div class="col-md-2 col-xs-3 full-height">
				<div class="phone pull-right">888.407.0714</div>
			</div>
		</div>
	</div>

	<div class="noexam-logo center-block hidden-xs"></div>

	<div class="navbar-mobile hidden visible-xs">
		<div class="head">
			<div class="button"></div>
			<div class="logo"></div>
			<a href="#" class="q-mark" data-toggle="tooltip" data-placement="left" title="Please enter the information for the person who is applying for life insurance."></a>
		</div>
	</div>
</nav>
<div class="mob-menu trans_all">
	<div class="head">
		<div class="button"></div>
		<div class="logo"></div>
	</div>
	<?=Nav::widget(['options' => ['class' => 'navbar-nav'], 'items' => $nav_items]);?>
	<div class="phone">888.407.0714</div>
</div>
<div class="mob-overlay trans_me"></div>
