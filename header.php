<!DOCTYPE html>
<!--[if IE 8]><html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if lte IE 9]><html <?php language_attributes(); ?> class="ie9"><![endif]-->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="dns-prefetch" href="//google-analytics.com">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" role="banner">
        <div class="container">
            <div class="header-inside flex items-center">

                <div class="logo-cont">
                    <a href="<?php echo get_bloginfo('url'); ?>" class="header-logo">
                        <?php echo is_front_page() ? '<h1>' : ''; ?>
                        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/dist/images/logo.svg" alt="<?php echo get_bloginfo('title'); ?>" />
                        <?php echo is_front_page() ? '</h1>' : ''; ?>
                    </a>
                </div>
                
                <div class="nav-cont">
                    <div class="header-navigation">
                        <nav role="navigation">
                            <?php wp_nav_menu(['theme_location' => 'header', 'menu_class' => 'nav nav-header']); ?>
                        </nav>
                    </div>
                    <a href="#" class="nav-burger js-menu-toggle">
                        <span class="nav-burger-line"></span>
                        <span class="nav-burger-line"></span>
                        <span class="nav-burger-line"></span>
                    </a>
                </div>

            </div>
        </div>
    </header>