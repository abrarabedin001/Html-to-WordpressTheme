<?php

function cb_enqueue_scripts(){
    $uri        =   get_theme_file_uri();
    $ver        =   cb_DEV_MODE ? time() : false;
    
    //register
    wp_register_style( 'cb_font_awesome', $uri . '/assets/fontawesome/css/all.min.css', [], $ver );
    wp_register_style( 'cb_google_fonts', $uri . 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap', [], $ver );
    wp_register_style( 'cb_bootstrap', $uri . '/assets/css/bootstrap.min.css', [], $ver );
    wp_register_style( 'cb_custom_css', $uri . '/assets/css/templatemo-xtra-blog.css', [], $ver );


    wp_register_script( 'cb_jquery', $uri . '/assets/js/jquery.min.js', [], $ver , true);
    wp_register_script( 'cb_custom_script', $uri . '/assets/js/templatemo-script.js', [], $ver , true);
    //enqueue
    wp_enqueue_style( 'cb_font_awesome' );
    wp_enqueue_style( 'cb_google_fonts' );
    wp_enqueue_style( 'cb_bootstrap' );
    wp_enqueue_style( 'cb_custom_css' );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'cb_custom_script' );


};