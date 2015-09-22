<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_theme_support' ) ) :
function foundationpress_theme_support() {
    // Add language support
    load_theme_textdomain( 'nickriddel', get_template_directory() . '/languages' );

    // Add menu support
    add_theme_support( 'menus' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
    add_theme_support( 'post-thumbnails' );

    // RSS thingy
    add_theme_support( 'automatic-feed-links' );

    // Add post formarts support: http://codex.wordpress.org/Post_Formats
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

    // Declare WooCommerce support per http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
    add_theme_support( 'woocommerce' );

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );


    function show_post( $path ) {
        $post = get_page_by_path( $path ); 
        $content = '';
        if ( 'publish' == $post->post_status ) {
            $content = apply_filters( 'the_content', $post->post_content ); 
        }
        echo $content;
    }

}

add_action( 'after_setup_theme', 'foundationpress_theme_support' );
endif;
?>