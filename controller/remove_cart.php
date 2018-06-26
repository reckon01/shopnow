<?php
session_start();
include_once "../database/connection.php";

$pid=$_GET['pid'];
$mobile=$_SESSION['mobileno'];
$q="DELETE FROM cart WHERE pid='$pid' AND mobileno='$mobile'";
mysqli_query($con,$q) or die(mysqli_error($con));
header("Location: ../controller/cart.php");

?>