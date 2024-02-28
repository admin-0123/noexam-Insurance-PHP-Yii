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
$this->params['breadcrumbs'][] = $this->context->current_cat->title;
?>



<style type="text/css">



</style>



<div class="page-content page-wrapper trans_all">

	<?=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]); ?>

	<!-- START PAGE-CONTENT -->
	<section class="page">
		<h1>Term Life Insurance</h1>
		<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>

		<div class="content">
			<?=$this->render('/main/widgets/term-icon-nav.php');?>
			<p id="what"><strong>Term life insurance</strong> is a life insurance policy that offers coverage for a fixed duration.</p>

			<p>The insured is required to pay a pre-determined amount as premium at periodic intervals during the
				policy’s term. At the end of the policy term, the insured can open the door to a new insurance policy
				at the new rates and conditions prevailing at that time.
			</p>


				<blockquote class="center green">
					<p>
						Term life insurance is a life insurance policy that offers coverage for a fixed duration. Term life insurance is a life insurance policy that offers coverage for a fixed duration.
					</p>
				</blockquote>


			<p>If the policyholder passes away before the maturity date, the insurance company will pay death
				benefits, as promised in the term life policy to his or her nominee.
			</p>

			<p>Term life insurance has two primary benefits:</p>

			<ul>
			 	<li>It is among the more cost-competitive life insurance policies (the premium amounts are relatively low compared to the lump sum paid out as benefits)</li>
			 	<li>It guarantees substantial payouts in the unfortunate event of death</li>
			</ul>

			<h2 id="how">How Term Life Insurance Works</h2>
			<img class="float-sm-right rounded" src="../../img/how-it-works.jpg" alt="how term life insurance works" />
			<p>Term life insurance works by providing a death benefit to the benificiary
			in the event that the insured person passes away.</p>
			<p>Here are the steps you take to get a term life insurance policy in force.</p>
			<h3>Step 1 – Choose Policy Duration </h3>

			<p>The main purpose of this type of policy is to protect your loved ones from large financial
				burdens due to your sudden death. Determine how many years you expect your family to be
				financially dependent on you. That should ideally be the duration of your policy.</p>

			<h3>Step 2 – Choose the Amount of Death Benefit </h3>

			<p>
				To calculate the right death benefit amount you need to make a tradeoff between two important considerations:

			</p>
			<blockquote class="right blue">
				<p>
					Term life insurance is a life insurance policy that offers coverage for a fixed duration.
				</p>
			</blockquote>
			<ul>
			 	<li>For how many years do you want your family to be financial worry-free in case of your death? This will depend on what future expenses you expect the death benefit to compensate. The answer to this question will determine the payout sum.</li>
			 	<li>How much premium can you afford? As the death benefit increases, the premium also increases.</li>
			</ul>

			<p>An optimal balance of both these considerations should help you arrive at the right amount you wish to be insured for.</p>

			<h3>Step 3 – Undergo a Medical Exam or Provide Health Information</h3>

			<p>All fully underwritten insurance plans require a medical examination (including lab tests) of the
				insured person. Healthy persons typically pay lower premiums. For simplified issue policies, all
				you have to do is answer a few questions about your health on the application.</p>

			<h3>Step 4 – Pay Your Premiums</h3>

			<p>Many criteria are factored into the premium calculation, which is a complex process performed by the
				insurance company. But a general rule of thumb is that younger persons pay a lesser premium because
				of the risk to their life is lower when compared to older persons or senior citizens.</p>

			<h3>Step 5 – Death Benefit Goes to Beneficiary in the Event of Death </h3>

			<p>Your beneficiary will receive the death benefit payout amount in the unfortunate event of your
				death during the policy period. If the policy period has lapsed or if you have discontinued paying
				premiums even though the policy term has not expired, then no benefit may be paid.</p>

			<h2 id="who">Who Is Term Life Insurance For?</h2>
			<img class="float-sm-right rounded" src="../../img/family-walking.jpg" alt="family needing life insurance" />
			<p>Term life insurance is for anyone that needs life insurance coverage for a set amount of time. But some
				people might benefit more than others. Term life insurance could be an ideal option for the following:</p>

			<h3>A Young Family</h3>

			<p>A young couple with little kids can be termed as a young family. In such a family the two major drains on the family coffers usually are:</p>

			<ul>
			 	<li>The high costs of bringing up children</li>
			 	<li>The monthly mortgage payments</li>
			</ul>

			<p class="no-wrap-text">
				<blockquote class="left green">
					<p>
						Term life insurance is a life insurance policy that offers coverage for a fixed duration.
					</p>
				</blockquote>
			If the family’s main earning member passes away before the children grow up or the mortgage has been paid, the family may have to endure
				significant financial hardships to survive. They need to be protected against such risks.</p>

			<p>There are also future costs to consider, for instance, college fees. With term insurance, such a young breadwinner can be insured for a
				huge payout at a low premium. This option protects the family from such financial risk at an affordable price.</p>

			<h3>Single Parent</h3>

			<p>Single moms and dads should consider that in the event of their death, who will ensure their child’s safe upbringing? If you are a single
				parent, term life insurance helps you to protect your child’s future against the unimaginable situation where you won’t be around to care for them.</p>

			<p>Through your policy, you can nominate somebody you trust to take care of your child until he or she becomes independent. With its low premium
				advantage, term life insurance is one of the best options for substantial coverage.</p>

			<h3>Young Couples without Children</h3>

			<p>Even for a young couple who are without children, the living expenses are high. In a family with only one income or where two incomes are
				vital for survival, if one person dies, the other could come under financial strain.</p>

			<p>The low cost term life insurance can help reinforce your spouse’s income until retirement benefits kick in. Why should he or she
				suffer the dual burdens of losing you as well as your financial support?</p>

			<p>If you are planning to have kids in the foreseeable future, then plan your payout with their future needs in mind. Signing on the
				dotted line for the policy at a younger age will ensure that your premium remains low and affordable.</p>

			<h3>Young and Single</h3>

			<p>If you are single and young, you may wonder the relevance of a term life policy for you. After all, there
				is no one in your life who is financially dependent on you. True, but you can still buy it if:</p>

			<ul>
			 	<li>You plan to get married in the future or have kids in the future.</li>
			 	<li>You have student loans co-signed by your aged parents. If you are unable to pay off these loans due to any reason, including death, then your parents will be called upon to do so.</li>
			</ul>

			<p>You may consider protecting your future family or your parents against financial burdens due to your death.
				Take a term life insurance policy because it’s affordable and start now,
				because premiums are lower for young people.</p>
			<h2 id="whole">Term vs Whole Life Insurance</h2>
			<p>The two main types of life insurance are term life insurance and whole life insurance. <strong>The main difference between the two is the length of coverage.</strong> Term life insurance provides coverage for a set period of time. Whole life provides coverage for your entire life.</p>
			<p>Whole life policies also have an investment component that builds cash value. For most people, it makes sense to buy term and invest the money saved of premiums into something else. This is the financial advice many expers prescribe. See our guide for a deep comparison of <a href="https://www.noexam.com/life-insurance/term-vs-whole/">term life vs whole life insurance</a>.</p>
			<h2 id="length">What Term Length is Best?</h2>
			<img class="float-sm-right rounded" src="../../img/family-walking2.jpg" alt="family needing life insurance" />
			<p>Term life coverage is available for varying durations. They include:</p>

			<p><u>Renewable annually</u>: You are required to renew an annually renewable
				term (ART) policy very year. This means that the premium rates could increase
				every year. This may be more suited for persons who need coverage for one year
				only. For others, it may not be a perspicacious choice.</p>

			<p><u>10 Year Term</u>: A 10 year term policy expires after a period of 10 years.</p>

			<p><u>15 Year Term</u>: The 15-year term policy expires at the end of 15 years.</p>

			<p><u>20 Year Term</u>: The policy term is 20 years.</p>

			<p><u>30 Year Yerm</u>: The policy term is 30 years.</p>

			<p><u>Other terms</u>: A few insurers may offer 5-year and 25-year terms, but these are not so common.</p>

			<p>It is paramount to note that if you want to buy another term life insurance policy at the end of the
				current term, the premium rate will be calculated at current levels, and other terms and conditions could also change.</p>

			<h2>Factors to Consider while Choosing Policy Term</h2>

			<h3>Your Children’s Age</h3>

			<p>If you were not around, can your partner maintain the same lifestyle in your absence? Childcare,
				college tuition, etc.—consider all future expenses related to your children’s upbringing.</p>

			<p>Your policy term should be appropriate to the time period needed for your children to complete college or until they become independent adults. For example:</p>

			<ul>
			 	<li>If your child is 4, and you are taking a term life policy now, probably a 20 year term might suit your needs.</li>
			 	<li>If your child is 12, then a 15 year term might be a better option.</li>
			 	<li>If you are yet to have children, but plan to expand your family someday, you might choose a 30 year</li>
			</ul>

			<h3>Your Debt Situation </h3>

			<p>In addition to the time needed for your children to become financially self-sufficient, you also have
				to consider the time needed for you to pay off your outstanding loans. Consider all types of loans:</p>

			<ul>
			 	<li>Student loans</li>
			 	<li>Mortgage</li>
			 	<li>Other long term borrowings</li>
			</ul>

			<p>Make sure that the policy term runs through the duration of all these financial commitments so that your
				loved ones don’t have to struggle to settle your debts if you are not around.</p>

			<h3>Your Partner’s Financial Dependence</h3>

			<p>If you and your partner share a mortgage, then the policy term may last for the duration of that
				mortgage (for instance, you could choose a 30-year term for a 30-year mortgage.)</p>

			<p>The question to consider is how will your partner manage if half (or more) of the regular income
				you contribute to the household disappears overnight? Will your insurance payout supplement the loss
				of your income to your partner? Make sure it does.</p>

			<p>Your post retirement income is likely to come from sources other than work. During this phase, probably
				lesser coverage will suffice. But a 30 year term insurance taken when you are young will probably help
				your partner manage living expenses until retirement.</p>

			<h3>Supporting Parents or Elderly Relatives</h3>

			<p>If you already support or plan to take care of elders in your family at some point, then your policy
				term should match the period required for their social security benefits to begin. That way you can ensure
				that they are reasonably protected financially.</p>

			<h3>What is your Budget?</h3>
			<p>Remember you have to pay the premiums on time to keep the term life insurance policy active. If you
				default on payments, the policy will lapse. Premiums have to be paid for the entire term of the policy.
				It’s not a short term arrangement. Choose a plan that fits your pocket in the long run. You could do a
				few things to save on the amount you need to obtain this type of coverage.</p>

			<ul>
			 	<li>Start early. Buy the policy when you are younger and healthier. The rate at which premiums are calculated is lower for young healthy persons.</li>
			 	<li>Don’t over-estimate your coverage needs. That will add to your premium burden.</li>
			 	<li>Choose a reasonable term length.</li>
			</ul>

			<p>You could use an online premium calculator to find out what unnecessary coverage you can avoid.
				Play around with policy durations and coverage amounts on the online calculator to see how your
				premium amounts change with changes in both these inputs.</p>

			<h2 id="coverage">How much term insurance coverage do you need?</h2>

				<p>A broad-based way to determine this amount is to calculate the sum of all your long-term
					commitments and to subtract your assets from this value. This gap is what your term life
					coverage should fill. But often the actual process of doing this calculation is difficult.
					Here are a few guidelines to help you arrive at the right amount.</p>

				<p>The debt, income, mortgage, and education <strong>(DIME)</strong> formula:</p>

				<p>These are the biggest factors you should look at when you calculate your life insurance payout.</p>

				<ul>
					<li><strong>Debt – </strong>Include all your loans (except mortgage) and the expected funeral expenses in this category.</li>
					<li><strong>Income – </strong>How long will your family need your financial support? For example, until your youngest child complete high school. Calculate the number of years until then and multiply your annual income by that period.</li>
					<li><strong>Mortgage – </strong>What is the total amount you need to repay?</li>
					<li><strong>Education</strong>- Approximately, how much money will you need to put your children through college?</li>
				</ul>

				<p>As you can see, the DIME formula is quite in-depth and covers almost every
					major aspect of your life’s financial commitments. Nevertheless, this method is not foolproof.</p>

				<p>Rather than consider your term insurance amount and length of the term in
					isolation, a more effective way to approach it would be to consider it as a
					part of your overall financial plan.</p>

				<ul>
					<li>A financial plan is a framework to meet all your future expenses. Account for everything here—for example, college tuition, income levels at each stage of your life, etc.</li>
					<li>Make your term life insurance a part of your plan, and be prepared to top up the payout sum as and when you know about more future expenses.</li>
					<li>Try to buy more coverage than your estimated need rather than less.</li>
				</ul>

				<h2 id="cost">How Much Does Term Life Insurance Cost?</h2>
				<img class="float-sm-right rounded" src="../../img/comparing-companies.jpg" alt="comparing life insurance prices" />
				<p>The cost of a term policy depends on a multitude of factors, but in general it should cost between $15 and $100 per month.</p>
				<p>The following factors can have a direct bearing on the premium you have to pay on your term life insurance policy.</p>

				<ul>
					<li>Policy term</li>
					<li>Coverage amount</li>
					<li>Your age</li>
					<li>Your health (both physical and mental)</li>
					<li>Smoking habits</li>
					<li>Driving history</li>
					<li>History of diseases in your family</li>
					<li>Lifestyle—passion for adventure such as flying, sky diving, etc.</li>
				</ul>
		<h2 id="companies">How to Choose the Right Term Life Insurance Company?</h2>

			<p>How to know which one among the many options before you is the right insurance
				company for your needs? Here are a few pointers to help you. The <a href="../companies/">best company</a>,
				in general, is the one which:</p>
			<ul>
				<li>Offers suitable products, competitive prices, and useful features</li>
				<li>Is known to provide excellent customer service</li>
				<li>Is in a position to meet the financial obligations of every policy underwritten by them</li>
			</ul>

			<p>However, each person has a unique situation, and the best company for one person might not
				be the best for another. So carefully consider your individual situation and requirements
				for a term life insurance policy while choosing your insurance company.</p>

			<p>One of the suitable ways to find the right insurance company is to utilize the help
				from a solid and devoted insurance agent. A few attributes of an accomplished insurance
				professional include:</p>

			<ul>
				<li>Having thorough knowledge about each insurance company and its products</li>
				<li>Ability to identifying the right benefits you require and make suitable recommendations</li>
				<li>Personal experience and insight into how each insurance company functions</li>
			</ul>

			<p>A majority of persons buying insurance choose to go forward through a broker or an agent
				because of the value they bring on the table. Buying a term life insurance policy is both
				a complex and difficult decision to make. A professional can make this process much less
				stressful and more rational.</p>

		<h2 id="application">The Application Process</h2>
		<img class="float-sm-right rounded" src="../../img/application.jpg" alt="life insurance application" />
			<h3>Step 1 – Complete the Application</h3>

			<p>Once you have chosen an insurance company and term life policy of your choice, you need to
				submit a formal application. The process of filling the application can take approximately
				20 minutes. The information you will have to furnish includes:</p>

			<ul>
			 	<li>Basic details—name, contact details, date of birth.</li>
			 	<li>Unique/confidential information—driver’s license number, social security number, etc.</li>
			 	<li>Health details—any medical conditions, history of ailments in your family, etc.</li>
			 	<li>Beneficiary details—social information about the person who will receive the payout in the event of your demise.</li>
			 	<li>Contingent beneficiary details—if both you and the beneficiary succumb at the same time, or if the beneficiary dies before the payout, then the contingent beneficiary will receive the death benefits. For instance, if your spouse is your primary beneficiary, you can name your children as contingent beneficiaries.</li>
			</ul>

			<p>That completes the application stage. Make sure you provide complete and accurate information.
				Incomplete details will cause undue delay in processing, and inaccurate information adds to
				the risk of application rejection, among other things.</p>

			<h3>Step 2 –Take the Medical Exam</h3>

			<p>You may now have to undergo the necessary medical examinations. Most people are likely to
				have some concern about clearing this stage, but there is no need for worry. It is a fairly
				simple exercise. You can choose the date and time of your convenience, and you don’t have to
				pay for this exam.</p>

			<p>A qualified nurse will usually pay a visit to your home and perform the following:</p>

			<ul>
			 	<li>Record your blood pressure</li>
			 	<li>Collect a blood sample</li>
			 	<li>Collect a urine sample</li>
			 	<li>Make a note of your height/weight</li>
			</ul>

			<p>You might have to answer a few health related questions as well. The result of your medical
				exam has a direct bearing on the premium calculation. Therefore, securing a favorable medical
				outcome should be your goal. Some things you can do to improve the result of the medical exam are:</p>

			<ul>
			 	<li>Eat healthy food for a few days prior to the examination and stay well-hydrated.</li>
			 	<li>Minimize the risk of any unusual spurt in blood pressure by avoiding alcohol, coffee, smoking, and extended physical workouts on the day of the exam.</li>
			 	<li>If possible, take the exam in the morning. Blood work on an empty stomach is needed and you don’t want to fast through the day.</li>
			</ul>

			<p>These measures should work in your favor during the medical exam. If you choose to go through
				an independent insurance agency, then you have to undergo the medical exam only once for all the
				insurance providers. If one insurance company declines your application, you don’t have to repeat
				the medical test when you apply to another.</p>

			<h3>Step 3 – Underwriting your Policy</h3>

			<p>This stage can take anywhere between 4 and 8 weeks. All your records will be scrutinized
				along with a thorough review of your medical history with the Medical Information Bureau (MIB).</p>

			<p>The insurance company will get in touch with you or your doctor if any additional information
				is required. A check on your lifestyle and driving history will also be done, before the
				insurance company fixes the rate at which they will charge your premium.</p>

			<p>The rate at which your premium is calculated is based upon your:</p>

			<ul>
			 	<li>Physical build</li>
			 	<li>General health</li>
			 	<li>Smoking habits</li>
			 	<li>Driving records</li>
			 	<li>Lifestyle</li>
			 	<li>Family history</li>
			</ul>

			<h3>Step 4 – Policy Approval</h3>

			<p>Within 10 to 15 days from the date of approval of your coverage, you will receive the policy document. You need to then:</p>

			<ul>
			 	<li>Set up the payment</li>
			 	<li>Sign in the appropriate places in the document</li>
			</ul>

			<p>Return the signed document to the insurer. Once they receive the first premium, your policy will become active.
				The first 30 days is known as the free look period. During this time:</p>

			<ul>
			 	<li>You can cancel the policy and get a refund</li>
			 	<li>You can change aspects of your policy</li>
			</ul>

			<h3>Useful Tips During the Application Process</h3>

			<p><strong>Take care of the following during your application process for smooth processing:</strong></p>

			<ul>
			 	<li>Choose an insurance agency to help you navigate the entire process from selecting the right term life insurance product to the application.</li>
			 	<li>Stay transparent and honest—both with your agent and the insurance company. Dishonesty causes both short term and long-term problems.</li>
			 	<li>Perform well in your medical test. The test result affects your premium directly.</li>
			 	<li>If you are a high-risk category individual, ensure that your agent attaches a cover letter disclosing this fact along with your application. The note should specify:</li>
			</ul>

			<ul>
			 	<li>Details about your condition</li>
			 	<li>Its severity</li>
			 	<li>How you are managing the condition</li>
			</ul>

			<p><strong>This information will help you in securing a better rate.</strong></p>

			<ul>
			 	<li>Sign a conditional receipt. It will make sure that you receive coverage from the date of approval and you won’t be unprotected during the document processing phase.</li>
			</ul>

			<h2 id="beneficiaries">Term Life Insurance Beneficiary</h2>
			<img class="float-sm-right rounded" src="../../img/new-life.jpg" alt="new life" />
			<p>In your term life insurance policy, you need to specify the beneficiary who will receive the amount in the event of your passing. The types of beneficiaries include:</p>

			<ul>
			 	<li><em>Primary beneficiary</em>–This individual or group of persons will receive the payout in the event of your death. You can nominate anyone you wish as your beneficiary.</li>
			 	<li><em>Contingent beneficiary</em>–Another common term for this kind of beneficiary is “secondary beneficiary.” If the primary beneficiary dies before the insured person, then the insurance company will pay the death benefit to the contingent beneficiary. In case the primary beneficiary is still alive at the time of your passing, then the payout will be made to the primary beneficiary only. The contingent beneficiary will not receive any money in that situation.</li>
			</ul>

			<p>One of the safest approaches is to name both a primary and a contingent beneficiary in your policy. If you do this, you have covered your bases since all room for dispute and ambiguity is removed.</p>

			<p>In any term life insurance policy, the naming of beneficiaries may fall under two classes. These are:</p>

			<ul>
			 	<li><u>Revocable beneficiary</u>–Under this category, the insured person can change the beneficiary of the term life insurance without informing the person previously designated as the beneficiary. This can be done at any point during the policy term.</li>
			 	<li><u>Irrevocable beneficiary</u>–As per this category, the policyholder cannot make any changes with respect to beneficiaries without getting the consent from the person(s) already named as beneficiaries in the existing policy.</li>
			</ul>

			<p>Of these two, most experts favor the revocable option since it offers maximum flexibility to the insured individual in the long run.</p>

			<h3>Choosing the Beneficiary</h3>

			<p>You have a range of choices to consider when it comes to identifying a beneficiary. These include:</p>

			<ul>
			 	<li>Members of your family</li>
			 	<li>If intended beneficiaries are minors, then name a legal guardian</li>
			 	<li>Estates</li>
			 	<li>Trusts</li>
			 	<li>Charities</li>
			</ul>
			<h2 id="riders">Term Life Insurance Riders</h2>

			<p>A rider is an add-on that you can get along with your term insurance at a small additional charge.
				The rider gives you extra protection, in addition to the sum assured, under specific conditions
				stipulated in the rider.</p>

			<p>Each insurance company offers different types of riders, and their charges vary as well.
				The conditions under which they apply are also different. The same factors that affect
				the premium rate also affect rider charges.</p>

			<p>The following are commonly available riders and can be quite useful:</p>

			<h3>In the Event of a Disability</h3>

			<h4>Waiver of Premium Rider</h4>

			<p>As per this rider, if you become totally disabled and are unable to work,
				you can stop paying the premium but your policy will remain live. Often
				this rider applies until you reach 60 or 65 years of age.</p>

			<h4>Disability income rider</h4>

			<p>The insurance company will pay you a regular sum if you become completely
				disabled and are unable to work. The rider will specify how much money you
				will receive as well as the duration for which the payments will be made
				(for instance, the duration of the disability or a fixed time period only).
				The cause for disability—sickness, accident, etc.—may also determine whether
				you receive payments or not.</p>

			<h3>If your health deteriorates but you need more coverage:</h3>

			<h4>Rider guaranteeing insurability</h4>

			<p>Under normal circumstances, a person in poor health may have to pay hefty
				premiums to renew his or her term life insurance. In some cases, the insurer
				may refuse to renew the policy citing ill health as a major risk.</p>

			<p>With this rider as an add-on, you can extend your term life policy:</p>

			<ul>
				<li>Without submitting any new documents to support your insurability</li>
				<li>Without fresh medical exams</li>
				<li>Buy additional insurance at preset times</li>
			</ul>

			<p>If you have an option to include this rider and you fear that your health
				will deteriorate with time, this could be a judicious way to go since this
				plan will extend your insurance coverage beyond its original term.</p>

			<h3>Converting term life coverage into permanent coverage:</h3>

			<h4>Conversion rider</h4>

			<p>Using this rider, you can change your term life policy into a permanent
				life insurance policy without fresh medical tests. The premiums for permanent
				insurance are usually higher. This rider will help younger people, at the
				beginning of their career, with income constraints, when they initially
				buy insurance.</p>

			<h3>In the event of a serious illness:</h3>

			<h4>Accelerated death benefit rider</h4>

			<p>This is now a standard add-on provided free or at a nominal charge. If you
				fall terminally ill—maybe your life expectancy is as less as one year—you can
				withdraw a fixed part of the death benefit in advance, using this rider.
				The amount you obtain can be in the range of $250,000 and $500,000.You can
				use this money as you wish—for treatment, living costs, etc.</p>

			<p>Even if your insurer provided the rider at no extra cost, they may charge a certain fee when you claim the amount.</p>

			<h4>Rider for critical illness</h4>

			<p>If you are diagnosed with a critical illness included in this rider (cancer, heart attack, renal failure, etc),
				the insurer will pay you a comprehensive sum that you can use for treatment</p>

			<h3>In the event of death from an accident:</h3>

			<h4>Accidental death benefit rider</h4>

			<p>In case of death due to an accident, your beneficiary will receive an additional sum, in excess of
				the sum assured, due to this rider. If the additional disbursement is equal to the death benefit,
				it’s known as “double indemnity”. Your beneficiary may have to pay a fee to receive this amount.
				Loss of limb or vision can also be compensated under this rider.</p>

		<h2 id="taxation">Term Life Insurance Claims and Taxation</h2>

			<p>Here are a few salient points to remember regarding tax implications:</p>

			<ul>
				<li>You cannot claim federal income tax deductions on premium paid under term life coverage since it’s a personal expense.</li>
				<li>You may be taxed for employer-paid premiums when coverage exceeds $50,000. The payment towards the first $50,000 is not taxable for you and you don’t have to declare the premium amount as income earned. But for every dollar of premium paid, for coverage beyond $50,000, you have to pay tax, as the amount will be treated as your earning during the year.</li>
				<li>In most cases, death benefits paid out posthumously are non-taxable. Both state and federal laws exempt the benefit from taxation. Therefore, if your sum assured is $500,000, then your beneficiary need not pay any tax on the overall amount.</li>
				<li>If the death benefit is paid out in installments, different rules apply. The principal is non-taxable but any interest accrued on the installments is taxable at an ordinary rate.</li>
				<li>Loans taken against your policy may also be tax-free.</li>
			</ul>
			<p>See our <a href="../payouts-and-taxes/">guide on life insurance payouts and taxes</a> for more information.</p>

		</div>

	</section>
	<!-- END PAGE-CONTENT -->

</div>
<?=$this->render('/main/widgets/bio-jonathan-holloway.php'); //Bio Embed Code?>
