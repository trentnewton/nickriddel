  </main>
  <footer>
    <div class="inside-footer row">
      <div class="column">
        <p class="copyright">
        	&copy;&nbsp;<span class="year"><?php echo date("Y"); ?></span>&nbsp;<?php bloginfo( 'name' ); ?><span class="divider"></span><a href="<?php echo home_url(); ?>/cart">Cart</a><span class="divider"></span><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">Blog</a>
        </p>
      </div>
    </div>
  </footer>
	<?php wp_footer(); ?>
</body>
</html>