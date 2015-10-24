
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
