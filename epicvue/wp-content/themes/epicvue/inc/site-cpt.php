<?php 
  //Put your CPT Here 
  function register_location_post_type()
  {
    /**
     * Post Type: Location.
     */
    $labels = array(
        "name" => __("Locations", "epicvue"),
        "singular_name" => __("Location", "epicvue"),
    );
    $args = array(
        "label" => __("Locations", "epicvue"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "has_archive" => false,
        "show_in_menu" => true,
        'menu_icon' => 'dashicons-admin-site',
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        'rewrite' => array('slug' => 'locations', 'with_front' => false),
        "query_var" => true,
        'supports' => array( 'title', 'editor', 'custom-fields', 'post-thumbnails' )
    );
    register_post_type("location", $args);
  }
  add_action('init', 'register_location_post_type');

 ?>