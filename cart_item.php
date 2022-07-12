<div class="card mb-3">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
                <div>
                    <img src="assets/uploads/<?= $product_image ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                </div>
                <div class="ms-3">
                    <h5><?= $product_name ?></h5>
                    <!-- <p class="small mb-0">256GB, Navy Blue</p> -->
                </div>
            </div>
            <div class="d-flex flex-row align-items-center">

                <div style="width: 150px;">
                    <h5 class="fw-normal mb-0"><?= $product_quantity . " " . $product_unit . "(s)" ?> </h5>
                </div>

                <div style="width: 100px;">
                    <h5 class="mb-0"><?= "KSH " . $product_price * $product_quantity ?></h5>
                </div>


                <form action="cart_view?product_id=<?= $product_id = $key ?>" method="POST">
                    <button type="submit" name="remove" class="btn btn-light "> <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>