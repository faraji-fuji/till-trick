<div class="col-lg-3 col-md-12 mb-4">
    <div class="card" style="width: 100%;">
        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
            <img src="assets/uploads/<?= $image ?>" class="w-100" />
            <a href="#!">
                <div class="hover-overlay">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </div>
            </a>
        </div>
        <div class="card-body">
            <a href="" class="text-reset">
                <h5 class="card-title mb-3"><?= $product_name ?></h5>
            </a>
            <a href="" class="text-reset">
                <p><?= $category ?></p>
            </a>
            <h6 class="mb-3"><?= "KES " . $price ?></h6>
            <a href="product_details.php?product_id=<?= $product_id ?>" class="btn btn-outline-success">View Product</a>

        </div>
    </div>
</div>