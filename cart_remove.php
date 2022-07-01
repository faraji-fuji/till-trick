<?php
include("classes.php");
session_start();

if (!(isset($_SESSION['cart1']))) {
    $_SESSION['cart1'] = new cart();
}

$_SESSION['cart1']->remove_from_cart($product_id);
$_SESSION['cart1']->print_cart();
