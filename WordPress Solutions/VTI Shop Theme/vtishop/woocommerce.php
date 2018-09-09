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
		    <?php
		    $url = 'https://' . $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'];
		    if(strpos($url, 'product-category') !== false) {
			    echo "<div class=\"col-sm-12 col-md-9 archive-adjust\" id=\"archive\">";
		    } else {
			    echo "<div class=\"col-sm-12 col-md-9\" id=\"main\">";
		    }
		    ?>
                <article>
                    <div class="">
                        <?php woocommerce_content() ?>
                    </div>
                </article>
            </div>
            <?php if ( is_active_sidebar( 'Primary' ) ) : ?>
	            <aside class="sidebar-aside">
	                <div class="sidebar-container">
		                <?php
		                $url = 'https://' . $_SERVER["SERVER_NAME"] . $_SERVER['REQUEST_URI'];
		                if(strpos($url, 'product-category') !== false) {
			                echo "<div class=\"col-xs-10 col-sm-10 col-sm-offset-1 col-md-3 col-md-offset-0 archive-sidebar-adjust\" id=\"sidebar\">";
		                } else {
			                echo "<div class=\"col-xs-10 col-sm-10 col-sm-offset-1 col-md-3 col-md-offset-0\" id=\"sidebar\">";
		                }
		                ?>
		                    <?php dynamic_sidebar( 'Primary' ); ?>
		                </div>
	                </div>
	            </aside>
            <?php endif; ?>
        </div>
    </div>
</div>            

<?php get_footer(); ?>