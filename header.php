<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">

    <title><?php
        if ( is_front_page() ) { echo bloginfo('name'); }
        elseif ( is_post_type_archive() )  { echo post_type_archive_title();}
        elseif ( !is_front_page() || !is_page()) { echo single_post_title(); }
        elseif ( !is_front_page() || !is_single()) { echo the_title();}
    ?></title>

    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- OpenGraph -->
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:locale:alternate" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php
        if ( is_front_page() ) { echo bloginfo('name'); }
        elseif ( is_post_type_archive() )  { echo post_type_archive_title();}
        elseif ( !is_front_page() || !is_page()) { echo single_post_title(); }
        elseif ( !is_front_page() || !is_single()) { echo the_title();}
    ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>">
    <meta property="og:url" content="<?php echo esc_url(site_url()); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:image" content="<?php echo esc_url(the_post_thumbnail_url()); ?>" />
    <meta property="og:image:secure_url" content="<?php echo esc_url(the_post_thumbnail_url()); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php
        if ( is_front_page() ) { echo bloginfo('name'); }
        elseif ( is_post_type_archive() )  { echo post_type_archive_title();}
        elseif ( !is_front_page() || !is_page()) { echo single_post_title(); }
        elseif ( !is_front_page() || !is_single()) { echo the_title();}
    ?>" />
    <meta name="twitter:image" content="<?php echo esc_url(the_post_thumbnail_url()); ?>" />
    <!-- OpenGraph end-->

    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body_open(); ?>
<div class="wrapper js-container"><!--Do not delete!-->
    <header class="header hide-on-mobile">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <div class="logo">
	                    <?php get_default_logo_link([
                            'name'    => 'logo.svg',
                            'options' => [
                                'class'  => 'logo-img',
                                'width'  => 120,
                                'height' => 120,
                                ],
                            ])
                        ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                    <div class="header__row">
                        <div class="header__col">
                            <?php echo do_shortcode('[bw-messengers]'); ?>
                            <?php echo do_shortcode('[bw-phone]'); ?>
                        </div>
                        <div class="header__col">
                            <?php get_search_form(); ?>
                            <?php echo do_shortcode('[bw-social]'); ?>
                            <div class="lang-wrapper">
                                <?php if (function_exists('pll_the_languages')) { ?>
                                    <ul class="lang">
                                        <?php pll_the_languages(array(
                                            'show_flags' => 0,
                                            'show_names' => 1,
                                            'hide_if_empty' => 0,
                                            'display_names_as' => 'name'
                                        )); ?>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="header__row header--padding-none">
                        <div class="header__col">
                            <?php if (has_nav_menu('main-nav')) { ?>
                                <nav class="nav js-menu">
                                    <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
                                    <?php wp_nav_menu(array(
                                        'theme_location' => 'main-nav',
                                        'container' => false,
                                        'menu_class' => 'menu-container',
                                        'menu_id' => '',
                                        'fallback_cb' => 'wp_page_menu',
                                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                        'depth' => 3
                                    )); ?>
                                </nav>
                            <?php } ?>
                        </div>
                        <button type="button" class="btn btn-secondary btn-icon <?php the_lang_class('js-call-back'); ?>">
                            <svg class="phone-icon">
                                <use xlink:href="#icon_phone"></use>
                            </svg>
                            <?php pll_e('Call-back', 'Call-back'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile menu start-->
    <div class="nav-mobile-header">
        <div class="logo"><?php get_default_logo_link(); ?></div>
        <div class="nav-brn-group">
            <button class="mobile-search js-show-search" type="button">
                <i class="fal fa-search"></i>
            </button>
            <button class="hamburger js-hamburger" type="button" tabindex="0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
        </div>
    </div>
    <?php if (has_nav_menu('main-nav')) { ?>
        <nav class="nav js-menu hide-on-desktop">
            <button type="button" tabindex="0" class="menu-item-close menu-close js-menu-close"></button>
            <?php wp_nav_menu(array(
            'theme_location' => 'main-nav',
            'container' => false,
            'menu_class' => 'menu-container',
            'menu_id' => '',
            'fallback_cb' => 'wp_page_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 3
        )); ?>
            <div class="mobile-block">
                <?php echo do_shortcode('[bw-messengers]'); ?>
                <?php echo do_shortcode('[bw-phone]'); ?>
                <div class="mobile-block__item">
                    <?php if (function_exists('pll_the_languages')) { ?>
                        <ul class="lang">
                            <?php pll_the_languages(array(
                                'show_flags' => 0,
                                'show_names' => 1,
                                'hide_if_empty' => 0,
                                'display_names_as' => 'name',
                                'dropdown' => 1
                            )); ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </nav>
    <?php } ?>
    <!-- Mobile menu end-->
