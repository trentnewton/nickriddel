<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
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
