<?php
    if(post_password_required()){
        return;
    }
?>
<div>
    <h2 class="tm-color-primary tm-post-title">Comments</h2>
    <hr class="tm-hr-primary tm-mb-45">
    <?php
        foreach( $comments as $comment ){
            ?>
            <div class="tm-comment tm-mb-45">
                <figure class="tm-comment-figure">
                    <?php echo get_avatar($comment, 60, '', '',['class'=>'mb-2 rounded-circle img-thumbnail'] )?>
                    
                    <figcaption class="tm-color-primary text-center"><?php comment_author() ?></figcaption>
                </figure>
                <div>
                    <p>
                        <?php comment_text() ?>
                    </p>
                    <div class="d-flex justify-content-between">
                        <!-- <a href="#" class="tm-color-primary">REPLY</a> -->
                        <span class="tm-color-primary"><?php comment_date() ?></span>
                    </div>                                                 
                </div>                                
            </div>
            <?php
        }
        the_comments_pagination();
    ?>
    
    
    <?php
        comment_form([
            'fields'        =>  ['author'=>'
                                                <div class="mb-4">
                                                    <input class="form-control" name="author" type="text">
                                                </div>',
            'email'         =>  '<div class="mb-4">
                                    <input class="form-control" name="email" type="text">
                                </div>'],
            'comment_field' =>  '<div class="mb-4">
                                    <textarea class="form-control" name="message" rows="6"></textarea>
                                </div>',
            'class_form'         =>  'mb-5 tm-comment-form',
            'submit_button'      =>     '<div class="text-right">
                                            <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>                        
                                        </div> ',
            'title_reply'          =>   'Your comment',
            'title_reply_before'    =>  '<h2 class="tm-color-primary tm-post-title mb-4">',
            'title_reply_after'     =>  '</h2>'
        ]);
    ?>
    <!-- <form action="" class="mb-5 tm-comment-form">
        
        
        
                                       
    </form>                           -->
</div>