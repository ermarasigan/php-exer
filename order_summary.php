<?php


    $sql = "SELECT o.date as posting_date
            ,u.username as customer_name
            ,m.name as item_ordered
            ,m.price as item_price
            ,sum(o.qty) as item_qty
            ,m.price * sum(o.qty) as subtotal
            FROM `orders` o
            ,`menu` m
            ,`users` u
            WHERE o.userid = u.id
            and o.menuid = m.id
            and o.date IN
            (select max(date) 
             from orders)
             group by u.username,o.menuid
             order by u.username,m.name
            ";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0) {

        $sql2="select max(date) as maxdate
             from orders";
        $result2 = mysqli_query($conn,$sql2);
        $row2 = mysqli_fetch_assoc($result2);
        extract($row2);

        echo "<br><br><br><h4>Order Summary <br>($maxdate) </h4><br>";

        echo "<table class='table-bordered table-striped' style='margin: 0 auto;'>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Item
                    </th>
                    <th>
                        Unit price
                    </th>
                    <th>
                        Qty
                    </th>
                    <th>
                        Subtotal
                    </th>
                </tr>";

        while($row = mysqli_fetch_assoc($result)) {
            extract($row);

            $cname=ucfirst(strtolower($customer_name));

            echo "<tr>
                    <td>
                       $cname 
                    </td>
                    <td>
                        $item_ordered
                    </td>
                    <td>
                        ₱$item_price
                    </td>
                    <td>
                        $item_qty
                    </td>
                    <td>
                        ₱$subtotal
                    </td>
                </tr>";

            // echo "<br>" . $customer_name . " " . $item_ordered . " " . $item_price. " " . $item_qty . " " . $subtotal;
            }
        echo "</table>";

        $sql3=" SELECT o.date as posting_date
                ,sum(o.qty*m.price) as total_bill
                FROM `orders` o
                ,`menu` m
                ,`users` u
                WHERE o.userid = u.id
                and o.menuid = m.id
                and o.date IN
                (select max(date)
                 from orders)
                 group by o.date";
        $result3 = mysqli_query($conn,$sql3);
        $row3 = mysqli_fetch_assoc($result3);
        extract($row3);

        echo "<br><br><h4>Total Bill: ₱$total_bill </h4><br><br>";

    } 
?>