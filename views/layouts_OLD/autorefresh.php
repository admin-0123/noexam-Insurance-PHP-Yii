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
<!DOCTYPE html>
<html lang="<?=Yii::$app->language;?>">
<head>
	<meta charset="<?=Yii::$app->charset;?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="refresh" content="9">
	<title><?=Html::encode($this->title);?></title>
	<?php $this->head();?>
</head>
<body>
	<div class="wrapper-main">
        <?=$content;?>
	</div>
</body>

<?=$this->render('footer'); ?>
<?php $this->endPage();?>
