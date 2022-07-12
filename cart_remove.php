<?php
if (!(isset($_SESSION['cart1']))) {
    $_SESSION['cart1'] = new cart();
}
$_SESSION['cart1']->remove_from_cart($_GET['product_id']);
