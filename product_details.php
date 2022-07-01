<?php

$product_id = $_GET['product_id'];
// echo $product_id;
include("header_retailer.php");
include("connect.php");

//function to fetch the product details given the product id.
function fetch_product_details($product_id)
{
    global $mysqli_db;
    $result = $mysqli_db->query("SELECT * FROM product WHERE product_id='$product_id'");
    $row = $result->fetch_assoc();
    $product_name = $row['product_name'];
    $product_price = $row['product_price'];
    $product_image = $row['product_image'];
    $product_unit = $row['product_unit'];
    include("product_details_card.php");
}

fetch_product_details($product_id);
include("footer.php");
