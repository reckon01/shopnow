<?php
include_once "../database/connection.php";
$query="SELECT * FROM admin WHERE username='$_POST[username]' AND password='$_POST[password]'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
$num_rows=mysqli_num_rows($result);
if($num_rows>0)
{
session_start();
$_SESSION['admin']=$_POST['username'];
header("Location: ../admin/main.php");
}else{
	echo "<h3><a href='../index.php' style='color:blue'>Back to Home</span></a></h3><br><br>";
	echo '<i><span style="color:blue"><span style="color:red">Note:</span> If you leave admin section after login, you will be automatically logged out.</span></i>';
echo "<form action='../admin/login.php' method='POST'>
<fieldset>
<legend>Please login to continue</legend>
Username<span style='color:red'>*</span>:<br>
<input type='text' name='username' size='40' required>
<br>
<br>
Password:<span style='color:red'>*</span>:<br>
<input type='password' name='password' size='40' required>
<br>
<br>
<input type='submit' value='Login'>
<br>
</fieldset>
</form>";
echo "<h5 style='color:red'>Error: Incorrect Username and Password</h5>";
}
?>