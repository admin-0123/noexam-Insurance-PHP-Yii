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
		<h1>Banner vs AIG Life Insurance</h1>
		<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>

		<div class="content">
      <p>Two major players in the life insurance industry are Banner and AIG Life Insurance. We have gathered helpful data so that you can compare these two life insurance companies side by side. Our hope is that this helps you make the right choice of life insurance company. Maybe you have comparable quotes from Banner and AIG and would like to see which company is the better choice?</p>
  <p>You can&#8217;t go wrong with either company. They both have very strong financial ratings. AIG has more products to choose from while Banner is mostly term life insurance. Compare the companies and their offerings below.</p>
  <div style="align-items: center;"><img src="../../../img/banner-300x166.png" alt="Banner Life Insurance Review" width="300" height="166" />     <img src="../../../img/aig-life-insurance-review-300x159.jpg" alt="aig life insurance logo" width="300" height="159" /></div>

  <h2>Banner vs AIG General Info</h2>

  <table id="tablepress-94" class="tablepress tablepress-id-94">
  <thead>
  <tr class="row-1 odd">
  	<th class="column-1">&nbsp;</th><th class="column-2">Banner</th><th class="column-3">AIG</th>
  </tr>
  </thead>
  <tbody class="row-hover">
  <tr class="row-2 even">
  	<td class="column-1">Address</td><td class="column-2">3275 Bennett Creek Avenue<br />
  Frederick, MD 21704<br />
  United States</td><td class="column-3">AIG<br />
  PO Box 305355 <br />
  Nashville, TN 37230-5355 </td>
  </tr>
  <tr class="row-3 odd">
  	<td class="column-1">Phone Number</td><td class="column-2">301-279-4800</td><td class="column-3">800-888-2452</td>
  </tr>
  <tr class="row-4 even">
  	<td class="column-1">Website</td><td class="column-2">www.lgamerica.com</td><td class="column-3">www.aig.com</td>
  </tr>
  <tr class="row-5 odd">
  	<td class="column-1">Year Founded</td><td class="column-2">1949</td><td class="column-3">1919</td>
  </tr>
  <tr class="row-6 even">
  	<td class="column-1">Current CEO</td><td class="column-2">Bernard Leigh Hickman</td><td class="column-3">Brian Duperreault</td>
  </tr>
  </tbody>
  </table>
  <!-- #tablepress-94 from cache -->
  <h2>Banner vs AIG Financial Ratings</h2>

  <table id="tablepress-95" class="tablepress tablepress-id-95">
  <thead>
  <tr class="row-1 odd">
  	<th class="column-1">&nbsp;</th><th class="column-2">Banner</th><th class="column-3">AIG</th>
  </tr>
  </thead>
  <tbody class="row-hover">
  <tr class="row-2 even">
  	<td class="column-1">JD Power</td><td class="column-2">N/A</td><td class="column-3">N/A</td>
  </tr>
  <tr class="row-3 odd">
  	<td class="column-1">BBB</td><td class="column-2">A+</td><td class="column-3">A-</td>
  </tr>
  <tr class="row-4 even">
  	<td class="column-1">AM Best</td><td class="column-2">A+</td><td class="column-3">A</td>
  </tr>
  <tr class="row-5 odd">
  	<td class="column-1">Moody's</td><td class="column-2">N/A</td><td class="column-3">A2</td>
  </tr>
  <tr class="row-6 even">
  	<td class="column-1">Fitch</td><td class="column-2">AA-</td><td class="column-3">A+</td>
  </tr>
  <tr class="row-7 odd">
  	<td class="column-1">Standard &amp; Poor</td><td class="column-2">AA-</td><td class="column-3">A+</td>
  </tr>
  <tr class="row-8 even">
  	<td class="column-1">Comdex Score</td><td class="column-2">94</td><td class="column-3">81</td>
  </tr>
  </tbody>
  </table>
  <!-- #tablepress-95 from cache -->
  <h2>Banner vs AIG Financial Status</h2>

  <table id="tablepress-96" class="tablepress tablepress-id-96">
  <thead>
  <tr class="row-1 odd">
  	<th class="column-1">&nbsp;</th><th class="column-2">Banner</th><th class="column-3">AIG</th>
  </tr>
  </thead>
  <tbody class="row-hover">
  <tr class="row-2 even">
  	<td class="column-1">Total Assets</td><td class="column-2"> $7.3 Billion</td><td class="column-3">$498.30 Billion (2017)</td>
  </tr>
  <tr class="row-3 odd">
  	<td class="column-1">Life Insurance In Force</td><td class="column-2">$658 Billion</td><td class="column-3">$224 Billion</td>
  </tr>
  </tbody>
  </table>
  <!-- #tablepress-96 from cache -->
  <h2>Banner vs AIG Products Offered</h2>

  <table id="tablepress-97" class="tablepress tablepress-id-97">
  <thead>
  <tr class="row-1 odd">
  	<th class="column-1">&nbsp;</th><th class="column-2">Banner</th><th class="column-3">AIG</th>
  </tr>
  </thead>
  <tbody class="row-hover">
  <tr class="row-2 even">
  	<td class="column-1">Types of Life Insurance</td><td class="column-2">Term life insurance<br />
  Universal life insurance</td><td class="column-3">Term Life Insurance<br />
  Guaranteed Issue<br />
  Whole Life Insurance<br />
  Quality of Life Insurance<br />
  Universal Life<br />
  Variable Universal Life<br />
  Accidental Death &amp; Dismemberment</td>
  </tr>
  <tr class="row-3 odd">
  	<td class="column-1">Products Offered</td><td class="column-2">OP Term<br />
  A-List Term<br />
  Life Step UL</td><td class="column-3">Select-a-Term® <br />
  QoL Flex Term<br />
  QoL Flex Term<br />
  QoL Guarantee Plus GUL II<br />
  QoL Value+ Protector<br />
  QoL Max Accumulator+<br />
  Secure Lifetime GUL 3®<br />
  AG Secure Survivor GUL II® <br />
  Value+ Protector<br />
  Max Accumulator+</td>
  </tr>
  <tr class="row-4 even">
  	<td class="column-1">Riders Available</td><td class="column-2">"Disability premium waiver. <br />
  Conversion to permanent. <br />
  Flexible payment schedule. <br />
  Accelerated benefit rider. <br />
  Term laddering rider.<br />
  Child Protection Rider"</td><td class="column-3">Accelerated access.<br />
  Lifestyle income.<br />
  Accidental death benefit. <br />
  Children’s protection. <br />
  Waiver of premium.<br />
  Terminal illness.</td>
  </tr>
  <tr class="row-5 odd">
  	<td class="column-1">States</td><td class="column-2">49</td><td class="column-3">49</td>
  </tr>
  </tbody>
  </table>
  <!-- #tablepress-97 from cache -->
  <h2>Banner vs AIG Overall</h2>

  <table id="tablepress-98" class="tablepress tablepress-id-98">
  <thead>
  <tr class="row-1 odd">
  	<th class="column-1">&nbsp;</th><th class="column-2">Banner</th><th class="column-3">AIG</th>
  </tr>
  </thead>
  <tbody class="row-hover">
  <tr class="row-2 even">
  	<td class="column-1">Top Awards</td><td class="column-2">Best Term Assurance Provider at the Investment Life &amp; Pensions <br />
  Moneyfacts Awards 2017<br />
  Communitas Award for Commitment to Corporate Social Responsibility</td><td class="column-3">Top 50 Companies for Diversity <br />
  Insurance Industry Innovator<br />
  Top 100 Companies for Internship Program</td>
  </tr>
  <tr class="row-3 odd">
  	<td class="column-1">Pro's</td><td class="column-2">Flexibility of payment options and term limits for each option on the policy<br />
  Fast-track claims<br />
  Electronic application</td><td class="column-3">Strong financial stability. <br />
  Strong product lineup. <br />
  Flexibility.</td>
  </tr>
  <tr class="row-4 even">
  	<td class="column-1">Con's</td><td class="column-2">Medical exam required. <br />
  Strict eligibility for preferred rates. <br />
  Options are very limited in scope</td><td class="column-3">Service many not be personal.<br />
  Lengthy claims process.<br />
  Strict underwriting.</td>
  </tr>
  </tbody>
  </table>
  <!-- #tablepress-98 from cache -->
  <p>Disclaimer: We make every attempt to make sure our information is up to date, but since thing change often it is best to double check the data. This review is an opinion.</p>
		</div>
		<h2>Related Articles</h2>
			<?=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]); ?>
	</section>
	<!-- END PAGE-CONTENT -->

</div>
