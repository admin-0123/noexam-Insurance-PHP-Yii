<?php

use yii\widgets\Breadcrumbs;

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
$this->params['breadcrumbs'][] = ['label' => 'Life Insurance', 'url' => '/life-insurance/'];
$this->params['breadcrumbs'][] = $this->context->current_cat->title;
?>
<div class="page-content page-wrapper trans_all">

	<?php //=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]);?>

	<!-- START PAGE-CONTENT -->
	<section class="page">
		<aside>
			<div class="sticky-block">
				<h2>Jump to a section</h2>
				<ul>
					<li><a href="#term">Term</a></li>
					<li><a href="#increasing">Increasing Term</a></li>
					<li><a href="#decreasing">Decreasing Term</a></li>
					<li><a href="#renewable">Annual Renewable Term</a></li>
					<li><a href="#returnofpremium">Return of Premium</a></li>
					<li><a href="#permanent">Permanent Life Insurance</a></li>
					<li><a href="#whole">Whole Life Insurance</a></li>
					<li><a href="#universal">Universal</a></li>
					<li><a href="#indexed">Indexed Universal</a></li>
					<li><a href="#variable">Variable Life Insurance</a></li>
					<li><a href="#variableuniversal">Variable Universal Life Insurance</a></li>
					<li><a href="#simplifiedissue">Simplified Issue Life Insurance</a></li>
					<li><a href="#guaranteedissue">Guaranteed Issue Life Insurance</a></li>
					<li><a href="#finalexpense">Final Expense</a></li>
				</ul>
			</div>
		</aside>

		<article class="content">
			<h1>Types of Life Insurance Explained</h1>
			<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>

			<?=$this->render('/main/widgets/authors-small.php', ['updated' => date('F j, Y', filemtime(__FILE__))]);?>

			<p>Life insurance is undoubtedly one of the best ways to safeguard the financial interests of your loved ones in your absence. But with all of the different types of life insurance, where do you begin?</p>

		</article>
	</section>
	<!-- END PAGE-CONTENT -->

	<section class="related-articles">
		<?=$this->render('/main/widgets/related-articles.php');?>
	</section>

</div>
<?=$this->render('/main/widgets/bio-jonathan-holloway.php'); //Bio Embed Code?>
