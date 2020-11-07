<?php

function cb_customize_register($wp_customize){
    //settings
        $wp_customize->add_setting('cb_facebook_handle',[
            'default' => '',
        ]);
        $wp_customize->add_setting('cb_twitter_handle',[
            'default' => '',
        ]);
        $wp_customize->add_setting('cb_instagram_handle',[
            'default' => '',
        ]);
        $wp_customize->add_setting('cb_linkdin_handle',[
            'default' => '',
        ]);
        $wp_customize->add_setting('cb_description_handle',[
            'default' => '',
        ]);

    //section
    $wp_customize->add_section( 'cb_social_section', array(
        'title' => __( 'Sidebar extras' ),
        'description' => __( 'Add social media link  and site description here' ),
        'panel' => '', // Not typically needed.
        'priority' => 30,
        
    ) );

    //controls
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cb_facebook_handle', array(
        'label'          => __( 'Facebook Link', 'udemy' ),
        'section'        => 'cb_social_section',
        'settings'       => 'cb_facebook_handle',
        
        ) ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cb_twitter_handle', array(
        'label'          => __( 'Twitter Link', 'udemy' ),
        'section'        => 'cb_social_section',
        'settings'       => 'cb_twitter_handle',
        
        ) ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cb_instagram_handle', array(
        'label'          => __( 'Instragram Link', 'udemy' ),
        'section'        => 'cb_social_section',
        'settings'       => 'cb_instagram_handle',
        
        ) ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cb_linkdin_handle', array(
        'label'          => __( 'Linkdin Link', 'udemy' ),
        'section'        => 'cb_social_section',
        'settings'       => 'cb_linkdin_handle',
        
        ) ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cb_description_handle', array(
        'label'          => __( 'desciption', 'udemy' ),
        'section'        => 'cb_social_section',
        'settings'       => 'cb_description_handle',
        
        ) ));

}