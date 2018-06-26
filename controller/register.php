<?php
session_start();
include_once "../database/connection.php";
if(isset($_POST['submit'])){
	
  $mobile=$_POST['mobile'];
  $sql="select * from customer where mobile='$mobile'";
  $r=mysqli_query($con, $sql) or mysqli_error($con);
  $num=mysqli_num_rows($r);
  if($num==0){
	  
	  $_SESSION['fname']="";
	  $_SESSION['lname']="";
	  $_SESSION['mobile']="";
	  $_SESSION['email']="";
	  $_SESSION['pass']="";
	  $_SESSION['err_reg']="";
	  
	  $in="INSERT INTO customer(fname, lname, mobile, email, password) VALUES('$_POST[fname]','$_POST[lname]','$_POST[mobile]', '$_POST[email]','$_POST[pass]')";
	  mysqli_query($con,$in) or mysqli_error($con);
	  $_SESSION['login']=$_POST['fname'];
	  $_SESSION['mobileno']=$_POST['mobile'];
      header("Location: ../controller/register_successfully.php");
	  
  }else{
	  $_SESSION['fname']=$_POST['fname'];
	  $_SESSION['lname']=$_POST['lname'];
	  $_SESSION['mobile']=$_POST['mobile'];
	  $_SESSION['email']=$_POST['email'];
	  $_SESSION['pass']=$_POST['pass'];
	  $_SESSION['err_reg']="Mobile Number already regisered, Please Select Another!";
	  header("Location: ../view/register_client.php");
  }
}
  ?>