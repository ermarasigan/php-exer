<!-- Header partial for Menu page -->

<nav id="menu-header" class="navbar navbar-default row navbar-fixed-top" >
    <div class="container-fluid">
    	<div class="navbar-header ">
      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span> 
      		</button>
      		<a id="menu-brand" class="navbar-brand" href="#">
      			ördertaker
      		</a>
    	</div>
    	<div class="collapse navbar-collapse" id="myNavbar">
	      	<ul class="nav navbar-nav navbar-right">
	      		<li>
					<!-- <a href="#" data-toggle="modal" data-target="#signup_modal"> -->
					<a id="menu-user" href="#" data-toggle="popover" data-placement="bottom"
					title="Account update/delete"
					data-content="Will be enabled in upcoming patch">
						<span class="glyphicon glyphicon-user"></span> 
						<?php
							echo $_SESSION['username'];
						?>
					</a>
				</li>
	        	
	        	<li>
	        		<a id="menu-logout" href="#" data-toggle="modal" data-target="#logout_modal">
	        			<form method="POST" action ="">
	        				<!-- <div class="form-group"> -->
		        				<button type="submit" name="logout">
		        					<span class="glyphicon glyphicon-log-out"></span> 
		        					Log out
		        				</button>
		        			<!-- </div> -->
						</form>
	        		</a>
	        	</li>
	      	</ul>
    	</div>
	</div>
</nav>