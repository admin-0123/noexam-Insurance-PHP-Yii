<?php

use app\assets\AppAsset;
use app\components\BreadcrumbsNew;
use app\widgets\Author;
use yii\bootstrap\BootstrapAsset;
use yii\web\JqueryAsset;
use yii\web\View;
use app\widgets\CompanyRating;
use app\widgets\ApplyRateForm;




$isMobile = Yii::$app->params['devicedetect']['isMobile'];


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

$this->registerCssFile('@web/v2/my-quote/css/quote-results.css', ['depends' => [BootstrapAsset::className(), AppAsset::className()]]);
$this->registerCssFile('@web/v2/common/css/get-started.css', ['depends' => [BootstrapAsset::className(), AppAsset::className()]]);
$this->registerCssFile('@web/v2/common/css/questions.css', ['depends' => [BootstrapAsset::className(), AppAsset::className()]]);
$this->registerCssFile('@web/v2/common/css/toggle-btn.css', ['depends' => [BootstrapAsset::className(), AppAsset::className()]]);
$this->registerCssFile('@web/v2/life-insurance/css/top-companies-v1.css', ['depends' => [BootstrapAsset::className(), AppAsset::className()]]);
$this->registerCssFile('@web/v2/life-insurance/css/top-companies-v2.css', ['depends' => [BootstrapAsset::className(), AppAsset::className()]]);
$this->registerCssFile('@web/v2/life-insurance/css/best-companies.css', ['depends' => [BootstrapAsset::className(), AppAsset::className()]]);
$this->registerJsFile('@web/v2/life-insurance/js/best-companies.js', ['depends' => [JqueryAsset::className(), AppAsset::className()]]);
$this->registerJsFile('@web/v2/plugins/js/tinysort.min.js', ['depends' => [JqueryAsset::className(), AppAsset::className()]]);
$this->registerJsFile('@web/v2/plugins/js/jquery.tinysort.min.js', ['depends' => [JqueryAsset::className(), AppAsset::className()]]);
$this->registerJsFile('@web/v2/life-insurance/js/top-companies.js', ['depends' => [JqueryAsset::className(), AppAsset::className()]]);

$this->params['breadcrumbs'][] = ['label' => 'Life Insurance', 'url' => '/life-insurance/', 'class' => 'breadcrumbs__link tags'];
#$this->params['breadcrumbs'][] = ['label' => 'Term Life Insurance', 'url' => '/life-insurance/term/'];
$this->params['breadcrumbs'][] = ['label' => 'Top 8 Life Insurance Companies', 'class' => 'breadcrumbs__link tags breadcrumbs__link--active'];
#$this->params['breadcrumbs'][] = ['label' => 'Top 8 Life Insurance Companies', 'url' => $this->context->current_cat->url, 'class' => 'breadcrumbs__link tags breadcrumbs__link--active'];
#$this->params['breadcrumbs'][] = $this->context->current_cat->title;


?>
<div class="main-wrapp get-started-wrap-mirrored">
	<div class="wrapp">
		<section class="get-started">
			<h1 class="get-started__title heading-2">Best No Exam Life Insurance in 2023</h1>
			<p class="get-started__subtitle fontBodyL">Compare quotes with the top life insurance companies</p>
			<div class="d-flex justify-content-center align-items-center">
				<span class="get-started__date">Last updated: <?=date('F j, Y', filemtime(__FILE__));?>.</span>
				<div class="fs-advice__col" data-toggle="popover">
					<a class="get-started__link"
					   role="button"
					   tabindex="-1"
					   data-content="NoExam.com may receive compensation when visitors click on and/or apply to life insurance offers featured on NoExam.com.">Advertiser Disclosure
					</a>
				</div>
			</div>
		</section>
	</div>
</div>

