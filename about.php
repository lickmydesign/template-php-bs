<?php
require_once("includes/settings.php");

$page_name = "About";
$page_description = "";
?>

<?php require_once("includes/meta.php"); ?>

<div id="wrapper">

	<?php include("includes/header.php"); ?>

	<section class="container col-wrapper">

		<div class="row">
			<div class="col-md-8 content1">
				<h1><?php echo $page_name; ?></h1>

				<p>Lorem ipsum dolor sit amet, foras ea odio vero tation, causa, eum validus sagaciter esse accumsan minim refero, bene. Tristique iriure distineo hendrerit erat fere ad, minim delenit wisi illum nisl typicus enim nonummy. Vero, bene uxor, enim aliquip proprius validus typicus ex ulciscor ingenium, pertineo sed.</p>

				<p>Virtus causa, illum uxor tincidunt ut demoveo abdo, facilisis nullus. Ex acsi nimis iriure natu sino consequat nisl, at obruo occuro, et.</p>

				<p>Praesent iriure nobis capio nisl lucidus indoles odio. Dignissim in olim meus, rusticus capio lobortis feugiat ideo in. Ut odio ulciscor facilisis consequat quibus qui iriure ex. Et, haero pertineo abigo ex quidem, augue minim euismod tation ut vel ventosus, olim. Nibh genitus inhibeo camur erat iusto consequat ymo dolore esca luptatum decet odio.</p>
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
    <?php include("includes/footer_scripts.php"); ?>
</body>
</html>
