<div class="card mb-3">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-row align-items-center">
                <div>
                    <img src="assets/uploads/<?= $product_image ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                </div>
                <div class="ms-3">
                    <h5><?= $product_name ?></h5>
                </div>
            </div>
            <div class="d-flex flex-row align-items-center">
                <div style="width: 150px;">
                    <h5 class="fw-normal mb-0"><?= $product_quantity . " " . $product_unit . "(s)" ?> </h5>
                </div>
                <form action="profile.php" method="POST">
                    <button type="submit" name="remove" value="<?= $product_id ?>" class="btn btn-light "> <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
                <?php
                ?>
            </div>
        </div>
    </div>
</div>