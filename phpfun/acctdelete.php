<?php

  $delete_status = '';

	if(isset($_POST['delete'])){

    $groupcode = $company;
    $username = $_SESSION['username'];
    $delpswd = sha1($_POST['delpswd']);

    // Call function to check if password is valid
    if (check_pswd($groupcode,$username,$delpswd)) {

      // Call function to update json file
      delete_acct($groupcode,$username,$delpswd);
    } else {
      $delete_status = 'pswd_invalid';
    }

    echo '<script type="text/javascript">
              var update_status="";
              var delete_status="delete_msg";
              document.getElementById("#update_modal").showModal();
            </script>';
  }

  function delete_acct($groupcode,$username,$password) {
    
    global $conn;
    global $delete_status;

    $sql = "DELETE FROM users 
      WHERE username = '$username'
        AND password = '$password'
        AND groupcode = '$groupcode'
        ";

    $result = mysqli_query($conn,$sql);
    if($result) {
      session_unset();
      session_destroy();
      header('location:index.php');
      $delete_status = 'delete_success';
    }

  }
?>