<?php
/*
Template Name: Home Page
*/
get_header(); ?>
  <section id="about">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="fade-in-down">About</h2>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns fade-in-up">
         <?php show_post('about');  // Shows the content of the "About" page. ?>
        </div>
      </div>
  </section>
  <section id="video">
    <div class="row">
      <div class="small-12 columns">
        <div class="flex-video">
          <?php remove_filter ('the_content', 'wpautop'); ?>
          <?php show_post('video');  // Shows the content of the "Video" page. ?>
        </div>
      </div>
    </div>
  </section>
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
  <section id="contact">
    <div id="clouds">
      <div class="row">
        <div class="small-12 columns">
          <h2 class="fade-in-down">Contact</h2>
        </div>
      </div>
      <div class="row">
        <div class="small-12 columns">
          <?php show_post('contact');  // Shows the content of the "Contact" page. ?>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>