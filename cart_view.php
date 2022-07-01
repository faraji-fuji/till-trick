<?php
//include header file, connact file, classes file
include("header_retailer.php");
include("connect.php");
include("classes.php");

//start the session
session_start();

//save the cart1 to a variable
$cart = $_SESSION['cart1']->cart_array;

//print cart
// var_dump($cart);

//get the keys from the cart array
$keys = array_keys($cart);
?>

<div class="container mt-4">
    <div class="row justify-content-evenly ">
        <div class="col-8">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-success ">Your cart</span>
                <span class="badge bg-success shadow rounded-pill"><?= count($cart) ?></span>
            </h4>
            <ul class="list-group mb-3 shadow bg-light">

                <?php
                $total = 0;
                //for each key, get the product name and price and other details from the database
                foreach ($keys as $key) {
                    $result = $mysqli_db->query("SELECT * FROM product WHERE product_id = '$key'");
                    $row = $result->fetch_assoc();
                    $product_name = $row['product_name'];
                    $product_price = $row['product_price'];
                    $product_unit = $row['product_unit'];
                    $product_quantity = $cart[$key];
                    $total += ($product_price * $product_quantity);
                    include("cart_item.php");
                }
                ?>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (KSH)</span>
                    <strong>KSH <?= $total ?></strong>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php

if (isset($_POST['remove'])) {
    include("cart_remove.php");
    header("Refresh:0");
}

include("footer.php");
