<?php
include("head.php");
include("header.php");


$sql = "SELECT * FROM `orders`";
$res = $mysqli_db->query($sql);

$num_of_rows = $res->num_rows;
?>
<h6 class="text-success text-center mb-2">CUSTOMER ORDERS</h6>
<hr>


<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
        <tr>
            <th>Name</th>
            <th>Items</th>
            <th>Total Amount</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>


        <?php
        for ($i = 0; $i < $num_of_rows; $i++) {
            $order = $res->fetch_assoc();

            $email_address = $order['email_address'];
            $order_id = $order['id'];
            $total = $order['total'];
            $status = $order['status'];
            $time = $order['created_at'];

            // get customer info from user table
            $sql = "SELECT `first_name`, `last_name`, `phone_number`, `physical_address`, `user_location`, `profile_photo` FROM `user` WHERE `email_address` = '$email_address'";
            $res1 = $mysqli_db->query($sql);
            $user = $res1->fetch_assoc();

            $first_name = $user['first_name'];
            $last_name = $user['last_name'];
            $phone_number = $user['phone_number'];
            $physical_address = $user['physical_address'];
            $user_location = $user['user_location'];
            $profile_photo = $user['profile_photo'];

            include("order_item.php");
        }
        ?>



    </tbody>
</table>

<?php include("footer.php"); ?>