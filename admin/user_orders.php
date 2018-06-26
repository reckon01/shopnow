<?php
session_start();
echo "<br><br><br><h3 align='center'><a href='main.php' style='color:blue'>Home</a></h3><br><br>";
include_once "../database/connection.php";
$q="SELECT * FROM orders";
$pid=array();
$pname=array();
$price=array();
$date=array();
$name=array();
$account_mobile=array();
$producer=array();
$address=array();

$r=mysqli_query($con, $q);
$n=mysqli_num_rows($r);
$j=0;
while($row=mysqli_fetch_assoc($r)){
	$pid[$j]=$row['pid'];
	$pname[$j]=$row['pname'];
	$price[$j]=$row['price'];
	$date[$j]=$row['date'];
	$account_mobile[$j]=$row['account_mobile'];
	$name[$j]=$row['name'];
	$producer[$j]=$row['producer'];
	$address[$j]=$row['address'];
	$j++;
	}
if($n==0)
{

echo "<br><br><br><br><br><br><br><br>";
	echo "<p><font face='verdana' color='blue' size='5'><span style='color:blue'> Any Users Does not placed any orders. </span>Or <a href='main.php' style='color:red'>Click Here!</a> to go to Admin Home page. </font></p>";
}
else{
echo "<p align='center'><font face='verdana' size='5' color='blue'>Currently Logged In Admin: {<i style='color:red'>".$_SESSION['admin']." </i>}</font><p>";
  echo "<table align='center' border='3' cellpadding=\"8\" cellspacing='0'><br>";
  echo "<tr>
           <td><b style='color: blue'>PRODUCT ID</b></td>
		   <td><b style='color: blue'>PRODUCT NAME</b></td>
		   <td><b style='color: blue'>PRICE</b></td>
		   <td><b style='color: blue'>MANUFACTURAR/<br>PUBLISHER/<br>PRODUCER</b></td>
		   <td><b style='color:blue'>DATE</b></td>
		   <td><b style='color:blue'>BUYER NAME</b></td>
		   <td><b style='color:blue'>CONTACT NUMBER</b></td>
		   <td><b style='color:blue'>ADDRESS</b></td>
		   </tr>";
        for($k=0; $k<$n; $k++){
			echo "<tr>";
		echo "<td>".$pid[$k]."</td>";
		echo "<td>".$pname[$k]."</td>";
		echo "<td>".$price[$k]."</td>";
		echo "<td>".$producer[$k]."</td>";
			echo "<td>".$date[$k]."</td>";
			echo "<td>".$name[$k]."</td>";
			echo "<td>".$account_mobile[$k]."</td>";
			echo "<td>".$address[$k]."</td>";
		     echo "</tr>";
}
}

?>