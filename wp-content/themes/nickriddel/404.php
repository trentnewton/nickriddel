<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="application-name" content="<?php bloginfo( 'name' ); ?>">
        <meta name="msapplication-TileColor" content="#7f6d60">
        <meta name="theme-color" content="#7f6d60">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body>
		<section id="page404">
			<div class="content">
				<div class="row">
					<div class="column">
						<h1 class="entry-title"><?php _e('404', 'nickriddel'); ?></h1>
					</div>
				</div>
				<div class="row">
					<div class="column">
						<h2><?php _e('Nothing here&hellip;', 'nickriddel'); ?></h2>
						<p>Go&nbsp;<a href="javascript:history.back()">back</a>&nbsp;or<br><?php printf(__('return to the <a href="%s">home page</a>', 'nickriddel'), home_url()); ?></p>
					</div>
				</div>
			</div>
		</section>
		<?php wp_footer(); ?>
	</body>
</html>
