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
									if($_SESSION['checkout']=='yes'){
										echo "<input type='submit' value='&times' style='color: transparent; background: transparent; outline:none; border: 1px solid transparent;'>";
									} else {
										echo "<input type='submit' id='$key' value='&times' 
										style='color: red; background: transparent; outline:none; border: 1px solid transparent;'
										name='removecart' onclick='ajaxRemove(this.id);'>". " ";
									}

									echo $value; 
									echo "</div>";

									echo "<div class='text-center' style='font-size: 1.3em;margin:10px 0 20px'>";
									echo $qty . " x ₱" . $price . " = ₱" . $subtotal;
									echo "</div>";
								}
							}
							
							if($cart_total>0){
								echo "<hr>";
								echo "<span style='font-size: 2em; text-align: center;'>";
								echo "TOTAL BILL: ₱". $cart_total;
								echo "</span>". "<br>";

								if($_SESSION['checkout']=='no') {
									echo "<button class='btn btn-default btn-lg' type='submit' name='addtocart' onclick='checkout();'>
											<span class='glyphicon glyphicon-shopping-cart'></span>
											Checkout
										</button>";
								} else {
									echo "<br><h3>Confirm checkout?</h3>";
									echo "<button class='btn btn-default btn-lg' type='submit' name='addtocart' onclick='checkoutYes();'>
											<span class='glyphicon glyphicon-ok-sign'></span>
											Yes
										</button>";
									echo "     ";
									echo "<button class='btn btn-default btn-lg' type='submit' name='addtocart' onclick='checkoutNo();'>
											<span class='glyphicon glyphicon-remove-sign'></span>
											No
										</button>";
								}
							}
						}
					?>
				</h4>
				
			</div>
		</div>
  </div>
</main>

<!-- Footer Partial (including javascript) -->
<?php require_once "partials/_footer.php"; ?>