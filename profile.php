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
?>


<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="assets/avatars/<?= $profile_photo ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"><?= $first_name ?></h5>
                        <p class="text-muted mb-1"><?= $member_type ?></p>
                        <p class="text-muted mb-4"><?= $user_location ?></p>
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
                                    <a href="cart.php">MY CART</a>
                                </p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">

                                <p class="mb-0">
                                    <a href="post_product.php">POST A PRODUCT</a>
                                </p>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">

                                <p class="mb-0">
                                    <a href="addtestimonial.php">WRITE A TESTIMONIAL</a>
                                </p>
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
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?= $user_location . ", " . $physical_address ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-success font-italic me-1">My Products</p>

                                <?php
                                // feth my products from the database
                                $sql = "SELECT * from product WHERE product_owner = '$email_address'";
                                $result = $mysqli_db->query($sql);

                                foreach ($result as $product) {
                                    $product_id = $product['product_id'];
                                    $product_image = $product['product_image'];
                                    $product_name = $product['product_name'];
                                    $product_quantity = $product['available_stock'];
                                    $product_unit = $product['product_unit'];
                                    include("profile_my_product_item.php");
                                }
                                ?>

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