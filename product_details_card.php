<?php $uploads = "assets/uploads/"; ?>

<div class="container-fluid mt-4">
    <div class="row justify-content-evenly">
        <div class="col-8">
            <div class="card mb-3 bg-light shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $uploads . $product_image ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product_name ?></h5>
                            <p class="card-text"><?= $product_price ?></p>
                            <form action="#" method="POST">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" value=1 default="1" id="addon-wrapping">Quantity</span>
                                    <input type="number" name="quantity" class="form-control" placeholder="Quantity in <?= $product_unit ?>" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <button type="submit" name="submit" class="btn btn-outline-success mt-2">Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

// handle adding and updating items in the cart
if (isset($_POST['submit'])) {
    $quantity = $_POST['quantity'];

    // get cart id from session
    $cart_id = $_SESSION['cart_id'];

    // fetch item, if it exists perfom an update, if it does not exist perfom an insert operation
    $sql = "SELECT `id` FROM `cart_item` WHERE `cart_id` = '$cart_id' AND `cart_item_id` = '$product_id'";
    $result = $mysqli_db->query($sql);
    $row = $result->fetch_assoc();

    if ($row) {
        // update
        $sql = "UPDATE `cart_item` SET `cart_item_quantity` = '$quantity' WHERE `cart_item`.`cart_id` = '$cart_id' AND `cart_item`.`cart_item_id` = '$product_id'";
        $mysqli_db->query($sql);
    } else {
        // insert
        insert_into_cart_item($product_id, $quantity, $cart_id);
    }
}
