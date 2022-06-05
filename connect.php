<?php
//store access credentials in variables
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "cashcrop";

// create the database
// $mysqli = new mysqli($db_hostname, $db_username, $db_password);
// $mysqli->query("CREATE DATABASE cashcrop");

//mysql querry to create the user table
$querry_create_table_user = "CREATE TABLE user(
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email_address VARCHAR(50),
    physical_address VARCHAR(50),
    member_type VARCHAR(50),
    user_location VARCHAR(50),
    user_password VARCHAR(50)
)";

//mysql querry to create the product table
$querry_create_table_product = "CREATE TABLE product(
    prod_name VARCHAR(50),
    prod_quantity VARCHAR(50),
    prod_type VARCHAR(50),
    prod_img_path VARCHAR(100)
)";

$mysqli_db = new mysqli($db_hostname, $db_username, $db_password, $db_name);
$mysqli_db->query($querry_create_table_user);
$mysqli_db->query($querry_create_table_product);