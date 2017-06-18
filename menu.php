<?php session_start() ?>
<?php
	if(isset($_POST['logout'])){
		// echo $_SESSION['username'] . " is logged out successfully";
		session_unset();
		// echo $_SESSION['username'] . " is logged out successfully";
		session_destroy();
	}
?>
<?php
	if(isset($_POST['home'])){
		header('location:index.php',true, 301);
	}
?>
<?php require_once "partials/_jollibee.php" ?>
<?php require_once "partials/_getmenu.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head -->

    <title>Ordertaker</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Formatting -->
	<link rel="stylesheet" type="text/css" href="css/general_stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/_header.css">
	<link rel="stylesheet" type="text/css" href="css/_footer.css">
	<link rel="stylesheet" type="text/css" href="css/menu_stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/font_declarations.css">
	<?php require_once "partials/_favicon.html"; ?>

</head>
<body>

	<!-- Header partial -->
	<?php require_once "partials/_menu_header.php"; ?>

	<!-- Main welcome container -->
	<main class="container-fluid">
  		<div class="row">
  			<div id="menubg" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


  			<form method="POST" action ="">
		<?php 
			$username = $_SESSION['username'];
			$dispname = ucfirst($username);
			echo "<span>";
			echo "<br><br>Hi $dispname, order na tayo sa ";
			echo ucfirst($_SESSION['choose']) . "<br>";
			echo "</span>";
			echo create_dropdown($jollibee,'CATEGORY');
			echo create_dropdown($jollibee,'DRINK');
		?>
		<input type="submit" name="submit" value="Submit">
	</form>

	<main>
		<?php
			switch ($_SESSION['choose']) {
				case 'jollibee':
					show($jollibee);
					break;
				
				default:
					break;
			}
			
		?>
	</main>

















  				<!-- <div id="countdown">
		  			<h2 id="countdown-text"> Log in and lock in <br> your orders in</h2>
		  			<h6 id="countdown-clock" style="padding-top: 10px"></h6>
		  		</div> -->
  			</div>
  		</div>
  	</main>

  	<!-- Footer partial -->
  	<?php require_once "partials/_footer.html"; ?>

	<!-- Log in modal partial -->
  	<?php require_once "partials/_logout_modal.php"; ?>
 	 	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>  

	<!-- Javascript for countdown timer) -->
    <script src="js/home_countdown.js"></script>

    <!-- Javascript for homepage modals (signup/login) -->
    <script src="js/home_modals.js"></script>

    <script type="text/javascript">
		$(document).ready(function(){
    	$('[data-toggle="popover"]').popover(); 
		});
	</script>
	
</body>
</html>