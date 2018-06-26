<?php
include_once "../database/connection.php";
$pid=$_POST['product_id'];
$pname=$_POST['product_name'];
$price=$_POST['price'];
$qty=$_POST['qty'];
$manu=$_POST['manufac'];
$q="SELECT * FROM product WHERE pid='$pid'";
$r=mysqli_query($con, $q) or die(mysqli_error($con));
$n=mysqli_num_rows($r);
if($n==0){
$query="INSERT INTO product(pid, pname, price, qty, producer) VALUES('{$pid}','{$pname}','{$price}','{$qty}','{$manu}')";
mysqli_query($con, $query) or die(mysqli_error($con));
echo "<br><br><br><br><br><br><br><br>";
	echo "<p><font face='verdana' color='blue' size='5'><span style='color:blue'>Successfully added product to database. <a href='admin_add.html' style='color:red'>Click here</a> to add more. </span>Or <a href='main.php' style='color:red'>Click Here!</a> to go to Admin Home page. </font></p>";
}
else{
	echo "<br><br><br><br><br><br><br><br>";
	echo "<p><font face='verdana' color='blue' size='5'><span style='color:blue'>You have already added this Product, Please add a new product. <a href='admin_add.html' style='color:red'>Click here</a> to add products</span></font></p>";
}
?>