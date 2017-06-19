<!-- Modal partial for Account Update -->

<div class="container">
  <div class="modal fade" id="update_modal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <!-- Modal Header-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            &times;
          </button>
          <h4 class="modal-title">Account update</h4>
        </div>

        <!-- Modal Body-->
        <div class="modal-body">
          <form action="" method="POST">

            <div class="form-group">
              <label for="oldpswd">Old Password:</label>
              <input type="password" class="form-control" id="oldpswd" name="oldpswd">
            </div>

            <div class="form-group">
              <button type="submit" name="update"  class="btn btn-warning btn-block">
                Change Password
              </button>
            </div>

            <div class="form-group">
              <button type="submit" name="delete"  class="btn btn-danger btn-block">
                Delete Account
              </button>
            </div>
            <?php
                if ($update_status=="pswd_invalid") {
                  echo '<div class="alert alert-danger">
                          Password invalid
                        </div>'; 
                }
                if ($update_status=="pswd_valid") {
                  echo '<div class="alert alert-success">
                            Password valid
                        </div>'; 
                   echo '     <div class="form-group">
              <label for="newpswd1">New Password:</label>
              <input type="password" class="form-control" id="newpswd1" name="newpswd1">
            </div>

            <div class="form-group">
              <label for="newpswd2">Confirm Password:</label>
              <input type="password" class="form-control" id="newpswd2" name="newpswd2">
            </div>'; 
                }
                // if ($signup_status=="signup_success") {
                //   echo '<div class="alert alert-success">';
                //   echo $output;
                //   echo '</div>';
                //   echo '<button type="button" class="btn btn-primary btn-block"'; 
                //   echo 'data-toggle="modal" data-dismiss="modal" data-target="#login_modal">';
                //   echo 'Log In';
                //   echo '</button>';
                // }
              ?>
          </form>
        </div>

        <!-- Modal Footer-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>  
</div>