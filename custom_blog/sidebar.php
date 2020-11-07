<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
            <!-- <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div> -->
                <div class="mb-3 mx-auto tm-site-logo">
                <?php
                        if( has_custom_logo()){
                            the_custom_logo();
                        }else{
                           ?>
                                <a href="<?php echo home_url('/')?>"><i class="fas fa-times fa-2x"></i></a>     
                           <?php 
                        }
                    ?>
                </div>            
                <h1 class="text-center"><?php bloginfo('name');?></h1>
            </div>
            
            
            <?php 
            if(has_nav_menu( 'primary' )) {
                wp_nav_menu( [ 

                    'container'       => 'nav',
                    'container_class' => 'tm-nav',
                    'container_id'    => 'tm-nav',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'item_spacing'    => 'preserve',
                    'depth'           => 0,
                    'walker'          => '',
                    'theme_location'  => 'primary',
                
                
                ] );
            }
                
                
                ?>

            <!-- <nav class="tm-nav" id="tm-nav">     
                    <ul>
                        <li class="tm-nav-item active"><a href="index.html" class="tm-nav-link">
                            <i class="fas fa-home"></i>
                            Blog Home
                        </a></li>
                        <li class="tm-nav-item"><a href="post.html" class="tm-nav-link">
                            <i class="fas fa-pen"></i>
                            Single Post
                        </a></li>
                        <li class="tm-nav-item"><a href="about.html" class="tm-nav-link">
                            <i class="fas fa-users"></i>
                            About Xtra
                        </a></li>
                        <li class="tm-nav-item"><a href="contact.html" class="tm-nav-link">
                            <i class="far fa-comments"></i>
                            Contact Us
                        </a></li>
                    </ul>
                </nav> -->
            <div class="tm-mb-65">
                <?php
                    if( get_theme_mod('cb_facebook_handle') ){
                        ?>
                            <a rel="nofollow" href="<?php echo get_theme_mod('cb_facebook_handle'); ?>" class="tm-social-link">
                            <i class="fab fa-facebook tm-social-icon"></i></a>  
                        <?php
                    }
                    if( get_theme_mod('cb_twitter_handle') ){
                        ?>
                            <a href="<?php echo get_theme_mod('cb_twitter_handle'); ?>" class="tm-social-link">
                                <i class="fab fa-twitter tm-social-icon"></i>
                            </a>
                        <?php
                    }
                    if( get_theme_mod('cb_instagram_handle') ){
                        ?>
                            <a href="<?php echo get_theme_mod('cb_instagram_handle'); ?>" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i></a>
                        <?php
                    }
                    if( get_theme_mod('cb_linkdin_handle') ){
                        ?>
                            <a href="<?php echo get_theme_mod('cb_linkdin_handle'); ?>" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i></a>
                        <?php
                    }
                ?>
                
            </div>
            <p class="tm-mb-80 pr-5 text-white">
               <?php
                    if( get_theme_mod('cb_description_handle') ){
                        ?>
                            <?php echo get_theme_mod('cb_description_handle'); ?>
                        <?php
                    }
               ?>
            </p>
            <?php
                if( is_active_sidebar('cb_sidebar') ){
                   
                    dynamic_sidebar('cb_sidebar');
                }
            ?>
        </div>
        
    </header>