<?php

//function to get the number of cards required, given the product type
function get_no_cards($product_category)
{
    global $mysqli_db;
    $query = "SELECT product_id FROM product WHERE product_type = '$product_category'";
    $stmt = $mysqli_db->prepare($query);
    $stmt->execute();
    $stmt->store_result();
    $no_of_rows = $stmt->num_rows;
    return $no_of_rows;
}
