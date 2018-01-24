<?php get_header(); ?>
<section id="page" class="blog-page">

		<?php do_action('foundationPress_before_content'); ?>

		<?php while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header class="blog-header">
					<div class="row">
						<div class="small-centered medium-8 medium-centered columns">
							<span class="fade-in-up"><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">&#8592;&nbsp;Back to Blog</a></span><?php FoundationPress_entry_meta(); ?>
							<h1 class="entry-title fade-in-up"><?php the_title(); ?></h1>
						</div>
					</div>
				</header>
				<?php do_action('foundationPress_post_before_entry_content'); ?>
				<?php if ( has_post_thumbnail() ): ?>
					<div class="row featured-image fade-in-down">
						<div class="column">
							<?php the_post_thumbnail('', array('class' => 'th')); ?>
						</div>
					</div>
				<?php endif; ?>
				<div class="row fade-in-up">
					<div class="entry-content small-centered medium-8 medium-centered columns">
						<?php the_content(); ?>
					</div>
					<footer>
						<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
						<p><?php the_tags(); ?></p>
					</footer>
 					<?php do_action('foundationPress_post_before_comments'); ?>
					<?#php comments_template(); #?>
					<?php do_action('foundationPress_post_after_comments'); ?>
				</div>
			</article>
		<?php endwhile;?>

		<?php do_action('foundationPress_after_content'); ?>

</section>
<?php get_footer(); ?>