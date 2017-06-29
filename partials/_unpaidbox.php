<!-- Partial for unpaidbox -->

<?php
	echo "<span style='font-size: 2em; text-align: center;'>";
	echo "Unpaid Balance<br></span>";

	echo "<hr>";

	$sql = "SELECT upper(u.username) as unpaid_name
		    ,sum(m.price * o.qty) as unpaid_bal
		    ,u.id as user_id
		    FROM `orders` o
		    ,`menu` m
		    ,`users` u
		    WHERE o.userid = u.id
		    and o.menuid = m.id
		    and o.unpaid = 'y'
		    group by u.username
		    order by u.username
		    ";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {
    	echo "<table style='margin: 0 auto; font-size: 1.3em;'>";
    	while($row = mysqli_fetch_assoc($result)) {
            extract($row);
            echo "<tr>";
            echo "<td>" . $unpaid_name . "</td>";
            echo "<td>" . $unpaid_bal . "</td>";
            echo "<td><input id='$user_id' style='color: black; font-size: 0.6em;' class='btn btn-default' type='submit' value='Mark as Paid' name='markpaid' onclick='ajaxPaid(this.id);'></td>";
            echo "<tr>";
        }
        echo "</table>";
    }

?>