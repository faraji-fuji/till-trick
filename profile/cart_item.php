<div class="card mb-3">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
                <div>
                    <img src="../assets/uploads/<?= $product_image ?>" class="img-fluid rounded-3 m-0 p-0" alt="Shopping item" style="width: 1.5rem;">
                </div>
                <div class="ms-3">
                    <h5 class="fs-6"><?= $product_name ?></h5>
                </div>
            </div>
            <div class="d-flex flex-row align-items-center">

                <div style="width: 40%;">
                    <h5 class="fw-normal fs-6 mb-0"><?= $product_quantity . " " . $product_unit . "(s)" ?> </h5>
                </div>

                <div style="width: 30%;">
                    <h5 class="mb-0 fs-6"><?= "KSH " . $product_price * $product_quantity ?></h5>
                </div>


                <form action="cart?product_id=<?= $product_id = $key ?>" method="POST">
                    <button type="submit" name="remove" class="btn btn-light "> <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>