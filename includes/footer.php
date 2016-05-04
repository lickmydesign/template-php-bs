<footer class="container">

	<div class="row">
		<div class="col-md-6">
			<p>Tel: <?php echo $settings['tel_no']; ?> <span class="pipe">|</span> Email: <a href="mailto:<?php echo $settings['contact_email']; ?>?subject=Website%20Enquiry"><?php echo $settings['contact_email']; ?></a></p>
			<p><?php echo $settings['address_formatted']; ?></p>
		</div>

		<div class="col-md-6">
			<ul class="nav nav-pills">
				<?php echo output_menu($settings['navigation']); ?>
			</ul>
			<p><?php echo $settings['opening_times']; ?></p>
		</div>

	</div> <!-- of .row -->

	<div class="row epitaph">
		<div class="col-md-12">
			<p>&copy; <?php echo date("Y")?> <?php echo $settings['site_name']; ?>. All rights reserved.</p>
		</div>
	</div> <!-- of .row -->

</footer>
