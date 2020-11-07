<?php



function cb_widgets(){
    register_sidebar([
        'name'          =>  __( 'My First Theme Sidebar', 'custom_blog' ),
        'id'            =>  'cb_sidebar',
        'description'   =>  __( 'Sidebar for the theme Custom Blog', 'custom_blog' ),
        'before_widget' =>  '<div id="%1$s" class="widget cleafix %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4>',
        'after_title'   =>  '</h4>'
    ]);
}