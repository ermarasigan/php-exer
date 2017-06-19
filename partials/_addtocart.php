<?php
	function showcart($cartuser) {
		echo '<div id="cartbox" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">';
		echo '<h1>' . $cartuser . '\'s' . ' cart</h1>';

		if(isset($_POST['addtocart'])){
			echo '';
		} else {
			echo 'meow';
		}
		echo '</div>';
	}
?>