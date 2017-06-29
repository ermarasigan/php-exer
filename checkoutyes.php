<?php

	session_start();
	require_once "phpfun/connectdb.php";
	
	$userid = $_SESSION['userid'];

	foreach($_SESSION['cart_items'] as $key => $value){
		if($value>0){
			$sql = "insert into orders (date, qty, userid, menuid, unpaid) 
						values (current_date, $value, $userid, $key, 'y')";	
			$result= mysqli_query($conn, $sql);
			if($result){
				$_SESSION['cart_items'][$key] = 0;
			}
		}
	}

	if($result) {
		$_SESSION['checkout'] = 'no';
		// echo 'Checkout successful!';
	}
	
?>




