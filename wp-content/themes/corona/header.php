<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage corona
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <?php 
    global $smof_data;
    $_user_logged = is_user_logged_in();
    ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php
    ftc_theme_favicon();
    wp_head();
    ?>
</head>

<body <?php body_class(); ?> >
    <?php wp_body_open(); ?>
    <?php giftsshop_header_mobile_navigation(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'corona'); ?></a>

        <header id="masthead" class="site-header">
            <div class="header-ftc header-<?php echo esc_attr($smof_data['ftc_header_layout']); ?>">
                <div id="expandText" style="display:block">

                    <div class="custom_content"> 
                        <div class="img-back-top"><?php echo wp_kses_post(ftc_background_top());?></div>
                        <div class="banner_hide">
                            <div class="free_ship container">
                                <?php if( isset($smof_data['ftc_middle_header_content']) && $smof_data['ftc_middle_header_content'] ): ?>
                                    <h4><?php echo esc_html(do_shortcode(stripslashes($smof_data['ftc_middle_header_content']))); ?></h4>
                                <?php endif; ?>
                                <button class="button-banner"></button>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="header-content">
                    <div class="container">
                        <div class="mobile-button">
                            <div class="mobile-nav">
                                <i class="fa fa-bars"></i>
                            </div>
                        </div>
                        <div class="logo-wrapper appear-header"><?php echo wp_kses_post(ftc_theme_logo()); ?></div>
                        <div class="logo-wrapper is-desktop"><?php ftc_theme_logo(); ?></div>
                        <?php if (has_nav_menu('primary')) : ?>
                            <div class="navigation-primary">
                                <?php get_template_part('template-parts/navigation/navigation', 'primary'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($smof_data['ftc_enable_search'] && isset($smof_data['ftc_enable_search']) ): ?>
                            <div class="ftc-search-product appear-header"><?php ftc_get_search_form_by_category(); ?></div>
                        <?php endif; ?>

                        <?php if ($smof_data['ftc_enable_tiny_shopping_cart'] && isset($smof_data['ftc_enable_tiny_shopping_cart'] )): ?>
                            <div class="ftc-shop-cart  appear-header"><?php echo wp_kses_post(ftc_tiny_cart()); ?></div>
                        <?php endif; ?>

                        <div class="dropdown-menu-header  appear-header">

                            <div class="hover-dropdown">
                                <span class="fa fa-bars"></span>

                                <div class="drop dropdown-list">

                                    <?php if ($smof_data['ftc_enable_tiny_account'] && isset($smof_data['ftc_enable_tiny_account'])): ?>
                                        <div class="my-account-wrapper"><?php print_r(ftc_tiny_account()); ?></div>
                                    <?php endif; ?>

                                    <?php if (class_exists('YITH_WCWL') && $smof_data['ftc_enable_tiny_wishlist'] && isset($smof_data['ftc_enable_tiny_wishlist']) ): ?>
                                    <div class="my-wishlist-wrapper"><?php echo wp_kses_post(ftc_tini_wishlist()); ?></div>
                                <?php endif; ?>

                                <?php if( $smof_data['ftc_header_language'] && isset($smof_data['ftc_header_language'])): ?>
                                    <div class="ftc-sb-language"><?php echo wp_kses_post(ftc_wpml_language_selector()); ?></div>
                                <?php endif; ?>

                                <?php if( $smof_data['ftc_header_currency'] && isset($smof_data['ftc_header_currency'] )): ?>
                                    <div class="header-currency"><?php echo wp_kses_post(ftc_woocommerce_multilingual_currency_switcher()); ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <div class="site-content-contain">
        <div id="content" class="site-content">