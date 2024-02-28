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
$this->params['breadcrumbs'][] = ['label' => 'Companies', 'url' => '/life-insurance/companies/'];
$this->params['breadcrumbs'][] = $this->context->current_cat->title;
?>
<div class="page-content page-wrapper trans_all">


	<!-- START PAGE-CONTENT -->
	<section class="page">
		<h1>Metlife vs Transamerica Life Insurance</h1>
		<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>

		<div class="content">
      Comparing Metlife and Transamerica side by side before buying a policy is a great idea. Here we have compiled stats on each company in an easy to read side by side format. You can see how Transamerica and Metlife stack up against each other. They are both great companies with a wide choice of products. If you have narrowed your life insurance options down to these two you are doing great. Both companies have considerable assets and life insurance in-force. They both maintain strong financial ratings. One thing that struck me as off was these companies BBB ratings. Our hope is that this information helps you to make a more informed decision on life insurance.</p>
<div style="align-items: center;"><img src="../../../img/transamerica.png" alt="transamerica" width="150" height="50" />      <img src="../../../img/metlife-1-300x183.jpg" alt="metlife logo" width="300" height="183" /></div>

<h2>Metlife vs Transamerica General Info</h2>

<table id="tablepress-99" class="tablepress tablepress-id-99">
<thead>
<tr class="row-1 odd">
	<th class="column-1">&nbsp;</th><th class="column-2">Metlife</th><th class="column-3">Transamerica</th>
</tr>
</thead>
<tbody class="row-hover">
<tr class="row-2 even">
	<td class="column-1">Address</td><td class="column-2">MetLife Building<br />
New York, New York, U.S.</td><td class="column-3">4333 Edgewood Road NE, Cedar Rapids, IA 52499</td>
</tr>
<tr class="row-3 odd">
	<td class="column-1">Phone Number</td><td class="column-2">1-800-METLIFE</td><td class="column-3">800-797-2643 </td>
</tr>
<tr class="row-4 even">
	<td class="column-1">Website</td><td class="column-2">https://www.metlife.com/</td><td class="column-3">https://www.transamerica.com</td>
</tr>
<tr class="row-5 odd">
	<td class="column-1">Year Founded</td><td class="column-2">1868</td><td class="column-3">1928</td>
</tr>
<tr class="row-6 even">
	<td class="column-1">Current CEO</td><td class="column-2">Steven A. Kandarian</td><td class="column-3">Mark W. Mullin</td>
</tr>
</tbody>
</table>
<!-- #tablepress-99 from cache -->
<h2>Metlife vs Transamerica Financial Ratings</h2>

<table id="tablepress-100" class="tablepress tablepress-id-100">
<thead>
<tr class="row-1 odd">
	<th class="column-1">&nbsp;</th><th class="column-2">Metlife</th><th class="column-3">Transamerica</th>
</tr>
</thead>
<tbody class="row-hover">
<tr class="row-2 even">
	<td class="column-1">JD Power</td><td class="column-2">812</td><td class="column-3">N/A</td>
</tr>
<tr class="row-3 odd">
	<td class="column-1">BBB</td><td class="column-2">C-</td><td class="column-3">B</td>
</tr>
<tr class="row-4 even">
	<td class="column-1">AM Best</td><td class="column-2">A+</td><td class="column-3">A+</td>
</tr>
<tr class="row-5 odd">
	<td class="column-1">Moody's</td><td class="column-2">Aa3</td><td class="column-3">A1</td>
</tr>
<tr class="row-6 even">
	<td class="column-1">Fitch</td><td class="column-2">AA-</td><td class="column-3">A+</td>
</tr>
<tr class="row-7 odd">
	<td class="column-1">Standard &amp; Poor</td><td class="column-2">AA-</td><td class="column-3">AA-</td>
</tr>
<tr class="row-8 even">
	<td class="column-1">Comdex Score</td><td class="column-2">95</td><td class="column-3">N/A</td>
</tr>
</tbody>
</table>
<!-- #tablepress-100 from cache -->
<h2>Metlife vs Transamerica Financial Status</h2>

<table id="tablepress-101" class="tablepress tablepress-id-101">
<thead>
<tr class="row-1 odd">
	<th class="column-1">&nbsp;</th><th class="column-2">Metlife</th><th class="column-3">Transamerica</th>
