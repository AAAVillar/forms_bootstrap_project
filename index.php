<!DOCTYPE html>
<html lang="en">
<head>
	<!-- meta data -->
	<?php include_once('meta.php');  ?>
	<!-- scripts.....jquery, popper.js, bootstrap.min.js  -->
	<!-- ALWAYS make sure your jQUERY is loaded first before your bootstrap -->
	<?php include_once('scripts_bootstrapJqueryPopper.php');  ?>

	<!-- links.....font-families, bootstrapCDN, and styles.css  -->
	<?php include_once('links_style.php');  ?>

	<title>workin with bootstrap</title>
</head>
<!-- End of div -->
<body>
	<div id = "bigWrapper">

		<!-- forms...fname,lname,email,password,phone,...submit  -->
		<?php include 'form_1.php'; ?>

		
		<h2 id = "demo1">testy</h2>
	</div><!-- End of bigWrapper div -->
	<script src = "main.js"></script>
</body>
</html>
