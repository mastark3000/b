<?php
	echo "";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ShopPool</title>
	<link rel="icon" type="image/svg" href="img/monitor.svg">
	<style type="text/css">
    #warning-message { display: none; }
    @media only screen and (orientation:portrait){
        #container { display:none; }
        #warning-message { display:block; }
    }
    @media only screen and (orientation:landscape){
        #warning-message { display:none;
        margin: auto; }
    }
</style>


<!-- <div id="wrapper">
    your html for your website
</div> -->
	<link rel="stylesheet" type="text/css" href="css/d.css">
	<script type="text/javascript" src="font.js"></script>
</head>
<body>
<div id="warning-message">
    this website is only viewable in landscape mode
</div>
<div id="container">
	<div id="space">
		<div id="header">
			<div id="heading">
				<!-- <img src="img/monitor.svg"> -->
				<a href=""><i class="fal fa-cart-arrow-down"></i></a>
				<h1><a href="">ShopPool</a></h1>
			</div>
			<div id="search">
				<i class="far fa-search"><a href=""></a></i>
				<input type="search" name="q" placeholder="|search">
			</div>
			<div id="navbar">
				<div id="hleft">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Filter</a></li>
						<li><a href="#">Profile</a></li>
					</ul>
				</div>
				<div id="hright">
					<ul>
						<li><a href="s.php">SignIn</a></li>
						<li><a href="signup.php">SignUp</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="content">
		<div>
			<form method="GET">
				<ul>
					<li id="n"><!-- <a href=""> -->Type<!-- </a> --><ul id="nest"><li>list</li><li>list</li></ul></li>
					<li id="n">Filter<ul id="nest"><li>list</li><li>list</li></ul></li>
					<li id="n">Filter<ul id="nest"><li>list</li><li>list</li></ul></li>
					<li id="n">Filter<ul id="nest"><li>list</li><li>list</li></ul></li>
				</ul>
			</form>
		</div>
		
			<div id="menu">
				<div id="lm">
					<div id="mtop">
						<h2>Menu<i class="fas fa-chevron-circle-down"></i></h2><hr>
					</div>
					<div id="mbot">
						<ul>
							<li><a href="">UTU website</a></li>
							<li><a href="">menu</a></li>
							<li><a href="">menu</a></li>
							<li><a href="">menu</a></li>
							<li><a href="">menu</a></li>
							<li><a href="">menu</a></li>
						</ul>
					</div>
				</div>
				<div id="rm">
					<p>contents</p>
					
				</div>
			</div>
	</div>
	<div id="footer">
		&copy;Reserved by <b>Afzal Mansuri</b>
		<p>
			<i class="fab fa-cc-amazon-pay"></i>
			<i class="fab fa-cc-paypal"></i>
			<i class="fab fa-cc-discover"></i>
			<i class="fab fa-cc-apple-pay"></i>
			<i class="fab fa-bitcoin"></i>
		</p>
	</div>
	</div>
</div>


</body>
</html>