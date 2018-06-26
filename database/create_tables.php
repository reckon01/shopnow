<?php
include_once "connection.php";

$admin="CREATE TABLE admin
(
username VARCHAR(96) NOT NULL,
password VARCHAR(96) NOT NULL,
PRIMARY KEY(username)
)";


$customer="CREATE TABLE customer
(
username VARCHAR(96),
password VARCHAR(255),
name VARCHAR(255),
address VARCHAR(255),
pin INT(25),
mobileno INT(25),
email VARCHAR(96) UNIQUE,
state VARCHAR(96),
PRIMARY KEY(username)
)";

$product="CREATE TABLE product
(product_id INT(255) AUTO_INCREMENT,
product_name VARCHAR(96) UNIQUE,
price INT(96),
quantity INT(96),
manufacturar VARCHAR(96),
image VARCHAR(255),
cat_id INT(96),
PRIMARY KEY(product_id)
)";

$category="CREATE TABLE category
(
cat_id INT(96),
cat_name VARCHAR(96) UNIQUE,
product_qty INT(96),
PRIMARY KEY(cat_id)
)";

$cart="CREATE TABLE cart
(
cart_id INT(96) AUTO_INCREMENT,
product_id INT(255),
username VARCHAR(96),
cat_id INT(96),
qty INT(96),
PRIMARY KEY(cart_id)
)";



$feedback="CREATE TABLE feedback
(
slno INT(96) AUTO_INCREMENT,
email VARCHAR(96),
messg VARCHAR(96),
PRIMARY KEY(slno)
)";

$return="CREATE TABLE returns
(
return_id INT(96) AUTO_INCREMENT,
order_id INT(96),
product_id VARCHAR(60),
email VARCHAR(96),
name VARCHAR(96),
mobileno INT(96),
order_date date,
product_name VARCHAR(96),
qty_return INT(96),
reason_for_ret VARCHAR(96),
opened VARCHAR(96),
PRIMARY KEY(return_id)
)";

$order="CREATE TABLE orders
(
order_id INT(96) AUTO_INCREMENT, cat_id INT(96),
order_date date,
product_id INT(30),
address VARCHAR(96),
pin INT(96),
landmark VARCHAR(96),
username VARCHAR(96),
mobileno INT(96),
email VARCHAR(96),
PRIMARY KEY(order_id)
)";



mysqli_query($con, $admin);

mysqli_query($con, $customer);
 
mysqli_query($con, $product);
 
mysqli_query($con, $category);

mysqli_query($con, $cart);

mysqli_query($con, $order);

mysqli_query($con, $return);

mysqli_query($con, $feedback);

 

mysqli_close($con);
?>