<div class="main-wrapp bg1">
	<div class="wrapp">
		<div class="top-companies-v1">
			<div id="sorting_list" class="top-companies-v2__body position-relative">
				
				<div class="item top-companies-v2__row" data-weight="1" data-peoples-count="189" data-company-name="Haven Life">
					<div class="top-companies-v2__card company-card-v2">
						<div class="top-companies-v2-card__col"><a href="#havenFormModal" data-toggle="modal">
							<?=CompanyRating::widget(['logo_url' => '/img/company_logos/logo_haven_life3.png', 'logo_alt' => 'Haven Life', 'reviews' => 1080, 'rating' => 4.4]);?></a>
						</div>
						<div class="top-companies-v2-card__col">
							<div class="company-card__company-name heading-6">Haven Life Insurance</div>
							<ul class="company-card__list">
								<li class="company-card__list-item fontBodyM">Ages 20-55</li>
								<li class="company-card__list-item fontBodyM">Online Application</li>
								<li class="company-card__list-item fontBodyM">Up to $1,000,000</li>
								<li class="company-card__list-item fontBodyM">No Exam Required</li>
							</ul>
						</div>
						<div class="top-companies-v2-card__col">
							<!-- <a href="/out/haven.php" class="company-card__link button-small main-btn" id="haven-click">Get Rates</a> -->
							<a href="#havenFormModal" class="company-card__link button-small main-btn" data-toggle="modal">Get Rates</a>
							<div class="top-companies-v2-card__order">1</div>
						</div>
					</div>
				</div>

				<!-- Haven Form Modal -->
				<div class="modal fade" id="havenFormModal" tabindex="-1" aria-labelledby="havenFormModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-body p-0">
								<?= ApplyRateForm::widget(['form' => 'apply-rate-form', 'redirect' => '/out/haven.php']); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="item top-companies-v2__row" data-weight="2" data-peoples-count="112" data-company-name="Quility">
					<div class="top-companies-v2__card company-card-v2">
						<div class="top-companies-v2-card__col"><a href="#quilityFormModal" data-toggle="modal">
							<?=CompanyRating::widget(['logo_url' => '/img/company_logos/logo-quility.png', 'logo_alt' => 'Quility Life Insurance', 'reviews' => 1489, 'rating' => 4.3]);?></a>
						</div>
						<div class="top-companies-v2-card__col">
							<div class="company-card__company-name heading-6">Quility</div>
							<ul class="company-card__list">
								<li class="company-card__list-item fontBodyM">Ages 20-60</li>
								<li class="company-card__list-item fontBodyM">Instant Decision</li>
								<li class="company-card__list-item fontBodyM">Up to $1,000,000</li>
								<li class="company-card__list-item fontBodyM">No Exam Required</li>
							</ul>
						</div>
						<div class="top-companies-v2-card__col">
							<!-- <a href="/out/quility.php" class="company-card__link button-small main-btn" id="quility-click">Get Rates</a> -->
							<a href="#quilityFormModal" class="company-card__link button-small main-btn" data-toggle="modal">Get Rates</a>
							<div class="top-companies-v2-card__order">2</div>
						</div>
					</div>
				</div>

				<!-- Quality Form Modal -->
				<div class="modal fade" id="quilityFormModal" tabindex="-1" aria-labelledby="qualityFormModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-body p-0">
								<?= ApplyRateForm::widget(['form' => 'apply-rate-form', 'redirect' => '/out/quility.php']); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="item top-companies-v2__row" data-weight="2" data-peoples-count="144" data-company-name="Ethos">
					<div class="top-companies-v2__card company-card-v2">
						<div class="top-companies-v2-card__col"><a href="#ethosFormModal" data-toggle="modal">
							<?=CompanyRating::widget(['logo_url' => '/img/company_logos/logo_ethos_3.jpg', 'logo_alt' => 'Ethos Life Insurance', 'reviews' => 684, 'rating' => 4.7]);?></a>
						</div>
						<div class="top-companies-v2-card__col">
							<div class="company-card__company-name heading-6">Ethos Life</div>
							<ul class="company-card__list">
								<li class="company-card__list-item fontBodyM">Ages 20-65</li>
								<li class="company-card__list-item fontBodyM">Online Application</li>
								<li class="company-card__list-item fontBodyM">Up to $2,000,000</li>
								<li class="company-card__list-item fontBodyM">Rarely Requires Exam</li>
							</ul>
						</div>
						<div class="top-companies-v2-card__col">
							<!-- <a href="/out/ethos.php" class="company-card__link button-small main-btn" id="mutual-of-omaha-click">Get Rates</a> -->
							<a href="#ethosFormModal" class="company-card__link button-small main-btn" data-toggle="modal">Get Rates</a>
							<div class="top-companies-v2-card__order">3</div>
						</div>
					</div>
				</div>

				<!-- Ethos Form Modal -->
				<div class="modal fade" id="ethosFormModal" tabindex="-1" aria-labelledby="ethosFormModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-body p-0">
								<?= ApplyRateForm::widget(['form' => 'apply-rate-form', 'redirect' => '/out/ethos.php']); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="item top-companies-v2__row" data-weight="2" data-peoples-count="112" data-company-name="Ladder Life">
					<div class="top-companies-v2__card company-card-v2">
						<div class="top-companies-v2-card__col"><a href="#ladderFormModal" data-toggle="modal">
							<?=CompanyRating::widget(['logo_url' => '/img/company_logos/logo_ladder_2.png', 'logo_alt' => 'Ladder Life', 'reviews' => 2509, 'rating' => 4.8]);?></a>
						</div>
						<div class="top-companies-v2-card__col">
							<div class="company-card__company-name heading-6">Ladder Life</div>
							<ul class="company-card__list">
								<li class="company-card__list-item fontBodyM">Ages 20-60</li>
								<li class="company-card__list-item fontBodyM">Most Policies Issued in Minutes</li>
								<li class="company-card__list-item fontBodyM">Up to $3,000,000</li>
								<li class="company-card__list-item fontBodyM">Adjust Coverage as Needed</li>
							</ul>
						</div>
						<div class="top-companies-v2-card__col">
							<!-- <a href="/out/ladder.php" class="company-card__link button-small main-btn" id="ladder-click">Get Rates</a> -->
							<a href="#ladderFormModal" class="company-card__link button-small main-btn" data-toggle="modal">Get Rates</a>
							<div class="top-companies-v2-card__order">4</div>
						</div>
					</div>
				</div>

				<!-- Ladder Form Modal -->
				<div class="modal fade" id="ladderFormModal" tabindex="-1" aria-labelledby="ladderFormModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-body p-0">
								<?= ApplyRateForm::widget(['form' => 'apply-rate-form', 'redirect' => '/out/ladder.php']); ?>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
