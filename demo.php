<?php

include("connect.php");


// get data from database and pack the data in an indexed array
$sql = "SELECT product_name from product";
$res = $mysqli_db->query("$sql");
$label = [];
for ($x = 0; $x < $res->num_rows; $x++) {
    $row = $res->fetch_array();
    $label[$x] = $row[0];
}

$sql = "SELECT available_stock from product";
$res = $mysqli_db->query("$sql");
$data = [];
for ($x = 0; $x < $res->num_rows; $x++) {
    $row = $res->fetch_array();
    $data[$x] = $row[0];
}

// create a generic ibject
// use the data as values of properties
$myObj = new stdClass();
$myObj->dat = $data;
$myObj->lab = $label;

// encode the object
$myJSON = json_encode($myObj);

//output JSON
echo $myJSON;
