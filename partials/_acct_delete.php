<?php

	if(isset($_POST['delete'])){

  	$string = file_get_contents('json/users.json');
  	if($string)
  		$array = json_decode($string, true);
  	
  	$username = $_POST['username'];
  	$old_password = $_POST['old_password'];
  	$new_password = $_POST['new_password'];
  	$pw2 = $_POST['pw2'];

  	$index;

  	foreach($array as $key => $value) {
  		if($value['username'] == $username 
  			&& $value['password'] == $old_password
  			&& $new_password == $pw2)  {
  			$index=$key;
  		}
  	}

  	unset ($array[$index]);

  	$fp = fopen('json/users.json','w');
    fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));
    fclose($fp);
  }
?>