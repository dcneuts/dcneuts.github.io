<?php
get_header(); ?>

<section>
    <div class="jumbotron jumbo-adjust shop-banner">
        <div class="container site-header">
            <h1><?php _e( 'Visual Thinking E-Store', 'vtishop' ); ?></h1>
            <h3><?php _e( 'Let the Workplace Speak', 'vtishop' ); ?></h3>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="col-sm-12 margin-bottom30 margin-top30">
            <h2 class="about-header-bio text-center"><?php _e( 'Need help finding something?', 'vtishop' ); ?></h2>
            <p class="about-text-bio text-center"><?php _e( 'You ended up here due to an error... something you were looking for on this site doesn\'t exist, or perhaps it used to.&nbsp; We\'ve made some major changes recently to our entire site, so it\'s quite possible a link changed or the resource has been replaced.', 'vtishop' ); ?></p>
            <p class="about-text-bio text-center"><?php _e( 'Try your luck again and see if you spelled the link correctly, or go through the site and check if the filer, folder, or menu option is still here.&nbsp; Check out our menu, it\'s changed, too.', 'vtishop' ); ?></p>
            <p class="about-text-bio text-center"><?php _e( 'If you\'re still stuck, then contact us.&nbsp; We\'d be happy to help.', 'vtishop' ); ?></p>
            <div class="text-center">
                <a href="//www.visualworkplace.com/contact.php" target="_blank">
                    <button type="button" class="btn btn-danger">
                        <?php _e( 'Contact Us', 'vtishop' ); ?>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>            

<?php get_footer(); ?>