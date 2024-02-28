<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<section class="comparison-result">

	<header>
		<div class="title">Protective vs. MetLife</div>
		<div class="desc">Protective and Metlife are two of the largest life insurance companies in existence today. If you are looking to compare these two life insurance companies, you are in the right place. We have gathered all the data necessary to compare these companies side by side. Our hope is that this information helps you to make a more informed decision when buying life insurance.</div>
		<ul class="short-links hidden visible-xs">
			<li><a href="#at-a-glance">At a glance</li>
			<li><a href="#financial-ratings">Financial Ratings</li>
			<li><a href="#financial-status">Financial Status</li>
			<li><a href="#types-of-insurance">Types of Insurance</li>
			<li><a href="#products-offered">Products Offered</li>
			<li><a href="#riders-available">Riders Available</li>
		</ul>
	</header>

	<main id="at-a-glance">
		<div class="row">

			<div class="col-xs-6 col-left">
				<?=$this->render('/main/resources/_comparison/companies/protective.php');?>
			</div>

			<div class="vs"></div>

			<div class="col-xs-6 col-right">
				<?=$this->render('/main/resources/_comparison/companies/metlife.php');?>
			</div>

		</div>
	</main>

	<footer>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

			<div id="financial-ratings" class="panel item">
				<div class="list-header" role="tab" id="heading_1">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_1" aria-expanded="false" aria-controls="collapse_1">Financial Ratings</a>
				</div>
				<div id="collapse_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_1">
					<div class="list-detail">
						<table class="table">
							<thead>
								<tr>
									<th width="100%">SOURCE</th>
									<th><img src="/img/logo_protective.png"></th>
									<th><img src="/img/logo_metlife.png"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>JD Power</td>
									<td class="b g">774</td>
									<td class="b g">812</td>
								</tr>
								<tr>
									<td>BBB</td>
									<td class="b g">A+</td>
									<td class="b g">C-</td>
								</tr>
								<tr>
									<td>AM Best</td>
									<td class="b g">A+</td>
									<td class="b g">A+</td>
								</tr>
								<tr>
									<td>Moody's</td>
									<td class="b g">A1</td>
									<td class="b g">Aa3</td>
								</tr>
								<tr>
									<td>Fitch</td>
									<td class="b g">A+</td>
									<td class="b g">AA-</td>
								</tr>
								<tr>
									<td>Standard & Poor</td>
									<td class="b g">AA-</td>
									<td class="b g">AA-</td>
								</tr>
								<tr>
									<td>Comdex Score</td>
									<td class="b g">92</td>
									<td class="b g">95</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div id="financial-status" class="panel item">
				<div class="list-header" role="tab" id="heading_2">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_2" aria-expanded="false" aria-controls="collapse_2">Financial Status</a>
				</div>
				<div id="collapse_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_2">
					<div class="list-detail">
						<table class="table">
							<thead>
								<tr>
									<th>SOURCE</th>
									<th><img src="/img/logo_protective.png"></th>
									<th><img src="/img/logo_metlife.png"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Total Assets</td>
									<td class="b">$75 Billion USD (2016)</td>
									<td class="b">$719.892 Billion</td>
								</tr>
								<tr>
									<td>Life Insurance in Force</td>
									<td class="b">$767.3 Billion</td>
									<td class="b">$4,594,523 Million</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div id="types-of-insurance" class="panel item">
				<div class="list-header" role="tab" id="heading_3">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_3" aria-expanded="false" aria-controls="collapse_3">Types of Insurance</a>
				</div>
				<div id="collapse_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_3">
					<div class="list-detail">
						<table class="table">
							<thead>
								<tr>
									<th width="100%">SOURCE</th>
									<th><img src="/img/logo_protective.png"></th>
									<th><img src="/img/logo_metlife.png"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Products Offered</td>
									<td class="b">--</td>
									<td class="b">--</td>
										<td class="b">Protective Custom Choice UL </td>
										<td class="b">Protective Advantage Choice UL</td>
										<td class="b">Protective Indexed Choice UL</td>
										<td class="b">Protective Classic Choice Term</td>
										<td class="b">Protective One Year Term </td>
										<td class="b">ProClassic II </td>
										<td class="b">ProClassic Legacy</td>
										<td class="b">Investors Choice VUL </td>
										<td class="b">Strategic Objective VUL</td>
										<td class="b">Survivorship Term </td>
										<td class="b">Survior UL</td>
										<td class="b">Protective Whole Life</td>
								</tr>
								<tr>
									<td>--</td>
									<td class="b">--</td>
									<td class="b">--</td>
								</tr>
								<tr>
									<td>--</td>
									<td class="b">--</td>
									<td class="b">--</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div id="products-offered" class="panel item">
				<div class="list-header" role="tab" id="heading_4">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_4" aria-expanded="false" aria-controls="collapse_4">Products Offered</a>
				</div>
				<div id="collapse_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_4">
					<div class="list-detail">
						<table class="table">
							<thead>
								<tr>
									<th width="40%">SOURCE</th>
									<th width="30%" class="l"><img src="/img/logo_protective.png"></th>
									<th width="30%" class="l"><img src="/img/logo_metlife.png"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="t">Types of Life Insurance</td>
									<td class="t l">
										<ul>
											<li>Term Life Insurance</li>
											<li>Whole Life Insurance</li>
											<li>Universal Life Insurance</li>
											<li>Variable Universal Life Insurance</li>
											<li>Indexed Universal Life Insurance</li>
											<li>Survivorship Universal Life Insurance</li>
											<li>Life Insurance for Children</li>
										</ul>
									</td>
									<td class="t l">
										<ul>
											<li>Term Life Insurance</li>
											<li>Whole Life Insurance</li>
											<li>Universal Life Insurance</li>
											<li>Accidental Death and Dismemberment</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>--</td>
									<td class="b">--</td>
									<td class="b">--</td>
								</tr>
								<tr>
									<td>--</td>
									<td class="b">--</td>
									<td class="b">--</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div id="riders-available" class="panel item">
				<div class="list-header" role="tab" id="heading_5">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_5" aria-expanded="false" aria-controls="collapse_5">Riders Available</a>
				</div>
				<div id="collapse_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_5">
					<div class="list-detail">
						<table class="table">
							<thead>
							<tr>
								<th width="100%">SOURCE</th>
								<th><img src="/img/logo_protective.png"></th>
								<th><img src="/img/logo_metlife.png"></th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>--</td>
								<td class="b">--</td>
								<td class="b">--</td>
							</tr>
							<tr>
								<td>--</td>
								<td class="b">--</td>
								<td class="b">--</td>
							</tr>
							<tr>
								<td>--</td>
								<td class="b">--</td>
								<td class="b">--</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
	</footer>

</section>
