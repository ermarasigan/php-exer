<?php
	
	function showmenu($action) {

		global $conn;

		$sql = "SELECT id, name, price FROM menu
					where date = current_date";

			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0) {
				while($row = mysqli_fetch_assoc($result)) {
					extract($row);
			    	// echo "rows fetched";

			    	// isset($_GET['id']) ? $_GET['id'] : "";


					// Edit and delete buttons
					if(!isset($_SESSION['role'])) $_SESSION['role'] = '';

					if($_SESSION['role']=='admin'){
				    	$buttons = 
				    		"<div class='form-group'>
				    			<a href='menu_update.php?id=$id'>
									<button class='btn btn-default btn-lg'>
										Edit 
									</button>
							  	</a>
							  	<a href='menu_delete.php?id=$id'>
									<button class='btn btn-default btn-lg'>
										Delete 
									</button>
							  	</a>
							</div>";
					} else {

						if($_SESSION['checkout']=='yes'){
							$buttons='';
						} else {
							$buttons = 
							// "<div class='form-group'>
				   			//  	<a href='menu_cart.php?id=$id'>
							// 		<button class='btn btn-default btn-lg'>
							// 			Add to Cart
							// 		</button>
							//   	</a>
							// </div>";
							
							// min=0 step=1 style='background: transparent; width: 40px; font-size: 20px; ' placeholder='0'

						  	"
						  	 <input class='btn btn-default btn-md' type='submit' id='$id' name='addtocart' style:'padding-top: 20px; display:block;'
						  	 	value='Add to Cart' onclick='ajaxPost(this.id);'>
					  	 	<input type='hidden' id='quantity$id' name='quantity' value=1>
					  	 	<input type='hidden' id='itemname$id' name='itemname' value='$name'>
					  	 	<input type='hidden' id='itemprice$id' name='itemprice' value=$price>
					  	 	";
					  	}
					}


					// Buttons to confirm or cancel Delete
					$delete_confirmation = 
						"<form method='post' action=''>
							<h4>Are you sure you want to delete?</h4>
							<button class='btn btn-default btn-sm' name='yes'>Yes</button>
							<button class='btn btn-default btn-sm' name='no'>No</button>
						</form>";


					// Buttons to confirm or cancel Update
					$update_confirmation = 
						"<form method='post' action='' style='background-color: transparent; border: none; color: black; font-size: 0.5em'>
		    				<div class='form-group'>
								<input type='text' name='updname' placeholder=$name>
							</div>
							<div class='form-group'>
								<input type='number' min=0 name='updprice' placeholder=$price>
							</div>	
							<h4 style='color:white'>Are you sure you want to update?</h4>
							<br>
							<button class='btn btn-default btn-sm' name='updyes'>Yes
							</button>
							<button class='btn btn-default btn-sm' name='updno'>No
							</button>
						</form>";

					if ($action=='display') {
						echo "<div class='itembox clear'>
						    	$name <br>
			    				$price <br>
				    			$buttons
							  </div>";
					}

					if ($action=='delete') {
						if ($_GET['id'] == $id) {
			    			echo "<div class='itembox deletebox clear'>";
			    		} else {
			    			echo "<div class='itembox clear'>";
			    		}
			    		echo $name . '<br>';
			    		echo $price . '<br>';
			    		if ($_GET['id'] == $id) {
				    		echo $delete_confirmation;
						} else {
							echo $buttons;
						}
						echo "</div>";
					}

					if ($action=='update') {
						if ($_GET['id'] == $id) {
			    			echo "<div class='itembox deletebox clear'>";
			    		} else {
			    			echo "<div class='itembox clear'>";
			    		}
			    		if ($_GET['id'] == $id) {
				    		echo $update_confirmation;
						} else {
							echo $name . '<br>';
			    			echo $price . '<br>';
			    			echo $buttons;
						}
						echo "</div>";
			    	}
		    	}
			} else {
				echo "Menu not yet uploaded for today. <br> 
				Standby for updates.";
		}
	}
?>