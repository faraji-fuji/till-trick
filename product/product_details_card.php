<?php
$uploads = "../uploads/";
?>

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
                                    <span class="input-group-text" id="addon-wrapping">Quantity</span>
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

if (isset($_POST['submit'])) {
    $quantity = $_POST['quantity'];
    include("../add_to_cart.php");
}
