<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/cart.png" type="image/x-icon">
  <meta name="description" content="">
  <title>MyShoppingCart</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/mobirise/css/style.css">
  <link rel="stylesheet" href="../assets/dropdown-menu/style.css">
  <link rel="stylesheet" href="../assets/mobirise-slider/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css"> 
</head>

<body background="../menu/back.jpg">
<section id="dropdown-menu-2btn-2">

    <nav class="navbar navbar-dropdown navbar-fixed-top">

        <div class="container">

            <div class="navbar-brand">
                <a href="../index.php" class="navbar-logo"><img src="../assets/images/images1cwsmf1n-128x128.png" alt="Mobirise"></a>
                <a class="text-white" href="../index.php">MyShoppingCart</a>
            </div>

            <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                <div class="hamburger-icon"></div>
            </button>

            <ul class="nav-dropdown collapse pull-xs-right navbar-toggleable-sm nav navbar-nav" id="exCollapsingNavbar">
			  <?php
			  if(isset($_SESSION['login']) && $_SESSION['login']!='')
			  {
				?>
				  
			  <li class="nav-item dropdown open">
			    <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="true">
				 <span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="color: rgb(226, 80, 65);">
				 </span>
				 <?php
				  echo $_SESSION['login'];
				  ?>
				</a>
			<div class="dropdown-menu">
			  <a class="dropdown-item" href="../view/myaccount.php">
			    MY ACCOUNT
			  </a>
			  
			     <a class="dropdown-item" href="../controller/logout.php">
			     LOGOUT
			     </a>
				 
			  </div>
			</li>
			<?php
			  }else{
			?>
			  <li class="nav-item dropdown open">
			    <a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="true">
				 <span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="color: rgb(226, 80, 65);">
				 </span>
				 MY ACCOUNT 
				</a>
			<div class="dropdown-menu">
			  <a class="dropdown-item" href="../view/register_client.php">
			  REGISTER
			  </a>
			  
			     <a class="dropdown-item" href="../view/client_login.php">
			     LOG IN
			     </a>
				 
			  </div>
			</li>
			  <?php
			  }
			  ?>
			  
			  
			  
			<li class="nav-item dropdown">
			  <a class="nav-link link" href="../help/help.php" aria-expanded="true">
			   <span class="mbri-help mbr-iconfont mbr-iconfont-btn" style="color: rgb(226, 80, 65);">
			   </span>
			   HELP
			 </a>
			 </li>
			 
			<?php 
			if(isset($_SESSION['login']) && $_SESSION['login']!=''){
				?>
				<li class="nav-item dropdown">
			  <a class="nav-link link" href="../controller/myorders.php" aria-expanded="true">
			   <span  style="color: rgb(226, 80, 65);">
			   </span>
			   MY ORDERS
			 </a>
			 </li>
             <?php
			}else{
			?>
			<li class="nav-item nav-btn">
			<a class="nav-link btn btn-default-outline btn-default" href="../view/register_client.php">
			REGISTER
			</a>
			</li>
			
			<li class="nav-item nav-btn">
			<a class="nav-link btn btn-default-outline btn-default" href="../view/client_login.php">
			LOG IN
			</a>
			</li>
			<?php
			}
			?>
			<li class="nav-item nav-btn">
			<a class="nav-link btn btn-danger" href="../controller/cart.php">
			MY CART
			</a>
			</li>
			
			</ul>

        </div>

    </nav>

</section>
<br><br>
<?php

include_once "../database/connection.php";

$m=$_SESSION['mobileno'];

$getmob="SELECT * FROM customer WHERE mobile='$m'";
$rs=mysqli_query($con,$getmob);
while($mob=mysqli_fetch_assoc($rs)){
 $mobileno=$mob['mobile'];

}

$query="SELECT * FROM order_history WHERE mobileno='$m'";
$result=mysqli_query($con, $query) or die(mysqli_error());


$pname=array();
$date=array();
$price=array();
$producer=array();

$j=0;

$num_rows=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result))
{

$pname[$j]=$row['pname'];
$price[$j]=$row['price'];
$producer[$j]=$row['producer'];
$date[$j]=$row['date'];
$j++;
}
if($num_rows==0)
{
	echo "<br><br><br><br><br><br><br><br><br><br><br>";
	echo "<p><font face='verdana' color='blue' size='5'><i style='color:black'>".$_SESSION['login']."</i>, You have not purchased any products yet. <a href='../index.php'><i style='color:red'>Click Here</i></a> to start shopping.</font></p>";
	echo "<br><br><br><br><br><br><br><br>";
}
else{
	//here 5 colums present so inner loop will run 5 times
	echo "<br><br><br><br><br><br><br>";
echo "<p align='center'><font face='verdana' size='5' color='blue'>{<i style='color:red'>".$_SESSION['login']." </i>} Your Order History</font><p>";
  echo "<table align='center' border='3' cellpadding=\"30\" cellspacing='5'><br>";
  echo "<tr>
           <td><span style='color:white'>---</span><b style='color: blue'>PRODUCT NAME</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color: blue'>PRICE</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color: blue'>DATE</b><span style='color:white'>---</span></td>
		   <td><span style='color:white'>---</span><b style='color: blue'>PRODUCER</b><span style='color:white'>---</span></td>
		   </tr>";
        for($k=0; $k<$num_rows; $k++){
			echo "<tr>";
		echo "<td><span style='color:white'>---</span>".$pname[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>---</span>".$price[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>---</span>".$date[$k]."<span style='color:white'>---</span></td>";
		echo "<td><span style='color:white'>---</span>".$producer[$k]."<span style='color:white'>---</span></td>";

		     echo "</tr>";
		}
		

}
?>
<script src="../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="../assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="../assets/mobirise/js/script.js"></script>
  <script src="../assets/dropdown-menu/script.js"></script>
  
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <input name="animation" type="hidden"> 
  
</body>
</html>

