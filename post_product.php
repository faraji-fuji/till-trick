<?php
include("header.php")
?>


<div class="container-fluid ">
    <div class="row justify-content-evenly">
        <div class="col-6 shadow">
            <form action="post_product.php">
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="E.g Maize">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Price Per Quantity</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="e.g 100 per kg">
                </div>
                <div class="col-md-4">
                    <label for="inputState1" class="form-label">Product Type</label>
                    <select id="inputState1" class="form-select">
                    <option selected>Choose...</option>
                    <option>Vegetable</option>
                    <option>Fruit</option>
                    <option>Cereal</option>
                    <option>Spice</option>
                    </select>
                </div>
                <label for="inputGroupFile02" class="form-label my-2">Product Image</label>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <div class="col-12 my-2">
                    <button type="submit" class="btn btn-success">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php")
?>