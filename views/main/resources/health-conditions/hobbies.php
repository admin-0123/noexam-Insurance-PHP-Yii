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
$this->params['breadcrumbs'][] = ['label' => 'Health Conditions', 'url' => '/life-insurance/health-conditions/'];
$this->params['breadcrumbs'][] = $this->context->current_cat->title;
?>
<div class="page-content page-wrapper trans_all">

	<?=$this->render('@app/views/layouts/resource_grid.php', ['grid_data' => $grid_data]);?>

	<!-- START PAGE-CONTENT -->
	<section class="page">
		<article class="content">
			<h1>Obesity</h1>
			<?=Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]);?>
			<?=$this->render('/main/widgets/authors-small.php', ['updated' => date('F j, Y', filemtime(__FILE__))]);?>

			<p><img class="alignright size-full wp-image-461" src="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/post-it.png" alt="post-it" width="300" height="302" srcset="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/post-it.png 300w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/post-it-150x150.png 150w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/post-it-298x300.png 298w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/post-it-250x251.png 250w" sizes="(max-width: 300px) 100vw, 300px"/>What are the keys to health and happiness? For most people, the list would include a healthy diet, regular exercise, a good night&#8217;s sleep, and loved ones with whom to share their lives. Hobbies, unfortunately, rarely make the list of priorities for a healthy lifestyle. Studies have shown that time spent pursuing hobbies and personal passions is actually essential for a well-rounded and satisfying life. A life
				without hobbies and leisurely pursuits is a very dry, demanding, and unhealthy life. Not convinced? Take a look at the benefits of having a hobby you enjoy.</p>
			<p><span id="more-431"></span></p>
			<p>Why hobbies are important:</p>
			<ul>
				<li>They give you permission to take a break.</li>
				<li>They create healthy social connections.</li>
				<li>They challenge you in a good way.</li>
				<li>They are a great stress reliever.</li>
				<li>They can keep you fit.</li>
				<li>They make you better at your job.</li>
				<li>They ward off depression.</li>
			</ul>
			<h2>Hobbies Give You Permission to Take a Break</h2>
			<p><img class="alignnone size-full wp-image-432" src="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4304230575_5068ecf65d_z.jpg" alt="tennis players" width="640" height="434" srcset="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4304230575_5068ecf65d_z.jpg 640w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4304230575_5068ecf65d_z-300x203.jpg 300w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4304230575_5068ecf65d_z-250x169.jpg 250w" sizes="(max-width: 640px) 100vw, 640px"/></p>
			<p>Image via <a href="https://www.flickr.com/photos/tulanesally/4304230575/in/photolist-7ymiMZ-ef4AHb-a7ZvDT-dokKxS-ef4DY9-4FPshn-ekp6B5-ekiqVB-ef4C3W-eeXPuk-eeXSJD-ef4Dn9-eeXRJP-eeXQoF-eeXPmn-eeXRXR-ef4D1j-fKC2d8-ef4Gdo-9fHNW6-9fHNz6-gS4cem-7ym8nk-eeXVSx-eeXW68-eeXTjB-ef4BuQ-eeXQWi-eeXTSv-7n9s8r-4RQEPY-4RQQfC-d5srcq-9fLVjU-mxJoQo-4FTDo9-ekpmum-ekignp-ef4CQ5-eeXR9i-ef4zph-ekpeEo-eeXUYZ-ef4CCG-7n9swZ-eeXX7p-eeXXkD-ef4G6s-nnLTQN-a7YZip">Flickr</a> by Tulane Public Relations</p>
			<p>These days, most people have hectic schedules with work, school, family, and personal responsibilities demanding attention from morning until bedtime. If you&#8217;re like many people, you feel a little guilty taking an hour or two for yourself when you have more &#8220;important&#8221; things to do. When you pursue a hobby, like tennis or taking a painting class, you&#8217;ve made a commitment to someone to show up and participate—it&#8217;s easier to <a href="http://www.washingtonpost.com/business/capitalbusiness/career-coach-the-value-of-hobbies/2013/05/03/ffa53f2c-b294-11e2-bbf2-a6f9e9d79e19_story.html">give yourself permission</a> to take a break from work and responsibility. Taking a few hours each week to pursue your passions restores your energy and sense of balance so you can better handle your daily obligations.</p>
			<h2>Hobbies Create Healthy Social Connections</h2>
			<p><img class="alignnone size-full wp-image-433" src="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4744679477_688af7992d_z.jpg" alt="baseball" width="640" height="425" srcset="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4744679477_688af7992d_z.jpg 640w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4744679477_688af7992d_z-300x199.jpg 300w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4744679477_688af7992d_z-250x166.jpg 250w" sizes="(max-width: 640px) 100vw, 640px"/></p>
			<p>Image via <a href="https://www.flickr.com/photos/iamagenious/4744679477/in/photolist-8egB42-8egAap-8egvgD-8egtLk-8egqxi-8ek2T7-8egGGF-8egGjB-8ejPq1-8egFkn-8ejWu3-8ejGcq-8egnMz-8egvH2-8egDFZ-8egxNi-8egoUc-8egJ7B-8egHUz-8egDvn-8egtwF-8ejYg9-8egEwX-8ejQau-8egyAz-8egswT-8ejZdw-8ejQLs-8ek2z3-8ek1kw-8ejTiy-8egCKt-8egJkz-8egEii-8ek1bs-8egrsK-8ejUbu-8egKsk-8ejFcb-8ejZrj-8egrVc-8ejE7U-8egFxi-8egx4r-8ejRzu-8egpUe-8ejULA-8ejLbw-8ejEL3-8ejQo1">Flickr</a> by Eric Molina</p>
			<p>In this digital world, it&#8217;s all too easy for people to get caught up in activities that keep them isolated indoors and focused on devices. When you take up a hobby, like softball or golf, you&#8217;ve created opportunities for comfortable and enjoyable social interactions. Even if your hobby is something more solitary, like knitting or photography, you are likely to seek others with a similar passion to exchange information, ask questions, or form a club. Striking up a conversation with someone who shares your passion for a particular sport or hobby is comfortable and less awkward; it&#8217;s easier to <a href="http://friendship.about.com/od/Meeting-New-Friends/tp/Connect-With-People-Through-New-Activities.htm">make new friends</a> and expand your network of social connections.</p>
			<h2>Hobbies Challenge You in a Good Way</h2>
			<p><img class="alignnone size-full wp-image-434" src="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/7768565276_c32cd4ed07_z.jpg" alt="sailboat" width="640" height="437" srcset="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/7768565276_c32cd4ed07_z.jpg 640w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/7768565276_c32cd4ed07_z-300x204.jpg 300w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/7768565276_c32cd4ed07_z-250x170.jpg 250w" sizes="(max-width: 640px) 100vw, 640px"/></p>
			<p>Image via <a href="https://www.flickr.com/photos/bossco/7768565276/in/photolist-cQtVNC-2naqJc-aooK84-9iJ9zt-8uW4aj-4W7jC2-5i8Rbz-8WXij9-e8GCQT-8VHrfR-33NmjV-fgcz88-hCp9V-89LjYm-6x9jAP-7JDkap-6uC4V6-8keM3n-52wAr6-bpDGtD-fhximo-8BiPpH-74aRfG-4XdydL-aos7RW-fCVJGb-aPZDmr-a4kgif-4wcS32-bpDHu4-cKDJ9A-fnhM5-5EEB4J-52AAXC-9ySt6r-8tL6Hk-9vo8aq-MsAhx-6cTBPk-4Vqtq2-PxBJA-6h89K6-7ZRFTf-5qtdNH-aorRHQ-fPPXzS-8kR4QF-4W6iAc-seMQ1-8kdaPa">Flickr</a> by Raymond Shobe</p>
			<p>Unlike challenges at work, which are often accompanied by <a href="https://noexam.staging.wpengine.com/life-insurance/health-conditions/anxiety/">anxiety</a> and stress, challenging yourself in your hobby is a positive thing. You set the challenges and goals you want to accomplish with your hobby whether it&#8217;s shaving a minute off your time in a 5k race, growing the perfect heirloom tomato, or taking your first solo sail on a catamaran. Challenging yourself in the penalty-free environment of personal hobbies is very empowering; you are free to try new things, take risks, and push yourself without fear of failure. Plus, when you succeed, your self-confidence grows and encourages success in other areas of your life.</p>
			<h2>Hobbies Are a Great Stress Reliever</h2>
			<p><img class="alignnone size-full wp-image-435" src="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4440278392_ed5325c9e2_z.jpg" alt="yoga" width="640" height="480" srcset="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4440278392_ed5325c9e2_z.jpg 640w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4440278392_ed5325c9e2_z-300x225.jpg 300w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/4440278392_ed5325c9e2_z-250x187.jpg 250w" sizes="(max-width: 640px) 100vw, 640px"/></p>
			<p>Image via <a href="https://www.flickr.com/photos/gotovan/4440278392/in/photolist-7LnA51-ayMmLe-8Ay67E-8AyeGb-9MTEJ5-dj7HN1-dj7KrS-dj7LVX-766HRE-bnCQ38-ccXBGf-fMPWwA-ccXC9d-8aBAbW-ccXBAL-dj7KRM-ccXyYG-aiDDwf-77bboZ-5WBLyJ-4h2EhA-762FqR-7Lnzu3-dj7Le6-bj5mui-bnCNEH-8Aycdu-9ntHyA-6rhFvb-dj7MdD-aiAXVF-aiAU6D-ah7t9B-88i7eH-7YVcRK-8PzGpR-aiAXA4-brKtMm-762RHR-fMxrVi-6Z2YgL-71QVtw-bVAkut-ccXCqC-bVAmcr-fMQ1Dj-d1xVJh-4smxnV-d6Wyms-aiDEHu">Flickr</a> by GoToVan</p>
			<p>It sounds counterintuitive to say adding another activity to an already packed schedule helps reduce stress. But when that activity is a hobby you really enjoy, the worries of the day disappear as you immerse yourself in a pleasurable activity. Hobbies you love are almost a <a href="http://www.healthcentral.com/anxiety/manage-279214-5.html">form of meditation</a>; it takes you out of the demands of everyday life and into a place where you focus only on rewarding activities. Your <a href="https://noexam.staging.wpengine.com/life-insurance/health-conditions/high-blood-pressure/">blood pressure</a> lowers, and your body releases mood-elevating endorphins that promote a sense of well-being and happiness. Hobbies that require intense concentration, like <a href="https://www.guitarlessons.org">learning to play guitar</a>, or practicing yoga or martial arts, are especially effective at inducing a meditative state.</p>
			<h2>Physical Hobbies Help You Keep Fit</h2>
			<p><img class="alignnone size-full wp-image-436" src="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/11032144215_128e3a7029_z.jpg" alt="horse riding" width="640" height="427" srcset="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/11032144215_128e3a7029_z.jpg 640w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/11032144215_128e3a7029_z-300x200.jpg 300w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/11032144215_128e3a7029_z-250x166.jpg 250w" sizes="(max-width: 640px) 100vw, 640px"/></p>
			<p>Image via <a href="https://www.flickr.com/photos/109514714@N04/11032144215/in/photolist-9UkSt3-c33vY5-bsfoGq-bxZ5yY-cXRpVS-f9Xof-9K7hGE-2F5zhT-cXR9Sm-6VJZxH-7HUuxw-cXReUw-cXRdZ3-avQuuV-cXRfCq-7bH5TV-6PAMk7-cXR6wj-fanyw-fdt2m-9XqdFq-akTqKX-akWeFG-hNSC82-6tRViy-aytrei-8Rx14Z-4xtkzs-8nHWra-dSX7gD-c3SVH3-4Y4eK2-4Dq4gE-a4Cypu-fdpRh-fDSsx4-faoDd-akTqW2-fan1g-fdaFE-9XjZEP-4xcVwM-92NcFF-8PhKtc-9QWdGi-h1JJiR-dBzyCD-8yfZe5-fanq8-fdcZp">Flickr</a> by Reindi</p>
			<p>If you struggle to maintain your weight and stay in shape, an athletic hobby is a great way to motivate you to reclaim your health. Studies show that the majority of people who sign up for a gym membership rapidly taper off, or quit going completely, within three months. However, people who take up a physical hobby, like dancing or biking, tend to stick with it much longer and, sometimes, make dramatic and positive lifestyle changes in pursuit of their hobby. While exercise often seems like a chore, physical activity from an enjoyable hobby is rewarding and fun. Some of the <a href="http://www.nftips.com/2014/03/best-hobbies-for-natural-weight-loss.html">best hobbies</a> to boost your fitness level include hiking, surfing, cycling, swimming, horseback riding, and kick-boxing. Being fit can also save you money when you go to shop for <a href="https://noexam.staging.wpengine.com/">life insurance without an exam</a>.</p>
			<h2>Hobbies Make You Better at Your Job</h2>
			<p><img class="alignnone size-full wp-image-437" src="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/5910423017_df91421429_z.jpg" alt="bouldering" width="640" height="427" srcset="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/5910423017_df91421429_z.jpg 640w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/5910423017_df91421429_z-300x200.jpg 300w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/5910423017_df91421429_z-250x166.jpg 250w" sizes="(max-width: 640px) 100vw, 640px"/></p>
			<p>Image via <a href="https://www.flickr.com/photos/minicooper93402/5910423017/in/photolist-a1hsR8-a1kiTC-eEf7t9-92oy5W-7YUZ69-7YT7Nv-dZb9kk-dZgu2Q-jE6c3-ayv5SP-65L8G9-aM1JMn-a1kkcw-5dRyP4-65L6iN-65Lmsm-65FmCn-4VfDbg-b4uPS2-92jUPD-92o5NU-6Ch2o-hR78v1-4VfS8X-a1httH-7eGkqp-6wGjGg-8Yxmhr-4VjXdA-84QGBP-7YXoQA-8m4JDL-6UEwkr-7d2fy1-6oJQkp-dZaQYi-a1kixh-a1kfmm-a1hor6-8ZUUea-4MXeGo-7YVF6U-7VyjLC-jE5Yh-hiNk4q-8EcmYz-gQHnxq-9mh5Jq-aGoVYR-dZaUAc">Flickr</a> by Devra</p>
			<p>The success you achieve with your hobbies translates into success at work, and it&#8217;s easy to see why. Most hobbies involve at least one of the following skills: risk taking, problem solving, creative thinking, overcoming obstacles, cooperating with others, and setting goals. Each of these skills is directly related to <a href="http://www.nytimes.com/2007/12/02/jobs/02career.html?_r=0">success on the job</a>. A person accustomed to risk, creativity, cooperation, and the satisfaction of achieving goals in his or her personal life and hobbies is better equipped to replicate that success at work. Hobbies also restore the balance between work and life outside of work leaving you refreshed to tackle difficult situations on the job.</p>
			<h2>Hobbies May Ward Off Depression</h2>
			<p><img class="alignnone size-full wp-image-438" src="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/8275688236_e23a9c6783_z.jpg" alt="painting" width="640" height="424" srcset="https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/8275688236_e23a9c6783_z.jpg 640w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/8275688236_e23a9c6783_z-300x198.jpg 300w, https://noexam.staging.wpengine.com/wp-content/uploads/2014/08/8275688236_e23a9c6783_z-250x165.jpg 250w" sizes="(max-width: 640px) 100vw, 640px"/></p>
			<p>Image via <a href="https://www.flickr.com/photos/eka_shoniya/8275688236/in/photolist-dBi4MW-dBcAGi-dBi4a5-dekgmU-9AiGzN-8vULPR-f7ZjTw-jiedz1-iRfyeA-6p3vfT-6HgK8T-g3gRUG-6ratjZ-6rwTsA-6ragDZ-6raphM-4nSFpA-6rav8e-6raifF-6remRG-6rajHx-6ras1M-6raqMR-m6cxKz-6revUu-6rexcJ-6reomo-6raeZP-myEoYc-7cxo53-mb4aFT-ngudBK-L6sYn-74wXKK-8uRfHQ-9avvSN-6JASF-878bvZ-6FGLgL-8ykevc-mx1XFD-5moZ45-9NCQ9y-bsHSTT-jRtMan-n7Gdt8-7BL1Ui-7Gm15A-niH7yG-aM7VW2">Flickr</a> by Eka Shoniya</p>
			<p>Engaging in hobbies you enjoy helps fight off depression according to a <a href="http://allthingsdepression.com/2011/02/hobbies-and-mental-health/">clinical study</a>. Researchers in the United Kingdom working with patients with major depressive disorder instructed therapists to help each patient identify a long-lost hobby or new interest that they could pursue for at least one or two hours each day. After three months, researchers asked the patients to rate their sense of identity, usefulness, and well-being. The patients who had devoted at least one hour every day to a hobby or leisure activity showed marked improvement in their sense of self-esteem and accomplishment. The researchers found that people channel feelings of worthlessness and self-doubt into positive activities of creating, caring, achieving goals, and connecting and, thus, reduce the risk of depression.</p>
			<p>Time spent indulging your hobbies and passions provides a break from the demanding routine of day-to-day life. Hobbies provide opportunities to take risks, set and achieve goals, build confidence and self-esteem, explore your creativity, and develop relationships with like-minded acquaintances. Don&#8217;t neglect the benefits of having hobbies in developing a full and satisfying life.</p>
		</article>
	</section>
	<!-- END PAGE-CONTENT -->

</div>
<?=$this->render('/main/widgets/bio-jonathan-holloway.php'); //Bio Embed Code?>