</tr>
</thead>
<tbody class="row-hover">
<tr class="row-2 even">
	<td class="column-1">Total Assets</td><td class="column-2">$719.892 Billion</td><td class="column-3">$125.308 Billion</td>
</tr>
<tr class="row-3 odd">
	<td class="column-1">Life Insurance In Force</td><td class="column-2">$4,594,523 Million</td><td class="column-3">$1,018 Billion (2017)</td>
</tr>
</tbody>
</table>
<!-- #tablepress-101 from cache -->
<h2>Metlife vs Transamerica Products Offered</h2>

<table id="tablepress-102" class="tablepress tablepress-id-102">
<thead>
<tr class="row-1 odd">
	<th class="column-1">&nbsp;</th><th class="column-2">Metlife</th><th class="column-3">Transamerica</th>
</tr>
</thead>
<tbody class="row-hover">
<tr class="row-2 even">
	<td class="column-1">Types of Life Insurance</td><td class="column-2">Term Life Insurance<br />
Whole Life Insurance<br />
Universal Life Insurance<br />
Accidental Death and Dismemberment</td><td class="column-3">Whole life insurance<br />
Term life insurance<br />
Universal life insurance<br />
Variable Universal life insurance </td>
</tr>
<tr class="row-3 odd">
	<td class="column-1">Products Offered</td><td class="column-2">Basic Term Life <br />
Supplemental Life<br />
Dependent Life<br />
Voluntary Retiree Life<br />
Whole life insurance<br />
Group Variable Universal Life (GVUL)<br />
Group Universal Life (GUL)<br />
Basic Accidental Death &amp; Dismemberment (AD&amp;D)<br />
Supplemental AD&amp;D<br />
Dependent AD&amp;D<br />
Voluntary AD&amp;D<br />
Business Travel Accident (BTA)</td><td class="column-3">Trendsetter Super<br />
Trendsetter Express<br />
Trendsetter Living Benefits<br />
Transamerica Universal Life<br />
Transamerica Premier Financial Foundation IUL<br />
Guaranteed Whole Life<br />
</td>
</tr>
<tr class="row-4 even">
	<td class="column-1">Riders Available</td><td class="column-2">Accelerated Death Benefit Rider</td><td class="column-3">Children’s Insurance Rider<br />
Accident Indemnity Rider<br />
Return of Premium Rider (For 20- &amp; 30-Year Terms)<br />
Waiver of Premium Rider<br />
Guaranteed Insurability Benefit Rider<br />
</td>
</tr>
<tr class="row-5 odd">
	<td class="column-1">States</td><td class="column-2">50</td><td class="column-3">49</td>
</tr>
</tbody>
</table>
<!-- #tablepress-102 from cache -->
<h2>Metlife vs Transamerica Overall</h2>

<table id="tablepress-103" class="tablepress tablepress-id-103">
<thead>
<tr class="row-1 odd">
	<th class="column-1">&nbsp;</th><th class="column-2">Metlife</th><th class="column-3">Transamerica</th>
</tr>
</thead>
<tbody class="row-hover">
<tr class="row-2 even">
	<td class="column-1">Top Awards</td><td class="column-2">Best Place to Work for Disability Inclusion<br />
America's Top 50 Organizations for Multicultural Business Opportunities<br />
Best Customer Experience, Product or Service Innovation with Cogito — Real Time Customer Service Coaching</td><td class="column-3">Diversity Best Practices Inclusion Index<br />
2018 Thomson Reuters Lipper Fund Award</td>
</tr>
<tr class="row-3 odd">
	<td class="column-1">Pro's</td><td class="column-2">High Security<br />
Policy Variety<br />
Additional Insurance Coverage Options</td><td class="column-3">Financially secure<br />
Competitive life insurance products<br />
Variety of products available</td>
</tr>
<tr class="row-4 even">
	<td class="column-1">Con's</td><td class="column-2">No Online Application<br />
Major Class Action Lawsuits</td><td class="column-3">Some insureds have complained of having to deal with third-party representatives instead of direct sales agents.<br />
B BBB rating</td>
</tr>
</tbody>
</table>
<!-- #tablepress-103 from cache -->
<p>Disclaimer: We make every attempt to make sure our information is up to date, but since thing change often it is best to double check the data. This review is an opinion.</p>
		</div>
		<h2>Related Articles</h2>
			<?=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]); ?>
	</section>
	<!-- END PAGE-CONTENT -->

</div>
