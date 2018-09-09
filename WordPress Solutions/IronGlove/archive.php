<?php
get_header(); ?>

<section>
    <div class="content-offset">
        <h1 class="blog-title"><?php _e( 'The IronGlove Studio Blog', 'ironglove' ); ?></h1>
        <hr class="hr-title-alt">
        <h2 class="blog-subtitle concrete"><?php _e( 'Big topics for your small business', 'ironglove' ); ?></h2>
    </div>
    <div class="text-center">
        <h3 class="pre-title pomegranate"><?php _e( 'Viewing:', 'ironglove' ); ?> <span class="cat-title"><?php echo single_cat_title(); ?></span></h3>
    </div>
</section>
<article>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div <?php post_class( 'content-block blog-1 pad0 pad-bottom30' ); ?> id="post-<?php the_ID(); ?>">
                <div class="container text-center">
                    <div class="row">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'front-banner', array(
                            	'class' => 'img-responsive single-post-image img-rounded'
                            ) );
                            }
                         ?>
                        <div class="col-xs-12 margin-top25">
                            <div class="post" id="large-blog-header">
                                <h2 class="post-title col-xs-12"> <a href="<?php echo esc_url( get_permalink() ); ?>" class="pomegranate"><?php the_title(); ?></a></h2>
                                <p class="small text-muted text-uppercase margin-top5 col-xs-12 margin-bottom30 single-meta" id="archive-meta-title"> <?php _e( 'POSTED BY', 'ironglove' ); ?> <span class="ig-links"><?php the_author(); ?></span> <?php _e( 'IN', 'ironglove' ); ?> <a href="#" class="ig-links"><?php blocks_the_category() ?></a><br> <?php _e( 'ON', 'ironglove' ); ?> <span class="ig-links"><?php echo get_the_time( get_option( 'date_format' ) ) ?></span> </p>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="post" id="large-blog-body">
                                        <p class="blog-content"><?php echo wp_trim_words(get_the_content(), 70, '&nbsp;&#40;<i>more...</i>&#41;'); ?></p>
                                        <div class="margin-bottom30" id="archive-btn">
                                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-warning read-button"><?php _e( 'Read', 'ironglove' ); ?></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-sm-12 -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container -->
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'ironglove' ); ?></p>
    <?php endif; ?>
</article>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>