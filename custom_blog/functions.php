<?php

// setup

define('cb_DEV_MODE',true);

//include
include( get_theme_file_path( '/includes/front/enqueue.php' ) );
include( get_theme_file_path('/includes/widgets.php'));
include( get_theme_file_path('/includes/setup.php'));
include( get_theme_file_path('/includes/custom-nav-walker.php'));
include( get_theme_file_path( '/includes/theme-customizer.php' ) );


//hooks
add_action('wp_enqueue_scripts', 'cb_enqueue_scripts');
add_action('widgets_init','cb_widgets');
add_action( 'after_setup_theme', 'cb_setup_theme' );
add_action( 'customize_register', 'cb_customize_register' );

//shortcode



//filters
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="mb-2 tm-btn tm-btn-primary tm-prev-next"';
}

function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'tm-nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function add_menu_ul_class($atts, $item, $args)
{   
    //var_dump($item -> url);
    // if($item['url']){
    //   print_r($item['url']);
    // }
    //print_r($item['url']);
    global $wp;
    $home_url = home_url( $wp->request );
    if($home_url.'/' == $item->url){
      $atts['class'] = 'tm-nav-item active';
      // print('true ');
      // print('$home_url    ');
      // print('$item->url    ');
    }else{
      // print('false ');
      // print($home_url ."     ");
      // print($item->url."     ");

      $atts['class'] = 'tm-nav-item';
    }
    
    return $atts;
}
add_filter('nav_menu_css_class', 'add_menu_ul_class', 1, 3);