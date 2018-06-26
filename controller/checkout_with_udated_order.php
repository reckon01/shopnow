<?php
session_start();
include_once "../database/connection.php";

$pid=$_POST['pid'];
$pname=$_POST['pname'];
$price=$_POST['price'];
$producer=$_POST['producer'];
$account_mobile=$_SESSION['mobileno'];

$address=$_POST['address'];
$name=$_POST['name'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$buyer_mobile=$_POST['buyer_mobile'];
$landmark=$_POST['landmark'];

 

$query="INSERT INTO orders(pid, pname, price, producer, address, city, pin, landmark, buyer_mobile, account_mobile, name, date)".
"VALUES('$pid','$pname','$price','$producer','$address','$city','$pin','$landmark','$buyer_mobile', '$account_mobile','$name',CURRENT_DATE)";						   
mysqli_query($con,$query) or die(mysqli_error($con));

//insert into address
$qac="SELECT * FROM address WHERE mobile='$account_mobile'";
$rqac=mysqli_query($con,$qac) or die(mysqli_error($con));
$nrqac=mysqli_num_rows($rqac);

if($nrqac==0){
$qa="INSERT INTO address(address, city, pin, landmark, mobile, buyer_mobile, name) VALUES('$address','$city','$pin','$landmark','$account_mobile','$buyer_mobile','$name')";
 mysqli_query($con, $qa) or die(mysqli_error($con));
}else{
	$upd="UPDATE address SET address='$address', city='$city', pin='$pin', landmark='$landmark', buyer_mobile='$buyer_mobile', name='$name' WHERE mobile='$account_mobile'";
	mysqli_query($con,$upd) or die(mysqli_error($con));
}

$oh="INSERT INTO order_history(pname,price,date, mobileno, producer) VALUES('$pname','$price',CURRENT_DATE,'$account_mobile','$producer')";
mysqli_query($con,$oh);

$update_cart="DELETE FROM cart WHERE pid='$pid'";
mysqli_query($con, $update_cart) or die(mysqli_error($con));

header("Location: ../controller/success_order.php");
?>

<?php 
include_once "../menu/foot.txt";
?>