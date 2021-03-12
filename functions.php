<?php

/*------Method to link the css files to the other files------*/
function load_stylesheet()
{
	
	wp_register_style('custom', get_template_directory_uri() .'/style.css', array(),1,'all');
	wp_enqueue_style('custom');
	
	
}
add_action('wp_enqueue_scripts', 'load_stylesheet');




//Menus support
add_theme_support('menus') ;


//Register menus
register_nav_menus(
	
		array(
		
			'top-menu' => __('Menu', 'theme'), 
		)

);


function wpb_hook_javascript() {
    ?>
        <script>
		var menuItems = document.getElementById("MenuItems");
		
		menuItems.style.maxHeight = "0px";
		
		function menutoggle(){
		
		  if(menuItems.style.maxHeight == "0px")
		  {
		  menuItems.style.maxHeight = "200px";
		  }
		  else
		  {
		  menuItems.style.maxHeight = "0px";
		  }
		
		
		}
	</script>
    <?php
}
add_action('wp_head', 'wpb_hook_javascript');



