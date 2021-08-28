<?php get_header(); ?>
<?php if(have_posts()): the_post() ?>
        <div class="container sitecontainer single-wrapper bgw">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">                                
                    <div class="widget">
                        <div class="large-widget m30">
                            <div class="post clearfix">
                                <div class="title-area">
                                    <?php $category_list = get_the_category_list('|') ?>
                                    <?php if($category_list): ?>
                                    <div class="colorfulcats">
                                        <a href="#"><span class="label label-primary"><?php echo $category_list; ?></span></a>
                                    </div>
                                <?php endif ?>
                                    <h3><?php the_title(); ?></h3>
                                    
                                    <?php megalaptop_post_meta(); ?>                                    
<!--                                     <div class="large-post-meta">
                                        <span><i class="fa fa-clock-o"></i> 21 March 2016</span>
                                        <small class="hidden-xs">&#124;</small>
                                        <span class="hidden-xs"><i class="fa fa-comments-o"></i> 92</span>
                                        <small class="hidden-xs">&#124;</small>
                                        <span class="hidden-xs"><i class="fa fa-eye"></i> 1223</span>
                                    </div> --><!-- end meta -->

                                </div><!-- /.pull-right -->

                                <div class="post-media">
                                   <?php if(has_post_thumbnail() && ! post_password_required()): ?>
                                   <?php the_post_thumbnail() ?>
                                   <?php else: ?>
                                    <h2>NO Image Found!</h2>
                                <?php endif ?>
                                </div>
                            </div><!-- end post -->

                            <div class="post-desc">
                                <p><?php the_content(); ?></p>
                            
                                
                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="https://www.facebook.com/darazpk?spm=<?php echo the_permalink() ?>&scm=1003.4.icms-zebra-5029545-2833168.OTHER_5370750444_2485565" target="_blank" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end post-desc -->

                            
                            <div class="authorbox">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="post clearfix">
                                            <div class="avatar-author">
                                                <a href="author.html">
                                                    <?php echo get_avatar(get_the_author_meta('user_email'), 80,''); ?>
                                                </a>
                                            </div>
                                            <div class="author-title desc">
                                                <a href="single.html"><?php the_author_meta('display_name'); ?></a>
                                                <a class="authorlink" href="<?php the_author_meta('url') ?>"><?php the_author_meta('url'); ?></a>
                                                <p><?php the_author_meta('description'); ?></p>
                                                <ul class="list-inline authorsocial">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>end col
                                  </div>end row
                            </div> <!--  end authorbo -->

                            <div class="row m22 related-posts">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-title">
                                            <h4>You May Also Like </h4>
                                            <hr>
                                        </div><!-- end widget-title -->
                                            <?php
                                                $tags = wp_get_post_tags(get_the_ID());
                                                $tags_id = [];
                                                foreach($tags as $tag){
                                                    $tag_ids = $tag->term_id;
                                                }
                                                $args = [
                                                    'tag__in' => $tag_ids,
                                                    'post__not_in' => [get_the_ID()],
                                                    'post_per_page' => 5
                                                ];
                                                $related = new WP_Query($args);
                                            ?>
                                            <?php
                                                if ($related->have_posts() ): while($related->have_posts() ): $related->the_post()
                                            ?>
                                        <div class="review-posts row m30">
                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">
                                                    <?php
                                                        if(has_post_thumbnail() && ! post_password_required()):
                                                    ?>
                                                <?php the_post_thumbnail(); ?>
                                                <?php else: ?>
                                                    <h2>No Imge Found!</h2>
                                                <?php endif ?>
                                                    <div class="magnifier">    
                                                    </div><!-- end magnifier -->
                                                </div><!-- end media -->
                                                <div class="post-title">
                                                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                                </div><!-- end post-title -->
                                            </div><!-- end post-review -->
                                        </div><!-- end review-post -->
                                    <?php endwhile ?>
                                     <?php wp_reset_query();  ?>
                                    <?php endif ?>
                                    </div><!-- end widget -->   
                                </div><!-- end col -->
                            </div><!-- end row -->
                                <?php comments_template(); ?>
                            <!-- end row -->

                            <!-- end row -->

                        </div><!-- end large-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <!-- end col -->
                <?php get_sidebar(); ?>
            </div><!-- end row -->
        </div>
        <!-- end container -->
<?php endif ?>
<?php get_footer(); ?>