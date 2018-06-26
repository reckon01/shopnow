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

<body background="im.jpg">
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
			  <a class="dropdown-item" href="#">
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

<section>
<br><br><br><br><br><br>
<h1 style="color:blue" align="center">Help Center</h1>
<p><font face="verdana" color="white" size="5">We developed <i style="color:red">My</i><i style='color:cyan'>Shopping</i><i style="color:red">Cart</i> as final year Academic project. If you want to give any feedback, it will be really helpful.
 You can be the part of the developer team by giving your valuable suggestions. For any type of query drop a mail at <i style="color:blue">sohelislammollick@gmail</i> and you can also contact me at <i style="color:blue">+918697609789</i>. Have a good time!</font></p>
<br>
<p><font face='verdana' color='white' size='5'>If You Want To Return Your Product, You Can Contact At <i style='color:blue'>+918250653581</i> Number, Or Just Drop A Mail At <i style='color:blue'>sohelislam14@gmail.com</i>. We Will Get Back to You WithIn 24 Hours.</font></p>
 <br><br><br><br><br><br>

</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts1-4" style="background-color: rgb(0, 0, 0);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row" style="padding-top: 45px; padding-bottom: 45px;">
            <div class="col-sm-4">
                <div><a href="index.php" class="mbri-chat mbr-iconfont mbr-iconfont-contacts1"></a></div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>FEEDBACKS:</strong><br>
						<a href="../view/client_feedback.php" class="text-danger"><strong>Give</strong> <strong>Feedback</strong></a><br>
						<a href="../help/privacy_statements.php" class="text-danger"><strong>Privacy</strong> <strong>Policy</strong></a>
						<a href="../help/privacy_statements.php" class="text-danger"><br></a><br><a href="../help/privacy_statements.php"><br></a></p>
                    </div>
                    <div class="col-sm-4">
                        <p class="mbr-contacts__text"><strong>CONTACTS:</strong><strong><br></strong>sohel islam mollick<br>
sohelislammollick@gmail.com<br>
Phone: +91 8697609789<br><br></p>
                    </div>
                    <div class="col-sm-4">
					<p class="mbr-contacts__text">
					    <strong>ADMIN PANEL:</strong>
				    </p>
					   <ul class="mbr-contacts__list">
					      <li>
						     <a href="../admin/admin_login.html" class="text-danger">
							     <strong>Admin</strong> <strong>Login</strong>
						    </a>
							<a class="mbr-contacts__link text-gray" href="../admin/admin_login.html">
							</a>
						  </li>
						  
						  <li>
						    <a href="../admin/main.php" class="text-danger">
							   <strong>Maintenance</strong>
							</a>
							<a class="mbr-contacts__link text-gray" href="../admin/main.php">
							</a>
							
						</li>
							
						<li>
							<a href="../admin/developer.php" class="text-danger"> 
							<strong>Developers</strong>
							</a>
							<a class="mbr-contacts__link text-gray" href="../admin/developer.php">
							</a>
							</li>
							
							</ul>
							</div>
                   </div>
            </div>
        </div>
    </div>
</section>


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