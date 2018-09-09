<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-config" content="browserconfig.xml"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Private integrated web developer and small business consultant in Oregon.">
        <meta name="author" content="IronGlove Studio">
        <!-- Site Identity -->
        <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.png"/>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
	<![endif]-->
        <!-- Bootstrap Core -->
        <!-- Pinegrow Bootstrap Blocks Library -->
        <!-- Custom Styles -->
        <!-- Open Graph -->
        <meta property="og:url" content="//ironglove.studio"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Focus on what you do best."/>
        <meta property="og:site_name" content="IronGlove Studio"/>
        <meta property="og:description" content="Private integrated web developer and small business consultant in Oregon."/>
        <meta property="og:image" content="//ironglove.studio/images/ironglove/nature-milky-way-stars-space-131174.jpeg"/>
        <meta property="fb:admins" content="ironglovestudio"/>
        <meta property="og:locale" content="en_US"/>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body data-spy="scroll" data-target="#ironglove-nav" class="<?php echo implode(' ', get_body_class()); ?>">
            <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
            <?php if(is_admin_bar_showing()) echo '<div style="min-height: 32px;"></div>'; ?>
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#ironglove-nav">
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'ironglove' ); ?></span>
                            <i class="far fa-bars mob-menu"></i>
                        </button>
                        <a class="navbar-brand" href="//ironglove.studio"><span class="igstudio"><?php _e( 'IronGlove Studio', 'ironglove' ); ?></span></a>
                    </div>
                    <div class="collapse navbar-collapse" id="ironglove-nav">
                        <ul class="nav navbar-nav">
                            <li class="active"></li>
                        </ul>
                        <?php wp_nav_menu( array(
                            	'menu' => 'primary',
                            	'menu_class' => 'nav navbar-nav navbar-right',
                            	'menu_id' => 'primary',
                            	'container' => '',
                            	'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            	'walker' => new wp_bootstrap_navwalker()
                        ) ); ?>
                        <!-- Navbar Nav -->
                    </div>
                    <!-- navbar collapse -->
                </div>
                <!-- container -->
        </nav>
        <!-- nav section -->
        <main class="nav-adjustment">