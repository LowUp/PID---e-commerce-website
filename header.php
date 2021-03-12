<!DOCTYPE HTML>
<html lang = "en">
<head>
  
  <title>NextHighFitness</title>
  <meta charset = "UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<!------ Sets this file as the header------>
<?php wp_head();?>


</head>
<body> 
<!------------------------------------------------------------------------------------------- Header ------------------------------------------------------------------------------>
   
   
	<div class="container">
	
		<div class="navbar">
			<div class="logo">
			<!------ Set up the images------>
			<img src="<?php bloginfo('template_directory');?>\Logo\Sans titre.png" width="190px" height="120px">
			</div>
		
		<?php 
		wp_nav_menu(
				array(
						'theme_location' => 'top-menu',
						'menu_id' => 'MenuItems',
						'container' => 'nav',
						'menu_class' => 'navbar, container',
				)
		
		);?>
		
		<!--<nav>
			<ul id="MenuItems">
				<li><a href="Index.html">Home</a></li>

				
				<li><a href="">Products</a></li>
				
				
				<li><a href="About_Us.html">About</a></li>
			</ul>
		</nav> -->							<!------ Set up the images------>
		<img src="<?php bloginfo('template_directory');?>\images\iconfinder_shopping-cart_216477.png" width="30px" height="30px">
		<img src="<?php bloginfo('template_directory');?>\images\iconfinder_menu_1814109.png" class="menu_icon" onclick="menutoggle()">
	</div> 
	</div>	
   
<!------------------------------------------------------------------------------------------- /Header ------------------------------------------------------------------------------>	
