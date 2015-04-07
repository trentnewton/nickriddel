<?php


function register_my_styles(){

	wp_register_style('app', get_template_directory_uri()."/stylesheets/app.css",'screen');

  wp_enqueue_style(array('app'));
}

add_action('wp_print_styles', 'register_my_styles');


add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_action( 'wp_enqueue_scripts', 'mgt_dequeue_stylesandscripts', 100 );

function mgt_dequeue_stylesandscripts() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );
    } 
} 

?>