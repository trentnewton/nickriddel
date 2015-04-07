<?php
/**
 * Initialize the options before anything else.
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'main_settings',
        'title'       => __( 'Main Settings', 'nickriddel' ),
      )
    ),
    'settings'        => array(
	array(
        'id'          => 'site_description',
        'label'       => __( 'Site Description', 'nickriddel' ),
        'desc'        => __( 'Give the website a description', 'nickriddel' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'social_links',
        'label'       => __( 'Social Links', 'nickriddel' ),
        'desc'        => __( 'Display your social links', 'nickriddel' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'twitter_handle',
        'label'       => __( 'Twitter Handle', 'nickriddel' ),
        'desc'        => __( 'Enter your Twitter handle', 'nickriddel' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'facebook_url',
        'label'       => __( 'Facebook URL', 'nickriddel' ),
        'desc'        => __( 'Enter your Facebook URL', 'nickriddel' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'linkedin_url',
        'label'       => __( 'LinkedIn URL', 'nickriddel' ),
        'desc'        => __( 'Enter your LinkedIn URL', 'nickriddel' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'soundcloud_url',
        'label'       => __( 'Soundcloud URL', 'nickriddel' ),
        'desc'        => __( 'Enter your Soundcloud URL', 'nickriddel' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'instagram_name',
        'label'       => __( 'Instagram Name', 'nickriddel' ),
        'desc'        => __( 'Enter your Instagram Name', 'nickriddel' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
		array(
        'id'          => 'rss_feed',
        'label'       => __( 'RSS Feed', 'nickriddel' ),
        'desc'        => __( 'Display the RSS Feed of this website', 'nickriddel' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}