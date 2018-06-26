<?php
echo "<br><h3><a href='main.php' style='color:blue'>Home</a></h3><br><br>";
include_once "../database/connection.php";
$q="DELETE FROM product WHERE pid='$_GET[pid]'";
mysqli_query($con, $q);

echo "<br><br><br><br><br><br><br><br>";
	echo "<p><font face='verdana' color='blue' size='5'><span style='color:blue'>Successfully deleted product from database. <a href='admin_del.php' style='color:red'>Click here</a> to delete more</span> Or <a href='admin_add.html' style='color:red'>Click Here</a> to Add products, Or <a href='main.php' style='color:red'>Click Here!</a> to go to Admin Home page. </font></p>";
	?>