<?php

if (!function_exists('FoundationPress_theme_support')) :
function FoundationPress_theme_support() {
    // Add language support
    load_theme_textdomain('FoundationPress', get_template_directory() . '/languages');

    // Add menu support
    add_theme_support('menus');

    // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(150, 150, false);

    // rss thingy
    add_theme_support('automatic-feed-links');

    // Add post formarts support: http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
}

function show_post($path) {
    $post = get_page_by_path($path);
    $content = apply_filters('the_content', $post->post_content);
    echo $content;
}

function show_title($path) {
    $page  = get_page_by_title($path);
    $title = get_the_title($page);
    echo $title;
}



add_theme_support( 'woocommerce' );

add_action('after_setup_theme', 'FoundationPress_theme_support'); 
endif;
?>