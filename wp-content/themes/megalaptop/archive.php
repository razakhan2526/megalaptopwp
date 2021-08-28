<?php get_header(); ?>
<section class="section bgg">
            <div class="container">    
                <div class="title-area">
                  <?php
                    if(is_day()){
                    	printf(__('<h2> Daily Archive for %s </h2>','megalaptop'),get_the_date());
                    }elseif(is_month()){
                    	printf(__('<h2> Monthly Archive for %s </h2>','megalaptop'),get_the_date(_x('F Y', 'Monthly Archive Date format','megalaptop')));
                    }elseif (is_year()) {
                    	printf(__('<h2> Yearly Archive for %s </h2>','megalaptop'),get_the_date(_x('Y','Yearly Archive Date format','megalaptop')));
                    }else{
                    	_e('Archive','megalaptop');
                    }

                 ?>
                </div><!-- /.pull-right -->
            </div><!-- end container -->
</section>
<div class="container sitecontainer bgw">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 m22 single-post">
                    <div class="widget">
                        <div class="large-widget m30">
                            <div class="post-desc">
                                <?php if(have_posts()): while(have_posts()): the_post() ?>
                                	<?php get_template_part('content',get_post_format()) ?>
                                <?php endwhile ?>
                                <?php else: ?>
                                	<?php get_template_part('content','none') ?>
                                <?php endif ?>
                            </div><!-- end post-desc -->
                        </div><!-- end large-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

					<!-- end col -->
					<?php get_sidebar(); ?>
            </div><!-- end row -->
        </div>
        <!-- end container -->
<?php get_footer(); ?>