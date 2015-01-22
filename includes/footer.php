<footer class="container">

	<div class="row">
		<div class="col-md-6">
			<p>Tel: 01793 123456 <span class="pipe">|</span> Email: <a href="mailto:info@sitename.co.uk?subject=Website%20Enquiry">info@sitename.co.uk</a></p>
			<p>Address line 1, Address line 2, Town, County, Postcode</p>
		</div>

		<div class="col-md-6">
			<ul class="nav nav-pills">
				<li<?php echo $link1_active; ?>><a href="index.php">Home</a></li>
				<li<?php echo $link2_active; ?>><a href="about.php">About</a></li>
				<li<?php echo $link3_active; ?>><a href="page3.php">Page 3</a></li>
				<li<?php echo $link4_active; ?>><a href="page4.php">Page 4</a></li>
				<li<?php echo $link5_active; ?>><a href="contact.php">Contact</a></li>
			</ul>
		</div>

	</div> <!-- of .row -->

	<div class="row epitaph">
		<div class="col-md-12">
			<p>&copy; <?php echo date("Y")?> <?php echo $site_name; ?>. All rights reserved.</p>
		</div>
	</div> <!-- of .row -->

</footer>
