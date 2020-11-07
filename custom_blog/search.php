<?php get_header();?>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <?php 
                    // get_template_part('includes/partials/search-template')
                    ?>
                    <?php get_search_form(); ?>
                </div>                
            </div>            
            <div class="row tm-row">
                <?php
                    if( have_posts() ){
                        while(have_posts()){
                            the_post();
                            ?>
                                
                                <article class="col-12 col-md-6 tm-post">
                                    <hr class="tm-hr-primary">
                                    <a href="<?php the_permalink()?>" class="effect-lily tm-post-link tm-pt-60">
                                        <div class="tm-post-link-inner">
                                            <?php if(has_post_thumbnail()){
                                                the_post_thumbnail(['418','334']);
                                            }?>
                                                                        
                                        </div>
                                        <!-- <span class="position-absolute tm-new-badge">New</span> -->
                                        <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php the_title(); ?></h2>
                                    </a>                    
                                    <p class="tm-pt-30">
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <div class="d-flex justify-content-between tm-pt-45">
                                        <span class="tm-color-primary"><?php the_category('.')?></span>
                                        <span class="tm-color-primary"><?php echo get_the_date()?></span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span><?php comments_number()?> comments</span>
                                        <span>by <?php the_author(); ?></span>
                                    </div>
                                </article>
                            <?php
                        }
                        
                        
                    }
                ?>
                
                
            </div>
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <?php previous_posts_link()?>
                    <?php next_posts_link()?>

                    <!-- <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a> -->
                </div>
                <div class="tm-paging-wrapper">
                    <!-- <span class="d-inline-block mr-3">Page</span> -->
                    <!--  -->
                    <nav class="tm-paging-nav d-inline-block">
                        <?php the_posts_pagination(['prev_text'=>'','next_text'=>''])?>
                        <!-- <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul> -->
                    </nav>
                </div>                
            </div> 
<?php get_footer(); ?>