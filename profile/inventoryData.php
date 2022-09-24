<?php
// start session, include connect file, get email address from session
session_start();
include("../connect.php");
$owner = $_SESSION['email_address'];

// fetch data from the database
$sql = "SELECT `product_name`, `product_unit`, `available_stock` FROM `product` WHERE `product_owner` = '$owner' ORDER BY `product_id`";
$res = $mysqli_db->query($sql);

// declare arrays
$labels = [];
$data = [];

// get data from result into the arrays
for ($i = 0; $i < $res->num_rows; $i++) {
    $row = $res->fetch_assoc();

    $labels[$i] = $row['product_name'] . " (" . $row['product_unit'] . ")";
    $data[$i] = $row['available_stock'];
}

// create generic object
$myObj = new stdClass();

// add properties
$myObj->labels = $labels;
$myObj->data = $data;

// encode object into JSON
$myJSON = json_encode($myObj);

// print output to browser
echo $myJSON;
