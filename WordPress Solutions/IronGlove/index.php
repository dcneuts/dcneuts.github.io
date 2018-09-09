<?php
get_header(); ?>

<section>
    <div class="content-offset-main">
        <h1 class="blog-title"><?php _e( 'The IronGlove Studio Blog', 'ironglove' ); ?></h1>
        <hr class="hr-title-alt">
        <h2 class="blog-subtitle concrete"><?php _e( 'Big topics for your small business', 'ironglove' ); ?></h2>
    </div>
</section>
<section id="blog-home" data-src="/blog/wp-content/themes/ironglove/images/ironglove/blog-quote-bg.jpg" data-parallax>
    <div class="container">
        <div class="jumbotron parallax-overlay margin-bottom0">
            <h3 class="blog-quote"><?php _e( '&quot;Success is not an accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing...&quot;', 'ironglove' ); ?></h3>
            <h4 class="quote-attribution"><?php _e( '~ Pelé', 'ironglove' ); ?></h4>
        </div>
    </div>
</section>
<div class="content-block blog-1">
    <div class="container text-center">
        <?php
            	$paged = ( get_query_var( 'paged') ) ? get_query_var( 'paged') : 1;
            $blogmain_args = array(
            	'post_type' => 'post',
            	'post_status' => 'publish',
            	'posts_per_page' => '5',
            	'paged' => $paged,
            	'order' => 'DESC',
            	'orderby' => 'date'
            )
        ?>
        <?php $blogmain = new WP_Query( $blogmain_args ); ?>
        <?php if ( $blogmain->have_posts() ) : ?>
            <?php $blogmain_item_number = 0; ?>
            <?php while ( $blogmain->have_posts() && $blogmain_item_number++ < 1 ) : $blogmain->the_post(); ?>
                <div class="col-sm-12">
                    <div class="post" id="large-blog-stack">
                        <h2 class="blog-post-title col-xs-12 col-sm-12 col-md-10 col-md-offset-1"><a href="<?php echo esc_url( get_permalink() ); ?>" class="pomegranate"><?php the_title(); ?></a></h2>
                        <p class="small text-muted text-uppercase margin-top5 col-xs-12 margin-bottom30 blog-meta"><?php _e( 'POSTED BY', 'ironglove' ); ?> <span class="ig-links link-meta"><?php the_author(); ?></span> <?php _e( 'IN', 'ironglove' ); ?> <a href="#" class="ig-links link-meta"><?php blocks_the_category() ?></a><br><?php _e( 'ON', 'ironglove' ); ?> <span class="ig-links link-meta"><?php the_date(); ?></span></p>
                        <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'front-banner', array(
                                	'class' => 'img-responsive large-blog-banner'
                                ) );
                                }
                             ?> </a>
                        <p class="blog-post-excerpt"><?php the_excerpt( ); ?></p>
                        <div class="">
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-warning read-button"><?php _e( 'Read', 'ironglove' ); ?></a>
                        </div>
                    </div>
                    <hr>
                    <div class="post">
                        <div class="row">
                            <?php if ( $blogmain->have_posts() ) : ?>
                                <?php $blogmain_item_number = 0; ?>
                                <?php while ( $blogmain->have_posts() ) : $blogmain->the_post(); ?>
                                    <div id="small-blog-stack" <?php post_class( 'text-center col-sm-6' ); ?>>
                                        <h2 class="blog-post-title-block"><a href="<?php echo esc_url( get_permalink() ); ?>" class="pomegranate margin-bottom30"><?php the_title(); ?></a></h2>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'small-banner', array(
                                                	'class' => 'img-responsive small-blog-banner margin-bottom20'
                                                ) );
                                                }
                                             ?> </a>
                                        <p class="small text-muted text-uppercase margin-top5 blog-meta"><?php _e( 'POSTED BY', 'ironglove' ); ?> <span class="ig-links link-meta"><?php the_author(); ?></span> <?php _e( 'IN', 'ironglove' ); ?> <?php blocks_the_category() ?><br><?php _e( 'ON', 'ironglove' ); ?> <span class="ig-links link-meta"><?php echo get_the_time( get_option( 'date_format' ) ) ?></span></p>
                                        <p class="blog-post-excerpt-block"><?php the_excerpt( ); ?></p>
                                        <div class="">
                                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-sm btn-warning read-button read-button-sm"><?php _e( 'Read', 'ironglove' ); ?></a>
                                        </div>
                                    </div>
                                    <?php $blogmain_item_number++; ?>
                                    <?php if( $blogmain_item_number % 2 == 0 ) echo '<div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>'; ?>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'ironglove' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <hr>
                    <?php wp_bootstrap_pagination( array(
                        	'custom_query' => $blogmain,
                        	'previous_string' => '<span class="fa fa-angle-double-left"></span>',
                        	'next_string' => '<span class="fa fa-angle-double-right"></span>'
                    ) ); ?>
                </div>
                <?php if( $blogmain_item_number % 1 == 0 ) echo '<div class="clearfix visible-sm-block visible-md-block visible-lg-block"></div>'; ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'ironglove' ); ?></p>
        <?php endif; ?>
        <!-- /.col-sm-10 -->
    </div>
    <!-- /.container -->
</div>            

<?php get_footer(); ?>