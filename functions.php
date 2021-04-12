<?php

function load_stylesheet()
{
	
	wp_register_style('custom', get_template_directory_uri() .'/style.css', array(),rand(111,9999),'all');
	wp_enqueue_style('custom');
	
	
}
add_action('wp_enqueue_scripts', 'load_stylesheet');


// Register menus
add_theme_support('menus') ;


//Register menus
register_nav_menus(
	
		array(
		
			'top-menu' => __('Menu', 'theme'), 
		)

);

// Enqueues a js file 
function toggle_menu(){
	wp_enqueue_script('toggle', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '1.1.4',false);
}
add_action('wp_enqueue_scripts', 'toggle_menu');



// Used for creating customized post types
function cptui_register_my_cpts() {

	/**
	 * Post Type: Shirts.
	 */

	$labels = [
		"name" => __( "Shirts", "custom-post-type-ui" ),
		"singular_name" => __( "Shirt", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Shirts", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "shirts", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-buddicons-buddypress-logo",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "shirts", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );






