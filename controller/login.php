<?php 
        session_start();
		include_once "../database/connection.php";
		$mobile=$_POST['mobile'];
		$pass=$_POST['pass'];
		$sql="SELECT  * FROM customer WHERE mobile='$mobile' AND password='$pass'";
		$r=mysqli_query($con, $sql);
		$num=mysqli_num_rows($r);
		if($num==1){
			while($row=mysqli_fetch_assoc($r)){
			$_SESSION['login']=$row['fname'];
			$_SESSION['mobileno']=$row['mobile'];
			}
			
			$_SESSION['err_log']="";
			$_SESSION['mobilelog']="";
			$_SESSION['fpass']="";
			header("Location: ../index.php");
       }else{
		   $_SESSION['err_log']="Credentials are wrong, Please give correct details!";
		   $_SESSION['mobilelog']=$mobile;
		   $_SESSION['fpass']="Forget PassWord";
		   header("Location: ../view/client_login.php");
	   }


?>
