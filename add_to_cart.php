<?php
include("classes.php");
session_start();

if (!(isset($_SESSION['cart1']))) {
    $_SESSION['cart1'] = new cart();
}

$_SESSION['cart1']->add_to_cart($product_id, $quantity);
$_SESSION['cart1']->print_cart();
