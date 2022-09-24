<?php
//this file interacts with the database
//store access credentials in variables

// local host credentials
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "cashcrop";

// function to create the database, returns 1 on success
function initialize_db($db_hostname, $db_username, $db_password)
{
    global $db_name;
    $mysqli = new mysqli($db_hostname, $db_username, $db_password);
    $result = $mysqli->query("CREATE DATABASE '$db_name'");
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

initialize_db($db_hostname, $db_username, $db_password);

// mysqli queries to create database tables
// user
$query_create_table_user = "CREATE TABLE user(
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email_address VARCHAR(50) PRIMARY KEY,
    physical_address VARCHAR(50),
    member_type VARCHAR(50),
    user_location VARCHAR(50),
    user_password VARCHAR(50),
    phone_number VARCHAR(12),
    profile_photo VARCHAR(50)
)";

// product
$query_create_table_product = "CREATE TABLE product(
    product_name VARCHAR(50),
    product_unit VARCHAR(50),
    product_price VARCHAR(50),
    product_type VARCHAR(50),
    product_image VARCHAR(100),
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    available_stock INT,
    product_owner VARCHAR(50)
)";

// order
$query_create_table_order = "CREATE TABLE orders(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email_address VARCHAR(50),
    subtotal INT,
    shipping INT,
    total INT,
    `status` INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

// order_item
$query_create_table_order_item = "CREATE TABLE order_item(
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    order_id INT,
    product_price INT,
    quantity INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

// transactions
$query_create_table_transactions = "CREATE TABLE transactions(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email_address VARCHAR(50),
    order_id INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

// forum
$query_create_table_forum = "CREATE TABLE forum(
    message_id INT AUTO_INCREMENT PRIMARY KEY,
    message_time DATETIME DEFAULT CURRENT_TIMESTAMP,
    message_content VARCHAR(1000),
    message_sender VARCHAR(50)
)";

// cart
$query_create_table_cart = "CREATE TABLE cart(
    cart_id INT AUTO_INCREMENT PRIMARY KEY,
    cart_owner VARCHAR(50)
)";

// cart_item
$query_create_table_cart_item = "CREATE TABLE cart_item(
    id INT AUTO_INCREMENT PRIMARY KEY,
    cart_item_id INT,
    cart_item_quantity INT,
    cart_id INT
)";

// testimonial
$query_create_table_testimonial = " CREATE TABLE testimonial(
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_name VARCHAR(50),
    sender_address VARCHAR(50),
    `message` VARCHAR(1000),
    `status` INT
)";

// contact us
$query_create_table_contact = " CREATE TABLE contact(
    id INT AUTO_INCREMENT PRIMARY KEY,
    sender_name VARCHAR(50),
    sender_address VARCHAR(50),
    `message` VARCHAR(1000),
    `status` INT
)";

// create a database instance
$mysqli_db = new mysqli($db_hostname, $db_username, $db_password, $db_name);

//create relevant tables
$mysqli_db->query($query_create_table_user);
$mysqli_db->query($query_create_table_product);
$mysqli_db->query($query_create_table_order);
$mysqli_db->query($query_create_table_order_item);
$mysqli_db->query($query_create_table_transactions);
$mysqli_db->query($query_create_table_forum);
$mysqli_db->query($query_create_table_cart);
$mysqli_db->query($query_create_table_cart_item);
$mysqli_db->query($query_create_table_testimonial);
$mysqli_db->query($query_create_table_contact);

//functions to insert data into the tables
//return 1 on success, 0 on failure
//user
function insert_into_user(
    $first_name,
    $last_name,
    $email_address,
    $physical_address,
    $member_type,
    $user_location,
    $user_password,
    $profile_photo,
    $phone_number
) {
    global $mysqli_db;
    $sql = "INSERT INTO `user` (
        `first_name`, 
        `last_name`, 
        `email_address`, 
        `physical_address`, 
        `member_type`, 
        `user_location`, 
        `user_password`,
        `profile_photo`,
        `phone_number`
        ) VALUES (
            '$first_name', 
            '$last_name', 
            '$email_address', 
            '$physical_address', 
            '$member_type', 
            '$user_location', 
            '$user_password',
            '$profile_photo',
            '$phone_number'
        )";

    $result = $mysqli_db->query($sql);
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

//product
function insert_into_product(
    $product_name,
    $product_unit,
    $product_price,
    $product_type,
    $product_image,
    $available_stock,
    $product_owner
) {
    global $mysqli_db;
    $sql = "INSERT INTO `product` (
        `product_name`,
        `product_unit`, 
        `product_price`, 
        `product_type`, 
        `product_image`,
        `available_stock`,
        `product_owner`
        ) VALUES (
            '$product_name', 
            '$product_unit', 
            '$product_price', 
            '$product_type', 
            '$product_image',
            '$available_stock',
            '$product_owner'
    )";

    // echo $query_insert_into_table;
    $result = $mysqli_db->query($sql);
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

// order
function insert_into_orders(
    $email_address,
    $subtotal,
    $shipping,
    $total
) {
    global $mysqli_db;
    $sql = "INSERT INTO `orders` (
        `email_address`,
        `subtotal`,
        `shipping`,
        `total`,
        `status`
    ) VALUES (
        '$email_address',
        '$subtotal',
        '$shipping',
        '$total',
        0
    )";
    $result = $mysqli_db->query($sql);
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

