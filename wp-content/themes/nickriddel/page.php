<?php get_header(); ?>
<section id="page">
<div class="row">
	<div class="column">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h2 class="entry-title fade-in-down"><?php the_title(); ?></h2>
			</header>
			<?php do_action('foundationPress_page_before_entry_content'); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
</div>
</section>
<?php get_footer(); ?>
