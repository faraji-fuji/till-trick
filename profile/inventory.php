<?php
include("head.php");
include("header.php");
include("../connect.php");

$email_address = $_SESSION['email_address'];
?>

<h5 class="text-center text-success mb-2">MY PRODUCTS</h5>
<hr>

<div class="row">
    <div class="col-md-12">
        <div class="card mb-4 mb-md-0">
            <div class="card-body">
                <!-- <p class="mb-4"><span class="text-success font-italic me-1">My Products</p> -->

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
                    include("myproductitem.php");
                }
                ?>

            </div>
        </div>
    </div>
</div>


<?php
include("footer.php");
?>