<?php
$server='localhost';
$user='root';
$password='sohel';
$dbase='myshoppingcart';

$con=mysqli_connect($server, $user, $password);
if(!$con)
{
die(mysqli_error($con));
}

mysqli_select_db($con, $dbase);

?>