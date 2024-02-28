<?php

use yii\helpers\VarDumper;

$max_date = Yii::$app->controller->get_bio_updated_date();
//VarDumper::dump($max_date, 10, 1);
?>
<section class="bio trans_all">
	<div class="avatar"></div>
	<div class="about">
		<div class="name">Jonathan Holloway</div>
		<div class="date"><?=$max_date;?></div>
		<div class="cont">Jonathan is a licensed life insurance agent at <a href="/">NoExam.com</a> that writes about insurance, personal finance, lifestyle, and sports. See our pages on <a href="/life-insurance/">life insurance</a>, <a href="/life-insurance/term/rates/">life insurance rates</a> and <a href="/life-insurance/burial-insurance/">burial insurance</a> for more.</div>
		<div class="ps">Disclaimer: We make every attempt to make sure our information is up to date, but since things change often it is best to double check the data. This review is an opinion.</div>
	</div>
</section>
