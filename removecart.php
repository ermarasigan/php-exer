<?php

	session_start();
	$id = $_GET['id'];
	
	$_SESSION['cart_items'][$id] = 0;
	
?>