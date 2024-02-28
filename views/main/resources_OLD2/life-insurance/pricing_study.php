<?php

use yii\web\View;
use yii\widgets\Breadcrumbs;
use sjaakp\gcharts\PieChart;

if(!empty($this->context->current_cat->meta_desc)){
	$this->registerMetaTag(['name' => 'description', 'content' => $this->context->current_cat->meta_desc]);
}
if(!empty($this->context->current_cat->meta_keys)){
	$this->registerMetaTag(['name' => 'keywords', 'content' => $this->context->current_cat->meta_keys]);
}
if(!empty($this->context->current_cat->meta_title)){
	$this->title = $this->context->current_cat->meta_title;
}else{
	$this->title = $this->context->current_cat->title;
}
//$this->params['breadcrumbs'][] = ['label' => 'Life Insurance', 'url' => '/life-insurance/'];
//$this->params['breadcrumbs'][] = ['label' => 'Term Life Insurance', 'url' => '/life-insurance/term/'];
//$this->params['breadcrumbs'][] = $this->context->current_cat->title;
//$this->registerJS('jQuery(document).ready(function($) { RESPONSIVEUI.responsiveTabs(); });', View::POS_END, 'responsive-tab-js');



?>
<div class="page-content page-wrapper trans_all">

	<?=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]);?>

	<!-- START PAGE-CONTENT -->
	<section class="page">
		<h1>Life Insurance Pricing Study</h1>
		<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>

		<div class="content">
			<p>Published <?=date('F jS, Y', strtotime($this->context->current_cat->updated));?></p>

			<?php //=$this->render('/main/widgets/statistic-participants-count.php');?>

			<?=$this->render('/main/widgets/statistic-guessed-prices.php');?>



			<div class="row mt-5">
				<div class="col-sm-8 col-sm-push-2 text-center pb-5">
					<h2>Overall Price Increases Ages 20 -70</h2>
					<?=$this->render('/main/widgets/statistic-prices.php', ['data_type' => 'overall', 'by' => 'age_price']);?>
				</div>
			</div>
			<hr>
			<div class="row">
				<h2 class="text-center">Overall Prices by Generations</h2>
				<?=$this->render('/main/widgets/statistic-prices.php', ['data_type' => 'overall', 'by' => 'generation', 'for' => ['GenZ', 'Millennials', 'GenerationX', 'BabyBoomers']]);?>
			</div>
			<hr>
			<div class="row mt-5">
				<div class="col-sm-6 col-sm-push-3 text-center pb-5">
					<h2 class="text-center">Summarizing Statistics</h2>
					<?=$this->render('/main/widgets/statistic-summarizing.php', ['age_diapasons' => ['20-30', '30-40', '40-50', '50-60'], 'variant' => 1]);?>
					<? //=$this->render('/main/widgets/statistic-summarizing.php', ['age_diapasons' => ['20-30', '30-40', '40-50', '50-60'], 'variant' => 2]);?>
				</div>
			</div>
			<hr>
			<div class="row mt-5">
				<div class="col-sm-8 col-sm-push-2 text-center pb-5">
					<h2 class="text-center">Chart to show coverage amount selected vs age. Ages 20 -70</h2>
					<?=$this->render('/main/widgets/statistic-prices.php', ['data_type' => 'overall', 'by' => 'age_coverage']);?>
				</div>
			</div>
			<hr>
			<div class="row mt-5">
				<div class="col-sm-8 col-sm-push-2 text-center pb-5">
					<h2 class="text-center">Chart to show term length selected vs age. Ages 20 -70</h2>
					<?=$this->render('/main/widgets/statistic-prices.php', ['data_type' => 'overall', 'by' => 'age_term']);?>
				</div>
			</div>
			<hr>
			<div class="row mt-5">
				<div class="col-sm-8 col-sm-push-2 text-center pb-5">
					<h2 class="text-center">Chart to show health rating vs age. Ages 20 -70</h2>
					<?=$this->render('/main/widgets/statistic-prices.php', ['data_type' => 'counts', 'by' => 'age_health']);?>
				</div>
			</div>
	</section>
	<!-- END PAGE-CONTENT -->

</div>
<?=$this->render('/main/widgets/bio-jonathan-holloway.php'); //Bio Embed Code?>
