<?php
include("head.php");
include("header.php");
?>
<h5 class="mb-2 text-center text-success">POST YOUR PRODUCT</h5>
<hr>

<div class="card shadow">
    <div class="card-body py-5 px-md-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <form enctype="multipart/form-data" action="post_product.php" method="POST">
                    <!-- Product Name -->
                    <div class="form-outline mb-4">
                        <input type="text" name="product_name" id="validationDefault09" class="form-control" required />
                        <label class="form-label" for="validationDefault09">Product Name</label>
                    </div>

                    <!-- Available Stock -->
                    <div class="form-outline mb-4">
                        <input type="number" name="available_stock" id="validationDefault10" class="form-control" required />
                        <label class="form-label" for="validationDefault10">Available Stock</label>
                    </div>

                    <!-- Pricing Input -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input type="number" name="product_price" id="validationDefault11" class="form-control" required />
                                <label class="form-label" for="validationDefault11">Pricing Per Unit</label>
                            </div>
                        </div>
                        <div class="col">
                            <label for="inputState1" class="form-label visually-hidden">Unit</label>
                            <select id="inputState1" name="product_unit" class="form-select">
                                <option selected>Product Unit</option>
                                <option>KG</option>
                                <option>L</option>
                                <option>Sack</option>
                                <option>Crate</option>
                                <option>Dozen</option>
                            </select>
                        </div>
                    </div>

                    <!-- Product Type -->
                    <div class="form-outline mb-4">
                        <label for="inputState1" class="form-label visually-hidden">Product Type</label>
                        <select id="inputState1" name="product_type" class="form-select">
                            <option selected>Product Type</option>
                            <option>Vegetable</option>
                            <option>Fruit</option>
                            <option>Cereal</option>
                            <option>Spice</option>
                            <option>Animal Product</option>
                        </select>
                    </div>



                    <!-- Product Image Input -->
                    <label for="inputGroupFile02" class="form-label my-2 visually-hidden">Product Image</label>
                    <div class="input-group mb-4">
                        <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                        <input type="file" name="userfile" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload Product Image</label>
                    </div>
                    <div class="col-12 mb-4">
                        <button type="submit" name="post" class="btn btn-success btn-block mb-4">POST</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>





<?php

if (isset($_POST['post'])) {
    // store user input in variables and store them in a database
    $product_name = $_POST['product_name'];
    $product_unit = $_POST['product_unit'];
    $product_price = $_POST['product_price'];
    $product_type = $_POST['product_type'];
    $product_image = $_FILES['userfile']['name'];
    $available_stock = $_POST['available_stock'];
    $product_owner = $_SESSION['email_address'];

    // save data into the product table
    insert_into_product(
        $product_name,
        $product_unit,
        $product_price,
        $product_type,
        $product_image,
        $available_stock,
        $product_owner
    );

    $uploads_dir = "assets/uploads/";
    $destination = $uploads_dir . $_FILES['userfile']['name'];
    $status = move_uploaded_file($_FILES['userfile']['tmp_name'], $destination);
    if ($status) {
        echo "<script>";
        echo "alert('Your product has been posted.')";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Something Went wrong, Contact admin for help')";
        echo "</script>";
    }
}
include("footer.php")
?>