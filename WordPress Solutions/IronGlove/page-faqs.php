<?php
get_header(); ?>

<section class="content-adjustment">
    <div class="text-center">
        <h3 class="pre-title pomegranate"><?php _e( 'Frequently asked questions', 'ironglove' ); ?></h3>
    </div>
</section>
<article>
    <?php
        $faq_args = array('pagename' => 'faqs');
    ?>
    <?php $faq = new WP_Query( $faq_args ); ?>
    <?php if ( $faq->have_posts() ) : ?>
        <?php while ( $faq->have_posts() ) : $faq->the_post(); ?>
            <div class="content-block blog-1 pad0 pad-bottom30">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-md-offset-1 faq-body">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'ironglove' ); ?></p>
    <?php endif; ?>
</article>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>