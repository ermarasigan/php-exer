<?php

	session_start();
	require_once "phpfun/connectdb.php";
	
	$userid = $_GET['id'];
	
	$sql = "update orders set unpaid = null 
			where userid=$userid and unpaid is not null";

	$result= mysqli_query($conn, $sql);

	// if($result){
	// 	echo "Successfully mark as paid";
	// } else {
	// 	echo "Not updated";
	// }
	
?>