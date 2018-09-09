
        </main>
        <footer>
            <section class="content-block-nopad footer-wrap-1-3 bg-black">
                <div class="container footer-1-3 pad45">
                    <div class="col-md-3 text-center">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ironglove/ironglove.png" class="brand-img img-responsive center-block footer-logo-adjust" id="logo-footer">
                        <ul class="social social-light socsec-spacer">
                            <li id="linkedin-icon">
                                <a href="//www.linkedin.com/company/ironglove/"><span class="fa-layers fa-fw svc-animate"> <i class="fas fa-square fa-3x soc-spacer" data-fa-transform="shrink-2"></i> <i class="fab fa-linkedin fa-3x li-blue soc-spacer"></i></span></a>
                            </li>
                            <li id="facebook-icon">
                                <a href="//www.facebook.com/ironglovestudio"><span class="fa-layers fa-fw svc-animate"> <i class="fas fa-square fa-3x" data-fa-transform="shrink-2"></i> <i class="fab fa-facebook fa-3x fb-blue"></i></span></a>
                            </li>
                        </ul>
                        <!-- /.social -->
                    </div>
                    <div class="col-md-4 col-md-offset-1 mailchimp">
                        <!-- Begin MailChimp Signup Form -->
                        <div id="mc_embed_signup">
                            <form action="//eepurl.com/dt8M1v" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <label for="mce-EMAIL">
                                        <?php _e( 'Sign up to get the latest news!', 'ironglove' ); ?>
                                    </label>
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                        <label>
                                            <input type="text" name="b_6c717d17cee85e619c22f3dff_b41f1be012" tabindex="-1" value="">
                                        </label>
                                    </div>
                                    <div class="clear">
                                        <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button mc-submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End mc_embed_signup-->
                    </div>
                    <div class="col-xs-12 col-md-3 ig-address">
                        <p class="address-bold-line ironglove-tag"><?php _e( 'IronGlove Studio, LLC', 'ironglove' ); ?></p>
                        <p class="address small address-footer"><?php _e( '2870 NE Hogan Road #539', 'ironglove' ); ?><br> <?php _e( 'Gresham, Oregon', 'ironglove' ); ?></p>
                        <p class="phone-number-footer"><a href="tel:+15035014645" style="color: white;"><?php _e( '(503) 501-4645', 'ironglove' ); ?></a></p>
                    </div>
                    <div class="col-xs-12 footer-text">
                        <p class="copyright-notice"><?php _e( 'Copyright © 2018 IronGlove Studio, LLC. All Rights Reserved.', 'ironglove' ); ?></p>
                    </div>
                </div>
                <!-- /.container -->
            </section>
        </footer>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <?php wp_footer(); ?>
    </body>
