<?php
// include header file, connect file
include("head.php");
include("header.php");
include("../connect.php");

// get cart id from session
$cart_id = $_SESSION['cart_id'];

// get cart from cart item table and store in an associative array
$res = $mysqli_db->query("SELECT `cart_item_id`, `cart_item_quantity` FROM `cart_item` WHERE `cart_id` = '$cart_id'");
$res1 = $res->fetch_assoc();
if ($res1) {
    foreach ($res as $row) {
        // create an associative array from the fetched data
        $cart[$row['cart_item_id']] = $row['cart_item_quantity'];
    }
} else {
    // empty array if there is no data
    $cart = [];
}

//get the keys from the cart array
$keys = array_keys($cart);
?>


<h5 class="text-center text-success mb-2 ">SHOPPING CART</h5>
<hr>

<div class="card">
    <div class="card-body p-4">
        <div class="row">
            <div class="col-lg-7">
                <h5 class="mb-3"><a href="product/product_category.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                <hr>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <p class="mb-1">Shopping cart</p>
                        <p class="mb-0">You have <?= count($cart) ?> item(s) in your cart</p>
                    </div>
                </div>

                <?php
                $subtotal = 0;

                //for each key, get the product name and price and other details from the database
                foreach ($keys as $key) {
                    $result = $mysqli_db->query("SELECT * FROM product WHERE product_id = '$key'");
                    $row = $result->fetch_assoc();
                    $product_name = $row['product_name'];
                    $product_price = $row['product_price'];
                    $product_unit = $row['product_unit'];
                    $product_image = $row['product_image'];
                    $product_quantity = $cart[$key];
                    $subtotal += ($product_price * $product_quantity);
                    include("cart_item.php");
                }
                ?>
            </div>

            <div class="col-lg-5">
                <div class="card  shadow bg-light text-dark rounded-3">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="mb-0">Billing details</h5>
                            <img src="../assets/avatars/<?= $_SESSION['profile_photo'] ?>" class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                        </div>

                        <p class="small mb-2">Lipa na Mpesa</p>

                        <form class="mt-4">
                            <div class="form-outline  mb-4">
                                <input type="text" id="typeText" class="form-control form-control-lg" size="10" placeholder="0700000000" minlength="19" maxlength="19" />
                                <label class="form-label" for="typeText">Phone Number</label>
                            </div>
                        </form>

                        <hr class="my-4">
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Subtotal</p>
                            <p class="mb-2">KES <?= $subtotal ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <?php $shipping = $subtotal * 0.05 ?>
                            <p class="mb-2">Shipping</p>
                            <p class="mb-2">KES <?= $shipping ?></p>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <?php $total = $subtotal + $shipping ?>
                            <p class="mb-2">Total</p>
                            <p class="mb-2">KES <?= $total ?></p>
                        </div>

                        <!-- Checkout form -->
                        <form action="cart.php" method="POST">
                            <button type="submit" name="checkout" class="btn btn-success btn-block btn-lg">
                                <div class="d-flex justify-content-between">
                                    <span>KES <?= $total ?></span>
                                    <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
// handle remove from item
if (isset($_POST['remove'])) {

    $product_id = $_GET['product_id'];
    $mysqli_db->query("DELETE FROM `cart_item` WHERE `cart_item`.`cart_item_id` = '$product_id' AND `cart_item`.`cart_id` = '$cart_id'");
    // include("cart_remove.php");
    echo "<script>";
    echo "location.assign('cart.php')";
    echo "</script>";
}

// handle checkout
if (isset($_POST['checkout'])) {
    // save data 
    // into order table

    // get email address from session
    $email_address = $_SESSION['email_address'];

    insert_into_orders($email_address, $subtotal, $shipping, $total);

    //get order id
    $result1 = $mysqli_db->query("SELECT `id` FROM `orders` WHERE `email_address` = '$email_address' ORDER BY `id` DESC LIMIT 1");
    $row1 = $result1->fetch_assoc();
    $order_id = $row1['id'];

    // order_item table
    foreach ($keys as $key) {
        global $order_id;
        $result = $mysqli_db->query("SELECT product_price FROM product WHERE product_id = '$key'");
        $row = $result->fetch_assoc();

        // product id
        $product_id = $key;

        // product price
        $product_price = $row['product_price'];

        // quantity
        $quantity = $cart[$key];

        insert_into_order_item($product_id, $order_id, $product_price, $quantity);
    }

    // transactions table
    $res = insert_into_transactions($email_address, $order_id);

    if ($res && $result1 && $result) {
        echo "<script>";
        echo "alert('Your order has been placed.')";
        echo "</script>";

        // clear the cart
        $sql = "DELETE FROM `cart_item` WHERE `cart_id` = '$cart_id'";
        $mysqli_db->query($sql);
    } else {
        echo "<script>";
        echo "alert('Something went wrong. Please contact Support.')";
        echo "</script>";
    }
}

include("footer.php");
?>