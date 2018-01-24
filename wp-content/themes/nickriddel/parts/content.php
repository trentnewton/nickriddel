<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="blog-header-index">
		<?php FoundationPress_entry_meta(); ?>
		<h2 class="fade-in-up blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</header>
</article>
