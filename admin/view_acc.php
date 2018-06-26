<?php
session_start();
echo "<br><br><br><h3 align='center'><a href='main.php' style='color:blue'>Home</a></h3><br><br>";
include_once "../database/connection.php";
$q="SELECT * FROM customer";
$fname=array();
$lname=array();
$mobile=array();
$email=array();
$password=array();

$r=mysqli_query($con, $q);
$n=mysqli_num_rows($r);
$j=0;
while($row=mysqli_fetch_assoc($r)){
	$fname[$j]=$row['fname'];
	$lname[$j]=$row['lname'];
	$mobile[$j]=$row['mobile'];
	$email[$j]=$row['email'];
	$password[$j]=$row['password'];
	$j++;
	}
if($n==0)
{

echo "<br><br><br><br><br><br><br><br>";
	echo "<p><font face='verdana' color='blue' size='5'><span style='color:blue'> Not users Registered Yet. </span>Or <a href='main.php' style='color:red'>Click Here!</a> to go to Admin Home page. </font></p>";
}
else{
echo "<p align='center'><font face='verdana' size='5' color='blue'>Currently Logged In Admin: {<i style='color:red'>".$_SESSION['admin']." </i>}</font><p>";
  echo "<table align='center' border='3' cellpadding=\"10\" cellspacing='0'><br>";
  echo "<tr>
           <td><span style='color:white'>---</span><b style='color: blue'>FIRST NAME</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color: blue'>LAST NAME</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color: blue'>MOBILE</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color: blue'>EMAIL</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color:blue'>PASSWORD</b></td>
		   </tr>";
        for($k=0; $k<$n; $k++){
			echo "<tr>";
		echo "<td><span style='color:white'>---</span>".$fname[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>---</span>".$lname[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>---</span>".$mobile[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>---</span>".$email[$k]."<span style='color:white'>---</span></td>";
			echo "<td><span style='color:white'>---</span>".$password[$k]."<span style='color:white'>---</span></td>";
		     echo "</tr>";
}
}

?>