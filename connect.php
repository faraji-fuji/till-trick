<?php
//store access credentials in variables
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "cashcrop";

// create the database
$mysqli = new mysqli($db_hostname, $db_username, $db_password);
$mysqli->query("CREATE DATABASE cashcrop");

//mysql query to create the user table
$querry_create_table_user = "CREATE TABLE user(
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email_address VARCHAR(50) PRIMARY KEY,
    physical_address VARCHAR(50),
    member_type VARCHAR(50),
    user_location VARCHAR(50),
    user_password VARCHAR(50)
)";

//mysql query to create the product table
$querry_create_table_product = "CREATE TABLE product(
    product_name VARCHAR(50),
    product_unit VARCHAR(50),
    product_price VARCHAR(50),
    product_type VARCHAR(50),
    product_image VARCHAR(100)
)";

//create database instance
$mysqli_db = new mysqli($db_hostname, $db_username, $db_password, $db_name);

//create relevant tables
$mysqli_db->query($querry_create_table_user);
$mysqli_db->query($querry_create_table_product);

//function to insert data into the user table
function insert_into_user($first_name, $last_name, $email_address, $physical_address, $member_type, $user_location, $user_password){
    global $mysqli_db;
    $query_insert_into_user = "INSERT INTO `user` (`first_name`, `last_name`, `email_address`, `physical_address`, `member_type`, `user_location`, `user_password`) VALUES ('$first_name', '$last_name', '$email_address', '$physical_address', '$member_type', '$user_location', '$user_password')";
    $mysqli_db->query($query_insert_into_user);
}

//function to insert data into the product table
function insert_into_product($product_name,  $product_unit, $product_price, $product_type, $product_image){
    global $mysqli_db, $query_insert_into_product;
    $query_insert_into_table = "INSERT INTO `product` (`product_name`, `product_unit`, `product_price`, `product_type`, `product_image`) VALUES ('$product_name', '$product_unit', '$product_price', '$product_type', '$product_image')";
    $mysqli_db->query($query_insert_into_product);
}