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
    	<meta name="msapplication-TileColor" content="#7f6d60">
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
	<body <?php body_class(); ?>>
		<?php if (is_front_page()) { ?>
        <div id="loading">
	      <div class="loading-icon">
	        <div class="rect rect1"></div>
	        <div class="rect rect2"></div>
	        <div class="rect rect3"></div>
	      </div>
	    </div>
	    <div class="content">
		    <header id="intro">
		      <div class="row">
		        <div class="small-12 columns">
		            <svg title="<?php bloginfo( 'name' ); ?>" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 366.2 36.5" style="enable-background:new 0 0 366.2 36.5;" xml:space="preserve">
		              <g>
		                <g>
		                  <path class="st0" d="M0.2,0.9h4.2l21.1,30.4h0.1V0.9h3.2v34.7h-4.2L3.5,5.2H3.4v30.4H0.2V0.9z"/>
		                  <path class="st0" d="M45.8,0.9H49v34.7h-3.2V0.9z"/>
		                  <path class="st0" d="M94.6,30.1C92.9,32.4,91,34,88.8,35c-2.2,1-4.6,1.5-7.1,1.5c-2.6,0-5.1-0.4-7.3-1.3c-2.2-0.9-4.1-2.2-5.7-3.8
		                    c-1.6-1.6-2.8-3.5-3.7-5.8c-0.9-2.2-1.3-4.7-1.3-7.3s0.4-5.1,1.3-7.3c0.9-2.2,2.1-4.1,3.7-5.8c1.6-1.6,3.5-2.9,5.7-3.8
		                    C76.6,0.5,79,0,81.7,0c2.4,0,4.5,0.4,6.6,1.2c2,0.8,3.8,2.2,5.4,4.2L91,7.6c-1.1-1.6-2.5-2.8-4.1-3.6c-1.7-0.8-3.4-1.1-5.2-1.1
		                    c-2.3,0-4.3,0.4-6.1,1.2S72.2,6,71,7.4s-2.3,3-2.9,4.9s-1,3.9-1,6c0,2.2,0.3,4.2,1,6c0.7,1.9,1.7,3.5,2.9,4.9
		                    c1.3,1.4,2.8,2.4,4.6,3.2c1.8,0.8,3.8,1.2,6.1,1.2c0.9,0,1.8-0.1,2.7-0.3c0.9-0.2,1.9-0.5,2.8-1s1.8-1,2.6-1.7
		                    c0.8-0.7,1.5-1.5,2.2-2.4L94.6,30.1z"/>
		                  <path class="st0" d="M108,0.9h3.2v15.3h0.3l16.8-15.3h4.5l-17.5,15.9l18.5,18.8h-4.7l-17.6-17.9h-0.3v17.9H108V0.9z"/>
		                  <path class="st0" d="M165.7,0.9h9.1c0.5,0,1.1,0,1.9,0c0.8,0,1.6,0.1,2.5,0.3c0.9,0.2,1.8,0.4,2.8,0.8c0.9,0.4,1.8,0.9,2.5,1.6
		                    c0.8,0.7,1.4,1.6,1.9,2.6c0.5,1,0.7,2.3,0.7,3.8c0,1.7-0.3,3-0.9,4.1c-0.6,1.1-1.3,2-2.2,2.6c-0.9,0.7-1.8,1.2-2.9,1.5
		                    c-1,0.3-2,0.6-3,0.7l10.1,16.7h-3.7l-9.8-16.5h-6v16.5h-3.2V0.9z M168.9,16.2h6.9c1.7,0,3.1-0.2,4.1-0.6c1.1-0.4,1.9-0.9,2.5-1.6
		                    c0.6-0.6,1-1.3,1.2-2c0.2-0.7,0.3-1.4,0.3-2s-0.1-1.2-0.3-2c-0.2-0.7-0.6-1.4-1.2-2c-0.6-0.6-1.4-1.1-2.5-1.6
		                    c-1.1-0.4-2.4-0.6-4.1-0.6h-6.9V16.2z"/>
		                  <path class="st0" d="M202.2,0.9h3.2v34.7h-3.2V0.9z"/>
		                  <path class="st0" d="M222,0.9h10.7c3,0,5.6,0.4,7.6,1.1c2.1,0.7,3.8,1.7,5.2,2.8c1.4,1.1,2.5,2.4,3.3,3.8c0.8,1.4,1.4,2.7,1.8,4
		                    c0.4,1.3,0.6,2.4,0.7,3.5c0.1,1,0.1,1.8,0.1,2.2c0,0.4,0,1.2-0.1,2.2s-0.3,2.2-0.7,3.5c-0.4,1.3-1,2.6-1.8,4
		                    c-0.8,1.4-1.9,2.7-3.3,3.8c-1.4,1.1-3.1,2.1-5.2,2.8c-2.1,0.7-4.6,1.1-7.6,1.1H222V0.9z M225.3,32.6h6.7c2.3,0,4.4-0.3,6.4-0.9
		                    c2-0.6,3.7-1.4,5.2-2.6c1.5-1.2,2.6-2.7,3.5-4.5c0.8-1.8,1.3-4,1.3-6.4c0-2.5-0.4-4.6-1.3-6.4c-0.8-1.8-2-3.3-3.5-4.5
		                    c-1.5-1.2-3.2-2-5.2-2.6c-2-0.6-4.1-0.9-6.4-0.9h-6.7V32.6z"/>
		                  <path class="st0" d="M265.8,0.9h10.7c3,0,5.6,0.4,7.6,1.1c2.1,0.7,3.8,1.7,5.2,2.8c1.4,1.1,2.5,2.4,3.3,3.8c0.8,1.4,1.4,2.7,1.8,4
		                    c0.4,1.3,0.6,2.4,0.7,3.5c0.1,1,0.1,1.8,0.1,2.2c0,0.4,0,1.2-0.1,2.2s-0.3,2.2-0.7,3.5c-0.4,1.3-1,2.6-1.8,4
		                    c-0.8,1.4-1.9,2.7-3.3,3.8c-1.4,1.1-3.1,2.1-5.2,2.8c-2.1,0.7-4.6,1.1-7.6,1.1h-10.7V0.9z M269.1,32.6h6.7c2.3,0,4.4-0.3,6.4-0.9
		                    c2-0.6,3.7-1.4,5.2-2.6c1.5-1.2,2.6-2.7,3.5-4.5c0.8-1.8,1.3-4,1.3-6.4c0-2.5-0.4-4.6-1.3-6.4c-0.8-1.8-2-3.3-3.5-4.5
		                    c-1.5-1.2-3.2-2-5.2-2.6c-2-0.6-4.1-0.9-6.4-0.9h-6.7V32.6z"/>
		                  <path class="st0" d="M310.1,0.9h21.2v2.9h-18v12.3h16.9v2.9h-16.9v13.5h18.8v2.9h-22V0.9z"/>
		                  <path class="st0" d="M346.6,0.9h3.2v31.8H366v2.9h-19.4V0.9z"/>
		                </g>
		              </g>
		            </svg>
		        </div>
		      </div>
		      <div class="scroll">
		        <span class="scroll-flash loop slow icon-down_caret"></span>
		      </div>
		    </header>
	        <?php } else { ?>
	        <header id="main">
	        	<div class="row">
	        		<div class="small-12 columns">
	        			<a href="<?php echo home_url(); ?>/" class="hover-logo" title="<?php bloginfo( 'name' ); ?>">
				        	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 366.2 36.5" style="enable-background:new 0 0 366.2 36.5;" xml:space="preserve">
				              <g>
				                <g>
				                  <path class="st0" d="M0.2,0.9h4.2l21.1,30.4h0.1V0.9h3.2v34.7h-4.2L3.5,5.2H3.4v30.4H0.2V0.9z"/>
				                  <path class="st0" d="M45.8,0.9H49v34.7h-3.2V0.9z"/>
				                  <path class="st0" d="M94.6,30.1C92.9,32.4,91,34,88.8,35c-2.2,1-4.6,1.5-7.1,1.5c-2.6,0-5.1-0.4-7.3-1.3c-2.2-0.9-4.1-2.2-5.7-3.8
				                    c-1.6-1.6-2.8-3.5-3.7-5.8c-0.9-2.2-1.3-4.7-1.3-7.3s0.4-5.1,1.3-7.3c0.9-2.2,2.1-4.1,3.7-5.8c1.6-1.6,3.5-2.9,5.7-3.8
				                    C76.6,0.5,79,0,81.7,0c2.4,0,4.5,0.4,6.6,1.2c2,0.8,3.8,2.2,5.4,4.2L91,7.6c-1.1-1.6-2.5-2.8-4.1-3.6c-1.7-0.8-3.4-1.1-5.2-1.1
				                    c-2.3,0-4.3,0.4-6.1,1.2S72.2,6,71,7.4s-2.3,3-2.9,4.9s-1,3.9-1,6c0,2.2,0.3,4.2,1,6c0.7,1.9,1.7,3.5,2.9,4.9
				                    c1.3,1.4,2.8,2.4,4.6,3.2c1.8,0.8,3.8,1.2,6.1,1.2c0.9,0,1.8-0.1,2.7-0.3c0.9-0.2,1.9-0.5,2.8-1s1.8-1,2.6-1.7
				                    c0.8-0.7,1.5-1.5,2.2-2.4L94.6,30.1z"/>
				                  <path class="st0" d="M108,0.9h3.2v15.3h0.3l16.8-15.3h4.5l-17.5,15.9l18.5,18.8h-4.7l-17.6-17.9h-0.3v17.9H108V0.9z"/>
				                  <path class="st0" d="M165.7,0.9h9.1c0.5,0,1.1,0,1.9,0c0.8,0,1.6,0.1,2.5,0.3c0.9,0.2,1.8,0.4,2.8,0.8c0.9,0.4,1.8,0.9,2.5,1.6
				                    c0.8,0.7,1.4,1.6,1.9,2.6c0.5,1,0.7,2.3,0.7,3.8c0,1.7-0.3,3-0.9,4.1c-0.6,1.1-1.3,2-2.2,2.6c-0.9,0.7-1.8,1.2-2.9,1.5
				                    c-1,0.3-2,0.6-3,0.7l10.1,16.7h-3.7l-9.8-16.5h-6v16.5h-3.2V0.9z M168.9,16.2h6.9c1.7,0,3.1-0.2,4.1-0.6c1.1-0.4,1.9-0.9,2.5-1.6
				                    c0.6-0.6,1-1.3,1.2-2c0.2-0.7,0.3-1.4,0.3-2s-0.1-1.2-0.3-2c-0.2-0.7-0.6-1.4-1.2-2c-0.6-0.6-1.4-1.1-2.5-1.6
				                    c-1.1-0.4-2.4-0.6-4.1-0.6h-6.9V16.2z"/>
				                  <path class="st0" d="M202.2,0.9h3.2v34.7h-3.2V0.9z"/>
				                  <path class="st0" d="M222,0.9h10.7c3,0,5.6,0.4,7.6,1.1c2.1,0.7,3.8,1.7,5.2,2.8c1.4,1.1,2.5,2.4,3.3,3.8c0.8,1.4,1.4,2.7,1.8,4
				                    c0.4,1.3,0.6,2.4,0.7,3.5c0.1,1,0.1,1.8,0.1,2.2c0,0.4,0,1.2-0.1,2.2s-0.3,2.2-0.7,3.5c-0.4,1.3-1,2.6-1.8,4
				                    c-0.8,1.4-1.9,2.7-3.3,3.8c-1.4,1.1-3.1,2.1-5.2,2.8c-2.1,0.7-4.6,1.1-7.6,1.1H222V0.9z M225.3,32.6h6.7c2.3,0,4.4-0.3,6.4-0.9
				                    c2-0.6,3.7-1.4,5.2-2.6c1.5-1.2,2.6-2.7,3.5-4.5c0.8-1.8,1.3-4,1.3-6.4c0-2.5-0.4-4.6-1.3-6.4c-0.8-1.8-2-3.3-3.5-4.5
				                    c-1.5-1.2-3.2-2-5.2-2.6c-2-0.6-4.1-0.9-6.4-0.9h-6.7V32.6z"/>
				                  <path class="st0" d="M265.8,0.9h10.7c3,0,5.6,0.4,7.6,1.1c2.1,0.7,3.8,1.7,5.2,2.8c1.4,1.1,2.5,2.4,3.3,3.8c0.8,1.4,1.4,2.7,1.8,4
				                    c0.4,1.3,0.6,2.4,0.7,3.5c0.1,1,0.1,1.8,0.1,2.2c0,0.4,0,1.2-0.1,2.2s-0.3,2.2-0.7,3.5c-0.4,1.3-1,2.6-1.8,4
				                    c-0.8,1.4-1.9,2.7-3.3,3.8c-1.4,1.1-3.1,2.1-5.2,2.8c-2.1,0.7-4.6,1.1-7.6,1.1h-10.7V0.9z M269.1,32.6h6.7c2.3,0,4.4-0.3,6.4-0.9
				                    c2-0.6,3.7-1.4,5.2-2.6c1.5-1.2,2.6-2.7,3.5-4.5c0.8-1.8,1.3-4,1.3-6.4c0-2.5-0.4-4.6-1.3-6.4c-0.8-1.8-2-3.3-3.5-4.5
				                    c-1.5-1.2-3.2-2-5.2-2.6c-2-0.6-4.1-0.9-6.4-0.9h-6.7V32.6z"/>
				                  <path class="st0" d="M310.1,0.9h21.2v2.9h-18v12.3h16.9v2.9h-16.9v13.5h18.8v2.9h-22V0.9z"/>
				                  <path class="st0" d="M346.6,0.9h3.2v31.8H366v2.9h-19.4V0.9z"/>
				                </g>
				              </g>
				        	</svg>
				        </a>
	        		</div>
	        	</div>
	        </header>
	        <?php } ?>