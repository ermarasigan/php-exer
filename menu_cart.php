<?php 
  session_start();

  function get_title() {
  	global $title;
  	$title='Menu page';
  	echo $title;
  }
?>

<!-- Header Partial (including php functions) -->
<?php require_once "partials/_header.php"; ?>

<!-- Main Section -->
<main class="container-fluid" id="welcomebox">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
			<h1> Everyone loves to eat </h1>
			<?php showmenu('display'); ?>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			<h1> Everyone loves to eat </h1>
			<div class="cartbox" id="target">
				<h3>
					<?php
						echo $_SESSION['username'] . "'s cart";
						echo $id;
					?>
				</h3>
				
			</div>
		</div>
  </div>
</main>

<!-- Footer Partial (including javascript) -->
<?php require_once "partials/_footer.php"; ?>