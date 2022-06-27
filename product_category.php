<?php
include('header_retailer.php');
include("connect.php");

$product_type = $mysqli_db->query("SELECT DISTINCT `product_type` FROM product");

$c_id = 1;
foreach ($product_type as $category) {
    $product_category =  $category['product_type'];
    include("productcategory.php");
    include("productcrsl.php");
    $c_id += 1;
}
include("footer.php");