// order_item
function insert_into_order_item(
    $product_id,
    $order_id,
    $product_price,
    $quantity
) {
    global $mysqli_db;
    $sql = "INSERT INTO `order_item` (
        `product_id`,
        `order_id`,
        `product_price`,
        `quantity`
    ) VALUES (
        '$product_id',
        '$order_id',
        '$product_price',
        '$quantity'
    )";
    $result = $mysqli_db->query($sql);
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

// transactions
function insert_into_transactions(
    $email_address,
    $order_id
) {
    global $mysqli_db;
    $sql = "INSERT INTO `transactions` (
        `email_address`,
        `order_id`
    ) VALUES (
        '$email_address',
        '$order_id'
    )";
    $result = $mysqli_db->query($sql);
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

// forum
function insert_into_forum(
    $message_content,
    $message_sender
) {
    global $mysqli_db;
    $sql = "INSERT INTO `forum` (
        `message_content`,
        `message_sender`
    ) VALUES (
        '$message_content', 
        '$message_sender'
    )";
    $result = $mysqli_db->query($sql);
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

// cart
function insert_into_cart(
    $cart_owner
) {
    global $mysqli_db;
    $sql = "INSERT INTO `cart` (
        `cart_id`, 
        `cart_owner`
        ) VALUES (
            NULL,
            '$cart_owner'
        )";
    $result = $mysqli_db->query($sql);
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

// cart_item
function insert_into_cart_item(
    $cart_item_id,
    $cart_item_quantity,
    $cart_id
) {
    global $mysqli_db;
    $sql = "INSERT INTO `cart_item` (
        `id`,
        `cart_item_id`,
        `cart_item_quantity`,
        `cart_id`
    ) VALUES (
        NULL,
        '$cart_item_id',
        '$cart_item_quantity', 
        '$cart_id'
    )";
    $result = $mysqli_db->query($sql);
    echo $mysqli_db->error;
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

// testimonial
function insert_into_testimonial(
    $sender_name,
    $sender_address,
    $message
) {
    global $mysqli_db;
    $sql = "INSERT INTO `testimonial` (
        `id`, 
        `sender_name`,
        `sender_address`,
        `message`,
        `status`
        ) VALUES (
            NULL,
            '$sender_name',
            '$sender_address',
            '$message',
            0
        )";
    $result = $mysqli_db->query($sql);
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

// contact us
function insert_into_contact(
    $sender_name,
    $sender_address,
    $message
) {
    global $mysqli_db;
    $sql = "INSERT INTO `contact` (
        `id`, 
        `sender_name`,
        `sender_address`,
        `message`,
        `status`
        ) VALUES (
            NULL,
            '$sender_name',
            '$sender_address',
            '$message',
            0
        )";
    $result = $mysqli_db->query($sql);
    if ($result) {
        return 1;
    } else {
        return 0;
    }
}

// functionalities
// function to authenticate users
function authenticate_user($email_address, $user_password)
{
    global $mysqli_db;
    $result = $mysqli_db->query("SELECT * FROM `user` WHERE email_address = '$email_address'");
    $row = $result->fetch_assoc();
    if ($user_password == $row['user_password']) {
        $_SESSION['user_name'] = $row['last_name'];
        return 1;
    } else return 0;
}

//function to login in user
function login($email_address)
{
    global $mysqli_db;

    // fetch cart_id from cart table and store in session variable
    $res = $mysqli_db->query("SELECT `cart_id` FROM `cart` WHERE `cart_owner` = '$email_address'");
    if ($res) {
        $row1 = $res->fetch_assoc();
        $_SESSION['cart_id'] = $row1['cart_id'];
    } else {
        return 0;
    }

    // fetch data from user table and store it in session variables
    $result = $mysqli_db->query("SELECT * FROM `user` WHERE `email_address` = '$email_address'");
    if ($result) {
        //store results in an associative array, representing the row
        $row = $result->fetch_assoc();

        //store user data in session variables
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['email_address'] = $email_address;
        $_SESSION['physical_address'] = $row['physical_address'];
        $_SESSION['member_type'] = $row['member_type'];
        $_SESSION['user_location'] = $row['user_location'];
        $_SESSION['phone_number'] = $row['phone_number'];
        $_SESSION['profile_photo'] = $row['profile_photo'];

        //other session data
        $_SESSION['login_status'] = true;

        if ($_SESSION['email_address'] == "admin@cashcrop.com") {
            // redirect admin to dashboard
            echo "<script>";
            echo "location.assign('../dashboard/admin.php')";
            echo "</script>";
        } else {
            // redirect user to index page
            echo "<script>";
            echo "location.assign('../index.php')";
            echo "</script>";
        }
    } else {
        return 0;
    }
}

//function to get products
function get_products()
{
    global $mysqli_db;
    $all_products = $mysqli_db->query("SELECT * FROM `product`");

    if ($all_products) {
        return $all_products;
    } else {
        return 0;
    }
}

// fetch lastname given email address
function fetch_last_name($email_address)
{
    global $mysqli_db;
    $result = $mysqli_db->query("SELECT last_name FROM user WHERE email_address = '$email_address'");
    $row = $result->fetch_assoc();
    return $row['last_name'];
}

// get the number of cards in a particular category
function get_no_cards($product_category)
{
    global $mysqli_db;
    $sql = "SELECT product_id FROM product WHERE product_type = '$product_category'";
    $stmt = $mysqli_db->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $no_of_rows = $stmt->num_rows;
    return $no_of_rows;
}
