<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\VarDumper;

AppAsset::register($this);

?>
<?php $this->beginPage();?>
<?=$this->render('header'); ?>

<body class="<?=Yii::$app->controller->getBodyClasses();?>">
	<?php $this->beginBody();?>
	<?=$this->render('body-google-tag');?>
	<div class="wrapper-main">
		<?php include "nav-top-main.php";?>
	    <!-- <div class="container"> -->
	        <?=Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []]);?>
	        <?=$content;?>
	    <!-- </div> -->
	</div>

	<!-- <footer class="footer">
	    <div class="container">
	        <p class="pull-left">&copy; My Company <?=date('Y');?></p>

	        <p class="pull-right"><?=Yii::powered();?></p>
	    </div>
	</footer> -->

	<footer class="container-fluid main">
		<div class="row">
			<div class="col-md-12 text-center">
				<span>Copyright © <?=date('Y');?> NoExam</span>
				<span class="sep">|</span>
				<a href="/privacy/">Privacy Policy</a>
				<span class="sep"></span>

			</div>
		</div>
	</footer>

	<?php $this->endBody();?>
</body>

<?=$this->render('footer'); ?>
<?php $this->endPage();?>
