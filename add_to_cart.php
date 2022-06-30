<?php

session_start();

$_SESSION['cart'][] = $product_id;

foreach ($_SESSION['cart'] as $item) {
    echo $item;
}
