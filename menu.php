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
			<div class="cartbox">
				<h4 id="target">
					<?php
						echo "<span style='font-size: 2em; text-align: center;'>";
						echo $_SESSION['username'] . "'s cart" . "<br>";
						echo "</span>";

						echo "<hr>";

						$cart_total=0;

						
						if(isset($_SESSION['itemname'])) {
							foreach ($_SESSION['itemname'] as $key => $value) {
								if($_SESSION['cart_items'][$key] > 0) {
									$qty = $_SESSION['cart_items'][$key];
									$price = $_SESSION['itemprice'][$key];
									$subtotal = $price * $qty;
									$cart_total+=$subtotal;

									echo "<div class='text-left' style='font-size: 1.5em;'>";
									echo "<input type='submit' value='&times' 
									style='color: red; background: transparent; outline:none; border: 1px solid transparent;'>". " ";
									echo $value; 
									echo "</div>";

									echo "<div class='text-center' style='font-size: 1.3em;'>";
									echo $qty . " x ₱" . $price . " = ₱" . $subtotal 
										 ."<br><br>";
									echo "</div>";
								}
							}
							
							echo "<hr>";
							echo "<span style='font-size: 2em; text-align: center;'>";
							echo "TOTAL BILL: ₱". $cart_total;
							echo "</span>";
						}
						
					?>
				</h4>
				
			</div>
		</div>
  </div>
</main>

<!-- Footer Partial (including javascript) -->
<?php require_once "partials/_footer.php"; ?>