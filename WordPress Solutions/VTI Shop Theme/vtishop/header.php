<!doctype html>
<html style="height:100%;" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="sitemap" type="application/xml" title="Sitemap" href="<?php echo esc_url( get_template_directory_uri() ); ?>/sitemap.xml">
        <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ios/apple-touch-icon-iphone-60x60.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ios/apple-touch-icon-ipad-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ios/apple-touch-icon-iphone-retina-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ios/apple-touch-icon-ipad-retina-152x152.png">
        <meta name="author" content="Derek Neuts">
        <!-- Open Graph -->
        <meta property="og:url" content="//shop.visualworkplace.com"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Courses, books and services for a Visual Workplace."/>
        <meta property="og:site_name" content="Visual Thinking Inc"/>
        <meta property="og:description" content="Visuality is a language. On its most effective level, the visual workplace allows you and your company to see how you think—and where the gaps are. Visual partners closely with lean by embedding improvement gains into the physical workplace."/>
        <meta property="og:image" content="//visualworkplace.com/images/og/vti-og-main.jpg"/>
        <meta property="fb:admins" content="2026505800923958"/>
        <meta property="og:locale" content="en_US"/>
        <!-- Twitter Card Data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:image" content="//visualworkplace.com/images/og/vti-og-main.jpg">
        <meta name="twitter:site" content="@ggalsworth">
        <meta name="twitter:title" content="Courses, books and services for a Visual Workplace.">
        <meta name="twitter:description" content="Visuality is a language. On its most effective level, the visual workplace allows you and your company to see how you think—and where the gaps are.">
        <meta name="twitter:creator" content="@ggalsworth">
        <!-- Site Identity -->
        <link rel="shortcut icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.png"/>
        <!-- Core CSS -->
        <!-- Style Library -->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top navbar-seo" role="navigation">
                <div class="container-fluid secondary-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle mobmenu-bg navbar-btn-seo" data-toggle="collapse" data-target="#secondary-bar">
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'vtishop' ); ?></span>
                            <span><i class="fas fa-bars fa-2x"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="secondary-bar" data-target="#secondary-bar">
                        <ul class="nav navbar-nav fa-ul">
                            <li class="navbar-color call-us-adjustment">
                                <a href="tel:+15032331784" class="call-us"> <?php _e( '&lpar;503&rpar; 233-1784', 'vtishop' ); ?></a>
                            </li>
                            <li class="email-us-adjustment">
                                <!--suppress HtmlUnknownTarget -->
                                <a class="email-us" href="#" rel="nofollow" onclick="this
						.href='mailto:' + 'contact' + '@' + 'visualworkplace.com'"> <?php _e( 'Email Us', 'vtishop' ); ?></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="litmos-login" href="//visualworkplace.litmos.com/account/login/" target="_blank"><?php _e( 'Login', 'vtishop' ); ?></a>
                            </li>
                            <li>
                                <a class="estore-shop" href="//shop.visualworkplace.com/"><?php _e( 'E-Store', 'vtishop' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-default navbar-fixed-top navbar-primary-adjust navbar-seo" role="navigation">
                <div class="container-fluid primary-navbar nav-adjustment">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle mobmenu-bg navbar-btn-seo" data-toggle="collapse" data-target="#primary-bar">
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'vtishop' ); ?></span>
                            <span><i class="fas fa-bars fa-2x"></i></span>
                        </button>
                        <a class="navbar-brand vti-logo-brand" href="//visualworkplace.com/index.php">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/vti/home/vti-logo-gold-small.jpg" alt="Visual Thinking Inc gold logo image.">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="primary-bar">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="//visualworkplace.com/index.php"><i class="fas fa-home prim-ico-fix"></i><?php _e( '&nbsp;Home', 'vtishop' ); ?></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle hidden-sm hidden-md hidden-lg" data-toggle="dropdown" id="extra-options"><?php _e( 'Extra Options', 'vtishop' ); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="hidden-sm hidden-md hidden-lg" href="//visualworkplace.litmos.com/account/login/" target="_blank"><?php _e( 'Login', 'vtishop' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="hidden-sm hidden-md hidden-lg" href="//shop.visualworkplace.com/"><?php _e( 'E-Store', 'vtishop' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="our-approach"><?php _e( 'Our Approach', 'vtishop' ); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="//visualworkplace.com/approach/visualmodel.php"><?php _e( 'The Visual Model', 'vtishop' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="//visualworkplace.com/approach/visualitylean.php"><?php _e( 'Visuality and Lean', 'vtishop' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="//visualworkplace.com/approach/results.php"><?php _e( 'Client Results', 'vtishop' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="pathways"><?php _e( 'Pathways', 'vtishop' ); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu mega-dropdown-menu">
                                    <div class="row mega-header-border">
                                        <div class="col-sm-4">
                                            <h5 class="mega-h5-col1 text-center"><?php _e( 'Individual Courses', 'vtishop' ); ?></h5>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5 class="mega-h5-col2 text-center"><?php _e( 'Full Conversions', 'vtishop' ); ?></h5>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5 class="mega-h5-col3 text-center"><?php _e( 'Special Offerings', 'vtishop' ); ?></h5>
                                        </div>
                                    </div>
                                    <!-- Row-->
                                    <div class="row">
                                        <div class="col-sm-4 mega-items" id="course-items">
                                            <ul>
                                                <li>
                                                    <a href="//visualworkplace.com/courses/visualbriefing.php"><?php _e( 'Visual Thinking Briefing', 'vtishop' ); ?></a>
                                                </li>
                                                <li>
                                                    <a href="//visualworkplace.com/courses/opledvisuality.php"><?php _e( 'Operator-Led Visuality', 'vtishop' ); ?></a>
                                                </li>
                                                <li>
                                                    <a href="//visualworkplace.com/courses/visualscheduling.php"><?php _e( 'Visual Scheduling', 'vtishop' ); ?></a>
                                                </li>
                                                <li>
                                                    <a href="//visualworkplace.com/courses/visualmachine.php"><?php _e( 'Visual Machine', 'vtishop' ); ?></a>
                                                </li>
                                                <li>
                                                    <a href="//visualworkplace.com/courses/visualscoreboard.php"><?php _e( 'Visual Scoreboarding', 'vtishop' ); ?></a>
                                                </li>
                                                <li>
                                                    <a href="//visualworkplace.com/courses/mistakeproofing.php"><?php _e( 'Mistake-Proofing', 'vtishop' ); ?></a>
                                                </li>
                                                <li>
                                                    <a href="//visualworkplace.com/courses/visleadership.php"><?php _e( 'Visual Leadership', 'vtishop' ); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Individual Courses -->
                                        <div class="col-sm-4 mega-items" id="full-items">
                                            <ul>
                                                <li>
                                                    <a href="//visualworkplace.com/services/siteassessment.php"><?php _e( 'Visual Site Assessment', 'vtishop' ); ?></a>
                                                </li>
                                                <li>
                                                    <a href="//visualworkplace.com/services/visualconversion.php"><?php _e( 'Visual Conversion', 'vtishop' ); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Full Conversions -->
                                        <div class="col-sm-4 mega-items" id="special-items">
                                            <ul>
                                                <li>
                                                    <a href="//visualworkplace.com/services/traintrainers.php"><?php _e( 'Train Trainers', 'vtishop' ); ?></a>
                                                </li>
                                                <li>
                                                    <a href="//visualworkplace.com/services/inperson.php"><?php _e( 'In-Person', 'vtishop' ); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Sp -->
                                    </div>
                                    <!--  -->
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="books"><?php _e( 'Books', 'vtishop' ); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="//visualworkplace.com/books/visworkplace2ed.php"><?php _e( 'Visual Thinking', 'vtishop' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="//visualworkplace.com/books/smartsimpledesign.php"><?php _e( 'Smart Simple Design', 'vtishop' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="//visualworkplace.com/books/wtms.php"><?php _e( 'Work That Makes Sense', 'vtishop' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="about"><?php _e( 'About', 'vtishop' ); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="//visualworkplace.com/about/drgalsworth.php"><?php _e( 'Dr. Galsworth', 'vtishop' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="//visualworkplace.com/about/vti.php"><?php _e( 'Visual Thinking Inc', 'vtishop' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="//visualworkplace.com/about/visualinstitute.php"><?php _e( 'Visual-Lean® Institute', 'vtishop' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="//visualworkplace.com/contact.php"><?php _e( 'Contact', 'vtishop' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main class="content-adjust">