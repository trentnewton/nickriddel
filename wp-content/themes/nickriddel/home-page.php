<?php
/*
Template Name: Home Page
*/
get_header(); ?>
  <?php
  $page_path = 'about'; //the path of the page you're checking to see if it's published
  $page_data = get_page_by_path($page_path);
  if($page_data->post_status == 'publish'){ ?>
  <section id="about">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="fade-in-down"><?php _e( 'About', 'nickriddel' ); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns fade-in-up">
         <?php show_post('about');  // Shows the content of the "About" page. ?>
        </div>
      </div>
  </section>
  <?php }else{} ?>
  <?php
  $page_path = 'video'; //the path of the page you're checking to see if it's published
  $page_data = get_page_by_path($page_path);
  if($page_data->post_status == 'publish'){ ?>
  <section id="video">
    <div class="row">
      <div class="small-12 columns">
        <div class="flex-video fade-in-left">
          <?php remove_filter ('the_content', 'wpautop'); ?>
          <?php show_post('video');  // Shows the content of the "Video" page. ?>
        </div>
      </div>
    </div>
  </section>
  <?php }else{} ?>
  <?php
  $page_path = 'product'; //the path of the page you're checking to see if it's published
  $page_data = get_page_by_path($page_path);
  if($page_data->post_status == 'publish'){ ?>
  <section id="album">
    <!-- Birds by Nicholas Guest http://guestandguest.com/blog/posts/css-bird-flying -->
    <div class="birds">
      <div id="bird1" class="birds-load">
        <div class="bird">
          <div class="head"></div>
          <div class="body"></div>
          <div class="wing-l"></div>
          <div class="wing-r"></div>
        </div>
      </div>
      <div id="bird2" class="birds-load">
        <div class="bird">
          <div class="head"></div>
          <div class="body"></div>
          <div class="wing-l"></div>
          <div class="wing-r"></div>
        </div>
      </div>
    </div>
      <?php show_post('product'); ?>
  </section>
  <?php }else{} ?>
  <?php
  $page_path = 'contact'; //the path of the page you're checking to see if it's published
  $page_data = get_page_by_path($page_path);
  if($page_data->post_status == 'publish'){ ?>
  <section id="contact">
    <div id="clouds">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="fade-in-down"><?php _e( 'Contact', 'nickriddel' ); ?></h2>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <?php show_post('contact');  // Shows the content of the "Contact" page. ?>
        </div>
      </div>
    </div>
  </section>
  <?php }else{} ?>
<?php get_footer(); ?>