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
<section id="storemain-body">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-10" id="main">
                <article>
                    <div class="">
                        <?php woocommerce_content() ?>
                    </div>
                </article>
            </div>
            <?php if ( is_active_sidebar( 'Primary' ) ) : ?>
                <div class="col-md-2 col-sm-2" id="sidebar">
                    <?php dynamic_sidebar( 'Primary' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>            

<?php get_footer(); ?>