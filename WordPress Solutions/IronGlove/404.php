<?php
get_header(); ?>

<section>
    <div class="content-offset">
        <h1 class="blog-title"><?php _e( 'The IronGlove Studio Blog', 'ironglove' ); ?></h1>
        <hr class="hr-title">
        <h2 class="blog-subtitle concrete"><?php _e( 'Big topics for your small business', 'ironglove' ); ?></h2>
    </div>
</section>
<section class="error-section">
    <div class="container error-container">
        <h1 class="error-header"><?php _e( 'Page Not Found', 'ironglove' ); ?></h1>
        <p class="error-msg"><?php _e( 'Sorry, but the page you were trying to view does not exist.', 'ironglove' ); ?></p>
        <a class="btn btn-warning error-home" href="../blog/" role="button"><?php _e( 'Home', 'ironglove' ); ?></a>
    </div>
</section>            

<?php get_footer(); ?>