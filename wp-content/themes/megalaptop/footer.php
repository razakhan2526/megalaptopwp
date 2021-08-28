        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Site Links</h4>
                                <hr>
                            </div>
                            <!-- end widget-title -->

                            <div class="links-widget m30">
                                <ul class="check">
                                    <li><a href="#">Homepage</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Our Vision</a></li>
                                    <li><a href="#">Webmaster</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- end links -->
                        </div>
                        <!-- end widget -->
                    </div>
                    <!-- end col -->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Latest Laptop</h4>
                                <hr>
                            </div>
                            <!-- end widget-title -->

                            <div class="links-widget m30">
                                <ul class="check">
                                    <li><a href="#">HP Notebook 15-ac192ne</a></li>
                                    <li><a href="#">HP Notebook 15-ac192ne</a></li>
                                    <li><a href="#">HP Notebook 15-ac192ne</a></li>
                                    <li><a href="#">HP Notebook 15-ac192ne</a></li>
                                    <li><a href="#">HP Notebook 15-ac192ne</a></li>
                                    <li><a href="#">HP Notebook 15-ac192ne</a></li>
                                    <li><a href="#">HP Notebook 15-ac192ne</a></li>
                                    
                                </ul>
                            </div>
                            <!-- end links -->
                        </div>
                        <!-- end widget -->
                    </div>
                    <!-- end col -->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Social Profiles</h4>
                                <hr>
                            </div>
                            <!-- end widget-title -->

                            <div class="links-widget m30">
                                <ul class="sociallinks">
                                    <?php if (ot_get_option('facebook')): ?>
                                        <li><a target="_blank" href="<?php echo ot_get_option('facebook'); ?>"><i class="fa fa-facebook"></i> Facebook</a></li>
                                    <?php endif ?>
                                    <?php if (ot_get_option('twitter')): ?>
                                        <li><a target="_blank" href="<?php echo ot_get_option('twitter'); ?>"><i class="fa fa-twitter"></i> Twitter</a></li>
                                    <?php endif ?>
                                    <?php if (ot_get_option('linked_in')): ?>
                                        <li><a target="_blank" href="<?php echo ot_get_option('linkedin'); ?>"><i class="fa fa-linkedin"></i> LinkedIn</a></li>
                                    <?php endif ?>
                                    <?php if (ot_get_option('youtube')): ?>
                                        <li><a target="_blank" href="<?php echo ot_get_option('youtube'); ?>"><i class="fa fa-youtube"></i> YouTube</a></li>
                                    <?php endif ?>

                                </ul>
                            </div>
                            <!-- end links -->
                        </div>
                        <!-- end widget -->
                    </div>
                    <!-- end col -->

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Subscribe & Newsletter</h4>
                                <hr>
                            </div>
                            <!-- end widget-title -->

                            <div class="newsletter-widget m30">
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <form class="form-inline" method="post" role="form">
                                    <div class="input-group form-group">
                                        <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                    </div>
                                    <input type="submit" value="Subscribe" class="btn btn-primary" />
                                </form>

                                <hr>
                                <h3>
                                    <span>12.441 Members</span>
                                </h3>

                            </div>
                            <!-- end mini-widget -->
                        </div>
                        <!-- end widget -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- end footer -->

        <div id="sitefooter-wrap">
            <div id="sitefooter" class="container">
                <div id="copyright" class="row">
                    <div class="col-md-6 col-sm-12 text-left">
                       <?php echo ot_get_option('copyrights'); ?>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <ul class="list-inline text-right">
                            <li><a class="topbutton" href="#">Back to top <i class="fa fa-angle-up"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- end wrapper -->
    <!-- END SITE -->
<?php wp_footer() ?>
   <!--  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/plugins.js"></script> -->
    <!-- FlexSlider JavaScript
    ================================================== -->
   <!--  <script src="assets/js/jquery.flexslider.js"></script> -->
    <script>
        (function($) {
        $(window).load(function() {
            $('#property-slider .flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 6000,
                animationSpeed: 1300,
                directionNav: true,
                controlNav: false,
                keyboardNav: true
            });
        });
    })(jQuery);
    </script>

<?php echo ot_get_option('google_analytics'); ?>
</body>
</html>