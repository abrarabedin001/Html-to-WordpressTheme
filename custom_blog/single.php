<?php get_header();?>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <?php get_search_form(); ?>
                </div>                
            </div>  
            <?php
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        ?>
                                <div class="row tm-row">
                                    <div class="col-12">
                                        <hr class="tm-hr-primary tm-mb-55">
                                        <?php the_post_thumbnail('large'); ?>
                                    </div>
                                </div>
                                <div class="row tm-row">
                                    <div class="col-lg-8 tm-post-col">
                                        <div class="tm-post-full">                    
                                            <div class="mb-4">
                                                <h2 class="pt-2 tm-color-primary tm-post-title"><?php the_title() ?> </h2>
                                                <p class="tm-mb-40"><?php echo get_the_date()?> posted by <?php the_author()?></p>
                                                <?php 
                                                the_content() ?>
                                                <span class="d-block text-right tm-color-primary"><?php the_category('.')?></span>
                                            </div>
                                            
                                            <!-- Comments -->
                                            <?php
                                                if( comments_open() || get_comments_number() ){
                                                    comments_template();
                                                }
                                            ?> 
                                        </div>
                                    </div>
                                    <aside class="col-lg-4 tm-aside-col">
                                        <div class="tm-post-sidebar">
                                        
                                            <hr class="mb-3 tm-hr-primary">
                                            <?php wp_list_categories() ?>
                                            <!-- <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2>
                                            
                                            <ul class="tm-mb-75 pl-5 tm-category-list">
                                                
                                                <li><a href="#" class="tm-color-primary">Visual Designs</a></li>
                                                <li><a href="#" class="tm-color-primary">Travel Events</a></li>
                                                <li><a href="#" class="tm-color-primary">Web Development</a></li>
                                                <li><a href="#" class="tm-color-primary">Video and Audio</a></li>
                                                <li><a href="#" class="tm-color-primary">Etiam auctor ac arcu</a></li>
                                                <li><a href="#" class="tm-color-primary">Sed im justo diam</a></li>
                                            </ul> -->
                                            <?php
                                        if(is_page()){

                                        }else{
                                            ?>
                                                <hr class="mb-3 tm-hr-primary">
                                                <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
                                                <?php
                                                    $catagories                 =   get_the_category();
                                                    $rp_query                   =   new WP_Query(
                                                        [
                                                            'posts_per_page'    =>  '2',
                                                            'post__not_in'      =>  [$post->ID],
                                                            'cat'               =>  !empty($categories) ? $catagories[0]->term_id : null
                                                            
                                                        ]
                                                    );
                                                    if($rp_query->have_posts()){
                                                        while($rp_query->have_posts()){
                                                            $rp_query->the_post();
                                                            ?>
                                                            <a href="<?php the_permalink(); ?>" class="d-block tm-mb-40">
                                                                <figure>
                                                                    <?php the_post_thumbnail('',['class'=>'mb-3 img-fluid'])?>
                                                                    
                                                                    <figcaption class="tm-color-primary"><?php the_title() ?></figcaption>
                                                                </figure>
                                                            </a>
                                                            <?php
                                                        }
                                                    }
                                                    wp_reset_postdata(); /// brings it back to the original post

                                                ?>
                                            <?php
                                        }
                                    ?>
                                        </div>                    
                                    </aside>
                                </div>
                            <?php
                        }
                }
                
            
            ?>          
            
            
<?php get_footer(); ?>