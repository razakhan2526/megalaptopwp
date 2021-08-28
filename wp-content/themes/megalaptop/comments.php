<?php if(post_password_required()): ?>
<?php return; ?>
<?php endif ?>
<?php if(comments_open()): ?>
<div id="comments" class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-title">
                <h4>What other's say about : How ThePhone thriller..</h4>
                <hr>
            </div><!-- end widget-title -->
            
            <div class="comments">
                <?php foreach($comments as $comment): ?>
                <div class="well">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                              <img class="media-object img-circle" src="<?php echo get_avatar_url($comment); ?>" alt="<?php comment_author() ?>">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php comment_author() ?></h4>
                            <div class="time-comment clearfix">
                                <small class="pull-left"><?php comment_date() ?></small>
                            </div><!-- end time-comment -->
                            <p><?php comment_text() ?></p>
                        </div>
                    </div><!-- end media -->

                    <!-- end media -->

                    <!-- end media -->
                </div><!-- end well -->
            <?php endforeach ?>
            </div><!-- end collapse -->
        </div><!-- end widget -->   
    </div><!-- end col -->
</div>
<?php endif ?>
<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-title">
                <h4>Leave a Comment</h4>
                <hr>
            </div><!-- end widget-title -->

           <div class="commentform">
                <form action="<?php echo site_url('wp-comments-post.php') ?>" method="post" id="commentform" class="row">
                    <input type="hidden" name="comment_post_ID" id="comment_post_ID"b value="<?php echo $post->ID ?>">
                    <div class="col-md-12 col-sm-12">
                        <label>Comment <span class="required">*</span></label>
                        <textarea class="form-control" name="comment" placeholder=""></textarea>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label>Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="author" placeholder="">
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <label>Email <span class="required">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="">
                    </div>

                    <div class="col-md-4 col-sm-12">
                        <label>Website</label>
                        <input type="text" class="form-control" name="url" placeholder="">
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <input type="submit" value="Send Comment" class="btn btn-primary" />
                    </div>
                </form>
            </div><!-- end newsletter -->
        </div><!-- end widget -->   
    </div><!-- end col -->
</div>