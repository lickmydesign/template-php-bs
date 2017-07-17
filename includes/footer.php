<footer>
	<div class="container">

		<div class="row">

			<div class="col-md-6">
				<p>Tel: <a href="tel:<?php echo $settings['tel_no']; ?>"><?php echo $settings['tel_no']; ?></a> <span class="pipe">|</span> Email: <a href="mailto:<?php echo $settings['contact_email']; ?>?subject=Website%20Enquiry"><?php echo $settings['contact_email']; ?></a></p>
				<p><?php echo $settings['address_formatted']; ?></p>
			</div>

			<div class="col-md-6">
				<ul class="nav nav-pills">
					<?php echo output_menu($settings['navigation']); ?>
				</ul>
				<p><?php echo $settings['opening_times']; ?></p>
				<p>
					<a href="<?php echo $settings['facebook_url']; ?>" target="_blank" title="Visit our Facebook Page"><span class="fa fa-facebook-f"></span>&nbsp;
					<a href="<?php echo $settings['twitter_url']; ?>" target="_blank" title="Visit us on Twitter"><span class="fa fa-twitter"></span></a>&nbsp;
					<a href="<?php echo $settings['linkedin_url']; ?>" target="_blank" title="Visit us on LinkedIn"><span class="fa fa-linkedin"></span></a>&nbsp;
					<a href="<?php echo $settings['googleplus_url']; ?>" target="_blank" title="Visit us on Google Plus"><span class="fa fa-google-plus"></span></a>
				</p>
			</div>

		</div> <!-- of .row -->

		<div class="row epitaph">
			<div class="col-md-12">
				<p>&copy; <?php echo date("Y")?> <?php echo $settings['site_name']; ?>. All rights reserved.</p>
			</div>
		</div> <!-- of .row -->

	</div>
</footer>
