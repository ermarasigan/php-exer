<!-- Header partial -->
<?php require_once "phpfun/connectdb.php"; ?>
<?php require_once "phpfun/showmenu.php"; ?>
<?php require_once "phpfun/acctlogin.php"; ?>
<?php require_once "phpfun/acctsignup.php"; ?>
<?php require_once "phpfun/acctlogout.php" ?>
<?php require_once "phpfun/acctupdate.php" ?>
<?php require_once "phpfun/acctdelete.php" ?>
<?php require_once "phpfun/itemadd.php" ?>
<?php require_once "phpfun/itemdelete.php" ?>
<?php require_once "phpfun/itemupdate.php" ?>

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
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
  <link rel="stylesheet" type="text/css" href="css/scrolling-nav.css">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

</head>
<body>

<nav id="js-header" class="navbar navbar-default" >
  <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      	<span class="icon-bar"></span>
      	<span class="icon-bar"></span>
      	<span class="icon-bar"></span> 
		</button>
    <a id="js-brand" class="navbar-brand" 
			<?php
			if (isset($_SESSION['username'])){ 
				echo 'href="menu.php"';
			}else{
				echo 'href="index.php"';
			}
		?>	
			>
			2eat
		</a> 
    <span id="countdown">
      <span id="countdown-text"> Checkout in </span>
      <span id="countdown-clock"></span>
    </span>   
	</div>

  
  
	<div class="collapse navbar-collapse" id="myNavbar">
    
  	<ul class="nav navbar-nav navbar-right">

  		<?php if(isset($_SESSION['role'])) {
  				if(!isset($title)) $title='';
  				if($_SESSION['role']=='admin' && $title == 'Menu page') 
          {
  				echo '<li>
				          <a  id="js-signup" href="menu_add.php" class="text-right">
					         <span class="glyphicon glyphicon-plus-sign"></span> 
					         Add Item
				          </a>
			         </li>';
          }
  			}
  		?>
  		
      <li>
  			<a  id="js-signup" href="#" data-toggle="modal" 
  				<?php
  					if (isset($_SESSION['username'])){ 
  						echo 'data-target="#update_modal"';
  					}else{
  						echo 'data-target="#signup_modal"';
  					}
  				?>					
  			class="text-right">
  				<span class="glyphicon glyphicon-user"></span> 
  				<?php if(isset($_SESSION['username'])) {
        					echo $_SESSION['username'];
        				} else {
        					echo 'Sign Up';
        				}
      				?>
  			</a>
  		</li>

	    <li>
			<?php if(isset($_SESSION['username'])) {
				// data-toggle="modal" data-target="#logout_modal"
    				echo '<a id="menu-logout" href="#" class="text-right" >
    						<form method="POST" action ="">
    						<button type="submit" name="logout">
      					<span class="glyphicon glyphicon-log-out"></span>
      					Log out
      					</button>
      					</form>
						</a>';
  				} else {
  					echo '<a id="js-login" href="#" data-toggle="modal" data-target="#login_modal" class="text-right">
							<span class="glyphicon glyphicon-log-in"></span>
  							Login
    					</a>';
  				} 
			?>
    	</li>
  	</ul>
	</div>
</nav>