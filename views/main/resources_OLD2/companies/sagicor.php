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
<?php
$this->registerCss(".boxcontent{ max-width:382px; margin:0 auto; width:100%; float: right; margin: 0 0 10px 10px; -webkit-box-shadow: 0px 0px 30px 0px rgba(235,235,235,1);-moz-box-shadow: 0px 0px 30px 0px rgba(235,235,235,1);box-shadow: 0px 0px 30px 0px rgba(235,235,235,1);}
.boxcontentinner { width:90%; margin: 0 auto; overflow:hidden; padding:25px 0;}
.logocon{ text-align:center; margin:0 0 50px;}

.boxconinfull{ width:100%; clear:both; overflow:hidden; font-family: 'Open Sans', sans-serif; margin:0 0  30px;}
.boxconinfull h6{ font-size:14px; color:#4f8b9f; font-family: 'Open Sans', sans-serif; text-transform:uppercase; margin:0; padding:0;}
.boxconinfull h5{ font-size:26px; color:#3c3c3c; font-family: 'Open Sans', sans-serif; text-transform:uppercase; margin:0; padding:0;}
.boxconinfull p{ font-size:15px; color:#3c3c3c; margin:0; padding:0; font-family: 'Open Sans', sans-serif;}
.boxconinlt, .boxconinrt{ width:50%; float:left;}

.boxconinrt ul{ margin:10px 0 0 0; padding:0;}
.boxconinrt ul li{ display:block; float:left; list-style:none; margin:0 10px 0 0;}
.boxconinmid{ width:100%; clear:both; overflow:hidden; margin-bottom:25px;}
.boxcontentinner a {border: 1px solid #8ac58a;background: #99d199;height: auto;padding: 13px 00;text-align: center;font-size: 21px;color: #fff;font-weight: bold;text-transform: none;font-family: 'Open Sans', sans-serif;display: block;width: 100%;text-decoration: navajowhite;margin:0 auto 0;}
");
 ?>
<div class="page-content page-wrapper trans_all">

	<?=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]); ?>

	<!-- START PAGE-CONTENT -->
	<section class="page">
		<h1>Sagicor Life Insurance Review</h1>
		<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>

		<div class="content">
			<div class="boxcontent">
				<div class="boxcontentinner">
			    	<div class="logocon"><img src="../../../img/slogo.png" width="122" height="99" /></div>
			        <div class="boxconinfull">
						<div class="boxconinlt">
			            	<h6>Financial Rating</h6>
			                <h5>A-</h5>
			            </div>
			            <div class="boxconinrt">
			            	<h6>Our Rating</h6>
			                <ul>
			                	<li><img src="../../../img/star.png" width="19" height="18" /></li>
			                    <li><img src="../../../img/star.png" width="19" height="18" /></li>
			                    <li><img src="../../../img/star.png" width="19" height="18" /></li>
			                    <li><img src="../../../img/star.png" width="19" height="18" /></li>
			                    <li><img src="../../../img/star.png" width="19" height="18" /></li>
			                </ul>
			             </div>
			        </div>
			        <div class="boxconinfull">
						<div class="boxconinlt">
			            	<h6>Phone </h6>
			                <p>1-888-724-4267</p>
			            </div>
			            <div class="boxconinrt">
			            	<h6> Founded </h6>
			                <p>1954</p>
			             </div>
			        </div>
			        <div class="boxconinfull">
						<div class="boxconinmid">
			            	<h6>Prouducts sold</h6>
			                <p>Term, Whole, Universal</p>
			            </div>

			        </div>
			        <a href="https://phpstack-223893-690316.cloudwaysapps.com/apply-now/">Get A Quote</a>
			   </div>
			</div>
			<p>Who exactly is <a href="https://www.sagicorlifeusa.com/">Sagicor</a>? Sagicor has been in business for 175 years, has an AM best rating of A-, has over $5 billion in assets, is publicly traded with offices in FL, AZ, and OK, and has over 600,000 policy holders.</p>
			<p>Perhaps you’ve been offered a Sagicor life insurance plan and wonder if it’s too good to be true? Rest assured you are in the right place for advice, with <a href="http://www.shopperapproved.com/reviews/noexam.com/">over 750+ positive reviews on ShopperApproved</a>, NoExam.com is the authority on <a href="https://phpstack-223893-690316.cloudwaysapps.com/">no exam life insurance</a>. Below is our in depth Sagicor life insurance review.<span id="more-705"></span></p>
			<h2>Table of Contents</h2>
			<p><a href="#6factors">Factors That Make Sagicor Life a Strong Company</a><br />
			<a href="#coverage">How Much Coverage Can I Get?</a><br />
			<a href="#age">How Old Can You Be for a Policy With Sagicor?</a><br />
			<a href="#health">What If I Have Health Issues?</a><br />
			<a href="#price">Is It Expensive?</a><br />
			<a href="#rates">Sample Sagicor Life Rates</a><br />
			<a href="#apply">How to Apply</a><br />
			<a href="#term">Is Sagicor’s Plan Whole Life or Term?</a><br />
			<a href="#waiting">Is There a Waiting Period?</a></p>
			<h2>Is There a Catch with Sagicor Life Insurance?</h2>
			<p>Just because you haven’t seen a recent TV commercial or Billboard Ad from Sagicor, does not mean you shouldn’t put your trust in them. Many stable, tried and true insurance companies choose not to spend marketing dollars on such advertisements.<br />
			<a name="6factors"></a></p>
			<h4 style="text-align: center;"><strong><a href="https://phpstack-223893-690316.cloudwaysapps.com/apply-now/">Click here to get an instant quote and apply online with Sagicor</a></strong></h4>
			<h2>5 Factors That Make Sagicor Life A Strong Company</h2>
			<p><a name="6factors"></a></p>
			<ol>
			<li>Sagicor is a reputable company that has <a href="http://175.sagicor.com/">175 years</a> of history.</li>
			<li>Sagicor Life USA has corporate offices in AZ, FL and OK.</li>
			<li><a href="http://www.sagicorlife.com/Pages/Financial-Information.aspx">The company’s total assets are more than $5 billion</a>.</li>
			<li>Sagicor is a publicly traded company with 37,000 shareholders.</li>
			<li>They have a policyholder base of approximately 600,000.</li>
			</ol>
			<p style="text-align: center;"><strong><a href="https://phpstack-223893-690316.cloudwaysapps.com/apply-now/">Click here to get an instant quote and apply online with Sagicor</a></strong></p>
			<p><a name="6factors"></a></p>
			<p>I hope these 6 points above help ease your mind about Sagicor&#8217;s life insurance product. Now, let’s review how this plan works and what consumers are asking.</p>
			<p><a name="6factors"></a></p>
			<h2>Video Overview<br />
			<iframe src="https://www.youtube.com/embed/_2NvJZtm3iM" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></h2>
			<p><a name="6factors"></a></p>
			<p><a name="coverage"></a></p>
			<h2>How Much Coverage Can I Get Without an Exam?</h2>
			<p>As of March 10th, 2018 Sagicor will offer up to $1,000,000 in coverage without requiring a medical exam. You can purchase above this amount with Sagicor, but a paramedical exam will be required. However, while Sagicor does offer up to $1,000,000 of coverage, it will depend on your age. For example,</p>
			<ul>
			<li>Ages 18-45 can get up to $1,000,000 of coverage without an exam.</li>
			<li>Ages 46-55 can get up to $750,000 of coverage without an exam.</li>
			<li>Ages 56-65 can get up to $500,000 of coverage without an exam.</li>
			</ul>
			<p>If you are looking for more than $1,000,000, I recommend checking out our list of <a href="https://phpstack-223893-690316.cloudwaysapps.com/life-insurance/companies/">the best life insurance companies</a>.<br />
			<a name="age"></a></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<h2>What is the age limit for a term policy from Sagicor?</h2>
			<p>You need to be between the ages of 18-65 to qualify for their Sage term product. If you are over the age of 65, you may be able to get coverage if you are applying for under $50,000.<br />
			<a name="health"></a></p>
			<h2>What if I have health issues?</h2>
			<p>Most mild health conditions are accepted by Sagicor life insurance. This policy is best for people who haven’t seen a doctor in a few years, have controlled high blood pressure, mild anxiety and can maintain employment with their health condition.</p>
			<p>These are just a few examples. To speak with a licensed agent, <strong>please call us at 888-407-0714</strong>.<br />
			<a name="price"></a></p>
			<h2>Is Sagicor&#8217;s life insurance expensive?</h2>
			<p>In general, this type of life insurance is priced slightly higher than if you go through an exam. Sagicor life insurance has the most competitive prices if you are between the ages of 50-65.<br />
			<a name="rates"></a></p>
			<h2>Sample Sagicor Life Insurance Rates</h2>
			<h4>30yr Old Male</h4>

			<table id="tablepress-54" class="tablepress tablepress-id-54">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Coverage Amount</th><th class="column-2">Term Length</th><th class="column-3">Monthly Premium</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">$250,000</td><td class="column-2">20 Year Term</td><td class="column-3">$24.37 per month</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">$500,000</td><td class="column-2">20 Year Term</td><td class="column-3">$42.44 per month</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-54 from cache -->
			<h4>30yr Old Female</h4>

			<table id="tablepress-55" class="tablepress tablepress-id-55">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Coverage Amount</th><th class="column-2">Term Length</th><th class="column-3">Monthly Premium</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">$250,000</td><td class="column-2">20 Year Term</td><td class="column-3">$19.40 per month</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">$500,000</td><td class="column-2">20 Year Term</td><td class="column-3">$32.51 per month</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-55 from cache -->
			<h4>50yr Old Male</h4>

			<table id="tablepress-56" class="tablepress tablepress-id-56">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Coverage Amount</th><th class="column-2">Term Length</th><th class="column-3">Monthly Premium</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">$250,000</td><td class="column-2">20 Year Term</td><td class="column-3">$93.62 per month</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">$500,000</td><td class="column-2">20 Year Term</td><td class="column-3">$100.40 per month</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-56 from cache -->
			<h4>50yr Old Female</h4>

			<table id="tablepress-57" class="tablepress tablepress-id-57">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Coverage Amount</th><th class="column-2">Term Length</th><th class="column-3">Monthly Premium</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">$250,000</td><td class="column-2">20 Year Term</td><td class="column-3">$74.91 per month</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">$500,000</td><td class="column-2">20 Year Term</td><td class="column-3">$83.48 per month</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-57 from cache -->
			<p><strong>Disclaimer:</strong> The above rates are non-tobacco, preferred class prices. Actual rates may vary based each person’s health profile. Coverage amount and term lengths can be adjusted to suit your budget. Please visit <a href="https://phpstack-223893-690316.cloudwaysapps.com/apply-now/">noexam.com/apply-now/</a> for your quote. You can also see more rates on our <a href="https://phpstack-223893-690316.cloudwaysapps.com/life-insurance/term/rates/">sample life insurance rates</a> page.<br />
			<a name="apply"></a></p>
			<h2>How can I Apply?</h2>
			<p>NoExam.com has the Sagicor life insurance application available online. Simply <a href="https://phpstack-223893-690316.cloudwaysapps.com/apply-now/">click here to get a quote, select a policy, and apply online.</a><br />
			<a name="term"></a></p>
			<h2>Is the Sagicor life insurance plan whole life or term?</h2>
			<p>Sagicor offers a variety of life insurance plans. Their term plans are available in 10, 15 and 20 years. You can also purchase permanent plans commonly known as lifetime coverage.</p>
			<h2>How quick can I get coverage?</h2>
			<p>Sagicor&#8217;s product has an approval time of 24-72 hours. There is no need to wait for medical records from your doctor&#8217;s office. In some cases, you can have an instant approval!</p>
			<p>If you are busy and have no time to hassle with with a traditional term policy then Sagicor is a competitive option for you to secure life insurance.<br />
			<a name="waiting"></a></p>
			<h2>Is there a waiting period?</h2>
			<p>The Sagicor life insurance plan is a standard, level term plan. Once you have your approval from the company and have your payment applied, you are insured.</p>
			<h3>Sagicor Life Insurance Review Summary</h3>
			<p>There’s no doubt researching life insurance can be an overwhelming task. For most people, it is a brand new experience. Often followed by a series of confusing options and too many phone calls.</p>
			<p>Securing the proper protection for your loved ones is vital, and you don&#8217;t want to mess it up! Let alone end up paying for a plan that doesn&#8217;t keep its promise.</p>
			<p>Sagicor has been a leader in the life insurance industry offering innovative, convenient processes for consumers. We are a top partner with Sagicor. Together we&#8217;re on a mission to assist people like yourself to get life insurance fast with no hassle. I hope you found our Sagicor  life insurance review helpful.</p>
			<h3><a href="https://phpstack-223893-690316.cloudwaysapps.com/apply-now/">Click here to find out just how little life insurance will cost for you.</a></h3>
			<p><a name="6factors"></a></p>
		</div>

	</section>
	<!-- END PAGE-CONTENT -->

</div>
<?=$this->render('/main/widgets/bio-jonathan-holloway.php'); //Bio Embed Code?>