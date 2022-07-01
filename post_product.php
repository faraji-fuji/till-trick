<?php
include("header_farmer.php")
?>

<div class="container-fluid ">
    <div class="row justify-content-evenly">
        <div class="col-6 shadow">
            <form enctype="multipart/form-data" action="post_product.php" method="POST">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Product Name</label>
                    <input type="text" name="product_name" class="form-control" id="inputAddress" placeholder="E.g Maize">
                </div>
                <label for="name" class="form-label">Pricing</label>
                <div class="row">
                    <div class="col">
                        <input type="text" name="product_unit" class="form-control" placeholder="Unit, e.g KG, L, Sack" aria-label="Unit">
                    </div>
                    <div class="col">
                        <input type="text" name="product_price" class="form-control" placeholder="Price" aria-label="Price">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="inputState1" class="form-label">Product Type</label>
                    <select id="inputState1" name="product_type" class="form-select">
                        <option selected>Choose...</option>
                        <option>Vegetable</option>
                        <option>Fruit</option>
                        <option>Cereal</option>
                        <option>Spice</option>
                        <option>Animal Product</option>
                    </select>
                </div>
                <label for="inputGroupFile02" class="form-label my-2">Product Image</label>
                <div class="input-group mb-3">
                    <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                    <input type="file" name="userfile" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="col-12 my-2">
                    <input type="submit" name="post" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('connect.php');

if (isset($_POST['post'])) {
    // store user input in variables and store them in a database
    $product_name = $_POST['product_name'];
    $product_unit = $_POST['product_unit'];
    $product_price = $_POST['product_price'];
    $product_type = $_POST['product_type'];
    $product_image = $_FILES['userfile']['name'];
    insert_into_product($product_name, $product_unit, $product_price, $product_type, $product_image);

    $uploads_dir = "uploads/";
    $destination = $uploads_dir . $_FILES['userfile']['name'];
    $status = move_uploaded_file($_FILES['userfile']['tmp_name'], $destination);
    if ($status) {
        // echo "file uploaded succesfuly";
    } else {
        // echo "file was not uploaded";
    }
}
include("footer.php")
?>