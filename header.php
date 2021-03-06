<header id="header"><!--header-->
	<div class="header_top"><!--header_top-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i> +62 812 1234 5678</a></li>
							<li><a href="https://mail.google.com/mail/u/0/"><i class="fa fa-envelope"></i>  CookAja@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="social-icons pull-right">
						<ul class="nav navbar-nav">
							<li><a href="https://web.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="twitter.com"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header_top-->
	
	<div class="header-middle"><!--header-middle-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="logo pull-left">
						<a href="index.php"><img src="images/home/cookaja.png" alt="" /></a>
						
					</div>
				</div>
				<div class="col-sm-8">
					<div class="shop-menu pull-right">
					
						<ul class="nav navbar-nav">
						
							<li><a ><?php 
								@session_start(); 
								if(isset($_SESSION["UserName"])){
									if($_SESSION["Type"] == "user"){ 
										echo "Hello, ".'<b>'.$_SESSION["UserName"].'</b>';
										echo '<li><a href="userAccount.php"><i class="fa fa-user"></i> My Account</a></li>';
										echo '<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Purchase History</a></li>';
										echo '<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>';
									}
									if($_SESSION["Type"] == "vip"){ 
										echo "Hello VIP's, ".'<b>'.$_SESSION["UserName"].'</b>';
										echo '<li><a href="userAccount.php"><i class="fa fa-user"></i> My Account</a></li>';
										echo '<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Purchase History</a></li>';
										echo '<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Keranjang</a></li>';
									}
									if($_SESSION["Type"] == "admin"){
										echo '<li><a href="recipeList.php"><i class="fa fa-user"></i>Admin CookAja</a></li>';
									}
								}
							?></a></li>
							
							<?php 
								if(isset($_SESSION["UserName"])){ 
									echo '<li><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>';
								}
								else{
									echo '<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>';
								}
							?>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div><!--/header-middle-->
	</br>
	
</header><!--/header-->