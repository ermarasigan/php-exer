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
				echo "not found";
		}
	}
?>