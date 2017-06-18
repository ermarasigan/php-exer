<?php
  // put ob_start()
  // Do this once to create the *.json file
  // $users = [
  //     ['username' => 'admin', 'password' => 'master']
  //    ,['username' => 'emman', 'password' => 'master']
  // ];
  // $fp = fopen('json/users.json','w');
  // fwrite($fp, json_encode($users,JSON_PRETTY_PRINT));
  // fclose($fp);

  // Retrieving data from *.json file
  $string = file_get_contents('json/users.json');
  $users = json_decode($string, true);
  $login_status = '';

  if(isset($_POST['login'])){

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $choose = ($_POST['choose']);    

    function authenticate($username,$password){
      global $users;
      global $login_status;
      foreach($users as $user) {
        if($username == $user['username'] && 
           $password == $user['password']) {
          return true;
        }
      }
    }

    if(authenticate($username,$password)){
      // echo 'User is valid';
      $_SESSION['username'] = $username;
      $_SESSION['choose'] = $choose;
      // put ob_flush();
      header('location:menu.php', true, 301);
    }else{
      // echo '<span style="color:red">';
      // echo '<br>Incorrect login details';
      // echo '</span>';
      //force javascript error
      echo '<script type="text/javascript"> 
              var status="login_error";
              document.getElementById("#login_modal").showModal();
            </script>';
      // echo '<script type="text/javascript"> var status="error" </script>';
      $login_status = 'login_error';

    } 
  }
?>