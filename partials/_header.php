<!-- Header partial for home page -->

<nav id="js-header" class="navbar navbar-default" >
    <!-- <div class="container-fluid"> -->
    	<div class="navbar-header">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span> 
      		</button>
      		<a id="js-brand" class="navbar-brand" 
      			<?php
					if (isset($_SESSION['username'])){ 
						echo 'href="menu.php"';
					}else{
						echo 'href="index.php"';
					}
				?>	
      			>
      			2eat
      		</a>
    	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
	      	<ul class="nav navbar-nav navbar-right">

	      		<?php if(isset($_SESSION['role'])) {
	      				if(!isset($title)) $title='';
	      				if($_SESSION['role']=='Admin' && $title == 'Menu page') {
	      				echo '
			      		<li>
							<a  id="js-signup" href="menu_add.php" class="text-right">
								<span class="glyphicon glyphicon-plus-sign"></span> 
								Add Item
							</a>
						</li>
	        			';}
	      			}
	      		?>
	      		
	      		<li>
					<a  id="js-signup" href="#" data-toggle="modal" 
						<?php
							if (isset($_SESSION['username'])){ 
								echo 'data-target="#update_modal"';
							}else{
								echo 'data-target="#signup_modal"';
							}
						?>					
					class="text-right">
						<span class="glyphicon glyphicon-user"></span> 
						<?php if(isset($_SESSION['username'])) {
		      					echo $_SESSION['username'];
		      				} else {
		      					echo 'Sign Up';
		      				}
	      				?>
					</a>
				</li>

				<li>
        			<?php if(isset($_SESSION['username'])) {
        				// data-toggle="modal" data-target="#logout_modal"
	        				echo '<a id="menu-logout" href="#" >
	        						<form method="POST" action ="">
	        						<button type="submit" name="logout">
		        					<span class="glyphicon glyphicon-log-out"></span>
		        					Log out
		        					</button>
		        					</form>
        						</a>';
	      				} else {
	      					echo '<a id="js-login" href="#" data-toggle="modal" data-target="#login_modal" class="text-right">
        							<span class="glyphicon glyphicon-log-in"></span>
	      							Login
	        					</a>';
	      				} 
      				?>
	        	</li>
	      	</ul>
    	</div>
	<!-- </div> -->
</nav>