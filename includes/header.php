<div class="top-band hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				Tel: <?php echo $settings['tel_no']; ?> <span class="pipe">|</span> Email: <a href="mailto:<?php echo $settings['contact_email']; ?>?subject=Website%20Enquiry"><?php echo $settings['contact_email']; ?></a>
			</div>
			<div class="col-md-6 text-right social-links">
				<a href="<?=$settings['facebook_url']?>" target="_blank" title="Visit our Facebook Page"><span class="fa fa-facebook-f"></span></a>
				<a href="<?=$settings['twitter_url']?>" target="_blank" title="Visit us on Twitter"><span class="fa fa-twitter"></span></a>
			</div>
		</div>
	</div>
</div>

<header class="container">

	<div class="row">
		<div class="col-md-3">
			<div id="logo">
				<a href="index.php"><img src="http://placehold.it/260x100&text=Logo Here" alt="<?php echo $settings['site_name']; ?> logo" width="" height="" /></a>
			</div>
		</div>

		<div class="col-md-9">
			<nav>
				<ul class="nav nav-pills">
				<?php echo output_menu($settings['navigation']); ?>
				</ul>
			</nav>
		</div>
	</div> <!-- of .row -->

</header>
