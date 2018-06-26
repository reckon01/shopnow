<?php
session_start();
include_once "../database/connection.php";

if(isset($_POST['submit'])){
	
	if(isset($_POST['mobile'])){
		$q="SELECT * FROM customer WHERE mobile='$_POST[mobile]'";
		$r=mysqli_query($con,$q);
		$n=mysqli_num_rows($r);
		if($n==1){
	 $_SESSION['mobs']=$_POST['mobile'];
	 $_SESSION['otp']=rand(1000,100000);
	 $_SESSION['otp_mssg']="Enter the OTP sent to your mobile!";
	 header("Location: https://2factor.in/API/V1/e207fe1d-fe24-11e7-a328-0200cd936042/SMS/+91$_SESSION[mobs]/$_SESSION[otp]");
	}else{
	$_SESSION['otp_mssg']="Please Enter Your 10 digit Registered Number!";
	 header("Location: ../view/client_forgot_password.php");
	
	}
	}else if(isset($_POST['otp'])){
		if($_POST['otp']==$_SESSION['otp']){
		 header("Location: ../view/reset_password.php?mobile=$_SESSION[mobs]");
		}else{
		  $_SESSION['otp_mssg']="Please Enter valid OTP !";
		  header("Location: ../view/client_forgot_password.php");
		}
	}
}
?>