<?php


function wpdantheme_enqueue_assets(){

	wp_enqueue_style( 'child-css', get_stylesheet_directory_uri().'/style.css',[], time(),'all');
    wp_enqueue_style('swiper-css',get_stylesheet_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css',[],time(),'all');
    wp_enqueue_style('glight-css',get_stylesheet_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css',[],time(),'all');
    wp_enqueue_style('glight-css',get_stylesheet_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js',[],time(),'all');
   
    wp_enqueue_script('swiper-js',get_stylesheet_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',[],time(),'all');
    wp_enqueue_script('main-js',get_stylesheet_directory_uri().'/assets/js/main.js',[],time(),'all');

}


add_action('wp_enqueue_scripts','wpdantheme_enqueue_assets');


 

// register menu location

 register_nav_menus([
 	'main-menu'=> esc_html__( 'Main Menu', 'dan-theme-menu' )
 ]);

 // register sidebar


 function wpdantheme_widgets_init(){

 	register_sidebar([
	 'name' =>esc_html('Main Sidebar'),
	 'id'=>'main-sidebar',
        'description' => esc_html__('Add Widgets for main sidebar here', 'wpdantheme_widgets_init'),
        'before_widget'=>'<section class="widget">',
        'after_widget' =>'</section>',
        "before_title"=>"<h2 class='widget-title'>",
        "after_title" => '</h2>' 
 	]);
 }

 add_action('widgets_init','wpdantheme_widgets_init');