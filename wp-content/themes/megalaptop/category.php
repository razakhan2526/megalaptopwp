<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<section class="section bgg">
            <div class="container">    
                <div class="title-area">
                    <h2>
                        <?php printf( __('Category Archive For %s', 'megalaptop'), single_cat_title( '', false) ); ?>
                    </h2>
                    <?php if ( category_description() ) : ?>
                        <?php echo '<small class="hidden-xs">' . category_description() . '</small>'; ?>
                    <?php endif ?>
                </div><!-- /.pull-right -->
            </div><!-- end container -->
        </section>

        <div class="container sitecontainer bgw">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12 m22 single-aost">
                    <div class="widget">
                        <div class="large-widget m30">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
                                <?php get_template_part( 'content', get_post_format() ) ?>
                            <?php endwhile ?>
                            <?php else: ?>
                            <?php get_template_part( 'content', 'none') ?>
                        <?php endif ?>
                        </div><!-- end large-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
          <?php get_sidebar(); ?>
            </div><!-- end row -->
        </div>
    <?php endif ?>
        <!-- end container -->
        <?php get_footer(); ?>