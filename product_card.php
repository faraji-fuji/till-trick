<?php $uploads_folder = "assets/uploads/" ?>
<div class="col">
    <div class="card bg-light shadow m-2 " style="width: 14rem;">
        <img src="<?= $uploads_folder . $product_image ?>" class="card-img-top" alt="product">
        <div class='card-body'>
            <h5 class='card-title'><?= $product_name ?></h5>
            <p class='card-text'><?= $product_price . " per " . $product_unit ?></p>
            <a href="product_details.php?product_id=<?= $product_id ?>" class="btn btn-outline-success">View Product</a>
        </div>
    </div>
</div>