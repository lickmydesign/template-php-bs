<div class="top-band hidden-xs">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				Tel: <a href="tel:<?php echo $settings['tel_no']; ?>"><?php echo $settings['tel_no']; ?></a> <span class="pipe">|</span> Email: <a href="mailto:<?php echo $settings['contact_email']; ?>?subject=Website%20Enquiry"><?php echo $settings['contact_email']; ?></a>
			</div>
			<div class="col-md-6 text-right social-links">
				<a href="<?php echo $settings['facebook_url']; ?>" target="_blank" title="Visit our Facebook Page"><span class="fab fa-facebook-square"></span></a>&nbsp;
				<a href="<?php echo $settings['twitter_url']; ?>" target="_blank" title="Visit us on Twitter"><span class="fab fa-twitter"></span></a>&nbsp;
				<a href="<?php echo $settings['linkedin_url']; ?>" target="_blank" title="Visit us on LinkedIn"><span class="fab fa-linkedin"></span></a>&nbsp;
				<a href="<?php echo $settings['googleplus_url']; ?>" target="_blank" title="Visit us on Google Plus"><span class="fab fa-google-plus"></span></a>
			</div>
		</div>
	</div>
</div>

<header>
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img src="<?php echo site_url($settings, "assets/imgs/logo.png"); ?>" class="img-responsive" alt="<?php echo $settings['site_name']; ?> logo" width="160" height="" /></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse">
				<ul class="nav nav-pills">
				<?php echo output_menu($settings['navigation']); ?>
				</ul>
			</div><!-- /.navbar-collapse -->

		</nav>
	</div>
</header>
