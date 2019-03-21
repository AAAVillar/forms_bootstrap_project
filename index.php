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

	<title>forms bootstrap</title>
</head>
<!-- End of div -->
<body>
	


<h3 class="jumbotron text-center pt-0 pb-0 bg-info text-danger mt-1 mb-lg-auto my-text-shadow">Come On Kitty....We Need The Info</h3>
<br class = "mb-3">

	<div id= "div1" class="modal-dialog text-center mt-0" >
		<div id= "div2" class="col-sm-8 main-section " >
			<div id= "div2a" class="modal-content my-border" >
				<div id= "div3" class="col-12 user-img " >
					<img src="img/face.jpeg" alt = "kitty-kitty" class = "my-border" title = "Don't Cry Kitty-Kitty" >
				</div>  <!-- End of col-12 user-img Div -->

                <!-- form -->
                <?php include  'form.php'; ?>

                <!-- output from form php -->
				<!--<?php include 'functionsPre_r.php'; ?>-->


				<div id= "div6" class="col-12 forgot" >
					<a href="#" class = "bg-warning pl-2 pr-2 pb-2">Forgot Password?</a>
				</div>  <!-- End of col-12 forgot Div -->
			</div>  <!-- End of modal-content Div -->	
		</div>  <!-- End of col-sm-8 main-section Div -->
	</div>  <!-- End of modal-dialog text-center Div -->



	<h3 id="dateDemo" class = "my-bg-purple text-center pb-3">Javascript is NOT CONNECTED</h3>
	<script src = "main.js"></script>
    <?php 
     pre_r($_POST);
     pre_r($_GET);
     pre_r($_REQUEST);
     if (isset($_POST['submit'])){
     	echo "<div class = 'bg-danger text-light p-3'>";
     	echo "User's First Name :".$_POST['FirstName']."<br>";
     	echo "User's Last Name :".$_POST['LastName']."<br>";
     	echo "User's Email :".$_POST['Email']."<br>";
     	echo "User's Password :".$_POST['Password']."<br>";
     	$x1 = $_POST['FirstName'];
     	$x2 = $_POST['LastName'];
     	$x3 = $_POST['Email'];
     	$x4 = $_POST['Password'];
     	echo "Will the kitty-kitty, with the name of ".$x1." ".$x2." who's email is ".$x3."<br>".
     	"And who's password is :<span id = 'span1'>".$x4."</span> Please come to the principle's office";
     	echo "</div>";
     };
    ?>


</body>
</html>
