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
		<h1>Banner Life Insurance Review</h1>
		<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>

		<div class="content">
			<p><img style="float:right;" src="../../../img/banner-300x166.png" alt="Banner Life Insurance Review" width="300" height="166" /></p>
			<p>In this <strong>Banner Life Insurance review</strong> we cover their financial strength, types of products offered, eligibility, sample rates, complaints, and much more. For those wondering if they are a good choice for life insurance, Banner Life insurance has been around for over 60 years. The company is owned by Legal and General America which was founded in 1836. It is safe to say that Banner Life Insurance is here to stay, and you can trust that they are a good choice for life insurance in 2018 and beyond. If you would like to apply for a policy with Banner, please call 888-407-0714 to speak with on of our licensed agents. You can also get a quote online here.</p>
			<p><span id="more-803"></span></p>
			<h2>Banner Life Insurance Review of Financial Strength</h2>
			<p><img style="float:right;" src="../../../img/LegalAndGeneral.png" alt="Legal And General" width="284" height="208" />Banner Life Insurance is currently rated as A+ (Superior) from A.M. Best effective November 10, 2017. They also hold an A+ rating with the BBB and ratings of AA- with both S&amp;P and Fitch. Parent company Legal and General America boasts 1.2 million US customers, and is in the top ten provider of term life insurance in the United States having issued over $48 billion of new coverage in 2016. According to their <a href="https://www.lgamerica.com/corporate/financials">corporate financials</a>, they currently have over $678 billion of life insurance in force. All of the operating companies under Legal &amp; General America had $4 billion in assets at the end of 2016.</p>
			<h2>Complaints</h2>
			<p>Banner Life Insurance currently holds an A+ rating with the Better Business Bureau. There are complaints posted on the various review sites, but considering that they have over 1.2 million customers, it is <em>a low amount of complaints</em>. Most are due to billing errors and are administrative complaints. Here are links to some of the review sites containing complaints and reviews for you to judge for yourself:</p>
			<ul>
			<li><a href="https://www.bbb.org/greater-maryland/business-reviews/insurance-companies/banner-life-insurance-company-in-frederick-md-3010734">BBB Listing for Banner Life Insurance</a></li>
			<li><a href="https://www.complaintsboard.com/banner-life-insurance-company-b109969">ComplaintsBoard.com</a></li>
			<li><a href="https://www.yelp.com/biz/banner-life-insurance-company-rockville">Yelp.com Reviews of Banner</a></li>
			</ul>
			<h2>Banner Life Insurance Products</h2>
			<h4>OPTerm</h4>
			<p>Banner’s OPTerm life insurance product offers term life insurance coverage for 10, 15, 20, 25, and 30 years. It is also renewable and convertible to permanent life insurance. Coverage amounts for Banner OPTerm range from $100,000 to $1,000,000+, and term lengths vary depending on the applicants age and rate class. Please see the chart below. The premiums are level for the term of the policy, and they will increase annually in the years after the term is up.</p>
			<h4>OPTerm Eligibility</h4>

			<table id="tablepress-81" class="tablepress tablepress-id-81">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">10 Year Term</th><th class="column-2">15 Year Term</th><th class="column-3">20 Year Term</th><th class="column-4">25 Year Term</th><th class="column-5">30 Year Term</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">Age 20-75</td><td class="column-2">Age 20-75</td><td class="column-3">Age 20-70 Non Tobacco<br />
			Age 20-65 Tobacco</td><td class="column-4">Age 20-60 Non Tobacco<br />
			Age 20-55 Tobacco</td><td class="column-5">Age 20-55 Non Tobacco<br />
			Age 20-50 Tobacco</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-81 from cache -->
			<div>
			<h4>Sample Rates for Banner Life Insurance</h4>
			<div class="tabcon-area">
			<div class="responsive-tabs">
			<h2 class="tabtitle">Male</h2>
			<div class="tabcontent">

			<p class="tabtext">Pricing samples below are rates based on a 10-year term for a healthy non-smoking male with a Preferred Plus rating.</p>
			<p>[expand title=&#8221;20-30 Years Old&#8221;]
			<table id="tablepress-71" class="tablepress tablepress-id-71">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">20</td><td class="column-2">$8.49</td><td class="column-3">$12.56</td><td class="column-4">$17.20</td><td class="column-5">$34.62</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">21</td><td class="column-2">$8.49</td><td class="column-3">$12.56</td><td class="column-4">$17.20</td><td class="column-5">$34.62</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">22</td><td class="column-2">$8.49</td><td class="column-3">$12.56</td><td class="column-4">$17.20</td><td class="column-5">$34.62</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">23</td><td class="column-2">$8.49</td><td class="column-3">$12.56</td><td class="column-4">$17.20</td><td class="column-5">$34.62</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">24</td><td class="column-2">$8.49</td><td class="column-3">$12.56</td><td class="column-4">$17.20</td><td class="column-5">$34.62</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">25</td><td class="column-2">$8.49</td><td class="column-3">$12.56</td><td class="column-4">$17.20</td><td class="column-5">$34.62</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">26</td><td class="column-2">$8.49</td><td class="column-3">$12.58</td><td class="column-4">$17.20</td><td class="column-5">$34.83</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">27</td><td class="column-2">$8.49</td><td class="column-3">$12.60</td><td class="column-4">$17.20</td><td class="column-5">$34.83</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">28</td><td class="column-2">$8.49</td><td class="column-3">$12.62</td><td class="column-4">$18.06</td><td class="column-5">$34.83</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">29</td><td class="column-2">$8.49</td><td class="column-3">$12.64</td><td class="column-4">$18.06</td><td class="column-5">$34.83</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">30</td><td class="column-2">$8.49</td><td class="column-3">$12.75</td><td class="column-4">$18.06</td><td class="column-5">$35.69</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-71 from cache -->[/expand]<br />
			[expand title=&#8221;31-41 Years Old&#8221;]
			<table id="tablepress-72" class="tablepress tablepress-id-72">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">31</td><td class="column-2">$8.55</td><td class="column-3">$12.75</td><td class="column-4">$18.06</td><td class="column-5">$35.69</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">32</td><td class="column-2">$8.60</td><td class="column-3">$12.75</td><td class="column-4">$18.06</td><td class="column-5">$35.69</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">33</td><td class="column-2">$8.60</td><td class="column-3">$12.75</td><td class="column-4">$18.06</td><td class="column-5">$35.69</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">34</td><td class="column-2">$8.60</td><td class="column-3">$12.75</td><td class="column-4">$18.06</td><td class="column-5">$35.69</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">35</td><td class="column-2">$8.60</td><td class="column-3">$12.75</td><td class="column-4">$18.06</td><td class="column-5">$35.69</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">36</td><td class="column-2">$8.77</td><td class="column-3">$13.76</td><td class="column-4">$19.49</td><td class="column-5">$38.01</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">37</td><td class="column-2">$9.03</td><td class="column-3">$14.62</td><td class="column-4">$20.21</td><td class="column-5">$39.04</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">38</td><td class="column-2">$9.22</td><td class="column-3">$15.32</td><td class="column-4">$22.14</td><td class="column-5">$41.71</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">39</td><td class="column-2">$9.36</td><td class="column-3">$15.61</td><td class="column-4">$23.65</td><td class="column-5">$44.29</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">40</td><td class="column-2">$9.51</td><td class="column-3">$16.03</td><td class="column-4">$24.94</td><td class="column-5">$47.73</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">41</td><td class="column-2">$9.89</td><td class="column-3">$16.51</td><td class="column-4">$25.80</td><td class="column-5">$53.75</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-72 from cache -->[/expand]<br />
			[expand title=&#8221;42-52 Years Old&#8221;]
			<table id="tablepress-73" class="tablepress tablepress-id-73">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">42</td><td class="column-2">$10.31</td><td class="column-3">$17.29</td><td class="column-4">$27.52</td><td class="column-5">$58.91</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">43</td><td class="column-2">$10.77</td><td class="column-3">$17.29</td><td class="column-4">$29.41</td><td class="column-5">$60.63</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">44</td><td class="column-2">$11.26</td><td class="column-3">$18.34</td><td class="column-4">$31.52</td><td class="column-5">$62.35</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">45</td><td class="column-2">$11.80</td><td class="column-3">$19.69</td><td class="column-4">$33.54</td><td class="column-5">$66.65</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">46</td><td class="column-2">$12.42</td><td class="column-3">$20.88</td><td class="column-4">$36.59</td><td class="column-5">$71.81</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">47</td><td class="column-2">$13.07</td><td class="column-3">$22.12</td><td class="column-4">$39.09</td><td class="column-5">$77.83</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">48</td><td class="column-2">$13.67</td><td class="column-3">$26.29</td><td class="column-4">$39.13</td><td class="column-5">$79.12</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">49</td><td class="column-2">$14.36</td><td class="column-3">$27.00</td><td class="column-4">$43.34</td><td class="column-5">$86.86</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">50</td><td class="column-2">$15.22</td><td class="column-3">$29.37</td><td class="column-4">$47.64</td><td class="column-5">$93.74</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">51</td><td class="column-2">$16.08</td><td class="column-3">$31.52</td><td class="column-4">$51.38</td><td class="column-5">$103.63</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">52</td><td class="column-2">$17.11</td><td class="column-3">$33.97</td><td class="column-4">$56.97</td><td class="column-5">$109.65</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-73 from cache -->[/expand]<br />
			[expand title=&#8221;53-63 Years Old&#8221;]
			<table id="tablepress-74" class="tablepress tablepress-id-74">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">53</td><td class="column-2">$18.23</td><td class="column-3">$34.31</td><td class="column-4">$57.62</td><td class="column-5">$129.00</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">54</td><td class="column-2">$19.61</td><td class="column-3">$37.50</td><td class="column-4">$63.41</td><td class="column-5">$140.18</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">55</td><td class="column-2">$21.07</td><td class="column-3">$40.96</td><td class="column-4">$70.52</td><td class="column-5">$146.41</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">56</td><td class="column-2">$22.70</td><td class="column-3">$44.16</td><td class="column-4">$76.97</td><td class="column-5">$171.14</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">57</td><td class="column-2">$24.51</td><td class="column-3">$46.73</td><td class="column-4">$83.89</td><td class="column-5">$190.92</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">58</td><td class="column-2">$26.57</td><td class="column-3">$55.57</td><td class="column-4">$92.41</td><td class="column-5">$209.84</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">59</td><td class="column-2">$28.94</td><td class="column-3">$60.98</td><td class="column-4">$103.03</td><td class="column-5">$229.62</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">60</td><td class="column-2">$31.35</td><td class="column-3">$67.53</td><td class="column-4">$113.46</td><td class="column-5">$246.17</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">61</td><td class="column-2">$34.73</td><td class="column-3">$76.11</td><td class="column-4">$126.61</td><td class="column-5">$286.38</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">62</td><td class="column-2">$38.55</td><td class="column-3">$83.85</td><td class="column-4">$141.34</td><td class="column-5">$317.77</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">63</td><td class="column-2">$41.88</td><td class="column-3">$89.44</td><td class="column-4">$157.64</td><td class="column-5">$317.77</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-74 from cache -->[/expand]<br />
			[expand title=&#8221;64-75 Years Old&#8221;]
			<table id="tablepress-75" class="tablepress tablepress-id-75">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">64</td><td class="column-2">$47.13</td><td class="column-3">$101.69</td><td class="column-4">$176.40</td><td class="column-5">$356.47</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">65</td><td class="column-2">$52.63</td><td class="column-3">$109.65</td><td class="column-4">$197.17</td><td class="column-5">$396.03</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">66</td><td class="column-2">$58.22</td><td class="column-3">$125.11</td><td class="column-4">$219.71</td><td class="column-5">$443.67</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">67</td><td class="column-2">$64.07</td><td class="column-3">$137.60</td><td class="column-4">$237.25</td><td class="column-5">$508.47</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">68</td><td class="column-2">$71.47</td><td class="column-3">$145.38</td><td class="column-4">$276.24</td><td class="column-5">$534.23</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">69</td><td class="column-2">$79.03</td><td class="column-3">$162.66</td><td class="column-4">$308.04</td><td class="column-5">$598.99</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">70</td><td class="column-2">$87.66</td><td class="column-3">$182.05</td><td class="column-4">$343.57</td><td class="column-5">$674.67</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">71</td><td class="column-2">$97.78</td><td class="column-3">$206.75</td><td class="column-4">$390.98</td><td class="column-5">$770.13</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">72</td><td class="column-2">$109.31</td><td class="column-3">$234.89</td><td class="column-4">$445.04</td><td class="column-5">$914.61</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">73</td><td class="column-2">$122.55</td><td class="column-3">$273.61</td><td class="column-4">$480.93</td><td class="column-5">$1,068.12</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">74</td><td class="column-2">$138.03</td><td class="column-3">$310.37</td><td class="column-4">$557.45</td><td class="column-5">$1,163.58</td>
			</tr>
			<tr class="row-13 odd">
				<td class="column-1">75</td><td class="column-2">$155.75</td><td class="column-3">$357.11</td><td class="column-4">$649.39</td><td class="column-5">$1,536.70</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-75 from cache -->[/expand]</p>

			</div><h2 class="tabtitle">Female</h2>
			<div class="tabcontent">

			<p class="tabtext">Pricing samples below are rates based on a 10-year term for a healthy non-smoking female with a Preferred Plus rating.</p>
			<p>[expand title=&#8221;20-30 Years Old&#8221;]
			<table id="tablepress-76" class="tablepress tablepress-id-76">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">20</td><td class="column-2">$6.88</td><td class="column-3">$8.60</td><td class="column-4">$12.04</td><td class="column-5">$18.40</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">21</td><td class="column-2">$6.88</td><td class="column-3">$8.60</td><td class="column-4">$12.04</td><td class="column-5">$18.40</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">22</td><td class="column-2">$6.88</td><td class="column-3">$8.60</td><td class="column-4">$12.04</td><td class="column-5">$18.40</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">23</td><td class="column-2">$6.88</td><td class="column-3">$8.60</td><td class="column-4">$12.04</td><td class="column-5">$18.40</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">24</td><td class="column-2">$6.88</td><td class="column-3">$8.60</td><td class="column-4">$12.04</td><td class="column-5">$18.40</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">25</td><td class="column-2">$6.88</td><td class="column-3">$8.60</td><td class="column-4">$12.04</td><td class="column-5">$18.40</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">26</td><td class="column-2">$6.88</td><td class="column-3">$8.60</td><td class="column-4">$12.04</td><td class="column-5">$18.40</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">27</td><td class="column-2">$6.88</td><td class="column-3">$8.60</td><td class="column-4">$12.04</td><td class="column-5">$18.40</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">28</td><td class="column-2">$7.88</td><td class="column-3">$9.55</td><td class="column-4">$12.25</td><td class="column-5">$22.79</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">29</td><td class="column-2">$7.89</td><td class="column-3">$9.55</td><td class="column-4">$12.25</td><td class="column-5">$22.79</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">30</td><td class="column-2">$7.90</td><td class="column-3">$9.55</td><td class="column-4">$12.25</td><td class="column-5">$22.79</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-76 from cache -->[/expand]<br />
			[expand title=&#8221;31-41 Years Old&#8221;]
			<table id="tablepress-77" class="tablepress tablepress-id-77">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">31</td><td class="column-2">$7.92</td><td class="column-3">$9.59</td><td class="column-4">$12.68</td><td class="column-5">$22.79</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">32</td><td class="column-2">$7.95</td><td class="column-3">$9.63</td><td class="column-4">$12.90</td><td class="column-5">$22.79</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">33</td><td class="column-2">$7.97</td><td class="column-3">$10.10</td><td class="column-4">$13.11</td><td class="column-5">$27.09</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">34</td><td class="column-2">$8.00</td><td class="column-3">$10.32</td><td class="column-4">$13.33</td><td class="column-5">$27.73</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">35</td><td class="column-2">$8.02</td><td class="column-3">$10.32</td><td class="column-4">$13.54</td><td class="column-5">$29.24</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">36</td><td class="column-2">$8.19</td><td class="column-3">$10.71</td><td class="column-4">$13.54</td><td class="column-5">$30.01</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">37</td><td class="column-2">$8.38</td><td class="column-3">$11.18</td><td class="column-4">$13.97</td><td class="column-5">$30.79</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">38</td><td class="column-2">$8.57</td><td class="column-3">$12.17</td><td class="column-4">$17.54</td><td class="column-5">$34.61</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">39</td><td class="column-2">$8.78</td><td class="column-3">$12.81</td><td class="column-4">$18.83</td><td class="column-5">$36.55</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">40</td><td class="column-2">$9.00</td><td class="column-3">$13.46</td><td class="column-4">$20.55</td><td class="column-5">$37.41</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">41</td><td class="column-2">$9.03</td><td class="column-3">$14.10</td><td class="column-4">$21.03</td><td class="column-5">$39.99</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-77 from cache -->[/expand]<br />
			[expand title=&#8221;42-52 Years Old&#8221;]
			<table id="tablepress-78" class="tablepress tablepress-id-78">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">42</td><td class="column-2">$9.03</td><td class="column-3">$14.55</td><td class="column-4">$21.93</td><td class="column-5">$41.71</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">43</td><td class="column-2">$9.03</td><td class="column-3">$14.55</td><td class="column-4">$22.57</td><td class="column-5">$46.87</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">44</td><td class="column-2">$9.46</td><td class="column-3">$15.32</td><td class="column-4">$24.08</td><td class="column-5">$51.17</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">45</td><td class="column-2">$9.98</td><td class="column-3">$16.08</td><td class="column-4">$25.58</td><td class="column-5">$56.33</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">46</td><td class="column-2">$10.41</td><td class="column-3">$17.13</td><td class="column-4">$27.52</td><td class="column-5">$59.77</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">47</td><td class="column-2">$10.84</td><td class="column-3">$18.26</td><td class="column-4">$29.24</td><td class="column-5">$64.29</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">48</td><td class="column-2">$11.35</td><td class="column-3">$19.78</td><td class="column-4">$32.46</td><td class="column-5">$74.30</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">49</td><td class="column-2">$11.95</td><td class="column-3">$21.25</td><td class="column-4">$34.61</td><td class="column-5">$79.55</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">50</td><td class="column-2">$12.64</td><td class="column-3">$22.61</td><td class="column-4">$37.32</td><td class="column-5">$83.85</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">51</td><td class="column-2">$13.33</td><td class="column-3">$24.01</td><td class="column-4">$40.30</td><td class="column-5">$89.01</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">52</td><td class="column-2">$14.19</td><td class="column-3">$25.50</td><td class="column-4">$43.64</td><td class="column-5">$92.02</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-78 from cache -->[/expand]<br />
			[expand title=&#8221;53-63 Years Old&#8221;]
			<table id="tablepress-79" class="tablepress tablepress-id-79">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">53</td><td class="column-2">$15.05</td><td class="column-3">$28.51</td><td class="column-4">$49.36</td><td class="column-5">$100.62</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">54</td><td class="column-2">$16.00</td><td class="column-3">$30.44</td><td class="column-4">$54.09</td><td class="column-5">$110.08</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">55</td><td class="column-2">$17.11</td><td class="column-3">$32.81</td><td class="column-4">$56.97</td><td class="column-5">$118.68</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">56</td><td class="column-2">$18.06</td><td class="column-3">$34.83</td><td class="column-4">$61.92</td><td class="column-5">$135.88</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">57</td><td class="column-2">$19.18</td><td class="column-3">$37.54</td><td class="column-4">$66.65</td><td class="column-5">$152.22</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">58</td><td class="column-2">$21.24</td><td class="column-3">$39.99</td><td class="column-4">$71.38</td><td class="column-5">$169.42</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">59</td><td class="column-2">$22.53</td><td class="column-3">$43.00</td><td class="column-4">$77.40</td><td class="column-5">$185.76</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">60</td><td class="column-2">$23.99</td><td class="column-3">$47.66</td><td class="column-4">$84.28</td><td class="column-5">$202.96</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">61</td><td class="column-2">$25.63</td><td class="column-3">$51.60</td><td class="column-4">$93.31</td><td class="column-5">$232.20</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">62</td><td class="column-2">$27.43</td><td class="column-3">$59.47</td><td class="column-4">$101.48</td><td class="column-5">$261.44</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">63</td><td class="column-2">$39.74</td><td class="column-3">$89.44</td><td class="column-4">$157.64</td><td class="column-5">$291.54</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-79 from cache --><br />
			[expand title=&#8221;64-75 Years Old&#8221;]
			<table id="tablepress-80" class="tablepress tablepress-id-80">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">Age</th><th class="column-2">$100,000</th><th class="column-3">$250,000</th><th class="column-4">$500,000</th><th class="column-5">$1,000,000</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">64</td><td class="column-2">$45.50</td><td class="column-3">$100.62</td><td class="column-4">$176.40</td><td class="column-5">$320.78</td>
			</tr>
			<tr class="row-3 odd">
				<td class="column-1">65</td><td class="column-2">$51.27</td><td class="column-3">$109.65</td><td class="column-4">$195.22</td><td class="column-5">$350.02</td>
			</tr>
			<tr class="row-4 even">
				<td class="column-1">66</td><td class="column-2">$56.86</td><td class="column-3">$124.48</td><td class="column-4">$219.71</td><td class="column-5">$403.34</td>
			</tr>
			<tr class="row-5 odd">
				<td class="column-1">67</td><td class="column-2">$62.71</td><td class="column-3">$137.60</td><td class="column-4">$237.25</td><td class="column-5">$455.80</td>
			</tr>
			<tr class="row-6 even">
				<td class="column-1">68</td><td class="column-2">$65.75</td><td class="column-3">$141.86</td><td class="column-4">$241.44</td><td class="column-5">$509.12</td>
			</tr>
			<tr class="row-7 odd">
				<td class="column-1">69</td><td class="column-2">$73.79</td><td class="column-3">$162.66</td><td class="column-4">$286.21</td><td class="column-5">$561.58</td>
			</tr>
			<tr class="row-8 even">
				<td class="column-1">70</td><td class="column-2">$76.63</td><td class="column-3">$182.05</td><td class="column-4">$333.25</td><td class="column-5">$614.90</td>
			</tr>
			<tr class="row-9 odd">
				<td class="column-1">71</td><td class="column-2">$90.30</td><td class="column-3">$205.75</td><td class="column-4">$374.10</td><td class="column-5">$691.44</td>
			</tr>
			<tr class="row-10 even">
				<td class="column-1">72</td><td class="column-2">$99.67</td><td class="column-3">$227.90</td><td class="column-4">$415.38</td><td class="column-5">$768.84</td>
			</tr>
			<tr class="row-11 odd">
				<td class="column-1">73</td><td class="column-2">$109.66</td><td class="column-3">$246.60</td><td class="column-4">$456.23</td><td class="column-5">$819.58</td>
			</tr>
			<tr class="row-12 even">
				<td class="column-1">74</td><td class="column-2">$121.47</td><td class="column-3">$275.69</td><td class="column-4">$522.02</td><td class="column-5">$922.78</td>
			</tr>
			<tr class="row-13 odd">
				<td class="column-1">75</td><td class="column-2">$145.94</td><td class="column-3">$357.11</td><td class="column-4">$647.15</td><td class="column-5">$1,186.80</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-80 from cache --></p>
			</div></div>
			<p><em>*Quotes are presented in a monthly premium format. The rates shown in these charts are the new rates coming out 2/26/18. The above rates are for a non-smoker in excellent health and are subject to changes.</em></p>
			</div>
			<h4>OPTerm Riders</h4>
			<p>The accelerated death benefit is payable in the event of a qualifying terminal illness. The max amount payable is the lesser of $500,000 or 75% of the policy’s death benefit. Additional riders are available depending on the resident state of the insured.</p>
			<h3>APPcelerate</h3>
			<p>In addition to the great OPTerm product that is offered, Banner now offers accelerated underwriting to qualified applicants. <strong>This mean that applicants can get a <a href="https://phpstack-223893-690316.cloudwaysapps.com/">life insurance without the exam</a> and labs</strong>, which greatly reduces the time to get coverage in force. With APPcelerate, applicants can be <a href="https://phpstack-223893-690316.cloudwaysapps.com/life-insurance/approval-time/">approved</a> as soon as the next business day. Refer to the chart below for eligibility and coverage amounts. The rates will be the same as OPTerm listed in the <a href="https://phpstack-223893-690316.cloudwaysapps.com/life-insurance/term/rates/">sample rates</a> section.</p>
			<p>For those strictly looking for a policy with no medical exam, also consider <a href="https://phpstack-223893-690316.cloudwaysapps.com/life-insurance/companies/sagicor/">Sagicor Life Insurance</a>.</p>
			<h4>APPcelerate Eligibility</h4>

			<table id="tablepress-82" class="tablepress tablepress-id-82">
			<thead>
			<tr class="row-1 odd">
				<th class="column-1">OPTerm 10</th><th class="column-2">OPTerm 15, 20, 25, and 30</th>
			</tr>
			</thead>
			<tbody class="row-hover">
			<tr class="row-2 even">
				<td class="column-1">$100,000-$500,000, Ages 20-50<br />
			</td><td class="column-2">$100,000 - $1,000,000, Ages 20-40<br />
			$100,000 - $750,000 Ages, 41-45<br />
			$100,000 - $500,000, Ages 46-50</td>
			</tr>
			</tbody>
			</table>
			<!-- #tablepress-82 from cache -->
			<h3>Universal Life Insurance</h3>
			<p>Banner Life Insurance also offers a universal life insurance product called Life Step UL. It is a flexible premium universal life plan. Life Step UL offers guaranteed coverage to maturity at age 121. This product was designed to be converted from term coverage or new policies with face amounts as low as $50,000. The guaranteed interest crediting rate for Life Step UL is 2% per annum. The issue ages are 20-80 and are based on your age nearest birthday. The premium will not exceed the guaranteed premium.</p>
			<h3>Conclusion</h3>
			<p>We hope this Banner Life Insurance review has helped guide you on your decision to <a href="https://phpstack-223893-690316.cloudwaysapps.com/">purchase a life insurance policy</a>. It is no wonder that Banner Life Insurance is one of the top 10 life insurance companies in business today. Their strong financial rating combined with cheap rates and fast underwriting make them a strong contender when choosing a company for your life insurance needs. If you need assistance in purchasing life insurance, you can reach out to one of our licensed agents at 888-407-0714 or <a href="https://phpstack-223893-690316.cloudwaysapps.com/apply-now/">request a quote here</a> and we will be in touch.</p>
		</div>
		<h2>Related Articles</h2>
			<?=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]); ?>
	</section>
	<!-- END PAGE-CONTENT -->

</div>
