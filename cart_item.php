<li class="list-group-item d-flex justify-content-between lh-sm">
    <div>
        <h6 class="my-0"><?= $product_name ?></h6>
        <small class="text-muted">Brief description</small>
    </div>
    <span class="text-muted"><?= $product_quantity . " " . $product_unit ?> </span>
    <span class="text-muted"><?= $product_price * $product_quantity ?></span>
    <form action="cart_view?product_id=<?= $product_id = $key ?>" method="POST">
        <button type="submit" name="remove" class="btn btn-secondary">Remove</button>
    </form>
</li>
<?php
