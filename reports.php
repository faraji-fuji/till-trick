<?php
include("head.php");
include("navbar.php");
include("connect.php");

//fetch profile data from session variables
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email_address = $_SESSION['email_address'];
$physical_address = $_SESSION['physical_address'];
$member_type = $_SESSION['member_type'];
$user_location = $_SESSION['user_location'];
$phone_number = $_SESSION['phone_number'];
$profile_photo = $_SESSION['profile_photo'];


// reports
// Total sales
$total_sales = 0;
$sql1 = "SELECT total FROM orders";
$result1 = $mysqli_db->query($sql1);
foreach ($result1 as $res1) {
    $total_sales += intval($res1['total']);
}

// top customer
$sql2 = "SELECT `email_address`, COUNT(`email_address`) AS `value_occurance` FROM `orders` GROUP BY `email_address` ORDER BY `value_occurance` DESC LIMIT 1";
$result2 = $mysqli_db->query($sql2);
$row = $result2->fetch_assoc();
$email_address = $row['email_address'];
$sql2a = "SELECT first_name, last_name FROM user WHERE email_address = '$email_address'";
$result2a = $mysqli_db->query($sql2a);
$res2a = $result2a->fetch_assoc();
$f_name = $res2a['first_name'];
$l_name = $res2a['last_name'];


// top product
$sql3 = "SELECT `product_id`, COUNT(`product_id`) AS `value_occurance` FROM `order_item` GROUP BY `product_id` ORDER BY `value_occurance` DESC LIMIT 1";
$result3 = $mysqli_db->query($sql3);
$row3 = $result3->fetch_assoc();
$top_product_id = $row3['product_id'];
$sql3a = "SELECT product_name, product_owner FROM product WHERE product_id = '$top_product_id'";
$result3a = $mysqli_db->query($sql3a);
$row3a = $result3a->fetch_assoc();
$top_product = $row3a['product_name'];

// Top seller
$top_seller = $row3a['product_owner'];


// Number of customers
$sql5 = "SELECT email_address FROM user WHERE member_type= 'customer' or member_type= 'retailer' or member_type= 'institution' ";
$result5 = $mysqli_db->query($sql5);
$no_of_customers = $result5->num_rows;


// Number of suppliers
$sql6 = "SELECT email_address FROM user WHERE member_type= 'farmer'";
$result6 = $mysqli_db->query($sql6);
$no_of_suppliers = $result6->num_rows;
?>


<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="assets/avatars/<?= $profile_photo ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $first_name ?></h5>
                        <p class="text-muted mb-1">Admin</p>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">

                                <p class="mb-0">QUICK LINKS</p>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">

                                <p class="mb-0">
                                    <a href="forum.php">FORUM</a>
                                </p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <p class="mb-0">
                                    <a href="useful_links.php">USEFUL LINKS</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $first_name . " " . $last_name ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $email_address ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $phone_number ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-success font-italic me-1">REPORTS</p>

                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Total Sales: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= "KES " . $total_sales ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Top Customer: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $f_name . " " . $l_name ?></p>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Top Seller: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $top_seller ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Top Product: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $top_product ?></p>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Total Customers: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $no_of_customers ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Total Suppliers: </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $no_of_suppliers ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
// handle remove

if (isset($_POST['remove'])) {
    $product_id_del = $_POST['remove'];

    $sql = "DELETE FROM `product` WHERE `product`.`product_id` = '$product_id_del'";
    $result = $mysqli_db->query($sql);
    if ($result) {
        echo "<script>";
        echo "alert('Item removed.')";
        echo "</script>";
        echo "<script>";
        echo "location.assign('profile.php')";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Something Went wrong, Contact admin for help')";
        echo "</script>";
    }
}

include("footer.php"); ?>