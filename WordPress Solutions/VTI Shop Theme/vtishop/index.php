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
            <div class="col-xs-12 col-sm-12 col-md-9" id="main">
                <article>
                    <?php the_content(); ?>
                </article>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>