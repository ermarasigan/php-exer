<?php

  $output = '';
  $signup_status = '';
  $signup_return = 
    '<script type="text/javascript"> 
      var status="signup_msg";
      document.getElementById("#login_modal").showModal();
    </script>';

  if(isset($_POST['signup'])){

    $regcode = $company;
    add_acct($regcode);

    if ($output > '') {
      if ($signup_status != 'signup_success') {
        $signup_status = 'signup_error';
      }
      echo $signup_return;
    }
  }

  function add_acct($groupcode){
    global $conn;
    global $output;
    global $signup_status;

    $reguser = $_POST['reguser'];
    $regpswd1 = $_POST['regpswd1'];
    $regpswd2 = $_POST['regpswd2'];

    // Check if supplied username is blank
    if ($reguser == ''){
      $output .= "Username is required";
      return $output;
    }

    // Check if account is already existing
    if (exists($groupcode,$reguser)){
      $output .= "Account already exists";
      return $output;
    }

    // Check if supplied password is blank
    if ($regpswd1 == ''){
      $output .= "Password is required";
      return $output;
    }

    // Check if supplied password is secure
    if (strlen($regpswd1) < 4) {
      $output .= "Passwords should have at least 4 chars";
      return $output;
    }

    // Check if supplied passwords are same
    if ($regpswd1!=$regpswd2) {
      $output .= "Passwords should be the same";
      return $output;
    }

    // Encrypt password
    $regpswd1 = sha1($regpswd1);
      
    $sql = "INSERT INTO users (
      groupcode, username, password, role)
      VALUES
      ('$groupcode','$reguser','$regpswd1','regular')";
        
    if(mysqli_query($conn,$sql)){
      $output .= "Account successfully created ";
      
      $signup_status = "signup_success";
      return $output;
    }
  }

  function exists($groupcode,$username){

    global $conn;

    $sql = "SELECT * FROM users 
      WHERE username = '$username'
        AND groupcode = '$groupcode'
        ";

    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0) {
      return true;
    }
  }
?>