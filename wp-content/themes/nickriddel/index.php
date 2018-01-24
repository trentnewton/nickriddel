<?php get_header(); ?>
<section id="page">
	<div class="row">
		<aside class="medium-3 columns">
			<h1 class="fade-in-up">Blog</h1>
		</aside>
		<div class="blog-listings medium-9 columns" role="main">
			<h4 class="blog-latest fade-in-down">Latest Posts</h4>

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'parts/content', get_post_format() );

				endwhile;

			else :

				get_template_part( 'template-parts/post/content', 'none' );

			endif;
			?>



		<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
			</nav>
		<?php } ?>

		<?php do_action('foundationPress_after_content'); ?>

		</div>

	</div>
</section>
<?php get_footer(); ?>
