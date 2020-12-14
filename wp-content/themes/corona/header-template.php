<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <?php global $smof_data; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php 
    ftc_theme_favicon();
    wp_head(); 
    ?>
</head>

<body <?php body_class(); ?>>
    <?php giftsshop_header_mobile_navigation(); ?>
    <div id="page" class="site">
     <header id="masthead" class="site-header">
        <div class="ftc-header-template">
            <div class="header-content header-sticky">
                <div class="container">
                    <?php 
                    global $smof_data;
                    $header  =  '';
                    if(isset($smof_data['ftc_header_template'])  && isset($smof_data['ftc_header_layout']) && $smof_data['ftc_header_layout'] = 'template' && $smof_data['ftc_header_template'] !='' ){
                        $header = $smof_data['ftc_header_template'] ;
                    }

                    echo \Elementor\Plugin::$instance->frontend->get_builder_content($header);

                    ?>
                </div>
            </div>
            <div class="header-mobile header-sticky">
                <div class="mobile-button">
                    <div class="mobile-nav">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>

                <div class="logo-wrapper is-mobile"><?php ftc_theme_mobile_logo(); ?></div>
                
                    <div class="ftc-shop-cart"><?php echo wp_kses_post(ftc_tiny_cart()); ?></div>
               
            </div>
        </div>
    </header><!-- #masthead -->
    <div class="site-content-contain">
      <div id="content" class="site-content">
