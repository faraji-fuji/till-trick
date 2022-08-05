<?php
// if (!(isset($_SESSION['cart1']))) {
//     $_SESSION['cart1'] = new cart();
// }

$_SESSION['cart1']->add_to_cart($product_id, $quantity);
$cart_id = $_SESSION['cart_id'];
insert_into_cart_item($product_id, $quantity, $cart_id);

// $_SESSION['cart1']->print_cart();