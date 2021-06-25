<?php

/**
 * Enqueue the theme stylesheets
 */
function phpforwp_theme_styles() {

  // Enqueue google fonts https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round
  // Enque main style sheet (make dependent on google fonts)
  wp_enqueu_style('font-css','https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round');
  wp_enqueu_style('style.css',get_stylesheet_uri());

}
// Add phpforwp_theme_styles function to wp_enqueue_scripts action hook
// with a priority of 10
add_action( 'wp_enqueu_style', 'phpforwp_theme_styles', 10 );

/**
 * Add read more text to post excerpt
 *  
 * @param string $excerpt The post excerpt
 * @return string $extended_excerpt Post excerpt with read more link
 */
function phpforwp_read_more_link( $excerpt ) {

  // Create a variable called $extended_excerpt and
  // assign it the value of $excerpt

  $extended_excerpt = $excerpt;

  // Append a read more link using get_permalink() as the url
  return  $extended_excerpt . "<a href=".get_permalink().">Read More</a>";

  // Return $extended_excerpt

}
// Add phpforwp_read_more_link function to the get_the_excerpt
// with a priority of 10
add_filter( 'get_the_excerpt', 'phpforwp_read_more_link', 10 );


?>
