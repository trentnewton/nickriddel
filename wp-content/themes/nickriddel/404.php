<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title><?php
	global $page, $paged;
	wp_title( '&#45;', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " &#45; $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo '&#45;' . sprintf( __( 'Page %s', 'nickriddel' ), max( $paged, $page ) );
	?></title>
		<meta name="application-name" content="<?php bloginfo( 'name' ); ?>">
      	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114.png">
    	<meta name="msapplication-TileColor" content="#746659">
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72.png">
	   	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		<meta name="description" content="<?php echo ot_get_option( 'site_description' ); ?>" />
	    <meta name="keywords" content="" />
	    <meta name="author" content="<?php bloginfo( 'name' ); ?>" />   
	    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/link_img.jpg" />
	    <meta property="og:description" content="<?php echo ot_get_option( 'site_description' ); ?>" />         
	    <meta name="twitter:card" content="summary" />
	    <meta name="twitter:title" content="<?php
	global $page, $paged;
	wp_title( '&#45;', true, 'right' );
		bloginfo( 'name' );
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " &#45; $site_description";
		if ( $paged >= 2 || $page >= 2 )
			echo '&#45;' . sprintf( __( 'Page %s', 'nickriddel' ), max( $paged, $page ) );
	?>" />
	    <meta name="twitter:description" content="<?php echo ot_get_option( 'site_description' ); ?>" />
	    <meta name="twitter:image" content="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/link_img.jpg" />
	    <link rel="image_src" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/link_img.jpg" />
		<?php wp_head(); ?>
	</head>
	<body>
		<section id="page404">
			<div class="content">
				<div class="row">
					<div class="small-12 columns">
						<h1 class="entry-title"><?php _e('404', 'nickriddel'); ?></h1>
					</div>
				</div>
				<div class="row">
					<div class="small-12 columns">
						<h2><?php _e('Nothing here&hellip;', 'nickriddel'); ?></h2>
						<p>Go&nbsp;<a href="javascript:history.back()">back</a>&nbsp;or<br><?php printf(__('return to the <a href="%s">home page</a>', 'nickriddel'), home_url()); ?></p>
					</div>
				</div>
			</div>
		</section>
		<?php wp_footer(); ?>
	</body>
</html>
