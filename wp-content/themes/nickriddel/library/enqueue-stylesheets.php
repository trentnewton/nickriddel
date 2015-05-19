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

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('wp_head', 'add_header_styles');

function add_header_styles() {
  if ( is_admin_bar_showing() ) {?>
    <style>
	html { margin-top: 32px; }
	* html body { margin-top: 32px; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px; }
		* html body { margin-top: 46px; }
	}
	@media screen and ( max-width: 600px ) {
	html { margin-top: 0; }
	* html body { margin-top: 0; }
	}
    </style>
  <?php }
}

?>