</div>
</div>
<div class="main-wrapp bg0">
	<div class="wrapp mt-4">
		<h1 class="heading-5 py-4">Life Insurance Company Details</h1>
	</div>
</div>
<div class="main-wrapp bg0">
	<div class="wrapp mb-4">
		<div id="haven" class="companies__item company mb-4" data-id="46" data-company="haven">
			<div class="d-flex flex-row-reverse flex-sm-row flex-nowrap justify-content-between align-items-center mb-4">
				<div class="company__header-column">
					<div class="company__logo-box">
						<a href="https://www.noexam.com/out/haven.php"><img class="company__logo lazy loaded" alt="Haven Life" from_cdn="" lazyload="1" data-src="/uploads/logo-haven-life.png" src="/uploads/logo-haven-life.png" data-was-processed="true"></a>
					</div>
				</div>
			<div class="company__header-column">
				<span class="company__name heading-5">Haven Life</span>
				<span class="company__rating-label fontBodyS">Our Rating</span>
				<div class="company__rating-stars">
					<img class="star" src="/v2/common/images/stars/5.svg" alt="Rating: 5"></div>
				</div>
				<div class="company__header-column">
					<a href="https://www.noexam.com/out/haven.php" class="top_company__link main-btn button-small" target="_blank" rel="noopener nofollow">apply now</a>
				</div>
			</div>
			<div class="company__decor-line"></div>
			<div class="company__row">
				<div class="company__col">
					<span class="company__label fontBodyS">Type of coverage</span>
					<span class="company__value fontBodyM">Term</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">Financial Strength</span>
					<span class="company__value fontBodyM">A++ (Superior)</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">Approval Time</span>
					<span class="company__value fontBodyM">Minutes</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">BBB Rating</span>
					<span class="company__value fontBodyM">A+</span>
				</div>
			</div>
			
			<div class="company__footer">
				<div class="company__footer-title main-title">About Haven Life</div>
				<p class="company__content fontBodyM"></p>
				<p class="company__content fontBodyM"><a href="https://www.noexam.com/out/haven.php">Haven Life Insurance</a> is a good company to buy term life insurance from for several reasons. Firstly, it offers competitive rates for term life insurance policies, which can help you save money on premiums over the life of your policy. Secondly, it has a quick and easy online application process that can be completed in minutes, without the need for a medical exam. This makes obtaining coverage more convenient and accessible for many people.</p>
				<p class="company__content fontBodyM">Another reason we rank Haven Life Insurance so highly for term life insurance is its strong financial stability and backing. The company is a subsidiary of MassMutual, a leading mutual life insurance company with a long history and strong financial ratings. Policyholders can feel confident that their coverage is backed by a financially sound company with a solid reputation in the industry.</p>
				<p class="company__content fontBodyM">Overall, Haven Life Insurance is our top recommendation for those looking for affordable, convenient, and reliable term life insurance coverage. However, it's always a good idea to compare rates and coverage options from multiple providers on this page to ensure you're getting the best value for your individual needs and circumstances.</p>
				</div>
				<div class="company__footer-btn btn-read-more">read more</div>
				<div class="company__footer-btn company__footer-btn--active btn-hide">hide</div>
				<div id="shadow"></div>
				<div class="company__decor-line company__decor-line--adaptive"></div>
				<div class="top_company__footer-btns-box">
					<a href="https://www.noexam.com/out/haven.php" class="company__footer-link main-btn button-small" target="_blank" rel="noopener nofollow">apply now</a>
				</div>
			</div>


			<div id="Quility" class="companies__item company mb-4" data-id="46" data-company="quility">
			<div class="d-flex flex-row-reverse flex-sm-row flex-nowrap justify-content-between align-items-center mb-4">
				<div class="company__header-column">
					<div class="company__logo-box">
						<a href="https://www.noexam.com/out/quility.php"><img class="company__logo lazy loaded" alt="Haven Life" from_cdn="" lazyload="1" data-src="/img/company_logos/logo-quility.png" src="/img/company_logos/logo-quility.png" data-was-processed="true"></a>
					</div>
				</div>
			<div class="company__header-column">
				<span class="company__name heading-5">Quility</span>
				<span class="company__rating-label fontBodyS">Our Rating</span>
				<div class="company__rating-stars">
					<img class="star" src="/v2/common/images/stars/5.svg" alt="Rating: 5"></div>
				</div>
				<div class="company__header-column">
					<a href="https://www.noexam.com/out/quility.php" class="top_company__link main-btn button-small" target="_blank" rel="noopener nofollow">apply now</a>
				</div>
			</div>
			<div class="company__decor-line"></div>
			<div class="company__row">
				<div class="company__col">
					<span class="company__label fontBodyS">Type of coverage</span>
					<span class="company__value fontBodyM">Term</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">Financial Strength</span>
					<span class="company__value fontBodyM">A- (Excellent)</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">Approval Time</span>
					<span class="company__value fontBodyM">Minutes</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">BBB Rating</span>
					<span class="company__value fontBodyM">A+</span>
				</div>
			</div>
			
			<div class="company__footer">
				<div class="company__footer-title main-title">About Quility</div>
				<p class="company__content fontBodyM"><a href="https://www.noexam.com/out/quility.php">Quility</a> is a new life insurance company that partnered with SBLI, or Savings Bank Life Insurance, to offer a quick and easy way to buy term life insurance online. All policies are issued by SBLI, meaning you get the peace of mind of knowing your life insurance company has great financial ratings and over 100 years of experience.</p>
				<p class="company__content fontBodyM">Applying for a Quility Level Term policy means you will not have to take a medical exam, and you will have a decision in minutes. You can apply for coverage amounts up to $1,000,000 and term lengths of 10, 15, 20, or 30 years depending on your age. Applicants must be between the ages of 18-60.</p>
				<p class="company__content fontBodyM">Quility Level Term offers competitive rates for term life insurance and even has additional riders you can add to your policy such as coverage for your children. The competitive rates, easy application, and financial strength make Quility Level Term a great choice for term life insurance.</p>

				</div>
				<div class="company__footer-btn btn-read-more">read more</div>
				<div class="company__footer-btn company__footer-btn--active btn-hide">hide</div>
				<div id="shadow"></div>
				<div class="company__decor-line company__decor-line--adaptive"></div>
				<div class="top_company__footer-btns-box">
					<a href="https://www.noexam.com/out/quility.php" class="company__footer-link main-btn button-small" target="_blank" rel="noopener nofollow">apply now</a>
				</div>
			</div>

			<div id="ethos" class="companies__item company mb-4" data-id="46" data-company="ethos">
			<div class="d-flex flex-row-reverse flex-sm-row flex-nowrap justify-content-between align-items-center mb-4">
				<div class="company__header-column">
					<div class="company__logo-box">
						<a href="https://www.noexam.com/out/ethos.php"><img class="company__logo lazy loaded" alt="Ladder" from_cdn="" lazyload="1" data-src="/img/company_logos/logo_ethos_3.jpg" src="/img/company_logos/logo_ethos_3.jpg" data-was-processed="true"></a>
					</div>
				</div>
			<div class="company__header-column">
				<span class="company__name heading-5">Ethos</span>
				<span class="company__rating-label fontBodyS">Our Rating</span>
				<div class="company__rating-stars">
					<img class="star" src="/v2/common/images/stars/5.svg" alt="Rating: 5"></div>
				</div>
				<div class="company__header-column">
					<a href="https://www.noexam.com/out/ethos.php" class="top_company__link main-btn button-small" target="_blank" rel="noopener nofollow">apply now</a>
				</div>
			</div>

			<div class="company__decor-line"></div>
			<div class="company__row">
				<div class="company__col">
					<span class="company__label fontBodyS">Type of coverage</span>
					<span class="company__value fontBodyM">Term</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">Financial Strength</span>
					<span class="company__value fontBodyM">A+ (Superior)</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">Underwriting Time</span>
					<span class="company__value fontBodyM">Instant</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">BBB Rating</span>
					<span class="company__value fontBodyM">A+</span>
				</div>
			</div>
			<div class="company__footer">
				<div class="company__footer-title main-title">About Ethos</div>
				<p class="company__content fontBodyM"><a href="https://www.noexam.com/out/ethos.php">Ethos life insurance</a> is a great option to consider when looking for affordable and reliable term life coverage. Ethos offers a streamlined online application process, which means that you can apply and get approved for coverage quickly and easily. Additionally, their policies are underwritten by reputable insurers such as Legal & General America, Ameritas Life Insurance Corp., and TruStage®, which means that you can trust the quality of their coverage.</p>
				<p class="company__content fontBodyM">One of the main advantages of Ethos life insurance is that they offer highly customizable coverage options to fit your individual needs and budget. You can choose the length of your term, the amount of coverage you need, and the level of protection you want to ensure that you have the right policy for your unique circumstances. Ethos also offers flexible payment options, including monthly and annual payments, to make your coverage more affordable and convenient.</p>
				<p class="company__content fontBodyM">Finally, Ethos is known for its excellent customer service and support. Their team is available to answer any questions you may have and provide guidance throughout the application process. Plus, if you ever need to file a claim, they will be there to support you and your loved ones during a difficult time. Overall, if you are looking for a reliable and affordable term life insurance policy, Ethos is definitely worth considering.</p>
				</div>
				<div class="company__footer-btn btn-read-more">read more</div>
				<div class="company__footer-btn company__footer-btn--active btn-hide">hide</div>
				<div id="shadow"></div>
				<div class="company__decor-line company__decor-line--adaptive"></div>
				<div class="top_company__footer-btns-box">
					<a href="https://www.noexam.com/out/ethos.php" class="company__footer-link main-btn button-small" target="_blank" rel="noopener nofollow">apply now</a>
				</div>
			</div>


			<div id="ladder" class="companies__item company mb-4" data-id="46" data-company="ladder">
			<div class="d-flex flex-row-reverse flex-sm-row flex-nowrap justify-content-between align-items-center mb-4">
				<div class="company__header-column">
					<div class="company__logo-box">
						<a href="https://www.noexam.com/out/ladder.php"><img class="company__logo lazy loaded" alt="Ladder" from_cdn="" lazyload="1" data-src="/img/company_logos/logo_ladder_2.png" src="/img/company_logos/logo_ladder_2.png" data-was-processed="true"></a>
					</div>
				</div>
			<div class="company__header-column">
				<span class="company__name heading-5">Ladder</span>
				<span class="company__rating-label fontBodyS">Our Rating</span>
				<div class="company__rating-stars">
					<img class="star" src="/v2/common/images/stars/5.svg" alt="Rating: 5"></div>
				</div>
				<div class="company__header-column">
					<a href="https://www.noexam.com/out/ladder.php" class="top_company__link main-btn button-small" target="_blank" rel="noopener nofollow">apply now</a>
				</div>
			</div>

			<div class="company__decor-line"></div>
			<div class="company__row">
				<div class="company__col">
					<span class="company__label fontBodyS">Type of coverage</span>
					<span class="company__value fontBodyM">Term</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">Financial Strength</span>
					<span class="company__value fontBodyM">A+ (Superior)</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">Underwriting Time</span>
					<span class="company__value fontBodyM">Instant</span>
				</div>
				<div class="company__col">
					<span class="company__label fontBodyS">BBB Rating</span>
					<span class="company__value fontBodyM">N/A</span>
				</div>
			</div>
			<div class="company__footer">
				<div class="company__footer-title main-title">About Ladder</div>
				<p class="company__content fontBodyM">Established in 2015, <a href="https://www.noexam.com/out/ladder.php">Ladder</a> is one of the newest entrants to the US insurance market. The company’s tech-savvy approach makes it easy to buy life insurance coverage, as the whole process can be completed online. Most policies are issued without a medical exam, making them an ideal choice for those that want to get sound coverage in place without the hassle.</p>
				<p class="company__content fontBodyM">Ladder’s policies are underwritten and issued by Allianz Life Insurance Company of North America and Allianz Life Insurance Company of New York. Both companies have strong financial ratings.</p>
				<p class="company__content fontBodyM">Ladder offers a dynamic term life insurance policy which is different from most other term life policies on the market today. This means you can change your coverage amount any time as your financial needs change.</p>
				</div>
				<div class="company__footer-btn btn-read-more">read more</div>
				<div class="company__footer-btn company__footer-btn--active btn-hide">hide</div>
				<div id="shadow"></div>
				<div class="company__decor-line company__decor-line--adaptive"></div>
				<div class="top_company__footer-btns-box">
					<a href="https://www.noexam.com/out/ladder.php" class="company__footer-link main-btn button-small" target="_blank" rel="noopener nofollow">apply now</a>
				</div>
			</div>




			


		</div>
		</div>
		
