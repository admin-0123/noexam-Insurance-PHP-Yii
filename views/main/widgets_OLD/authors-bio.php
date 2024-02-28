<?php
if(!isset($align)) $align = 'none';
if(!isset($image)) $image = 'icon';
if(!isset($width)) $width = 'auto';

?>
<section class="bio2 trans_all align-<?=$align;?>" style="width: <?=$width;?>;">
	<div class="image">
	<?php if($image == 'avatar'):?>
		<div class="avatar p1"></div>
		<div class="avatar p2"></div>
	<?php elseif($image == 'icon'):?>
		<div class="icon-sticker"></div>
	<?php endif;?>
	</div>
	<div class="about">
		This page is maintained by licensed agents <a href="#">John Holloway</a> and <a href="#">Jonathan Fritz</a>. They created NoExam.com in 2013 and have since helped over 6,000 families get life insurance.
	</div>
</section>
