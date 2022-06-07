<?php
include("header.php")
?>

<div class="container-fluid ">
    <div class="row justify-content-evenly">
        <div class="col-6 shadow">
            <form action="post_product.php" method="post">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Product Name</label>
                    <input type="text" name="product_name" class="form-control" id="inputAddress" placeholder="E.g Maize">
                </div>
                <label for="name" class="form-label">Pricing</label>
                <div class="row">
                    <div class="col">
                        <input type="text" name="product_unit" class="form-control" placeholder="First name" aria-label="Unit">
                    </div>
                    <div class="col">
                        <input type="text" name="product_price" class="form-control" placeholder="Last name" aria-label="Price">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="inputState1" class="form-label">Product Type</label>
                    <select id="inputState1" name="product_type"class="form-select">
                        <option selected>Choose...</option>
                        <option>Vegetable</option>
                        <option>Fruit</option>
                        <option>Cereal</option>
                        <option>Spice</option>
                    </select>
                </div>
                <label for="inputGroupFile02" class="form-label my-2">Product Image</label>
                <div class="input-group mb-3">
                    <input type="file" name="product_image" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="col-12 my-2">
                    <button type="submit" name='submit' class="btn btn-success">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('connect.php');

if(isset($_POST['submit'])){
    $product_name = $_POST['product_name'];
    $product_unit = $_POST['product_unit'];
    $product_price = $_POST['product_price'];
    $product_type = $_POST['product_type'];
    $product_image = $_POST['product_image'];

    insert_into_product($product_name, $product_unit, $product_price, $product_type, $product_image);
}
include("footer.php")
?>