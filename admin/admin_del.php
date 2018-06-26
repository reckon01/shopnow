<?php
session_start();
echo "<br><h3><a href='main.php' style='color:blue'>Home</a></h3><br>";
include_once "../database/connection.php";
$q="SELECT * FROM product";
$r=mysqli_query($con, $q);

$n=mysqli_num_rows($r);
$pid=array();
$pname=array();
$price=array();
$qty=array();
$manu=array();
$j=0;
while($row=mysqli_fetch_assoc($r)){
	$pid[$j]=$row['pid'];
	$pname[$j]=$row['pname'];
	$price[$j]=$row['price'];
	$qty[$j]=$row['qty'];
	$manu[$j]=$row['producer'];
	
	$j++;
	}
	if($n==0)
{

echo "<br><br><br><br><br><br><br><br>";
	echo "<p><font face='verdana' color='blue' size='5'><span style='color:blue'> You have not added any Products. <a href='admin_add.html' style='color:red'>Click here</a> to add more. </span>Or <a href='main.php' style='color:red'>Click Here!</a> to go to Admin Home page. </font></p>";
}
else{
echo "<p align='center'><font face='verdana' size='5' color='blue'>Currently Logged In Admin: {<i style='color:red'>".$_SESSION['admin']." </i>}</font><p>";
  echo "<table align='center' border='3' cellpadding=\"10\" cellspacing='0'><br>";
  echo "<tr>
           <td><span style='color:white'>---</span><b style='color: blue'>PRODUCT ID</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color: blue'>PRODUCT NAME</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color: blue'>PRICE</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color: blue'>PRODUCER</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color:blue'>REMOVE ITEM</b></td>
		   </tr>";
        for($k=0; $k<$n; $k++){
			echo "<tr>";
		echo "<td><span style='color:white'>---</span>".$pid[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>---</span>".$pname[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>---</span>".$price[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>---</span>".$manu[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>-------</span><b><a href='delete.php?pid=$pid[$k]' style=' color:red'>remove</a></b></td>";
		     echo "</tr>";
}
}

?>