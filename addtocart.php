<?php

	session_start();
	$id = $_GET['id'];
	
	$quantity = $_POST['quantity'];
	if(isset($_SESSION['cart_items'][$id])){
		$_SESSION['cart_items'][$id] += $quantity;
	} else {
		$_SESSION['cart_items'][$id] = $quantity;
	}

	$itemname = $_POST['itemname'];
	if(!isset($_SESSION['itemname'][$id])){
		$_SESSION['itemname'][$id] = $itemname;
	}

	$itemprice = $_POST['itemprice'];
	if(!isset($_SESSION['itemprice'][$id])){
		$_SESSION['itemprice'][$id] = $itemprice;
	}
	
	
	// echo "$quantity units of item $id is successfully added to cart ";

	// foreach ($_SESSION['cart_items'] as $key => $value) {
	// 	echo "(item" . $key . " qty: " . $value . ")";
	// }

?>