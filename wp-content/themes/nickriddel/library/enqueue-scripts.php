<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

if (!function_exists('nickriddel_scripts')) :
  function nickriddel_scripts() {

    // Enqueue the main stylesheet
    wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css' );

    // Deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );
    //wp_deregister_script('wc-add-to-cart');
    wp_deregister_script('jquery-blockui');
    wp_deregister_script('jquery-payment');
    wp_deregister_script('jquery-cookie');
    //wp_deregister_script('select2');
    //wp_deregister_script('wc-credit-card-form');
    //wp_deregister_script('wc-add-to-cart-variation');
    wp_deregister_script('wc-single-product');
    //wp_deregister_script('wc-country-select');
    //wp_deregister_script('wc-cart');
    wp_deregister_script('prettyPhoto');

    // CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), '2.1.4', true );

    // Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
    //wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', true );

    // If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
    // It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
    wp_register_script( 'app-js', get_template_directory_uri()."/assets/js/min/app-min.js", array('jquery'), '5.5.1', true );
    wp_register_script( 'jquery-blockui', '//cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.61.0-2013.06.06/jquery.blockUI.min.js', array( 'jquery' ), '2.61.0', true );
    wp_register_script( 'jquery-payment', '//cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.1/jquery.payment.min.js', array( 'jquery' ), '1.2.1', true );
    wp_register_script( 'jquery-cookie', '//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', array( 'jquery' ), '1.4.1', true );

    // Enqueue all registered scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('app-js');
    wp_enqueue_script('jquery-blockui');
    wp_enqueue_script('jquery-payment');
    wp_enqueue_script('jquery-cookie');

  }

  add_action( 'wp_enqueue_scripts', 'nickriddel_scripts' );
endif;

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_action( 'wp_enqueue_scripts', 'mgt_dequeue_stylesandscripts', 100 );

function mgt_dequeue_stylesandscripts() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'select2' );
        wp_deregister_style( 'select2' );
    } 
}

?>