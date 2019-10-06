<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php if (is_home()): echo 'Coach';  else: echo wp_title('| Coach', FALSE, 'right'); endif; ?></title>
        <link rel="icon" href="<?php echo get_template_directory_uri().'/assets/images/favicon.ico'; ?>" type="image/ico" sizes="16x16">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        
        <!-- Load google fonts -->
        <link type="text/css" rel="stylesheet" id="ot-google-fonts-css" href="http://fonts.googleapis.com/css?family=Quicksand:300,500,700,regular%7CKalam:300,700,regular&amp;subset=vietnamese,latin,latin-ext,devanagari" media="all" />
        
        <!-- Added ajax & site url -->
        <script type="text/javascript">
            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
            var siteUrl = '<?php echo site_url(); ?>';
        </script>
        <?php wp_head(); ?>
    </head>
    
    <body class="home page-template-default page page-id-29">
        <!-- START master wrapper -->
        <div id="wrapper">
            <!-- START page wrapper -->
            <div id="page">

                <!-- START header container-->
                <header id="site-header" role="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <button class="menu-toggle mobile-only" aria-controls="sticky_menu" aria-expanded="false">Menu</button>
                                <div class="site-logo">
                                    <!-- Get site Title -->
                                    <h1 class="site-title">
                                        <a href="<?php echo get_bloginfo('url'); ?>" rel="home"> 
                                            <?php echo get_bloginfo('name'); ?> 
                                        </a>
                                    </h1>
                                </div>
                                <!-- END logo container -->
                            </div>
                            <div class="col-md-8 desktop-only">
                                
                                <!-- START nav container -->
                                <nav class="nav primary-nav" id="primary-nav" role="navigation">
                                    <?php
                                    // Primary header menu
                                    wp_nav_menu(array(
                                        'menu' => 2,
                                        'theme_location' => '',
                                        'container' => false,
                                        //'container_class' => 'menu'
                                    ));
                                    ?>
                                </nav>
                                <!-- END nav container -->
                            </div>
                        </div>
                    </div>
                </header>
                <!-- END nav container -->