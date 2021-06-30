<?php

// Add Theme Support
add_theme_support('title_tag');

add_theme_support('post-thumbnails');

add_theme_support('post_format',[
	'aside','image','gallery','link','image','qoute','status',
	'video','audio','chat'
]);

add_theme_support('custom-header');

add_theme_support('custom-logo');
add_theme_support('custom-background');

add_theme_support('customize-selective-refresh-widgets');

add_theme_support('starter-content');


// Load Css

function wpdan_enqueue_styles(){

	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri().'/style.css',[], time(),'all');

}

add_action('wp_enqueue_scripts','wpdan_enqueue_styles');


// register menu location

 register_nav_menus([
 	'main-menu'=> esc_html__( 'Main Menu', 'wpdan' )
 ]);

 // register sidebar


 function wpdan_widgets_init(){

 	register_sidebar([
	 'name' =>esc_html('Main Sidebar'),
	 'id'=>'main-sidebar',
        'description' => esc_html__('Add Widgets for main sidebar here', 'wpdan_widgets_init'),
        'before_widget'=>'<section class="widget">',
        'after_widget' =>'</section>',
        "before_title"=>"<h2 class='widget-title'>",
        "after_title" => '</h2>' 
 	]);
 }

 add_action('widgets_init','wpdan_widgets_init');