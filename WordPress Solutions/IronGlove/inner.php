<?php
get_header(); ?>

<section>
    <div class="content-offset">
        <h1 class="blog-title"><?php _e( 'The IronGlove Studio Blog', 'ironglove' ); ?></h1>
        <hr class="hr-title-alt">
        <h2 class="blog-subtitle concrete"><?php _e( 'Big topics for your small business', 'ironglove' ); ?></h2>
    </div>
</section>
<section class="small-blog-alignment text-center">
    <div class="container">
        <div class="post">
            <div class="row">
                <?php
                    	$paged = ( get_query_var( 'paged') ) ? get_query_var( 'paged') : 1;
                    $blogmain_args = array(
                    	'post_type' => 'post',
                    	'post_status' => 'publish',
                    	'posts_per_page' => '6',
                    	'paged' => $paged,
                    	'ignore_sticky_posts' => true,
                    	'order' => 'DESC',
                    	'orderby' => 'date'
                    )
                ?>
                <?php $blogmain = new WP_Query( $blogmain_args ); ?>
                <?php if ( $blogmain->have_posts() ) : ?>
                    <?php $blogmain_item_number = 0; ?>
                    <?php while ( $blogmain->have_posts() ) : $blogmain->the_post(); ?>
                        <div class="col-sm-6" id="small-blog-stack">
                            <h2 class="blog-post-title-block margin-bottom30"> <a href="<?php echo esc_url( get_permalink() ); ?>" class="pomegranate"><?php the_title(); ?></a></h2>
                            <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'small-banner', array(
                                    	'class' => 'img-responsive small-blog-banner margin-bottom20'
                                    ) );
                                    }
                                 ?> </a>
                            <p class="small text-muted text-uppercase margin-top5 blog-meta"><?php _e( 'POSTED BY', 'ironglove' ); ?> <span class="ig-links link-meta"><?php the_author(); ?></span> <?php _e( 'IN', 'ironglove' ); ?> <?php blocks_the_category() ?><br><?php _e( 'ON', 'ironglove' ); ?> <span class="ig-links link-meta"><?php echo get_the_time( get_option( 'date_format' ) ) ?></span> </p>
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
    </div>
</section>
<hr>
<section class="inner-nav-spacer text-center">
    <div class="container">
        <?php wp_bootstrap_pagination( array(
            	'custom_query' => $blogmain,
            	'previous_string' => '<span class="fa fa-angle-double-left"></span>',
            	'next_string' => '<span class="fa fa-angle-double-right"></span>'
        ) ); ?>
    </div>
</section>            

<?php get_footer(); ?>