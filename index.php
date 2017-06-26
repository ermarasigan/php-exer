<?php 
  session_start();

  function get_title() {
  	global $title;
  	$title='Home page';
  	echo $title;
  }
?>
<?php require_once "phpfun/connectdb.php"; ?>
<?php require_once "phpfun/_acct_login.php"; ?>
<?php require_once "phpfun/_acct_signup.php"; ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head -->

	<title><?php get_title() ?></title>

	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font_declarations.css">

    <!-- Formatting -->

	<link rel="stylesheet" type="text/css" href="css/scrolling-nav.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>

	<!-- Header Partial -->
	<?php 
	require_once "partials/_header.php";
		?>

	<div class="container-fluid" id="welcomebg">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<div style="border: 3px solid white; border-radius: 0 15px; padding: 20px; margin-bottom: 15px; ">
				<h2 style="color: white;font-family: 'poppinssemibold';" > DO YOU LOVE <br> TO EAT? </h2>
				
				</div>
				<a class="btn btn-primary btn-lg page-scroll" href="#about">See more</a>
			</div>
			<!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> -->
				<!-- <h1> Everyone loves to eat </h1>
				<a href="menu.php" class="btn btn-default btn-lg btn-block"> Add New Item</a>

				<a href="logout.php" class="btn btn-default btn-lg btn-block"> Log out</a> -->
			<!-- </div> -->
		</div>
	</div>

	<!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Me too!</h2>
                    <h3>Sign up now and let's order food.</h3>
                    <a class="btn btn-default btn page-scroll" href="#">Back to top</a>
                </div>
            </div>
        </div>
    </section>

	
	<!-- Sign up modal partial -->
  	<?php require_once "partials/_modal_signup.php"; ?>

	<!-- Log in modal partial -->
  	<?php require_once "partials/_modal_login.php"; ?>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), 
    or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  

    <!-- Javascript for homepage modals (signup/login) -->
    <script src="js/home_modals.js"></script>

     <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>
</html>