<?php

function cb_setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menu('primary','this is the primary menu for this theme');
}