<?php
require_once("includes/settings.php");

$page_name = "Testimonials";
$page_description = "";
?>

<?php require_once("includes/meta.php"); ?>

<div id="wrapper">

	<?php include("includes/header.php"); ?>

	<section class="container col-wrapper">

		<div class="row">
			<div class="col-md-8 content1">
				<h1><?php echo $page_name; ?></h1>

				<?php echo output_testimonials($settings['testimonials']); ?>

			</div> <!-- of .content1 -->
			
			<div class="col-md-4 content2">
				<h2>Heading 2 Title Here...</h2>

				<img src="http://placehold.it/350x180" alt="Site Name" width="" height="" class="img-responsive thumbnail" />

				<p>Here is some content in the second column...</p>

				<h3>Heading 3 here...</h3>

				<p>Some place holder text can go here to give an example of how it lays out.</p>
			</div> <!-- of .content2 -->
		</div>

	</section>

	<?php include("includes/footer.php"); ?>

</div> <!-- of #wrapper -->

</body>
</html>
