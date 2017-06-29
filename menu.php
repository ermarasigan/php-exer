<?php 
  session_start();

  function get_title() {
  	global $title;
  	$title='Menu page';
  	echo $title;
  }

  if(!isset($_SESSION['checkout'])){
  	$_SESSION['checkout']='no';
  }
?>

<!-- Header Partial (including php functions) -->
<?php require_once "partials/_header.php"; ?>

<!-- Main Section -->
<main class="container-fluid" id="welcomebox">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<h1> Everyone loves to eat </h1>
			<?php
				if (isset($_SESSION['username'])){
					showmenu('display'); 
				}
			?>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<h1> Everyone loves to eat </h1>
			<div class="cartbox">
				<h4>
					<?php require_once "partials/_cartbox.php"; ?>
				</h4>
			</div>
			<?php 
				if($_SESSION['role']=='admin'){
					echo "
						<div class='cartbox' style='background: #777'>
							<h4>";
							require_once 'partials/_unpaidbox.php';
					echo "
							</h4>
						</div>";
				}
			?>
		</div>
  </div>
</main>

<!-- Footer Partial (including javascript) -->
<?php require_once "partials/_footer.php"; ?>