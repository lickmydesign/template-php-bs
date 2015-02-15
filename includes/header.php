<?php
$link1_active = "";
$link2_active = "";
$link3_active = "";
$link4_active = "";
$link5_active = "";

if ($page_name == "Home") {
	$link1_active = " class=\"active\"";
} elseif($page_name == "About") {
	$link2_active = " class=\"active\"";
} elseif($page_name == "Page 3") {
	$link3_active = " class=\"active\"";
} elseif($page_name == "Page 4") {
	$link4_active = " class=\"active\"";
} elseif($page_name == "Contact") {
	$link5_active = " class=\"active\"";
}
?>
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
					<li<?php echo $link1_active; ?>><a href="index.php">Home</a></li>
					<li<?php echo $link2_active; ?>><a href="about.php">About</a></li>
					<li<?php echo $link3_active; ?>><a href="page3.php">Page 3</a></li>
					<li<?php echo $link4_active; ?>><a href="page4.php">Page 4</a></li>
					<li<?php echo $link5_active; ?>><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div> <!-- of .row -->

</header>
