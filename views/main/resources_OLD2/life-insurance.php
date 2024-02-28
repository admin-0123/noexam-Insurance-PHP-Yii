<?php

use yii\widgets\Breadcrumbs;
use yii\helpers\VarDumper;

//VarDumper::dump($this->context->current_cat, 10, 1);

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
$this->params['breadcrumbs'][] = $this->context->current_cat->title;
?>
<div class="page-content page-wrapper trans_all">



	<!-- START PAGE-CONTENT -->
	<section class="page">
		<h1>Life Insurance</h1>
		<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>

		<div class="content">
			<p>According to the 2013 Insurance Barometer published by LIMRA, two-thirds of consumers are worried about finding enough money
				for a comfortable retirement. This is even more alarming when you consider the same study found that one-third of those consumers
				had experienced the death of a loved one in the past 2 years. This left them more concerned than ever about the financial situations
				in which they would leave their own families if they were to pass away without adequate life insurance.</p>
			<h2>Life Insurance</h2>
			<p>The following life insurance guide is designed to be an informative break down of the subject, offering you the educational tools
				you need to purchase your own policy and make the best decisions possible for yourself and your family. Look for
				<b>TIPS</b> (“<b>T</b>ricky <b>I</b>nsurance <b>P</b>olicies <b>S</b>implified”) throughout the guide that offer handy
				summaries and suggestions.</p>
			<h3>I. A Layman’s Guide to Deciphering Life Insurance</h3>
			<p style="text-align: center;"><img src="../../img/insurance-definition.jpg" alt="life insurance guide defined" width="500" height="333" /></p>
				<p style="text-align: center;">Image via <a href="https://www.flickr.com/photos/alancleaver/4122171512/">Flickr</a> by<b> </b>Alan Cleaver<b></b></p>
			<p>Insurance of any type is a mystery to many people, but it’s possible to look past the complicated lingo and policy names by
				seeking out simplified definitions and straightforward answers to common questions.</p>

			<h4>Should You Get Life Insurance?</h4>

			<p>If you’re reading this guide to life insurance, you’ve already thought about that question.
				The answer is yes; almost all adults need some type of life insurance policy.</p>

			<p>There are, however, a few exceptions to the rule. Those who <i>don’t </i>need life insurance tend to fall in three categories:</p>
			<ul>
			 	<li>You’re young and single with no dependents</li>
			 	<li>You have already raised your kids and now live on your own</li>
			 	<li>You have all the financial resources you need to support your family after you’re gone</li>
			</ul>
			<p><b>TIPS –</b> Remember, if you have anyone depending on your income (your spouse, children, siblings,
				aging parents, etc.) and you’re not independently wealthy, you will need life insurance at some point.</p>

			<h4>What is the Best Type of Life Insurance?</h4>

			<p>Just as our financial planning changes from one life stage to the next,
				<a href="../life-insurance/best-policies/">different types of life insurance policies</a> fill different
				needs depending on age and circumstance. The two major types of life insurance are whole life, and term life,
				so let’s start there.</p>

			<h5>Term Life Insurance</h5>

			<p><a href="../life-insurance/term/">Term life</a> is designed to meet temporary needs because it gives you
				protection during a specific period of time or “term,” hence the name. It’s the most affordable option and
				serves its purpose, such as providing coverage while your kids are in college or until you pay off your
				mortgage, but it isn’t a long-term solution.</p>

			<p>Some people choose a term life policy when they’re in their 20s or 30s, before they’re financially stable
				enough to afford a more costly policy. Consider the following example:</p>
			<blockquote>Sara is 28-years-old and a stay-at-home mom to a three-year-old. Her husband has a life insurance
				policy through work, but they’re worried about the financial strain that could be placed on the family if
				Sara passes away while their daughter is still young. Sara decides to take out a 20-year term life policy
				because she’ll be covered until her daughter is finished with college. Her family will only receive the
				money from her policy if she dies before age 48.</blockquote>
			<p><b>TIPS</b> – Although term life isn’t a permanent solution, it meets an immediate need with guaranteed
			premiums and flexible coverage options that allow you to increase your coverage amount when necessary.
			Extending coverage, however, is expensive once your term is up, and you’ll be faced with limited conversion options.</p>

			<h5>Whole/Permanent Life Insurance</h5>

			<p>A permanent life insurance policy is crucial to your retirement planning. It offers you lifelong protection
				that never expires as long as you make your premium payments and don’t have any loans or withdrawals
				taken out. It’s the more expensive option early on because you’re basically “overpaying” to ensure a set
				premium during your older, high-risk years—but that overpayment is set aside and considered to be the policy’s
				cash value.</p>

			<p>That’s the unique thing about whole life insurance. It allows you to borrow against that cash value at
				any time during your life, tax-free. For example:</p>
			<blockquote>Gene and Lisa are empty nesters and finally have the time to do that much-needed remodel on
				the house. Gene has a $500,000 whole life policy that he purchased over 18 years ago. It’s accumulated
				enough cash value that would more than cover the couple’s remodeling project, which they consider to be
				a good investment not only for retirement, but also for the kids’ future after they’re gone.</blockquote>

			<p>During the first 10 to 15 years of your policy, the insurer will stipulate
				“<a href="http://www.insurancelibrary.com/life-insurance/what-is-life-insurance-surrender-charge">surrender charges</a>,”
				which are fees designed to recoup the company’s costs in the event that you ever cancel, or <i>surrender</i>, your
				policy. The amount you can borrow from the life insurance policy is the accumulated cash value minus the surrender
				charges. This is also considered the “loan value.”</p>

			<p><b>TIPS</b> – Any amount of money borrowed from your whole life insurance policy (that isn’t paid back)
				reduces the amount paid out upon your death. This means that the more you borrow now, the less your
				beneficiaries will receive.</p>

			<h3>II. Variations on Traditional Policies</h3>
			<p style="text-align: center;"><img class="img-fluid" src="../../img/old-couple.jpg" alt="old couple" width="500" height="333" /></p>
			<p>Image via <a href="https://www.flickr.com/photos/garryknight/5836253352/">Flickr</a> by garryknight</p>

			<p>Now that you understand the basic differences between term life and whole life insurance,
				it’s important to recognize the variations of those policies.</p>

			<h4>Convertible Term Life</h4>

			<p>If you’re torn between term life and whole life insurance, you may want to consider a convertible term life policy.
				This is sort of a hybrid between temporary and permanent insurance because your term life policy can easily be converted
				to a permanent policy of equal value whenever you choose. It does tend to cost more than a basic term life option,
				and some insurers stipulate that you can only convert the term policy to a permanent one up until the age of 65.</p>

			<p><b>TIPS</b> – A convertible policy may cover you past the age of 65, but you <i>must</i> take action prior to the
				cut-off age to convert it, or you risk losing the option of switching to permanent life insurance.</p>

			<h4>Universal Life Insurance</h4>

			<p>Like the security of whole life insurance but want a little more flexibility? A universal life policy may be a good
				match for you. Keep in mind, however, that you can expect to exchange some of the guaranteed certainty of whole life
				for the flexibility found in universal life.</p>

			<p>The number one thing to remember about universal life is that the rate of return isn’t guaranteed
				because it’s determined by the market. This is because the policy adds money market investments to
				the death benefit. You can pay your premiums whenever you want, and in any amount you choose within
				the given minimums and maximums.</p>

			<blockquote>Becky is a professional artist who works on commission for those bigger paychecks, but
				sells the majority of her other pieces through a local gallery. She wants a life insurance policy
				but her income fluctuates too much to make regular premium payments. With a universal life policy,
				she can pay the annual minimum when money is tight and put in extra cash after earning a big commission.
			</blockquote>

			<p><b>TIPS</b> – The premium rate you choose when buying universal life will affect your death
				benefit. The more payments you make, the bigger the benefit.</p>

			<h4>Variable Life Insurance</h4>

			<p>Staying on top of a universal life policy may not be everyone’s cup of tea, but variable life
				policies are even more complex and require you to remain vigilant.</p>

			<p>This type of coverage allows you to choose your own investment strategy and manage it as you
				would any investment portfolio. It’s very similar to a universal life policy but, rather than
				the insurer managing the investment, you get to take the reins.</p>

			<p>Not the best at investing? No worries. Most variable life insurance policies are designed
				with a minimum benefit that still pays out to your beneficiaries, so they receive that benefit
				even if you’ve made poor investment decisions.</p>

			<p><b>TIPS</b> – Even though variable life comes with greater risks, you may be able to
				achieve greater returns if you understand investing and stay on top of the policy.</p>

			<h4>No Exam Life Insurance</h4>

			<p>While not exactly a particular type of insurance, no exam life insurance is a breed
				of its own. Most life insurance products require medical exams as part of the application
				process. This is done in order to determine not only your eligibility for the policy, but
				also the cost of premiums, which can be quite discouraging if you’re not in the best shape.</p>

			<p>Also known as simplified issue life insurance, no exam life insurance is seeing an increase
				in demand among families who don’t want to jump through hoops to obtain coverage. It does usually
				cost more than a traditional policy because the insurer is taking a bigger risk by not evaluating
				your health status, but this can work in your favor if you:</p>
			<ul>
			<li>Haven’t seen a physician in more than two years and don’t know if your lab work would look good enough on a traditional insurance application</li>
			<li>Need coverage fast and can’t wait four to eight weeks for the average underwriting process</li>
			<li>Don’t like needles or feel that any medical exam is a deal-breaker</li>
		</ul>

			<p><b>TIPS</b> – Not everyone qualifies for <a href="https://phpstack-223893-690316.cloudwaysapps.com/">no exam life insurance</a>. You will have to answer
				a series of health questions and the insurer may check your pharmacy records, motor vehicle report, and any
				data collected by the Medical Information Bureau.</p>

			<h3>III. Things to Keep in Mind When Buying Life Insurance</h3>

			<p style="text-align: center;"><img src="../../img/glasses-fine-print.jpg" alt="insurance fine print" width="500" height="324" /></p>
			<p style="text-align: center;">Image via <a href="https://www.flickr.com/photos/unreal_estates/6803395735/">Flickr</a> by abarbier66</p>

			<p>You know why you need insurance. You may even be leaning toward a particular type of coverage
				and are ready to buy that policy now, but before you do, remember these important facts:</p>

			<h4>Life Insurance is a Contract</h4>

			<p>While there are certain requirements you must meet, there are also things the insurer must
				make good on. Life insurance isn’t just a product you can buy and discard on a whim. It’s an
				important life decision—so read the fine print and ask questions until you understand your policy.</p>

			<h4>Circumstances Change</h4>

			<p>Life never stays constant. You may have started looking into buying insurance when you got
				married (or divorced), when you had kids, when you were laid off from your job, when you closed
				on your first house, or when you turned 50. Major life events tend to define the biggest decisions,
				but it’s important to step back and consider all possibilities when purchasing your policy. Ask yourself
				if the coverage you settle on will be enough if and when circumstances change.</p>

			<h4>Life Insurance is a Commodity</h4>

			<p>Since insurance is a product being sold by professional salespeople, you need to be as informed
				as possible. This doesn’t mean that insurance agents are automatically going to take advantage of
				you, but they’re not the best judge of your personal needs, you are. Don’t let anyone talk you into
				buying something you know isn’t the best solution for you and your family.</p>

			<h4>Loss is Difficult</h4>

			<p>It’s not easy to imagine what life will be like for your loved ones after you’re gone,
				and they probably don’t want to think about it either. Still, planning ahead is for their
				benefit, so consider all the what-ifs. Even if you go with term life coverage and outlive your
				policy, you’re still there to love and support your family. So feel confident that no matter
				which insurance type you choose, you’ve made the most prudent decision possible to provide for them.</p>

			<h3>IV. The Do’s and Don’ts of Buying Life Insurance</h3>

			<p style="text-align: center;"><img src="../../img/buying-life-insurance.jpg" alt="buying life insurance" width="500" height="374" /></p>
			<p style="text-align: center;">Image via <a href="https://www.flickr.com/photos/23765495@N08/7897518572/">Flickr</a> by moolanomy</p>

			<p>If you still need some basic rules of thumb before taking the plunge and buying that policy,
				here’s a handy list of do’s and don’ts:</p>

			<p><strong>DO</strong></p>
			<ul>
			 	<li>Purchase a policy that will cover 5 to 8 times the amount of your annual salary.</li>
			 	<li>Review your policy regularly and increase or reduce your coverage based on lifestyle changes.</li>
			 	<li>Look into lower premiums on a current life insurance policy if you’ve kicked the habit, since non-smokers pay less for coverage.</li>
			 	<li>Consider automatically renewable coverage that renews regardless of any changes in health status.</li>
			 	<li>Consider meeting with a financial planner to get a better idea of the amount of coverage you need.</li>
			</ul>
			<p><b>DON’T</b></p>
			<ul>
			 	<li>Get several small policies thinking you will save money. It’s always better, and usually more affordable, to buy one major life insurance policy that you can modify as your needs change.</li>
			 	<li>Ignore uninsured spouses. Stay-at-home parents and spouses that work part-time may not contribute much to the family in the way of income, but think of the housekeeping, daycare, and other services that are lost if that spouse dies.</li>
			 	<li>Buy a whole life policy thinking it will be a high return investment. Protecting your loved ones financially for a few years after your death should be the main reason behind your purchase. Most polices have a very low return on the investment.</li>
			 	<li>Buy a policy from the first agent you find. Shop around and do your homework until you understand your needs and know how to find the best rate for the coverage you want.</li>
			</ul>

			<h3>V. Answers to the Most Common Questions</h3>

			<p style="text-align: center;"><img src="../../img/faq.jpg" alt="faq" width="500" height="375" />
			<p style="text-align: center;">Image via <a href="https://www.flickr.com/photos/42931449@N07/5397530925/">Flickr</a> by photosteve101</p>

			<p>If you’ve read this life insurance guide and taken the information to heart, you’re already on
				the right track toward obtaining the life insurance policy you need, but you may have lingering
				questions. Consider these life insurance FAQ’s:</p>

			<h3>Who should I name as my beneficiary?</h3>

			<p>Your beneficiary can be your spouse, your children, a sibling, nieces and nephews,
				or even your estate. You should always specify a contingent beneficiary in case you
				outlive the primary beneficiary. Be careful with the wording of your beneficiary
				designations and remember to change the designation when you need to.</p>

			<h3>What happens if a miss a premium payment?</h3>

			<p>Most insurers have a grace period of about 30 days in which you can make up a missed
				payment with no interest added. Especially with term policies, if you fail to make the
				payment before the grace period is up, the policy will be cancelled. Permanent policies
				come with the option to make the payment with the policy’s cash value, but you have to
				authorize that option.</p>

			<h3>What should I consider when determining how much coverage I need?</h3>

			<p>We’ve already mentioned that it’s a good idea to buy a policy that will cover 5 to 8
				years worth of income, but that’s a very general rule of thumb. Sit down and list any
				current and future financial obligations (debts, taxes, housing costs, funeral costs,
				clothing, education, etc.) and see how much of those needs could be met by surviving
				family members (such as a spouse’s income, retirement money, savings, etc.). Calculating the
				difference between those two should give you a better idea of how much life insurance coverage
				you need.</p>

			<p>Planning ahead for something as devastating as your own death can be a depressing, confusing
				prospect, but it’s something we all have to face. Whether you end up choosing permanent coverage,
				a term policy, or a combination of the two, the best solution depends on your own financial goals
				and unique circumstances. Having a better idea of your family’s needs, as well as a basic understanding
				of your life insurance options, gives you the power to secure your family’s future, taking care of them
				even after you’re gone.</p>
		</div>

	</section>
	<!-- END PAGE-CONTENT -->
	<h2>Related Articles</h2>
	<?=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]); ?>
</div>
<?=$this->render('/main/widgets/bio-jonathan-holloway.php'); //Bio Embed Code?>