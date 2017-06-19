<?php

  $update_status = '';

	if(isset($_POST['update'])){

  	$string = file_get_contents('json/users.json');
  	if($string)
  		$users = json_decode($string, true);

    // Call function to check if password is valid
    $oldpswd = $_POST['oldpswd'];
    if (check_pswd($oldpswd,$users)) {
      $update_status = 'pswd_valid';

      // Call function to update json file
      if ($_POST['newpswd1'] != null &&
          $_POST['newpswd2'] != null) {
        updt_acct($oldpswd,$users);
      }
    } else {
      $update_status = 'pswd_invalid';
    }

    echo '<script type="text/javascript"> 
              var update_status="update_msg";
              document.getElementById("#update_modal").showModal();
            </script>';
  }

  function check_pswd($password,$array){
    $username = $_SESSION['username'];
    $groupcode = $_SESSION['groupcode'];

    foreach($array as $key => $value) {
      if($value['groupcode'] == $groupcode 
        && $value['username'] == $username 
        && $value['password'] == $password) {
        return true;
      }
    }
  }


  function updt_acct($password,$array) {
    global $update_status;

    $username = $_SESSION['username'];
    $groupcode = $_SESSION['groupcode'];

    $newpswd1 = $_POST['newpswd1'];
    $newpswd2 = $_POST['newpswd2'];

    if ($newpswd1 != $newpswd2) {
      $update_status = 'pswd_mismatch';
      return;
    }

    $index;

    foreach($array as $key => $value) {
      if($value['groupcode'] == $groupcode 
        && $value['username'] == $username 
        && $value['password'] == $password) {
        $index=$key;
      }
    }

    $array[$index]['password'] = $new_password;

    $fp = fopen('json/users.json','w');
    fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));
    fclose($fp);

    $update_status = 'update_success';
  }

?>