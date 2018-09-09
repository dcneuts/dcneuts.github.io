<?php
get_header(); ?>

<section>
    <div class="container">
        <div class="content-offset">
            <h2 class="blog-title"><?php _e( 'The IronGlove Studio Blog', 'ironglove' ); ?></h2>
            <hr class="hr-title">
            <h3 class="blog-subtitle concrete"><?php _e( 'Big topics for your small business', 'ironglove' ); ?></h3>
        </div>
    </div>
</section>
<article>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div <?php post_class( 'content-block blog-1 pad0' ); ?> id="post-<?php the_ID(); ?>">
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'front-banner', array(
                    	'class' => 'img-responsive single-post-image'
                    ) );
                    }
                 ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 margin-top25">
                            <div class="post" id="large-blog-header">
                                <h1 class="post-title col-xs-12"> <a href="<?php echo esc_url( get_permalink() ); ?>" class="pomegranate"><?php the_title(); ?></a> </h1>
                                <p class="small text-muted text-uppercase margin-top5 col-xs-12 post-title-meta"> <?php _e( 'POSTED BY', 'ironglove' ); ?> <span class="ig-links"><?php the_author(); ?></span> <?php _e( 'IN', 'ironglove' ); ?> <a href="#" class="ig-links"><?php blocks_the_category() ?></a><br> <?php _e( 'ON', 'ironglove' ); ?> <span class="ig-links"><?php the_date(); ?></span> </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" id="single-layered">
                            <div class="post" id="large-blog-body">
                                <p class="blog-content col-xs-12"><?php the_content(); ?></p>
                            </div>
                        </div>
                        <!-- /.col-sm-10 -->
                    </div>
                    <!-- /.container -->
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'ironglove' ); ?></p>
    <?php endif; ?>
</article>
<section>
    <div class="container">
        <div class="row">
            <hr/>
            <div class="col-xs-12 text-center">
                <p class="margin-bottom0 publish-notice pomegranate"><?php _e( 'Published By:', 'ironglove' ); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="author-info">
                <div class="col-sm-2 col-sm-offset-2 author-avatar img-responsive img-rounded">
                    <?php echo get_avatar( 'derek@ironglove.studio', '150' ); ?>
                </div>
                <div class="col-xs-12 col-sm-6 author-flex">
                    <p class="author-name"><?php the_author(); ?></p>
                    <p class="author-desc"><?php the_author_meta( 'description' ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="single-navigation">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-xs-12">
                <p class="more-posts pomegranate text-center"><?php _e( 'More POSTS:', 'ironglove' ); ?></p>
            </div>
            <div class="col-xs-12">
                <?php echo do_shortcode("[post_grid id='32']"); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="/blog/index.php" class="btn btn-sm btn-dark"><?php _e( 'Blog Home', 'ironglove' ); ?></a>
            </div>
        </div>
    </div>
</section>
<?php wp_reset_postdata(); ?>
<section class="ig-comments">
    <div class="container">
        <?php comments_template( '/comments.php' ); ?>
    </div>
</section>            

<?php get_footer(); ?>