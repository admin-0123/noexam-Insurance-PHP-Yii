<?php

use yii\widgets\Breadcrumbs;
use yii\web\View;

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
$this->params['breadcrumbs'][] = ['label' => 'Term Life Insurance', 'url' => '/life-insurance/term/'];
$this->params['breadcrumbs'][] = $this->context->current_cat->title;

?>
<?php
$this->registerJS(
	'jQuery(document).ready(function($) { RESPONSIVEUI.responsiveTabs(); });',
	View::POS_END,
	'responsive-tab-js'
);
?>
<div class="page-content page-wrapper trans_all">

	<?=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]); ?>

	<!-- START PAGE-CONTENT -->
	<section class="page">
		<h1>Term Life Insurance Rates by Age</h1>
		<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>

		<div class="content">
			<p>Last Updated November 27th, 2018</p>
			<?=$this->render('/main/widgets/term-rates-icon-nav.php');?>
	<p>Getting a life insurance quote online can result in a flood of calls and emails. That is why we have decided to publish sample life insurance rates by age and gender. Our hope is that it helps our customers to make an informed decision.</p>
	<p>We have assembled <a href="https://phpstack-223893-690316.cloudwaysapps.com/life-insurance/term/">term life insurance</a> rates by age below. <strong>This will help you get an estimate of what it will cost based on term length, coverage amount, and age.</strong> We present rates for no exam life insurance policies as well as policies that do require an exam.<br />
	</p>
	<?=$this->render('/main/widgets/apply-now-form.php', ['position' => 'center', 'width' => '100%']);?>
	<h2>Average Cost of Term Life Insurance</h2>

	<table id="tablepress-104" class="tablepress tablepress-id-104">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Term Life Coverage Amount</th><th class="column-2">Average Cost of 20 Year Term Life Insurance</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">$100,000</td><td class="column-2">$9.92</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">$250,000</td><td class="column-2">$14.79</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">$500,000</td><td class="column-2">$21.32</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">$1,000,000</td><td class="column-2">$36.54</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-104 from cache -->
	<p>Rates do not increase over the term period of the policy.</p>
	<p>* The above term rates are for a healthy 30 year old male. If you are older you can expect the rates to be higher. For a more accurate quote, <a href="https://phpstack-223893-690316.cloudwaysapps.com/apply-now/">click here</a>. The prices listed below are for term life insurance products.</p>
	<p>Research shows that Americans assume term life insurance costs about twice as much as it does. Actual rates for a healthy male looking for a 20 year term life policy are between $10 and $37 per month. See these average costs of life insurance for a 20 year term policy on a male age 30 in good health.</p>
	<h2>How Life Insurance Rates Work</h2>
	<p><img style="float:right;"  src="../../../img/agenda-analysis-business-990818-e1540406089414.jpg" alt="explaining life insurance rates" width="300" height="183" />The rate charts below are the starting point. <strong>Age, gender, height and weight will determine your rate class.</strong> The rate classes are usually preferred plus, preferred, standard, and rated.</p>
	<p><strong>Once you decide you are ok with the quote, a good agent will ask some preliminary questions.</strong> These are to determine if you will stay in the initial health classification. These questions involve family history and any current or past health conditions.</p>
	<p>Having a health condition like high blood pressure can move you to the next health class. Family members that have a history of heart disease or cancer before the age of 60 can also have an effect.</p>
	<p><strong>These questions are important because they save time.</strong> If your initial quote was for $15 per month, but you get moved to another rate class you may not be ok with the new price. This results in a bad customer experience. Consumers refer to it as the bait and switch. By asking these questions, agents can avoid having to come back with a higher price.</p>
	<h2>How Much Coverage Do You Need?</h2>
	<p>The answer to this question varies based on a multitude of factors. <strong>Generally speaking, you want at least 7 to 10 times your annual income.</strong> You must consider the size of your family and their needs in the future as well. College tuition and weddings are two obligations that come to mind. You also have to consider any debts you carry, such as a mortgage.</p>
	<h2>What Term Length is Best?</h2>
	<p>I am going to assume that since you are looking for quotes that you are price shopping. For this reason, I will exclude whole life insurance. <strong>When choosing a term length you have to consider your age and your insurance needs in the future.</strong> It makes sense to go for a 30 year term if you can afford it. This is because the older you are, the more expensive life insurance is. A 30 year term policy at age 40 is cheaper than a 20 year at age 50. Most importantly, the policy must meet your needs and be affordable.</p>
	<h2>How to Get a Term Life Insurance Quote</h2>
	<p>Your first step is to find a broker who can provide you with quotes from <strong>more than one company</strong>. As an online broker, we have software that will give you quotes from the <a href="https://phpstack-223893-690316.cloudwaysapps.com/life-insurance/companies/">top companies</a> to compare. Simply visit <a href="https://phpstack-223893-690316.cloudwaysapps.com/apply-now/">noexam.com/apply-now/</a> and complete the form.</p>
	<h2>How to Get the Best Life Insurance Rate</h2>
	<p><img style="float:right;" src="../../../img/accountant-accounting-bankbook-948887-e1540405982162.jpg" alt="" width="300" height="181" />Getting the best rate is something that takes work. <strong>You must get quotes from at least 10 life insurance companies.</strong> From there you can choose the lowest price and begin the application process. If you sail through underwriting and get the policy in force, pat yourself on the back. You now have the best term insurance rate possible.</p>
	<p>If the insurance company comes back with a higher price, <strong>do not feel like you have to accept it</strong>. You can apply with another company to see if you <strong>get a lower rate</strong>.</p>
	<h2>How Does This Work?</h2>
	<p>Every life insurance company is different. They each have their own way of determining risk and prices. While your quote might come back higher with one company, you may get a lower quote with another. This is why it&#8217;s important to work with an experienced broker. <strong>A good agent will know what companies can offer you the best rates based on your health profile.</strong></p>
	<h2>10 Year Term Life Insurance Rates</h2>
	<p>A 10-year term policy is usually the most affordable option for coverage. It will offer a level premium for 10 years. Once the initial 10 years is up the premium will rise annually if the policy is renewable.</p>
	<div class="tabcon-area">
	<div class="responsive-tabs">
	<h2 class="tabtitle">Male</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are rates based on a 10-year term for a healthy non-smoking male with a Preferred Plus rating.</p>
	<p><strong>Ages 18-28</strong><br />

	<table id="tablepress-6" class="tablepress tablepress-id-6">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">18</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">19</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">20</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">21</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">22</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">23</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">24</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">25</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">26</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">27</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">28</td><td class="column-2">$9.41</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-6 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-8" class="tablepress tablepress-id-8">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">29</td><td class="column-2">$9.45</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">30</td><td class="column-2">$9.45</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">31</td><td class="column-2">$9.45</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">32</td><td class="column-2">$9.45</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">33</td><td class="column-2">$9.45</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">34</td><td class="column-2">$9.45</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">35</td><td class="column-2">$9.45</td><td class="column-3">$13.92</td><td class="column-4">$18.27</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">36</td><td class="column-2">$10.02</td><td class="column-3">$15.11</td><td class="column-4">$19.71</td><td class="column-5">$31.32</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">37</td><td class="column-2">$10.11</td><td class="column-3">$15.33</td><td class="column-4">$21.06</td><td class="column-5">$33.93</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">38</td><td class="column-2">$10.29</td><td class="column-3">$15.56</td><td class="column-4">$22.36</td><td class="column-5">$36.54</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">39</td><td class="column-2">$10.48</td><td class="column-3">$15.79</td><td class="column-4">$23.50</td><td class="column-5">$38.28</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-8 from cache --><br />
	<strong>Ages 40-49</strong><br />

	<table id="tablepress-10" class="tablepress tablepress-id-10">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$10.75</td><td class="column-3">$16.25</td><td class="column-4">$23.75</td><td class="column-5">$40.80</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$11.02</td><td class="column-3">$16.70</td><td class="column-4">$24.34</td><td class="column-5">$41.96</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$11.39</td><td class="column-3">$17.85</td><td class="column-4">$25.41</td><td class="column-5">$43.00</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$12.12</td><td class="column-3">$19.44</td><td class="column-4">$25.54</td><td class="column-5">$44.05</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$12.94</td><td class="column-3">$21.04</td><td class="column-4">$27.56</td><td class="column-5">$47.85</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$13.76</td><td class="column-3">$22.64</td><td class="column-4">$29.39</td><td class="column-5">$49.33</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">45</td><td class="column-2">$13.76</td><td class="column-3">$22.64</td><td class="column-4">$29.39</td><td class="column-5">$49.33</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$15.41</td><td class="column-3">$26.07</td><td class="column-4">$35.40</td><td class="column-5">$59.94</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$16.23</td><td class="column-3">$26.60</td><td class="column-4">$38.53</td><td class="column-5">$65.25</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$17.05</td><td class="column-3">$27.13</td><td class="column-4">$41.67</td><td class="column-5">$71.56</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-10 from cache --><br />
	<strong>Ages 50-59</strong><br />

	<table id="tablepress-11" class="tablepress tablepress-id-11">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">50</td><td class="column-2">$17.87</td><td class="column-3">$27.67</td><td class="column-4">$45.70</td><td class="column-5">$79.17</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">51</td><td class="column-2">$18.70</td><td class="column-3">$29.95</td><td class="column-4">$50.63</td><td class="column-5">$88.65</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">52</td><td class="column-2">$19.61</td><td class="column-3">$32.46</td><td class="column-4">$56.01</td><td class="column-5">$98.31</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">53</td><td class="column-2">$20.62</td><td class="column-3">$35.43</td><td class="column-4">$61.74</td><td class="column-5">$109.18</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">54</td><td class="column-2">$21.80</td><td class="column-3">$38.63</td><td class="column-4">$68.01</td><td class="column-5">$120.49</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">55</td><td class="column-2">$23.36</td><td class="column-3">$42.28</td><td class="column-4">$74.56</td><td class="column-5">$135.72</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">56</td><td class="column-2">$25.27</td><td class="column-3">$45.94</td><td class="column-4">$81.90</td><td class="column-5">$150.51</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">57</td><td class="column-2">$27.56</td><td class="column-3">$50.05</td><td class="column-4">$90.51</td><td class="column-5">$166.08</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">58</td><td class="column-2">$30.12</td><td class="column-3">$56.21</td><td class="column-4">$99.02</td><td class="column-5">$181.83</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">59</td><td class="column-2">$33.04</td><td class="column-3">$61.69</td><td class="column-4">$109.32</td><td class="column-5">$200.97</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-11 from cache --><br />
	<strong>Ages 60-69</strong><br />

	<table id="tablepress-12" class="tablepress tablepress-id-12">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">60</td><td class="column-2">$36.14</td><td class="column-3">$68.32</td><td class="column-4">$127.32</td><td class="column-5">$223.59</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">61</td><td class="column-2">$37.94</td><td class="column-3">$71.91</td><td class="column-4">$131.81</td><td class="column-5">$249.69</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">62</td><td class="column-2">$41.77</td><td class="column-3">$79.52</td><td class="column-4">$147.90</td><td class="column-5">$278.40</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">63</td><td class="column-2">$46.03</td><td class="column-3">$87.78</td><td class="column-4">$165.30</td><td class="column-5">$311.46</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">64</td><td class="column-2">$50.73</td><td class="column-3">$98.88</td><td class="column-4">$185.75</td><td class="column-5">$351.48</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">65</td><td class="column-2">$56.04</td><td class="column-3">$109.1</td><td class="column-4">$207.5</td><td class="column-5">$391.50</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">66</td><td class="column-2">$61.52</td><td class="column-3">$122.15</td><td class="column-4">$230.12</td><td class="column-5">$431.52</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">67</td><td class="column-2">$67.70</td><td class="column-3">$136.72</td><td class="column-4">$254.48</td><td class="column-5">$470.67</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">68</td><td class="column-2">$74.66</td><td class="column-3">$153.47</td><td class="column-4">$281.88</td><td class="column-5">$515.04</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">69</td><td class="column-2">$82.58</td><td class="column-3">$172.61</td><td class="column-4">$314.94</td><td class="column-5">$575.07</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-12 from cache --><br />
	<strong>Ages 70-74</strong><br />

	<table id="tablepress-13" class="tablepress tablepress-id-13">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">70</td><td class="column-2">$91.88</td><td class="column-3">$195.01</td><td class="column-4">$355.40</td><td class="column-5">$651.63</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">71</td><td class="column-2">$102.15</td><td class="column-3">$219.81</td><td class="column-4">$401.51</td><td class="column-5">$742.11</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">72</td><td class="column-2">$112.85</td><td class="column-3">$246.34</td><td class="column-4">$451.97</td><td class="column-5">$849.12</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">73</td><td class="column-2">$125.12</td><td class="column-3">$276.79</td><td class="column-4">$510.26</td><td class="column-5">$973.53</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">74</td><td class="column-2">$140.78</td><td class="column-3">$313.98</td><td class="column-4">$586.82</td><td class="column-5">$1127.52</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-13 from cache --></p>

	</div><h2 class="tabtitle">Female</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are rates based on a 10-year term for a healthy non-smoking female with a Preferred Plus rating.</p>
	<p><strong>Ages 18-28</strong><br />

	<table id="tablepress-14" class="tablepress tablepress-id-14">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000 </th><th class="column-3">$250,000 </th><th class="column-4">$500,000 </th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">18</td><td class="column-2">$8.04</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">19</td><td class="column-2">$8.04</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">20</td><td class="column-2">$8.04</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">21</td><td class="column-2">$8.04</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">22</td><td class="column-2">$8.04</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">23</td><td class="column-2">$8.04</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">24</td><td class="column-2">$8.04</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">25</td><td class="column-2">$8.04</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">26</td><td class="column-2">$8.04</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">27</td><td class="column-2">$8.06</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">28</td><td class="column-2">$8.08</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-14 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-15" class="tablepress tablepress-id-15">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000 </th><th class="column-3">$250,000 </th><th class="column-4">$500,000 </th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">29</td><td class="column-2">$8.08</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">30</td><td class="column-2">$8.10</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">31</td><td class="column-2">$8.10</td><td class="column-3">$10.34</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">32</td><td class="column-2">$8.10</td><td class="column-3">$10.47</td><td class="column-4">$13.05</td><td class="column-5">$20.88</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">33</td><td class="column-2">$8.10</td><td class="column-3">$10.61</td><td class="column-4">$13.49</td><td class="column-5">$21.75</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">34</td><td class="column-2">$8.21</td><td class="column-3">$10.73</td><td class="column-4">$13.49</td><td class="column-5">$21.75</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">35</td><td class="column-2">$8.22</td><td class="column-3">$10.98</td><td class="column-4">$13.92</td><td class="column-5">$22.62</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">36</td><td class="column-2">$8.74</td><td class="column-3">$11.68</td><td class="column-4">$14.79</td><td class="column-5">$23.49</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">37</td><td class="column-2">$8.92</td><td class="column-3">$12.14</td><td class="column-4">$15.23</td><td class="column-5">$24.36</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">38</td><td class="column-2">$9.20</td><td class="column-3">$12.59</td><td class="column-4">$15.68</td><td class="column-5">$25.23</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">39</td><td class="column-2">$9.56</td><td class="column-3">$13.05</td><td class="column-4">$16.58</td><td class="column-5">$26.97</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-15 from cache --><br />
	<strong>Ages 40-49</strong><br />

	<table id="tablepress-16" class="tablepress tablepress-id-16">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$9.93</td><td class="column-3">$13.96</td><td class="column-4">$17.70</td><td class="column-5">$29.15</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$10.48</td><td class="column-3">$15.11</td><td class="column-4">$19.04</td><td class="column-5">$31.76</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$11.21</td><td class="column-3">$16.48</td><td class="column-4">$20.83</td><td class="column-5">$35.23</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$11.85</td><td class="column-3">$16.89</td><td class="column-4">$22.59</td><td class="column-5">$38.65</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$12.58</td><td class="column-3">$16.91</td><td class="column-4">$25.09</td><td class="column-5">$43.50</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$13.22</td><td class="column-3">$16.93</td><td class="column-4">$26.66</td><td class="column-5">$46.55</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">46</td><td class="column-2">$13.76</td><td class="column-3">$17.98</td><td class="column-4">$28.59</td><td class="column-5">$50.29</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$14.31</td><td class="column-3">$18.99</td><td class="column-4">$30.82</td><td class="column-5">$54.63</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$14.86</td><td class="column-3">$20.13</td><td class="column-4">$33.15</td><td class="column-5">$59.16</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$15.32</td><td class="column-3">$21.50</td><td class="column-4">$35.40</td><td class="column-5">$63.51</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-16 from cache --><br />
	<strong>Ages 50-59</strong><br />

	<table id="tablepress-17" class="tablepress tablepress-id-17">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">50</td><td class="column-2">$15.87</td><td class="column-3">$22.87</td><td class="column-4">$38.08</td><td class="column-5">$68.73</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">51</td><td class="column-2">$16.41</td><td class="column-3">$24.47</td><td class="column-4">$40.77</td><td class="column-5">$73.95</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">52</td><td class="column-2">$16.87</td><td class="column-3">$26.07</td><td class="column-4">$43.91</td><td class="column-5">$80.04</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">53</td><td class="column-2">$17.33</td><td class="column-3">$27.89</td><td class="column-4">$47.94</td><td class="column-5">$87.87</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">54</td><td class="column-2">$17.97</td><td class="column-3">$29.95</td><td class="column-4">$51.88</td><td class="column-5">$95.53</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">55</td><td class="column-2">$18.97</td><td class="column-3">$32.23</td><td class="column-4">$55.78</td><td class="column-5">$103.10</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">56</td><td class="column-2">$20.07</td><td class="column-3">$34.29</td><td class="column-4">$59.50</td><td class="column-5">$110.32</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">57</td><td class="column-2">$21.25</td><td class="column-3">$36.34</td><td class="column-4">$62.28</td><td class="column-5">$115.71</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">58</td><td class="column-2">$22.72</td><td class="column-3">$38.86</td><td class="column-4">$65.86</td><td class="column-5">$122.67</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">59</td><td class="column-2">$24.63</td><td class="column-3">$42.74</td><td class="column-4">$71.69</td><td class="column-5">$133.98</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-17 from cache --><br />
	<strong>Ages 60-69</strong><br />

	<table id="tablepress-18" class="tablepress tablepress-id-18">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">60</td><td class="column-2">$27.47</td><td class="column-3">$48.22</td><td class="column-4">$83.13</td><td class="column-5">$153.12</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">61</td><td class="column-2">$28.46</td><td class="column-3">$52.11</td><td class="column-4">$86.94</td><td class="column-5">$168.66</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">62</td><td class="column-2">$30.77</td><td class="column-3">$62.99</td><td class="column-4">$111.80</td><td class="column-5">$218.37</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">63</td><td class="column-2">$40.21</td><td class="column-3">$75.17</td><td class="column-4">$133.55</td><td class="column-5">$261.87</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">64</td><td class="column-2">$46.03</td><td class="column-3">$86.65</td><td class="column-4">$156.60</td><td class="column-5">$307.98</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">65</td><td class="column-2">$51.86</td><td class="column-3">$99.31</td><td class="column-4">$180.09</td><td class="column-5">$354.96</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">66</td><td class="column-2">$57.52</td><td class="column-3">$111.06</td><td class="column-4">$202.28</td><td class="column-5">$399.33</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">67</td><td class="column-2">$63.44</td><td class="column-3">$123.45</td><td class="column-4">$224.90</td><td class="column-5">$444.57</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">68</td><td class="column-2">$69.61</td><td class="column-3">$136.50</td><td class="column-4">$249.26</td><td class="column-5">$493.29</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">69</td><td class="column-2">$76.49</td><td class="column-3">$151.73</td><td class="column-4">$278.40</td><td class="column-5">$551.58</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-18 from cache --><br />
	<strong>Ages 70-74</strong><br />

	<table id="tablepress-19" class="tablepress tablepress-id-19">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000*</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">70</td><td class="column-2">$84.14</td><td class="column-3">$169.78</td><td class="column-4">$314.51</td><td class="column-5">$623.79</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">71</td><td class="column-2">$92.49</td><td class="column-3">$191.10</td><td class="column-4">$357.57</td><td class="column-5">$709.92</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">72</td><td class="column-2">$101.19</td><td class="column-3">$214.59</td><td class="column-4">$407.60</td><td class="column-5">$809.97</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">73</td><td class="column-2">$110.94</td><td class="column-3">$241.56</td><td class="column-4">$464.58</td><td class="column-5">$923.94</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">74</td><td class="column-2">$122.25</td><td class="column-3">$272.66</td><td class="column-4">$528.96</td><td class="column-5">$1,052.70</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-19 from cache --></p>
	</div></div>
	<p><em>*Quotes are presented in a monthly premium format. Valid as of 10/19/16. The above quotes are for a non-smoker in excellent health and are subject to changes.</em></p>
	</div>
	<h2>15 Year Term Life Insurance Rates</h2>
	<p>A 15-year term policy is similar to the 10-year term in that it is usually one of the more affordable term lengths. It will provide coverage for 15 years at a level premium. Once the initial 15 years has passed, the premium will rise annually if the policy is renewable.</p>
	<div class="tabcon-area">
	<div class="responsive-tabs">
	<h2 class="tabtitle">Male</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are rates based on a 15-year term for a healthy non-smoking male with a Preferred Plus rating.</p>
	<p><strong>Ages 18-28</strong><br />

	<table id="tablepress-20" class="tablepress tablepress-id-20">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">18</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">19</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">20</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">21</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">22</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">23</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">24</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">25</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">26</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">27</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">28</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-20 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-21" class="tablepress tablepress-id-21">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">29</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">30</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">31</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.14</td><td class="column-5">$31.32</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">32</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.58</td><td class="column-5">$31.32</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">33</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$19.58</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">34</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$20.01</td><td class="column-5">$33.93</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">35</td><td class="column-2">$9.50</td><td class="column-3">$14.14</td><td class="column-4">$20.45</td><td class="column-5">$35.58</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">36</td><td class="column-2">$10.11</td><td class="column-3">$15.33</td><td class="column-4">$22.36</td><td class="column-5">$37.32</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">37</td><td class="column-2">$10.20</td><td class="column-3">$15.56</td><td class="column-4">$22.40</td><td class="column-5">$37.41</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">38</td><td class="column-2">$10.48</td><td class="column-3">$16.25</td><td class="column-4">$22.40</td><td class="column-5">$37.41</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">39</td><td class="column-2">$10.75</td><td class="column-3">$16.93</td><td class="column-4">$25.26</td><td class="column-5">$39.96</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-21 from cache --><br />
	<strong>Ages 40-49</strong><br />

	<table id="tablepress-22" class="tablepress tablepress-id-22">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$11.30</td><td class="column-3">$17.85</td><td class="column-4">$27.67</td><td class="column-5">$44.11</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$12.03</td><td class="column-3">$19.22</td><td class="column-4">$29.57</td><td class="column-5">$48.46</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$12.85</td><td class="column-3">$20.81</td><td class="column-4">$30.97</td><td class="column-5">$53.07</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$13.40</td><td class="column-3">$22.64</td><td class="column-4">$33.42</td><td class="column-5">$58.29</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$14.40</td><td class="column-3">$24.45</td><td class="column-4">$37.77</td><td class="column-5">$65.68</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$15.41</td><td class="column-3">$24.47</td><td class="column-4">$41.93</td><td class="column-5">$73.88</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">46</td><td class="column-2">$16.41</td><td class="column-3">$26.66</td><td class="column-4">$45.13</td><td class="column-5">$80.04</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$17.51</td><td class="column-3">$28.49</td><td class="column-4">$48.78</td><td class="column-5">$87.00</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$18.61</td><td class="column-3">$30.63</td><td class="column-4">$53.35</td><td class="column-5">$94.39</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$19.79</td><td class="column-3">$33.27</td><td class="column-4">$59.57</td><td class="column-5">$103.09</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-22 from cache --><br />
	<strong>Ages 50-59</strong><br />

	<table id="tablepress-23" class="tablepress tablepress-id-23">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">50</td><td class="column-2">$21.07</td><td class="column-3">$37.31</td><td class="column-4">$67.62</td><td class="column-5">$111.27</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">51</td><td class="column-2">$22.44</td><td class="column-3">$39.79</td><td class="column-4">$72.44</td><td class="column-5">$122.23</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">52</td><td class="column-2">$23.90</td><td class="column-3">$43.14</td><td class="column-4">$78.86</td><td class="column-5">$133.89</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">53</td><td class="column-2">$25.64</td><td class="column-3">$46.97</td><td class="column-4">$86.51</td><td class="column-5">$147.81</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">54</td><td class="column-2">$27.47</td><td class="column-3">$51.93</td><td class="column-4">$96.46</td><td class="column-5">$162.17</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">55</td><td class="column-2">$28.96</td><td class="column-3">$60.81</td><td class="column-4">$113.69</td><td class="column-5">$179.22</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">56</td><td class="column-2">$31.15</td><td class="column-3">$66.81</td><td class="column-4">$124.24</td><td class="column-5">$198.25</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">57</td><td class="column-2">$34.41</td><td class="column-3">$73.86</td><td class="column-4">$136.76</td><td class="column-5">$219.56</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">58</td><td class="column-2">$38.02</td><td class="column-3">$81.95</td><td class="column-4">$151.38</td><td class="column-5">$242.69</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">59</td><td class="column-2">$42.17</td><td class="column-3">$91.09</td><td class="column-4">$168.08</td><td class="column-5">$271.44</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-23 from cache --><br />
	<strong>Ages 60-65</strong><br />

	<table id="tablepress-24" class="tablepress tablepress-id-24">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">60</td><td class="column-2">$47.63</td><td class="column-3">$105.29</td><td class="column-4">$196.29</td><td class="column-5">$301.02</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">61</td><td class="column-2">$46.30</td><td class="column-3">$106.05</td><td class="column-4">$176.61</td><td class="column-5">$336.69</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">62</td><td class="column-2">$51.43</td><td class="column-3">$106.49</td><td class="column-4">$199.23</td><td class="column-5">$373.23</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">63</td><td class="column-2">$57.43</td><td class="column-3">$119.00</td><td class="column-4">$224.90</td><td class="column-5">$414.12</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">64</td><td class="column-2">$64.04</td><td class="column-3">$134.09</td><td class="column-4">$254.48</td><td class="column-5">$464.58</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">65</td><td class="column-2">$71.96</td><td class="column-3">$151.84</td><td class="column-4">$291.45</td><td class="column-5">$525.48</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-24 from cache --></p>

	</div><h2 class="tabtitle">Female</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are rates based on a 15-year term for a healthy non-smoking female with a Preferred Plus rating.</p>
	<p><strong>Ages 18-28</strong><br />

	<table id="tablepress-25" class="tablepress tablepress-id-25">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">18</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">19</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">20</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">21</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">22</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">23</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">24</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">25</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">26</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">27</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">28</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-25 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-26" class="tablepress tablepress-id-26">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">29</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">30</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">31</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">32</td><td class="column-2">$8.51</td><td class="column-3">$11.65</td><td class="column-4">$15.66</td><td class="column-5">$26.10</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">33</td><td class="column-2">$8.59</td><td class="column-3">$11.88</td><td class="column-4">$16.10</td><td class="column-5">$26.97</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">34</td><td class="column-2">$8.59</td><td class="column-3">$11.88</td><td class="column-4">$16.10</td><td class="column-5">$26.97</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">35</td><td class="column-2">$8.68</td><td class="column-3">$12.10</td><td class="column-4">$16.53</td><td class="column-5">$27.84</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">36</td><td class="column-2">$9.20</td><td class="column-3">$12.59</td><td class="column-4">$17.92</td><td class="column-5">$29.58</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">37</td><td class="column-2">$9.56</td><td class="column-3">$13.28</td><td class="column-4">$18.37</td><td class="column-5">$30.45</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">38</td><td class="column-2">$9.93</td><td class="column-3">$13.96</td><td class="column-4">$19.27</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">39</td><td class="column-2">$10.29</td><td class="column-3">$14.88</td><td class="column-4">$20.52</td><td class="column-5">$34.62</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-26 from cache --><br />
	<strong>Ages 40-49</strong><br />

	<table id="tablepress-27" class="tablepress tablepress-id-27">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$10.75</td><td class="column-3">$15.79</td><td class="column-4">$22.46</td><td class="column-5">$36.37</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$11.21</td><td class="column-3">$16.70</td><td class="column-4">$24.34</td><td class="column-5">$39.85</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$11.75</td><td class="column-3">$17.85</td><td class="column-4">$26.68</td><td class="column-5">$44.19</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$12.30</td><td class="column-3">$19.22</td><td class="column-4">$29.03</td><td class="column-5">$48.54</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$12.94</td><td class="column-3">$19.79</td><td class="column-4">$31.85</td><td class="column-5">$53.76</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$13.58</td><td class="column-3">$19.81</td><td class="column-4">$33.11</td><td class="column-5">$57.25</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">46</td><td class="column-2">$14.22</td><td class="column-3">$21.27</td><td class="column-4">$35.96</td><td class="column-5">$62.64</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$14.95</td><td class="column-3">$22.41</td><td class="column-4">$38.27</td><td class="column-5">$66.99</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$15.68</td><td class="column-3">$24.01</td><td class="column-4">$41.50</td><td class="column-5">$73.08</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$16.41</td><td class="column-3">$26.49</td><td class="column-4">$45.10</td><td class="column-5">$78.30</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-27 from cache --><br />
	<strong>Ages 50-59</strong><br />

	<table id="tablepress-28" class="tablepress tablepress-id-28">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">50</td><td class="column-2">$17.33</td><td class="column-3">$29.35</td><td class="column-4">$51.08</td><td class="column-5">$84.39</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">51</td><td class="column-2">$18.33</td><td class="column-3">$31.60</td><td class="column-4">$52.63</td><td class="column-5">$90.48</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">52</td><td class="column-2">$19.43</td><td class="column-3">$33.60</td><td class="column-4">$56.46</td><td class="column-5">$97.44</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">53</td><td class="column-2">$19.88</td><td class="column-3">$35.35</td><td class="column-4">$63.03</td><td class="column-5">$104.40</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">54</td><td class="column-2">$21.07</td><td class="column-3">$38.69</td><td class="column-4">$69.81</td><td class="column-5">$113.10</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">55</td><td class="column-2">$22.53</td><td class="column-3">$42.41</td><td class="column-4">$76.73</td><td class="column-5">$122.67</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">56</td><td class="column-2">$24.18</td><td class="column-3">$45.93</td><td class="column-4">$83.52</td><td class="column-5">$133.98</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">57</td><td class="column-2">$25.18</td><td class="column-3">$49.59</td><td class="column-4">$89.78</td><td class="column-5">$144.42</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">58</td><td class="column-2">$26.55</td><td class="column-3">$54.03</td><td class="column-4">$97.61</td><td class="column-5">$157.47</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">59</td><td class="column-2">$28.74</td><td class="column-3">$60.55</td><td class="column-4">$109.10</td><td class="column-5">$176.61</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-28 from cache --><br />
	<strong>Ages 60-65</strong><br />

	<table id="tablepress-29" class="tablepress tablepress-id-29">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">60</td><td class="column-2">$32.31</td><td class="column-3">$69.28</td><td class="column-4">$124.24</td><td class="column-5">$201.84</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">61</td><td class="column-2">$36.38</td><td class="column-3">$68.64</td><td class="column-4">$121.37</td><td class="column-5">$237.51</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">62</td><td class="column-2">$43.08</td><td class="column-3">$79.08</td><td class="column-4">$143.99</td><td class="column-5">$282.75</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">63</td><td class="column-2">$50.99</td><td class="column-3">$93.00</td><td class="column-4">$164.00</td><td class="column-5">$322.77</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">64</td><td class="column-2">$59.61</td><td class="column-3">$109.32</td><td class="column-4">$183.57</td><td class="column-5">$361.92</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">65</td><td class="column-2">$67.96</td><td class="column-3">$126.06</td><td class="column-4">$204.45</td><td class="column-5">$403.68</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-29 from cache --></p>
	</div></div>
	<p><em>*Quotes are presented in a monthly premium format. Valid as of 10/19/16. The above quotes are for a non-smoker in excellent health and are subject to changes.</em></p>
	</div>
	<h2>20 Year Term Life Insurance Rates</h2>
	<p>A 20-year term policy our most popular term length. It will provide coverage for 20 years at a level term premium. After the initial period of 20 years, the premiums will increase annually.</p>
	<div class="tabcon-area">
	<div class="responsive-tabs">
	<h2 class="tabtitle">Male</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are rates based on a 20-year term for a healthy non-smoking male with a Preferred Plus rating.</p>
	<p><strong>Ages 18-28</strong><br />

	<table id="tablepress-30" class="tablepress tablepress-id-30">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">18</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">19</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">20</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">21</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">22</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">23</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">24</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">25</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">26</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">27</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$35.67</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">28</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$36.11</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-30 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-31" class="tablepress tablepress-id-31">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">29</td><td class="column-2">$9.92</td><td class="column-3">$14.57</td><td class="column-4">$20.88</td><td class="column-5">$36.11</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">30</td><td class="column-2">$9.92</td><td class="column-3">$14.79</td><td class="column-4">$21.32</td><td class="column-5">$36.54</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">31</td><td class="column-2">$9.92</td><td class="column-3">$14.79</td><td class="column-4">$22.19</td><td class="column-5">$37.32</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">32</td><td class="column-2">$9.92</td><td class="column-3">$14.79</td><td class="column-4">$22.19</td><td class="column-5">$37.76</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">33</td><td class="column-2">$9.92</td><td class="column-3">$15.09</td><td class="column-4">$22.33</td><td class="column-5">$38.50</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">34</td><td class="column-2">$9.92</td><td class="column-3">$15.16</td><td class="column-4">$22.38</td><td class="column-5">$39.37</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">35</td><td class="column-2">$10.41</td><td class="column-3">$16.29</td><td class="column-4">$25.91</td><td class="column-5">$39.76</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">36</td><td class="column-2">$11.21</td><td class="column-3">$16.93</td><td class="column-4">$26.70</td><td class="column-5">$42.37</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">37</td><td class="column-2">$11.57</td><td class="column-3">$18.07</td><td class="column-4">$28.65</td><td class="column-5">$45.85</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">38</td><td class="column-2">$11.94</td><td class="column-3">$19.22</td><td class="column-4">$31.18</td><td class="column-5">$49.58</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">39</td><td class="column-2">$12.39</td><td class="column-3">$19.94</td><td class="column-4">$33.13</td><td class="column-5">$53.29</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-31 from cache --><br />
	<strong>Ages 40-49</strong><br />

	<table id="tablepress-32" class="tablepress tablepress-id-32">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$12.67</td><td class="column-3">$21.67</td><td class="column-4">$36.92</td><td class="column-5">$58.90</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$13.86</td><td class="column-3">$23.84</td><td class="column-4">$39.14</td><td class="column-5">$64.81</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$14.86</td><td class="column-3">$26.00</td><td class="column-4">$42.97</td><td class="column-5">$71.77</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$15.96</td><td class="column-3">$28.00</td><td class="column-4">$46.32</td><td class="column-5">$78.65</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$17.24</td><td class="column-3">$30.60</td><td class="column-4">$51.58</td><td class="column-5">$88.22</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$17.97</td><td class="column-3">$33.75</td><td class="column-4">$59.93</td><td class="column-5">$98.31</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">46</td><td class="column-2">$19.15</td><td class="column-3">$36.25</td><td class="column-4">$64.93</td><td class="column-5">$106.49</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$20.71</td><td class="column-3">$39.01</td><td class="column-4">$70.43</td><td class="column-5">$115.71</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$21.89</td><td class="column-3">$42.26</td><td class="column-4">$76.94</td><td class="column-5">$126.50</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$23.36</td><td class="column-3">$46.90</td><td class="column-4">$85.50</td><td class="column-5">$137.81</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-32 from cache --><br />
	<strong>Ages 50-60</strong><br />

	<table id="tablepress-33" class="tablepress tablepress-id-33">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">50</td><td class="column-2">$24.63</td><td class="column-3">$51.68</td><td class="column-4">$96.06</td><td class="column-5">$149.55</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">51</td><td class="column-2">$26.73</td><td class="column-3">$54.96</td><td class="column-4">$102.04</td><td class="column-5">$165.30</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">52</td><td class="column-2">$28.84</td><td class="column-3">$59.83</td><td class="column-4">$111.80</td><td class="column-5">$181.31</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">53</td><td class="column-2">$31.39</td><td class="column-3">$65.22</td><td class="column-4">$122.06</td><td class="column-5">$200.97</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">54</td><td class="column-2">$34.13</td><td class="column-3">$71.13</td><td class="column-4">$135.00</td><td class="column-5">$221.60</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">55</td><td class="column-2">$38.31</td><td class="column-3">$83.27</td><td class="column-4">$157.74</td><td class="column-5">$246.21</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">56</td><td class="column-2">$43.15</td><td class="column-3">$93.06</td><td class="column-4">$179.18</td><td class="column-5">$272.66</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">57</td><td class="column-2">$47.05</td><td class="column-3">$103.93</td><td class="column-4">$198.67</td><td class="column-5">$302.32</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">58</td><td class="column-2">$52.84</td><td class="column-3">$116.65</td><td class="column-4">$226.09</td><td class="column-5">$335.82</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">59</td><td class="column-2">$58.14</td><td class="column-3">$131.23</td><td class="column-4">$255.40</td><td class="column-5">$374.88</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">60</td><td class="column-2">$64.34</td><td class="column-3">$147.70</td><td class="column-4">$286.85</td><td class="column-5">$422.38</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-33 from cache --></p>

	</div><h2 class="tabtitle">Female</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are based on a 20-year term for a healthy non-smoking female with a Preferred Plus rating.</p>
	<p><strong>Ages 18-28</strong><br />

	<table id="tablepress-34" class="tablepress tablepress-id-34">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">18</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">19</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">20</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">21</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">22</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">23</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">24</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">25</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">26</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">27</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">28</td><td class="column-2">$9.05</td><td class="column-3">$13.09</td><td class="column-4">$18.71</td><td class="column-5">$32.19</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-34 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-35" class="tablepress tablepress-id-35">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">29</td><td class="column-2">$9.14</td><td class="column-3">$13.31</td><td class="column-4">$19.14</td><td class="column-5">$33.06</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">30</td><td class="column-2">$9.14</td><td class="column-3">$13.31</td><td class="column-4">$19.14</td><td class="column-5">$33.06</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">31</td><td class="column-2">$9.14</td><td class="column-3">$13.31</td><td class="column-4">$19.14</td><td class="column-5">$33.06</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">32</td><td class="column-2">$9.23</td><td class="column-3">$13.40</td><td class="column-4">$19.49</td><td class="column-5">$33.75</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">33</td><td class="column-2">$9.23</td><td class="column-3">$13.40</td><td class="column-4">$19.49</td><td class="column-5">$33.75</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">34</td><td class="column-2">$9.32</td><td class="column-3">$13.49</td><td class="column-4">$19.49</td><td class="column-5">$33.75</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">35</td><td class="column-2">$9.50</td><td class="column-3">$13.99</td><td class="column-4">$21.58</td><td class="column-5">$34.02</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">36</td><td class="column-2">$10.38</td><td class="column-3">$15.33</td><td class="column-4">$22.92</td><td class="column-5">$36.45</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">37</td><td class="column-2">$10.75</td><td class="column-3">$16.02</td><td class="column-4">$24.21</td><td class="column-5">$38.80</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">38</td><td class="column-2">$11.11</td><td class="column-3">$16.93</td><td class="column-4">$25.84</td><td class="column-5">$41.76</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">39</td><td class="column-2">$11.66</td><td class="column-3">$17.85</td><td class="column-4">$27.75</td><td class="column-5">$45.24</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-35 from cache --><br />
	<strong>Ages 40-49</strong><br />

	<table id="tablepress-36" class="tablepress tablepress-id-36">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$12.12</td><td class="column-3">$18.99</td><td class="column-4">$29.67</td><td class="column-5">$48.72</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$12.67</td><td class="column-3">$20.13</td><td class="column-4">$32.06</td><td class="column-5">$53.07</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$13.22</td><td class="column-3">$21.50</td><td class="column-4">$35.41</td><td class="column-5">$59.16</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$13.86</td><td class="column-3">$23.33</td><td class="column-4">$38.18</td><td class="column-5">$64.20</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$14.49</td><td class="column-3">$24.93</td><td class="column-4">$42.01</td><td class="column-5">$71.16</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$15.32</td><td class="column-3">$25.94</td><td class="column-4">$44.98</td><td class="column-5">$76.56</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">46</td><td class="column-2">$16.23</td><td class="column-3">$27.83</td><td class="column-4">$48.71</td><td class="column-5">$83.34</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$17.14</td><td class="column-3">$29.49</td><td class="column-4">$51.68</td><td class="column-5">$88.74</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$18.24</td><td class="column-3">$31.70</td><td class="column-4">$55.51</td><td class="column-5">$95.70</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$19.06</td><td class="column-3">$33.86</td><td class="column-4">$59.81</td><td class="column-5">$103.53</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-36 from cache --><br />
	<strong>Ages 50-60</strong><br />

	<table id="tablepress-37" class="tablepress tablepress-id-37">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">50</td><td class="column-2">$20.16</td><td class="column-3">$36.46</td><td class="column-4">$65.87</td><td class="column-5">$111.36</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">51</td><td class="column-2">$21.62</td><td class="column-3">$38.17</td><td class="column-4">$69.06</td><td class="column-5">$122.67</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">52</td><td class="column-2">$23.26</td><td class="column-3">$41.37</td><td class="column-4">$72.14</td><td class="column-5">$134.85</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">53</td><td class="column-2">$24.80</td><td class="column-3">$44.93</td><td class="column-4">$79.75</td><td class="column-5">$149.64</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">54</td><td class="column-2">$26.47</td><td class="column-3">$49.12</td><td class="column-4">$88.27</td><td class="column-5">$166.17</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">55</td><td class="column-2">$28.32</td><td class="column-3">$53.93</td><td class="column-4">$97.23</td><td class="column-5">$183.57</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">56</td><td class="column-2">$30.39</td><td class="column-3">$58.50</td><td class="column-4">$106.43</td><td class="column-5">$201.44</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">57</td><td class="column-2">$32.03</td><td class="column-3">$63.06</td><td class="column-4">$115.60</td><td class="column-5">$219.24</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">58</td><td class="column-2">$33.95</td><td class="column-3">$68.55</td><td class="column-4">$128.55</td><td class="column-5">$244.38</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">59</td><td class="column-2">$37.15</td><td class="column-3">$76.31</td><td class="column-4">$142.93</td><td class="column-5">$272.31</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">60</td><td class="column-2">$42.26</td><td class="column-3">$90.37</td><td class="column-4">$173.03</td><td class="column-5">$301.02</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-37 from cache --></p>
	</div></div>
	<p><em>*Quotes are presented in a monthly premium format. Valid as of 10/19/16. The above quotes are for a non-smoker in excellent health and are subject to changes.</em></p>
	</div>
	<h2>30 Year Term Life Insurance Rates</h2>
	<p>A 30-year term offers the longest term coverage. Like the above-mentioned term lengths the 30-year term will offer a level term premium for the first 30 years, and after this initial period of can renew annually up to age 95 depending on the policy.</p>
	<div class="tabcon-area">
	<div class="responsive-tabs">
	<h2 class="tabtitle">Male</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are rates based on a 30-year term for a healthy non-smoking male with a Preferred Plus rating.</p>
	<p><strong>Ages 18-28</strong><br />

	<table id="tablepress-38" class="tablepress tablepress-id-38">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">18</td><td class="column-2">$12.96</td><td class="column-3">$21.53</td><td class="column-4">$33.06</td><td class="column-5">$55.00</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">19</td><td class="column-2">$12.96</td><td class="column-3">$21.53</td><td class="column-4">$33.06</td><td class="column-5">$55.00</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">20</td><td class="column-2">$12.96</td><td class="column-3">$21.53</td><td class="column-4">$33.06</td><td class="column-5">$55.00</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">21</td><td class="column-2">$12.96</td><td class="column-3">$21.53</td><td class="column-4">$33.06</td><td class="column-5">$55.00</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">22</td><td class="column-2">$12.96</td><td class="column-3">$21.53</td><td class="column-4">$33.06</td><td class="column-5">$55.00</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">23</td><td class="column-2">$12.96</td><td class="column-3">$21.53</td><td class="column-4">$33.06</td><td class="column-5">$55.00</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">24</td><td class="column-2">$12.96</td><td class="column-3">$21.53</td><td class="column-4">$33.06</td><td class="column-5">$55.00</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">25</td><td class="column-2">$12.96</td><td class="column-3">$21.53</td><td class="column-4">$33.06</td><td class="column-5">$55.00</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">26</td><td class="column-2">$12.96</td><td class="column-3">$21.75</td><td class="column-4">$33.50</td><td class="column-5">$56.35</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">27</td><td class="column-2">$13.05</td><td class="column-3">$21.75</td><td class="column-4">$33.50</td><td class="column-5">$57.42</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">28</td><td class="column-2">$13.14</td><td class="column-3">$21.97</td><td class="column-4">$33.76</td><td class="column-5">$59.16</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-38 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-39" class="tablepress tablepress-id-39">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">29</td><td class="column-2">$13.22</td><td class="column-3">$22.19</td><td class="column-4">$33.84</td><td class="column-5">$60.03</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">30</td><td class="column-2">$13.31</td><td class="column-3">$22.62</td><td class="column-4">$34.28</td><td class="column-5">$61.77</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">31</td><td class="column-2">$13.40</td><td class="column-3">$22.84</td><td class="column-4">$35.15</td><td class="column-5">$63.51</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">32</td><td class="column-2">$13.57</td><td class="column-3">$23.27</td><td class="column-4">$36.02</td><td class="column-5">$64.38</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">33</td><td class="column-2">$13.83</td><td class="column-3">$23.36</td><td class="column-4">$36.89</td><td class="column-5">$66.12</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">34</td><td class="column-2">$14.18</td><td class="column-3">$23.38</td><td class="column-4">$38.19</td><td class="column-5">$67.86</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">35</td><td class="column-2">$14.70</td><td class="column-3">$23.64</td><td class="column-4">$39.50</td><td class="column-5">$70.82</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">36</td><td class="column-2">$16.50</td><td class="column-3">$26.20</td><td class="column-4">$43.37</td><td class="column-5">$76.04</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">37</td><td class="column-2">$17.33</td><td class="column-3">$27.59</td><td class="column-4">$46.06</td><td class="column-5">$82.77</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">38</td><td class="column-2">$18.42</td><td class="column-3">$29.90</td><td class="column-4">$50.63</td><td class="column-5">$90.48</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">39</td><td class="column-2">$19.43</td><td class="column-3">$31.60</td><td class="column-4">$54.21</td><td class="column-5">$97.44</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-39 from cache --><br />
	<strong>Ages 40-50</strong><br />

	<table id="tablepress-40" class="tablepress tablepress-id-40">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$20.52</td><td class="column-3">$33.12</td><td class="column-4">$57.26</td><td class="column-5">$103.53</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$21.80</td><td class="column-3">$36.67</td><td class="column-4">$64.07</td><td class="column-5">$115.71</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$23.36</td><td class="column-3">$40.13</td><td class="column-4">$70.79</td><td class="column-5">$127.89</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$25.09</td><td class="column-3">$42.57</td><td class="column-4">$76.17</td><td class="column-5">$137.91</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$26.59</td><td class="column-3">$46.49</td><td class="column-4">$82.89</td><td class="column-5">$149.99</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$26.59</td><td class="column-3">$50.87</td><td class="column-4">$90.51</td><td class="column-5">$164.34</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">46</td><td class="column-2">$28.62</td><td class="column-3">$55.02</td><td class="column-4">$98.30</td><td class="column-5">$179.57</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$30.93</td><td class="column-3">$59.63</td><td class="column-4">$106.14</td><td class="column-5">$196.10</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$33.51</td><td class="column-3">$65.40</td><td class="column-4">$116.85</td><td class="column-5">$216.11</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$36.46</td><td class="column-3">$71.25</td><td class="column-4">$129.44</td><td class="column-5">$236.99</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">50</td><td class="column-2">$39.78</td><td class="column-3">$77.94</td><td class="column-4">$141.99</td><td class="column-5">$258.39</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-40 from cache --></p>

	</div><h2 class="tabtitle">Female</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are based on a 30-year term for a healthy non-smoking female with a Preferred Plus rating.</p>
	<p><strong>Ages 18-28</strong><br />

	<table id="tablepress-41" class="tablepress tablepress-id-41">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">18</td><td class="column-2">$11.92</td><td class="column-3">$18.49</td><td class="column-4">$26.97</td><td class="column-5">$48.72</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">19</td><td class="column-2">$11.92</td><td class="column-3">$18.49</td><td class="column-4">$26.97</td><td class="column-5">$48.72</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">20</td><td class="column-2">$11.92</td><td class="column-3">$18.49</td><td class="column-4">$26.97</td><td class="column-5">$48.72</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">21</td><td class="column-2">$11.92</td><td class="column-3">$18.49</td><td class="column-4">$26.97</td><td class="column-5">$48.72</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">22</td><td class="column-2">$11.92</td><td class="column-3">$18.49</td><td class="column-4">$26.97</td><td class="column-5">$48.72</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">23</td><td class="column-2">$11.92</td><td class="column-3">$18.71</td><td class="column-4">$26.97</td><td class="column-5">$48.72</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">24</td><td class="column-2">$11.92</td><td class="column-3">$18.71</td><td class="column-4">$26.97</td><td class="column-5">$48.72</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">25</td><td class="column-2">$11.92</td><td class="column-3">$18.71</td><td class="column-4">$26.97</td><td class="column-5">$48.72</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">26</td><td class="column-2">$12.09</td><td class="column-3">$18.92</td><td class="column-4">$27.41</td><td class="column-5">$49.59</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">27</td><td class="column-2">$12.27</td><td class="column-3">$19.36</td><td class="column-4">$27.41</td><td class="column-5">$49.59</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">28</td><td class="column-2">$12.44</td><td class="column-3">$19.58</td><td class="column-4">$27.84</td><td class="column-5">$50.46</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-41 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-42" class="tablepress tablepress-id-42">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">29</td><td class="column-2">$12.62</td><td class="column-3">$20.01</td><td class="column-4">$28.28</td><td class="column-5">$51.33</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">30</td><td class="column-2">$12.88</td><td class="column-3">$20.45</td><td class="column-4">$28.62</td><td class="column-5">$52.03</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">31</td><td class="column-2">$13.05</td><td class="column-3">$20.88</td><td class="column-4">$29.49</td><td class="column-5">$53.77</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">32</td><td class="column-2">$13.31</td><td class="column-3">$21.32</td><td class="column-4">$30.36</td><td class="column-5">$55.51</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">33</td><td class="column-2">$13.57</td><td class="column-3">$21.75</td><td class="column-4">$31.23</td><td class="column-5">$57.24</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">34</td><td class="column-2">$13.83</td><td class="column-3">$22.40</td><td class="column-4">$32.10</td><td class="column-5">$58.98</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">35</td><td class="column-2">$14.18</td><td class="column-3">$23.27</td><td class="column-4">$33.41</td><td class="column-5">$61.60</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">36</td><td class="column-2">$15.68</td><td class="column-3">$25.08</td><td class="column-4">$36.20</td><td class="column-5">$65.07</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">37</td><td class="column-2">$16.23</td><td class="column-3">$25.11</td><td class="column-4">$38.44</td><td class="column-5">$69.42</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">38</td><td class="column-2">$16.87</td><td class="column-3">$25.13</td><td class="column-4">$41.22</td><td class="column-5">$74.82</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">39</td><td class="column-2">$17.51</td><td class="column-3">$26.34</td><td class="column-4">$43.91</td><td class="column-5">$80.04</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-42 from cache --><br />
	<strong>Ages 40-50</strong><br />

	<table id="tablepress-43" class="tablepress tablepress-id-43">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$18.15</td><td class="column-3">$27.61</td><td class="column-4">$46.51</td><td class="column-5">$85.09</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$18.70</td><td class="column-3">$29.56</td><td class="column-4">$50.40</td><td class="column-5">$92.65</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$19.61</td><td class="column-3">$31.68</td><td class="column-4">$54.21</td><td class="column-5">$100.05</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$20.62</td><td class="column-3">$33.97</td><td class="column-4">$58.16</td><td class="column-5">$107.71</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$21.24</td><td class="column-3">$36.71</td><td class="column-4">$63.43</td><td class="column-5">$117.95</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$21.25</td><td class="column-3">$40.23</td><td class="column-4">$68.46</td><td class="column-5">$127.72</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">46</td><td class="column-2">$22.90</td><td class="column-3">$43.49</td><td class="column-4">$73.84</td><td class="column-5">$138.16</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$24.63</td><td class="column-3">$46.77</td><td class="column-4">$80.11</td><td class="column-5">$150.33</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$26.92</td><td class="column-3">$50.42</td><td class="column-4">$87.73</td><td class="column-5">$165.12</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$29.29</td><td class="column-3">$54.67</td><td class="column-4">$96.33</td><td class="column-5">$181.83</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">50</td><td class="column-2">$31.94</td><td class="column-3">$59.64</td><td class="column-4">$105.66</td><td class="column-5">$199.95</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-43 from cache --></p>
	</div></div>
	<p><em>*Quotes are presented in a monthly premium format. Valid as of 10/19/16. The above quotes are for a non-smoker in excellent health and are subject to changes.</em></p>
	</div>
	<h2>UL Universal Life Insurance Quotes</h2>
	<p>Universal Life, or sometimes called lifetime coverage, is a policy that offers a level premium for life. A universal life policy will offer coverage to up to age 121. The death benefit is fixed.</p>
	<div class="tabcon-area">
	<div class="responsive-tabs">
	<h2 class="tabtitle">Male</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are rates based on a No Lapse Universal Life quote for a healthy non-smoking male with a Preferred Plus rating.</p>
	<p><strong>Ages 16-28</strong><br />

	<table id="tablepress-44" class="tablepress tablepress-id-44">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">16</td><td class="column-2">$35.63</td><td class="column-3">$71.26</td><td class="column-4">$93.10</td><td class="column-5">$124.13</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">17</td><td class="column-2">$35.65</td><td class="column-3">$71.30</td><td class="column-4">$93.15</td><td class="column-5">$124.20</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">18</td><td class="column-2">$35.67</td><td class="column-3">$71.34</td><td class="column-4">$93.18</td><td class="column-5">$124.24</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">19</td><td class="column-2">$35.68</td><td class="column-3">$71.36</td><td class="column-4">$93.23</td><td class="column-5">$124.31</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">20</td><td class="column-2">$35.70</td><td class="column-3">$71.40</td><td class="column-4">$93.27</td><td class="column-5">$124.36</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">21</td><td class="column-2">$35.72</td><td class="column-3">$71.44</td><td class="column-4">$93.32</td><td class="column-5">$124.42</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">22</td><td class="column-2">$35.73</td><td class="column-3">$71.46</td><td class="column-4">$93.35</td><td class="column-5">$124.47</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">23</td><td class="column-2">$35.75</td><td class="column-3">$71.50</td><td class="column-4">$93.40</td><td class="column-5">$124.53</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">24</td><td class="column-2">$35.76</td><td class="column-3">$71.52</td><td class="column-4">$93.44</td><td class="column-5">$124.58</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">25</td><td class="column-2">$35.78</td><td class="column-3">$71.56</td><td class="column-4">$93.48</td><td class="column-5">$124.64</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">26</td><td class="column-2">$37.63</td><td class="column-3">$75.26</td><td class="column-4">$98.24</td><td class="column-5">$130.98</td>
	</tr>
	<tr class="row-13 odd">
		<td class="column-1">27</td><td class="column-2">$39.40</td><td class="column-3">$78.80</td><td class="column-4">$102.81</td><td class="column-5">$137.08</td>
	</tr>
	<tr class="row-14 even">
		<td class="column-1">28</td><td class="column-2">$41.11</td><td class="column-3">$82.22</td><td class="column-4">$107.22</td><td class="column-5">$142.96</td>
	</tr>
	<tr class="row-15 odd">
		<td class="column-1">29</td><td class="column-2">$42.75</td><td class="column-3">$85.50</td><td class="column-4">$111.50</td><td class="column-5">$148.66</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-44 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-45" class="tablepress tablepress-id-45">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">30</td><td class="column-2">$44.34</td><td class="column-3">$88.68</td><td class="column-4">$115.62</td><td class="column-5">$159.51</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">31</td><td class="column-2">$45.88</td><td class="column-3">$91.76</td><td class="column-4">$119.63</td><td class="column-5">$164.69</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">32</td><td class="column-2">$47.37</td><td class="column-3">$94.74</td><td class="column-4">$123.52</td><td class="column-5">$169.73</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">33</td><td class="column-2">$48.81</td><td class="column-3">$97.62</td><td class="column-4">$127.30</td><td class="column-5">$174.61</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">34</td><td class="column-2">$50.21</td><td class="column-3">$100.42</td><td class="column-4">$130.96</td><td class="column-5">$179.38</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">35</td><td class="column-2">$51.57</td><td class="column-3">$103.14</td><td class="column-4">$134.52</td><td class="column-5">$190.40</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">36</td><td class="column-2">$53.96</td><td class="column-3">$107.92</td><td class="column-4">$142.80</td><td class="column-5">$200.98</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">37</td><td class="column-2">$56.28</td><td class="column-3">$112.56</td><td class="column-4">$150.74</td><td class="column-5">$211.17</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">38</td><td class="column-2">$58.53</td><td class="column-3">$117.06</td><td class="column-4">$158.38</td><td class="column-5">$221.01</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">39</td><td class="column-2">$60.72</td><td class="column-3">$121.44</td><td class="column-4">$165.76</td><td class="column-5">$230.52</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-45 from cache --><br />
	<strong>Ages 40-49</strong><br />

	<table id="tablepress-46" class="tablepress tablepress-id-46">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$62.84</td><td class="column-3">$125.68</td><td class="column-4">$172.89</td><td class="column-5">$239.72</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$64.91</td><td class="column-3">$129.82</td><td class="column-4">$179.79</td><td class="column-5">$239.72</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$66.92</td><td class="column-3">$133.84</td><td class="column-4">$186.47</td><td class="column-5">$248.63</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$68.88</td><td class="column-3">$137.76</td><td class="column-4">$192.96</td><td class="column-5">$257.28</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$70.80</td><td class="column-3">$141.60</td><td class="column-4">$199.26</td><td class="column-5">$265.68</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$72.66</td><td class="column-3">$145.32</td><td class="column-4">$205.37</td><td class="column-5">$273.83</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">46</td><td class="column-2">$79.20</td><td class="column-3">$158.40</td><td class="column-4">$222.54</td><td class="column-5">$296.72</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$85.38</td><td class="column-3">$170.76</td><td class="column-4">$238.79</td><td class="column-5">$318.39</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$91.26</td><td class="column-3">$182.52</td><td class="column-4">$254.32</td><td class="column-5">$339.09</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$96.86</td><td class="column-3">$193.72</td><td class="column-4">$269.20</td><td class="column-5">$358.93</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-46 from cache --><br />
	<strong>Ages 50-59</strong><br />

	<table id="tablepress-47" class="tablepress tablepress-id-47">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">50</td><td class="column-2">$102.22</td><td class="column-3">$204.44</td><td class="column-4">$283.48</td><td class="column-5">$377.97</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">51</td><td class="column-2">$102.57</td><td class="column-3">$205.14</td><td class="column-4">$283.78</td><td class="column-5">$378.37</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">52</td><td class="column-2">$107.32</td><td class="column-3">$214.64</td><td class="column-4">$296.52</td><td class="column-5">$395.36</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">53</td><td class="column-2">$111.89</td><td class="column-3">$223.78</td><td class="column-4">$308.82</td><td class="column-5">$411.76</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">54</td><td class="column-2">$116.30</td><td class="column-3">$232.60</td><td class="column-4">$320.72</td><td class="column-5">$427.62</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">55</td><td class="column-2">$120.57</td><td class="column-3">$241.14</td><td class="column-4">$332.21</td><td class="column-5">$442.95</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">56</td><td class="column-2">$131.47</td><td class="column-3">$262.94</td><td class="column-4">$362.26</td><td class="column-5">$483.01</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">57</td><td class="column-2">$141.79</td><td class="column-3">$283.58</td><td class="column-4">$390.68</td><td class="column-5">$520.90</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">58</td><td class="column-2">$151.61</td><td class="column-3">$303.22</td><td class="column-4">$417.77</td><td class="column-5">$557.06</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">59</td><td class="column-2">$160.99</td><td class="column-3">$321.98</td><td class="column-4">$443.67</td><td class="column-5">$591.56</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-47 from cache --><br />
	<strong>Ages 60-65</strong><br />

	<table id="tablepress-48" class="tablepress tablepress-id-48">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">60</td><td class="column-2">$169.95</td><td class="column-3">$339.90</td><td class="column-4">$468.50</td><td class="column-5">$624.66</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">61</td><td class="column-2">$175.11</td><td class="column-3">$350.22</td><td class="column-4">$482.75</td><td class="column-5">$643.67</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">62</td><td class="column-2">$183.23</td><td class="column-3">$366.46</td><td class="column-4">$505.31</td><td class="column-5">$673.75</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">63</td><td class="column-2">$191.05</td><td class="column-3">$382.10</td><td class="column-4">$527.04</td><td class="column-5">$702.72</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">64</td><td class="column-2">$198.60</td><td class="column-3">$397.20</td><td class="column-4">$548.03</td><td class="column-5">$730.71</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">65</td><td class="column-2">$205.89</td><td class="column-3">$411.78</td><td class="column-4">$568.35</td><td class="column-5">$757.80</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-48 from cache --></p>

	</div><h2 class="tabtitle">Female</h2>
	<div class="tabcontent">

	<p class="tabtext">Pricing samples below are rates based on a No Lapse Universal Life quote for a healthy non-smoking female with a Preferred Plus rating.</p>
	<p><strong>Ages 16-28</strong><br />

	<table id="tablepress-49" class="tablepress tablepress-id-49">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">16</td><td class="column-2">$31.61</td><td class="column-3">$63.22</td><td class="column-4">$80.99</td><td class="column-5">$107.99</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">17</td><td class="column-2">$31.63</td><td class="column-3">$63.26</td><td class="column-4">$81.03</td><td class="column-5">$108.04</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">18</td><td class="column-2">$31.64</td><td class="column-3">$63.28</td><td class="column-4">$81.06</td><td class="column-5">$108.08</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">19</td><td class="column-2">$31.66</td><td class="column-3">$63.32</td><td class="column-4">$81.10</td><td class="column-5">$108.13</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">20</td><td class="column-2">$31.67</td><td class="column-3">$63.34</td><td class="column-4">$81.15</td><td class="column-5">$108.20</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">21</td><td class="column-2">$31.69</td><td class="column-3">$63.38</td><td class="column-4">$81.18</td><td class="column-5">$108.24</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">22</td><td class="column-2">$31.70</td><td class="column-3">$63.40</td><td class="column-4">$81.22</td><td class="column-5">$108.29</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">23</td><td class="column-2">$31.72</td><td class="column-3">$63.44</td><td class="column-4">$81.26</td><td class="column-5">$108.34</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">24</td><td class="column-2">$31.73</td><td class="column-3">$63.46</td><td class="column-4">$81.29</td><td class="column-5">$108.39</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">25</td><td class="column-2">$31.74</td><td class="column-3">$63.48</td><td class="column-4">$81.33</td><td class="column-5">$108.44</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">26</td><td class="column-2">$32.98</td><td class="column-3">$65.96</td><td class="column-4">$85.53</td><td class="column-5">$114.04</td>
	</tr>
	<tr class="row-13 odd">
		<td class="column-1">27</td><td class="column-2">$34.18</td><td class="column-3">$68.36</td><td class="column-4">$89.56</td><td class="column-5">$119.41</td>
	</tr>
	<tr class="row-14 even">
		<td class="column-1">28</td><td class="column-2">$35.34</td><td class="column-3">$70.68</td><td class="column-4">$93.44</td><td class="column-5">$124.58</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-49 from cache --><br />
	<strong>Ages 29-39</strong><br />

	<table id="tablepress-50" class="tablepress tablepress-id-50">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">29</td><td class="column-2">$36.47</td><td class="column-3">$72.94</td><td class="column-4">$97.18</td><td class="column-5">$129.57</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">30</td><td class="column-2">$37.56</td><td class="column-3">$75.12</td><td class="column-4">$100.80</td><td class="column-5">$134.40</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">31</td><td class="column-2">$38.63</td><td class="column-3">$77.26</td><td class="column-4">$104.31</td><td class="column-5">$139.08</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">32</td><td class="column-2">$39.66</td><td class="column-3">$79.32</td><td class="column-4">$107.70</td><td class="column-5">$143.60</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">33</td><td class="column-2">$40.68</td><td class="column-3">$81.36</td><td class="column-4">$111.00</td><td class="column-5">$148.00</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">34</td><td class="column-2">$41.66</td><td class="column-3">$83.32</td><td class="column-4">$114.22</td><td class="column-5">$152.29</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">35</td><td class="column-2">$42.63</td><td class="column-3">$85.26</td><td class="column-4">$117.35</td><td class="column-5">$156.47</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">36</td><td class="column-2">$44.93</td><td class="column-3">$89.86</td><td class="column-4">$123.05</td><td class="column-5">$164.07</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">37</td><td class="column-2">$47.15</td><td class="column-3">$94.30</td><td class="column-4">$128.52</td><td class="column-5">$171.36</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">38</td><td class="column-2">$49.28</td><td class="column-3">$98.56</td><td class="column-4">$133.82</td><td class="column-5">$178.42</td>
	</tr>
	<tr class="row-12 even">
		<td class="column-1">39</td><td class="column-2">$51.34</td><td class="column-3">$102.68</td><td class="column-4">$138.95</td><td class="column-5">$185.27</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-50 from cache --><br />
	<strong>Ages 40-49</strong><br />

	<table id="tablepress-51" class="tablepress tablepress-id-51">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">40</td><td class="column-2">$53.34</td><td class="column-3">$106.68</td><td class="column-4">$143.94</td><td class="column-5">$191.92</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">41</td><td class="column-2">$55.27</td><td class="column-3">$110.54</td><td class="column-4">$148.80</td><td class="column-5">$198.40</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">42</td><td class="column-2">$57.15</td><td class="column-3">$114.30</td><td class="column-4">$153.52</td><td class="column-5">$204.69</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">43</td><td class="column-2">$58.97</td><td class="column-3">$117.94</td><td class="column-4">$158.13</td><td class="column-5">$210.84</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">44</td><td class="column-2">$60.75</td><td class="column-3">$121.50</td><td class="column-4">$162.62</td><td class="column-5">$216.82</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">45</td><td class="column-2">$62.48</td><td class="column-3">$124.96</td><td class="column-4">$166.97</td><td class="column-5">$222.63</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">46</td><td class="column-2">$67.41</td><td class="column-3">$134.82</td><td class="column-4">$181.30</td><td class="column-5">$241.73</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">47</td><td class="column-2">$72.03</td><td class="column-3">$144.03</td><td class="column-4">$194.56</td><td class="column-5">$259.41</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">48</td><td class="column-2">$76.42</td><td class="column-3">$152.84</td><td class="column-4">$207.12</td><td class="column-5">$276.16</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">49</td><td class="column-2">$80.61</td><td class="column-3">$161.22</td><td class="column-4">$219.10</td><td class="column-5">$292.13</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-51 from cache --><br />
	<strong>Ages 50-59</strong><br />

	<table id="tablepress-52" class="tablepress tablepress-id-52">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">50</td><td class="column-2">$84.61</td><td class="column-3">$169.22</td><td class="column-4">$230.54</td><td class="column-5">$307.38</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">51</td><td class="column-2">$86.39</td><td class="column-3">$172.78</td><td class="column-4">$235.80</td><td class="column-5">$314.40</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">52</td><td class="column-2">$90.01</td><td class="column-3">$180.02</td><td class="column-4">$246.11</td><td class="column-5">$328.15</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">53</td><td class="column-2">$93.50</td><td class="column-3">$187.00</td><td class="column-4">$256.06</td><td class="column-5">$341.41</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">54</td><td class="column-2">$96.87</td><td class="column-3">$193.74</td><td class="column-4">$265.65</td><td class="column-5">$354.20</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">55</td><td class="column-2">$100.12</td><td class="column-3">$200.24</td><td class="column-4">$274.90</td><td class="column-5">$366.53</td>
	</tr>
	<tr class="row-8 even">
		<td class="column-1">56</td><td class="column-2">$109.33</td><td class="column-3">$218.66</td><td class="column-4">$302.66</td><td class="column-5">$403.54</td>
	</tr>
	<tr class="row-9 odd">
		<td class="column-1">57</td><td class="column-2">$117.93</td><td class="column-3">$235.86</td><td class="column-4">$328.28</td><td class="column-5">$437.70</td>
	</tr>
	<tr class="row-10 even">
		<td class="column-1">58</td><td class="column-2">$126.05</td><td class="column-3">$252.10</td><td class="column-4">$352.42</td><td class="column-5">$469.89</td>
	</tr>
	<tr class="row-11 odd">
		<td class="column-1">59</td><td class="column-2">$133.76</td><td class="column-3">$267.52</td><td class="column-4">$375.27</td><td class="column-5">$500.36</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-52 from cache --><br />
	<strong>Ages 60-65</strong><br />

	<table id="tablepress-53" class="tablepress tablepress-id-53">
	<thead>
	<tr class="row-1 odd">
		<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$200,000</th><th class="column-4">$300,000</th><th class="column-5">$400,000</th>
	</tr>
	</thead>
	<tbody class="row-hover">
	<tr class="row-2 even">
		<td class="column-1">60</td><td class="column-2">$141.11</td><td class="column-3">$282.22</td><td class="column-4">$397.01</td><td class="column-5">$529.35</td>
	</tr>
	<tr class="row-3 odd">
		<td class="column-1">61</td><td class="column-2">$142.29</td><td class="column-3">$284.58</td><td class="column-4">$401.12</td><td class="column-5">$534.82</td>
	</tr>
	<tr class="row-4 even">
		<td class="column-1">62</td><td class="column-2">$148.81</td><td class="column-3">$297.62</td><td class="column-4">$420.34</td><td class="column-5">$560.45</td>
	</tr>
	<tr class="row-5 odd">
		<td class="column-1">63</td><td class="column-2">$155.08</td><td class="column-3">$310.16</td><td class="column-4">$438.81</td><td class="column-5">$585.08</td>
	</tr>
	<tr class="row-6 even">
		<td class="column-1">64</td><td class="column-2">$161.13</td><td class="column-3">$322.26</td><td class="column-4">$456.60</td><td class="column-5">$608.80</td>
	</tr>
	<tr class="row-7 odd">
		<td class="column-1">65</td><td class="column-2">$166.98</td><td class="column-3">$333.96</td><td class="column-4">$473.78</td><td class="column-5">$631.70</td>
	</tr>
	</tbody>
	</table>
	<!-- #tablepress-53 from cache --></p>
	</div></div>
	<p><em>*Quotes are presented in a monthly premium format. Valid as of 10/19/16. The above quotes are for a non-smoker in excellent health and are subject to changes.</em></p>
	</div>
	</section>
	<!-- END PAGE-CONTENT -->

</div>
<?=$this->render('/main/widgets/bio-jonathan-holloway.php'); //Bio Embed Code?>
