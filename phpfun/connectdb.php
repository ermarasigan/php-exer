<?php

	$host='localhost';
	$username='root';
	$password='';
	$database='exer';

	$company='TUITT';

	$conn = mysqli_connect($host,$username,$password,$database);

	if($conn) {
		// echo 'Connected successfully!';
	} else {
		echo 'Connected unsuccessfully!';
	}

?>