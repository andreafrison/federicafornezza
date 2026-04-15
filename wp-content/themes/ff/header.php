<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo is_front_page() ? 'Home' : wp_title('', false); ?> - <?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
    <meta name="author" content="Perspect srl - perspect.it">
    <meta name="Copyright" content="Copyright <?php echo (int) date('Y'); ?>">

    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/common/img/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/common/css/main.css">

</head>

<body>

    <div id="loader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div><!--loader-->

    <?php
    $header_class = '';
    if (
        is_front_page() ||
        is_page_template('tmpl-product.php') ||
        is_page_template('tmpl-contacts.php')
    ) {
        $header_class = 'header-light';
    } ?>

    <header id="header" class="<?php echo esc_attr($header_class); ?>">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col d-none d-lg-block">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'primary_sx',
                        'depth'           => 1,
                        'container'       => 'nav',
                        'container_class' => 'navbar-expand',
                        'container_id'    => '',
                        'menu_class'      => 'navbar-nav justify-content-start',
                    ) ); ?>
                </div><!--col-->
                <div class="col-auto me-auto mx-lg-auto">
                    <a id="brand" href="<?php echo esc_url(get_home_url()); ?>" aria-label="<?php bloginfo('name'); ?>"><?php get_template_part('inc/brand'); ?></a>
                </div><!--col-->
                <div class="col d-none d-lg-block text-end">
                    <?php wp_nav_menu( array(
                        'theme_location'  => 'primary_dx',
                        'depth'           => 1,
                        'container'       => 'nav',
                        'container_class' => 'navbar-expand',
                        'container_id'    => '',
                        'menu_class'      => 'navbar-nav justify-content-end',
                    ) ); ?>
                </div><!--col-->
                <div class="col-auto ms-auto d-lg-none">
                    <button class="hamburger" aria-label="Menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="11" viewBox="0 0 29 11">
                            <path fill-rule="evenodd" d="M0 0h29v1H0V0Zm0 5h29v1H0V5Zm0 5h29v1H0v-1Z" clip-rule="evenodd"/>
                            <path class="close" fill-rule="evenodd" d="M0 5h29v1H0V5Z" clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div><!--col-->
            </div><!--row-->
        </div><!--container-->
    </header>


    <div id="drawer">
        <div id="drawer_bg"></div>
        <div id="drawer_wrapper">
            <div id="drawer_content">
                <div class="container-fluid">
                    <div class="row g-0 align-items-center">
                        <div class="col">
                            <a id="brand_drawer" href="<?php echo esc_url(get_home_url()); ?>" aria-label="<?php bloginfo('name'); ?>"><?php get_template_part('inc/brand'); ?></a>
                        </div><!--col-->
                        <div class="col-auto ms-auto d-xxl-none">
                            <button class="hamburger" aria-label="Menu">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="11" viewBox="0 0 29 11">
                                    <path class="close" fill-rule="evenodd" d="M0 5h29v1H0V5Z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div><!--col-->
                    </div><!--row-->

                    <div id="drawer_nav">
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'primary_sx',
                            'depth'           => 1,
                            'container'       => 'nav',
                            'container_class' => 'drawer-navbar',
                            'container_id'    => '',
                            'menu_class'      => '',
                        ) ); ?>
                        <?php wp_nav_menu( array(
                            'theme_location'  => 'primary_dx',
                            'depth'           => 1,
                            'container'       => 'nav',
                            'container_class' => 'drawer-navbar',
                            'container_id'    => '',
                            'menu_class'      => '',
                        ) ); ?>
                    </div>
                </div><!--container-->

                <?php if( have_rows('socials', 'option') ): ?>
                    <div class="container-fluid">
                        <ul class="socials">
                            <?php while( have_rows('socials', 'option') ): the_row();
                                $link = get_sub_field('social');
                                if( $link ):
                                    $link_url    = $link['url'];
                                    $link_title  = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_blank'; ?>
                                    <li>
                                        <a class="social-link" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>" aria-label="<?php echo esc_html($link_title); ?>"></a>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    </div><!--container-->
                <?php endif; ?>
            </div><!--drawer_content-->
        </div><!--drawer_wrapper-->
    </div><!--drawer-->