</div>
</div>
<div class="main-wrapp bg0">
	<div class="wrapp">
		<div class="top-companies-v1__content">
			<section class="top-companies-v1-content">
				<h2 class="top-companies-v1-content__title heading-5">How does no exam life insurance work?</h2>
				<p class="top-companies-v1-content__paragraph fontBodyM">
				When you apply for life insurance, there are medical questions on the application. Your answers to these questions are used by the insurance company to assess your health and make a decision. The lab results from the health exam are also used in this process.
				</p>
				<p class="top-companies-v1-content__paragraph fontBodyM">
				With a no exam policy, the insurance company checks several databases instead of looking at lab results. These are the Medical Information Bureau (MIB), your motor vehicle record (MVR), the national prescription database, and public records provided through the Fair Credit Reporting Act.
				</p>
				<p class="top-companies-v1-content__paragraph fontBodyM">
				With accelerated underwriting, the insurance company looks at your answers to the health questions and the resulting checks from the various databases. They use this information to determine if you can proceed without needing to take a medical exam. There are also coverage limits that vary from company to company that will also determine when an exam is required.
				</p>
				<h2 class="top-companies-v1-content__title heading-5">Choosing the Right Life Insurance Company</h2>
				<p class="top-companies-v1-content__paragraph fontBodyM">
				When choosing a life insurance company you should consider several important factors. Your financial needs, the company's financial strength, pricing, underwriting guidelines, and more. Please see the guide below for all the things to consider when picking a life insurance company.
				</p>
				<h2 class="choose-company__subtitle heading-5">Our Company Ratings Explained</h2>
				<p class="top-companies-v1-content__paragraph fontBodyM">Our rating formula relies on financial data, product offering, underwriting time, history, and consumer complaints. We update our data in the 4th quarter of each year when new financial reports are released. Financial strength is a
					key component of our ratings, as it is the most important factor to consider when choosing a life insurance company. We put in many hours of analysis to have our list of the top 10 life insurance companies be free from bias.</p>
				<h2 class="choose-company__subtitle heading-5">Types of Coverage</h2>
				<p class="top-companies-v1-content__paragraph fontBodyM">There are two main types of life insurance you can buy. The most popular choice is term life insurance, which gives you coverage for a set number of years. The other type is permanent life insurance, also called whole life, which provides
					coverage for your entire life as long as premiums are paid.</p>
				<p class="top-companies-v1-content__paragraph fontBodyM">In terms of value, term life insurance is hard to beat. The monthly premiums are low and the coverage amounts are high. but has other features that term lacks, such as the cash value component.</p>

				<h2 class="choose-company__subtitle heading-5">Financial Strength</h2>
				<p class="top-companies-v1-content__paragraph fontBodyM">When buying an insurance product that may be needed 20+ years from now, you want to be certain that the company will be able to pay the claim. To address this very concern, many 3rd party rating agencies grade the financial strength
					of insurance companies. There are several that you will see reporting grades for insurance companies:</p>
				<ul class="top-companies-v1-content__list">
					<li class="top-companies-v1-content__list-item fontBodyM">AM Best</li>
					<li class="top-companies-v1-content__list-item fontBodyM">Moody’s</li>
					<li class="top-companies-v1-content__list-item fontBodyM">Standard & Poors</li>
					<li class="top-companies-v1-content__list-item fontBodyM">Fitch</li>
				</ul>
				<br/>
				<p class="top-companies-v1-content__paragraph fontBodyM">Each rating agency has a different way of assessing and reporting the financial strength of an insurance company. Generally, the companies are rated as a report card. You’ll see that the high ratings are A’s and the low ratings are
					B or C. We advise shoppers to choose a company with high financial ratings. The reasoning behind this is simple, life insurance is meant to be a safety net for your family. The net is only as strong as the insurance company’s ability
					to pay its claims. The rating agencies determine their ratings by analyzing data like:</p>
				<ul class="top-companies-v1-content__list">
					<li class="top-companies-v1-content__list-item fontBodyM">The Annual amount of premiums collected</li>
					<li class="top-companies-v1-content__list-item fontBodyM">The Annual amount of claims paid</li>
					<li class="top-companies-v1-content__list-item fontBodyM">Total reserves and assets</li>
					<li class="top-companies-v1-content__list-item fontBodyM">Cash flow</li>
					<li class="top-companies-v1-content__list-item fontBodyM">Return on investments</li>
					<li class="top-companies-v1-content__list-item fontBodyM">Potential risks in the short-term and long-term.</li>
				</ul>
				<br/>
				<p class="top-companies-v1-content__paragraph fontBodyM">A good rule of thumb is to choose a company that has the letter “A” in its ratings and to avoid the companies that do not.</p>

				<h2 class="choose-company__subtitle heading-5">Underwriting Time</h2>
					<p class="top-companies-v1-content__paragraph fontBodyM">Underwriting is the process of the insurance company processing your application and issuing a decision. Underwriting time can vary widely from company to company and even from product to product. We are living in a time where
						technology is making life insurance easier to purchase, and one of the areas to recently improve in life insurance is underwriting time.</p>
					<p class="top-companies-v1-content__paragraph fontBodyM">The standard process of buying life insurance takes 4-6 weeks. This is how long it takes from start to finish. You submit your application, the health exam is scheduled, and then you take the exam and wait for a decision.</p>
					<p class="top-companies-v1-content__paragraph fontBodyM">Many companies now offer accelerated underwriting, which means that certain applicants can breeze through the process without needing to take an exam. Some companies offer products that do not require the exam at all. This is referred
						to as simplified issue life insurance. These policies generally get issued in just a few minutes. This is possible because the insurance company can look at digital records such as your prescription report, driving record, and MIB
						record.
					</p>
				<h2 class="choose-company__subtitle heading-5">Company Size</h2>
					<p class="top-companies-v1-content__paragraph fontBodyM">The size of the life insurance company can tell you a few things about the organization. A company with 10,000+ employees likely has a very high financial rating, offers many products, and is a stable choice. However, some people
						do not like dealing with large companies when it comes to customer service. You could end up with long hold times and a lack of personal service. You may like working with a financially strong, specialty life insurance company
						with just a few hundred employees.</p>
				<h2 class="choose-company__subtitle heading-5">Company Age</h2>
					<p class="top-companies-v1-content__paragraph fontBodyM">Why should the age of a life insurance company matter to you? The <b>average lifespan of a male and female in the US is around 80.</b> If you bought life insurance in your forties, it's important to know the company you are putting
						your business with has a positive financial outlook and will have the ability to pay claims years down the road. </p>
					<p class="top-companies-v1-content__paragraph fontBodyM">We factor in age as part of our criteria. After all, if a company has made it through the great depression, ww1,ww2, and the great recession, all while being able to make good on their commitment to their policyholders, we think
						that's worth something. </p>
					<p class="top-companies-v1-content__paragraph fontBodyM">It should come as no surprise that companies that are the oldest often have more assets under management. The assets each life insurance company accumulates throughout its time in business serve as a shield of financial strength
						and backing for its policyholders. A mature insurance company with a diverse portfolio is a key indicator that a company is well-positioned to be in business for years to come.</p>
				<h2 class="choose-company__subtitle heading-5">Customer Complaints</h2>
					<p class="top-companies-v1-content__paragraph fontBodyM">When looking at complaints on a company, you have to take this data with a grain of salt. Most complaints stem from billing errors and customer service. Rarely does a life insurance company not pay a claim. When conducting research,
						we analyzed the annual reports of over 50 companies. We looked at the percentage of claims that were contested and why they were contested. Overall we found it to be a very small percentage, and the most common reason claims
						are contested is due to material misrepresentation. Material misrepresentation is a fancy term for lying on the application. If you are looking for the best life insurance company that will payout, just be sure to answer the
						questions on the application truthfully, and select a company with strong financial ratings.</p>
					<p class="top-companies-v1-content__paragraph fontBodyM">A good place to look at reviews of a life insurance company is the Better Business Bureau. However, remember that the BBB is a complaint board. It is easy to get a feeling that a company is bad by looking at their BBB page and
						seeing hundreds of complaints. Remember to consider how many customers an insurance company and that 100 complaints may be a very small fraction of their total customers.</p>
					<p class="top-companies-v1-content__paragraph fontBodyM">Another good place to start is the NAIC. They have a public-facing tool that allows you to look up complaint data on insurance companies. However, the reason for these complaints can be about marketing & sales and have nothing
						to do with customer service or paying claims.</p>

								</section>

			
		</div>
	</div>
</div>

