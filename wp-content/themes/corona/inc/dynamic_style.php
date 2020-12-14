<?php 
global $smof_data;
if( !isset($data) ){
    $data = $smof_data;
}

$data = ftc_array_atts(
     array(
            /* FONTS */
            'ftc_body_font_enable_google_font'                  => 1
            ,'ftc_body_font_family'                             => "Open Sans"
            ,'ftc_body_font_google'                             => "Open Sans"

            ,'ftc_secondary_body_font_enable_google_font'       => 1
            ,'ftc_secondary_body_font_family'                   => "Open Sans"
            ,'ftc_secondary_body_font_google'                   => "Open Sans"

            /* COLORS */
            ,'ftc_primary_color'                                    => "#568fad"

            ,'ftc_secondary_color'                              => "#444444"

            ,'ftc_body_background_color'                                => "#ffffff"
            /* RESPONSIVE */
            ,'ftc_responsive'                                   => 1
            ,'ftc_layout_fullwidth'                             => 0
            ,'ftc_enable_rtl'                                   => 0

            /* FONT SIZE */
            /* Body */
            ,'ftc_font_size_body'                               => 12
            ,'ftc_line_height_body'                             => 24

            /* Custom CSS */
            ,'ftc_custom_css_code'                              => ''
    ), $data);      

/* Filter [site_url] */
$data = apply_filters('ftc_custom_style_data', $data);

extract( $data );

/* font-body */
if( $data['ftc_body_font_enable_google_font'] ){
    $ftc_body_font              = $data['ftc_body_font_google']['font-family'];
}
else{
    $ftc_body_font              = $data['ftc_body_font_family'];
}

if( $data['ftc_secondary_body_font_enable_google_font'] ){
    $ftc_secondary_body_font        = $data['ftc_secondary_body_font_google']['font-family'];
}
else{
    $ftc_secondary_body_font        = $data['ftc_secondary_body_font_family'];
}

?>  

/*
1. FONT FAMILY
2. GENERAL COLORS
*/


/* ============= 1. FONT FAMILY ============== */

html, 
body,
.widget-title.heading-title,.subscribe-email .button.button-secondary,
.mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
.elementor-element .subscribe .elementor-widget-container .elementor-text-editor .mc4wp-form .mc4wp-form-fields input[type=submit],
.ftc-product-categories .item-desciption  .title,
.ordo-home-1 .ftc-image-content,
.ordo-home-2 .ftc-image-content,
.elementor-element .gitf .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-title span,
.elementor-element .gitf .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content p,
.elementor-element .shipping .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-title span,
.elementor-element .shipping .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content p,
.elementor-element .qualitypro .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-title span,
.elementor-element .qualitypro .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content p,
.elementor-element .cardtracking .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-title span,
.elementor-element .cardtracking .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content p,
.elementor-element .titlecate .elementor-widget-container h2,
.elementor-element .titlecatedesc  .elementor-widget-container .elementor-text-editor p,
.ftc-image-caption span,
.ftc-products .item-description.item-description .meta_info .add-to-cart,
.ftc-products .item-description .heading-title a,
.ordo-home-3 .ftc-image-content,
.ordo-home-3 .ftc-image-content .ftc-image-caption p,
.ftc-element-testimonial.style_1 .title-testi-slider h2,
.bloghome .ftc-blogs-slider .style_1  .inner-wrap .meta span,
.bloghome .ftc-blogs-slider .style_1  .inner-wrap .post-text h4,
.bloghome p,
.bloghome .ftc-blogs-slider .style_1  .inner-wrap .post-text .ftc-readmore,
.ftc-blogs-slider .style_1 .inner-wrap .post-text .element-date-timeline .month,
.ftc-blogs-slider .style_1 .inner-wrap .post-text .element-date-timeline .day,
.elementor-element .footertitle .elementor-widget-container .elementor-text-editor p,
.elementor-element .ifmft .elementor-widget-container h3,
.elementor-element .titlefooter .elementor-widget-container h3,
.elementor-element.headingtitle .elementor-widget-container h2,
.elementor-element.headingh2_1 .elementor-widget-container h2,
.elementor-element.products_1 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .heading-title a,
.elementor-element.products_1 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .price span,
.elementor-element.products_1 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .meta_info .add-to-cart .button span,
.elementor-element.heading2_2 .elementor-widget-container h2,
.elementor-element.saleoff_1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.img_5 .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .ftc-image-caption p,
.elementor-element.products_2 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .heading-title a,
.elementor-element.products_2 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .price span,
.elementor-element.products_2 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .meta_info .add-to-cart .button span,
.elementor-element.content_1 .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .ftc-image-caption p,
.elementor-element.content_2 .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .ftc-image-caption p,
.elementor-element.content_3 .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .ftc-image-caption p,
.elementor-column.footeracount .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h2,
.elementor-column.footerinfomation .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h2,
.elementor-element.ordo_1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.desc_5 .elementor-widget-container .elementor-text-editor p,
.elementor-element.footermail_2 .elementor-widget-container h2,
.elementor-column.footerform .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container .elementor-text-editor .mc4wp-form .mc4wp-form-fields .submit input[type=submit],
.ftc-product-grid.style_2  .products .ftc-product .item-description .heading-title a,
.ftc-product-grid.style_1  .products .ftc-product .item-description .heading-title a,
.elementor-element.home3_prod_desc2 .elementor-widget-container h2,
.elementor-element.home3_prod3_desc .elementor-widget-container h2,
.elementor-element.home3_desc_f2 .elementor-widget-container h2,
.elementor-element.home3_prod3_desc .elementor-widget-container .elementor-text-editor p,
.elementor-element.home3_title1 .elementor-widget-container h2,
.elementor-element.home3_blog_title .elementor-widget-container h2,
elementor-element.product_slide1 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .heading-title,
.elementor-element.home3blogslide .elementor-widget-container .ftc-blogs-slider .blogs-slider .inner-wrap .post-text .element-date-timeline .day,
.elementor-element.home3blogslide .elementor-widget-container .ftc-blogs-slider .blogs-slider .inner-wrap .post-text .element-date-timeline .month,
.elementor-element.home3_menu .elementor-widget-container .main-navigation .mega_main_menu .menu_holder .menu_inner .mega_main_menu_ul .menu-item .item_link .link_content .link_text,
.elementor-element.home3ftmail .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-title span,
.elementor-element.home3ftform .elementor-widget-container .elementor-text-editor .mc4wp-form .mc4wp-form-fields .submit input[type="submit"],
.elementor-element.home3footestore .elementor-widget-container h2,
.elementor-element.home3footemyacc .elementor-widget-container h2,
.elementor-element.home3footeinfo .elementor-widget-container h2,
.elementor-element.home4_title1 .elementor-widget-container .elementor-text-editor p,
.elementor-column.home4_desc1 .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h3,
.elementor-element.h4proruct_title2 .elementor-widget-container h3,
.elementor-column.home4_desc2 .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h3,
.elementor-column.home4_desc3 .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h3,
.elementor-column.home4_desc4 .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h3,
.elementor-column.home4_desc5 .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h3,
.elementor-column.home4_desc6 .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h3,
.elementor-element.home4_number .elementor-widget-container .elementor-text-editor p,
.elementor-element.h4proruct_title1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.h4product_desc2 .elementor-widget-container .elementor-text-editor p,
.elementor-element.h4title_proc .elementor-widget-container h3,
.ftc_products_slider.style_3 .ftc-products .post .products .ftc-products .ftc-product:hover .item-description .product-categories a,
.ftc_products_slider.style_3 .ftc-products .post .products .ftc-products .ftc-product:hover .item-description .meta_info .add-to-cart a.button ,
.ftc_products_slider.style_3 .ftc-products .post .products .ftc-products .ftc-product:hover .item-description .meta_info .add-to-cart .added_to_cart,
.ftc-element-testimonial.style_2 .title-testi-slider h2,
.ftc-element-testimonial.style_2 .swiper-wrapper .item .byline,
.elementor-element.h4imgcontent .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .ftc-image-caption .h4title_1,
.elementor-element.h4imgcontent .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .ftc-image-caption .wpcf7 input[type^="submit"],
.elementor-column.h4bottom2 .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container .elementor-text-editor .mc4wp-form .mc4wp-form-fields .submit input[type="submit"],
.elementor-section.h4bottom_3 .elementor-container .elementor-row .elementor-column .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h2,
.elementor-element.h4blogstitle .elementor-widget-container h2,
.elementor-element.h4blogsdesc .elementor-widget-container .elementor-text-editor p,
.blogs-slider.style_2 .blogs-slider .inner-wrap .post-text .meta .element-date-timeline .day,
.blogs-slider.style_2 .blogs-slider .inner-wrap .post-text .meta .element-date-timeline .month,
.blogs-slider.style_2 .blogs-slider .inner-wrap .post-text h4,
.blogs-slider.style_2 .blogs-slider .inner-wrap .post-text .ftc-readmore


{
      font-family: <?php echo esc_html($ftc_body_font) ?>;
}

.mega_main_menu.primary ul li .mega_dropdown > li.sub-style > ul.mega_dropdown,
.mega_main_menu li.multicolumn_dropdown > .mega_dropdown > li .mega_dropdown > li,
.mega_main_menu.primary ul li .mega_dropdown > li > .item_link .link_text,
.info-open,
.info-phone,
.my-account-wrapper .account-control > a,
.my-account-wrapper,
.my-wishlist-wrapper *,
.dropdown-button span > span,
body p,
.wishlist-empty,
div.product .social-sharing li a,
.ftc-search form,
.ftc-shop-cart,
.conditions-box,
.item-description .heading-title,
.item-description .price,
.testimonial-content .content,
.testimonial-content .byline,
.widget-container ul.product-categories ul.children li a,
.widget-container:not(.ftc-product-categories-widget):not(.widget_product_categories):not(.ftc-products-widget) :not(.widget-title),
.ftc-products-category-tabs-block ul.tabs li span.title,
.woocommerce-pagination,
.woocommerce-result-count,
.woocommerce .products.list .product h3.product-name > a,
.woocommerce-page .products.list .product h3.product-name > a,
.woocommerce .products.list .product .price .amount,
.woocommerce-page .products.list .product .price .amount,
.products.list .short-description.list,
div.product .single_variation_wrap .amount,
div.product div[itemprop="offers"] .price .amount,
.orderby-title,
.blogs .excerpt,
.blog .entry-info .entry-summary .short-content,
.single-post .entry-info .entry-summary .short-content,
.single-post article .post-info .info-category,
.single-post article .post-info .info-category,
#comments .comments-title,
#comments .comment-metadata a,
.post-navigation .nav-previous,
.post-navigation .nav-next,
.woocommerce div.product .product_title,
.woocommerce-review-link,
.feature-excerpt,
.woocommerce div.product p.stock,
.woocommerce div.product .summary div[itemprop="description"],
.woocommerce div.product p.price,
.woocommerce div.product .woocommerce-tabs .panel,
.woocommerce div.product form.cart .group_table td.label,
.woocommerce div.product form.cart .group_table td.price,
footer,
footer a,
.blogs article .effect-thumbnail:before,
.blogs article a.gallery .owl-item:after,
.ordo-home-3 .ftc-image-content .ftc-image-caption .wp-caption-text,
.ftc-element-testimonial.style_1 .swiper-wrapper .swiper-slide .infomation p,
.ftc-element-testimonial .testimonial-content .byline,
.elementor-element .footerdesc .elementor-widget-container .elementor-text-editor p,
.elementor-element .subscribe .elementor-widget-container .elementor-text-editor .mc4wp-form .mc4wp-form-fields input[type=email],
.elementor-element .myftac .elementor-widget-container .elementor-text-editor p,
.elementor-element .ifmft .elementor-widget-container .elementor-text-editor p,
.elementor-element .hometext .elementor-widget-container .elementor-text-editor p,
.elementor-element .calltext .elementor-widget-container .elementor-text-editor p ,
.elementor-element .mailtext .elementor-widget-container .elementor-text-editor p,
.elementor-element .locktext .elementor-widget-container .elementor-text-editor p,
.elementor-element .myftac .elementor-widget-container .elementor-text-editor p a,
.elementor-element .ifmft .elementor-widget-container .elementor-text-editor p a,
.bloghome .ftc-blogs-slider .style_1  .inner-wrap p,
.elementor-element.desc_1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.products_1 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .product-categories a,
.elementor-element.coundown .elementor-widget-container .ftc-countdown-element .countdown-timer-init .items .ftc-number,
.elementor-element.coundown .elementor-widget-container .ftc-countdown-element .countdown-timer-init .items .ftc-label,
.elementor-element.products_2 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .product-categories a,
.elementor-element.content_1 .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .button-banner a,
.elementor-element.content_2 .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .button-banner a,
.elementor-element.content_3 .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .button-banner a,
.elementor-section.footerinfo_1 .elementor-container .elementor-row .elementor-column .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container .elementor-text-editor p,
.elementor-section.footerinfo_2 .elementor-container .elementor-row .elementor-column .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container .elementor-text-editor p,
.elementor-section.footerinfo_3 .elementor-container .elementor-row .elementor-column .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container .elementor-text-editor p,
.elementor-section.footerinfo_4 .elementor-container .elementor-row .elementor-column .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container .elementor-text-editor p,
.elementor-column.footerform .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container .elementor-text-editor .mc4wp-form .mc4wp-form-fields .email input[type=email],
.elementor-column.desc_6 .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container .elementor-text-editor p,
.elementor-element.medicien .elementor-widget-container .elementor-text-editor p,
.elementor-element.desc_4 .elementor-widget-container .elementor-text-editor p,
.ftc-product-grid.style_2 .load-more-product a.button,
.ftc-product-grid.style_3 .load-more-product a.button,
.elementor-element.home3_prod_desc1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.home3_prod2_desc .elementor-widget-container .elementor-text-editor p,
.elementor-element.home3_desc_f1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.home3_prod_desc3 .elementor-widget-container .elementor-text-editor p,
.elementor-element.home3_prod5_desc .elementor-widget-container .elementor-text-editor p,
.elementor-element.home3_desc_f3 .elementor-widget-container .elementor-text-editor p,
.elementor-element.home3_prod_desc4 .elementor-widget-container .elementor-button-wrapper .elementor-button-link .elementor-button-content-wrapper span,
.elementor-element.home3_descf2 .elementor-widget-container .elementor-button-wrapper .elementor-button-link .elementor-button-content-wrapper span,
.elementor-element.home3_descf2 .elementor-widget-container .elementor-button-wrapper .elementor-button-link .elementor-button-content-wrapper span,
.elementor-element.home3_title1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.home3_blog_titledesc .elementor-widget-container .elementor-text-editor p,
.elementor-element.product_slide1 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .product-categories,
.elementor-element.product_slide1 .elementor-widget-container .ftc_products_slider .ftc-products .post .products .ftc-products .ftc-product .item-description .price,
.elementor-element.home3ft_desc .elementor-widget-container .elementor-text-editor p,
.elementor-element.home3ftform .elementor-widget-container .elementor-text-editor .mc4wp-form .mc4wp-form-fields .email input::placeholder,
.elementor-element.home3footerlogo .elementor-widget-container .ftc-element-logo .description-logo p,
.elementor-element.home3footerhome .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-title span,
.elementor-element.home3footerphone  .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-title span,
.elementor-element.home3footermail .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-title span,
.elementor-element.home3footerclock .elementor-widget-container .elementor-icon-box-wrapper .elementor-icon-box-content .elementor-icon-box-title span,
.elementor-element.footermyacc1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.footermyinfo1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.home4_desc_2 .elementor-widget-container .elementor-text-editor p,
.blogs-slider.style_2 .blogs-slider .inner-wrap .post-text p,
.elementor-column.h4bottom2 .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container .elementor-text-editor .mc4wp-form .mc4wp-form-fields .email input::placeholder,
.ftc-element-testimonial.style_2 .swiper-wrapper .item .name a,
.elementor-element.h4desc_proc .lementor-widget-container .elementor-text-editor p,
.elementor-element.h4product_desc1 .elementor-widget-container .elementor-text-editor p,
.elementor-element.home4_desc_1 .elementor-widget-container .elementor-text-editor p


{
      font-family: <?php echo esc_html($ftc_secondary_body_font) ?>;
}
body,
.site-footer,
.woocommerce div.product form.cart .group_table td.label,
.woocommerce .product .conditions-box span,
.item-description .meta_info .yith-wcwl-add-to-wishlist a, .item-description .meta_info .compare a,
ul.product_list_widget li > a, h3.product-name > a,
h3.product-name, 
.single-navigation a .product-info span,
.info-company li i,
.social-icons .ftc-tooltip:before,
.widget-container ul.product-categories ul.children li,
.tagcloud a,
.details_thumbnails .owl-nav > div:before,
div.product .summary .yith-wcwl-add-to-wishlist a:before,
.pp_woocommerce div.product .summary .compare:before,
.woocommerce div.product .summary .compare:before,
.woocommerce-page div.product .summary .compare:before,
.woocommerce #content div.product .summary .compare:before,
.woocommerce-page #content div.product .summary .compare:before,
.woocommerce div.product form.cart .variations label,
.woocommerce-page div.product form.cart .variations label,
.pp_woocommerce div.product form.cart .variations label,
.ftc-products-category-tabs-block ul.tabs li span.title,
blockquote,
.ftc-milestone h3.subject,
.woocommerce .widget_price_filter .price_slider_amount,
.wishlist-empty,
.woocommerce div.product form.cart .button,
.woocommerce table.wishlist_table
{
        font-size: <?php echo esc_html($ftc_font_size_body) ?>px;
}
/* ========== 2. GENERAL COLORS ========== */
/* ========== Primary color ========== */
.header-currency:hover .wcml_currency_switcher > a,
.header-language:hover li .lang_sel_sel,
.woocommerce a.remove:hover,
.dropdown-container .dropdown-footer > a.button.view-cart:hover,
.my-wishlist-wrapper a:hover,
.my-account-wrapper .account-control > a:hover,
.header-currency .wcml_currency_switcher ul li:hover,
.dropdown-button span:hover,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab.vc_active > a,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
.mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li > .item_link:hover *,
.mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li.current-menu-item > .item_link *,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
.mega_main_menu.primary .mega_dropdown > li > .item_link:hover *,
.mega_main_menu.primary .mega_dropdown > li > .item_link:focus *,
.mega_main_menu.primary .mega_dropdown > li.current-menu-item > .item_link *,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
.woocommerce .products .product .price,
.woocommerce div.product p.price,
.woocommerce div.product span.price,
.woocommerce .products .star-rating,
.woocommerce-page .products .star-rating,
.star-rating:before,
div.product div[itemprop="offers"] .price .amount,
div.product .single_variation_wrap .amount,
.pp_woocommerce .star-rating:before,
.woocommerce .star-rating:before,
.woocommerce-page .star-rating:before,
.woocommerce-product-rating .star-rating span,
ins .amount,
.ftc-wg-meta .price ins,
.ftc-wg-meta .star-rating,
.ul-style.circle li:before,
.woocommerce form .form-row .required,
.blogs .comment-count i,
.blog .comment-count i,
.single-post .comment-count i,
.single-post article .post-info .info-category,
.single-post article .post-info .info-category .cat-links a,
.single-post article .post-info .info-category .vcard.author a,
.breadcrumb-title .breadcrumbs-container,
.breadcrumb-title .breadcrumbs-container span.current,
.breadcrumb-title .breadcrumbs-container a:hover,
.woocommerce .product .item-description .meta_info a:hover,
.woocommerce-page .product .item-description .meta_info a:hover,
.ftc-wg-meta.item-description .meta_info a:hover,
.ftc-wg-meta.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
.gridlist-toggle a.active,
.shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-orange .vc_icon_element-icon,
.comment-reply-link .icon,
body table.compare-list tr.remove td > a .remove:hover:before,
a:hover,
a:focus,
.vc_toggle_title h4:hover,
.vc_toggle_title h4:before,
.blogs article h3.heading-title a:hover, .ftc-search .search-button:hover, .ftc-shoppping-cart a.ftc_cart:hover, .dropdown-menu-header:hover, .shortcode-heading-wrapper .heading-title, .counter-wrapper > div .number-wrapper .number, .counter-wrapper > div .ref-wrapper, .ftc-feedburner-subscription-shortcode h2, .ftc-sb-testimonial .testimonial-content .name a:hover, .ftc-blogs article .post-info .date-time, .info-company li i, li.cat-item.current a, .woocommerce div.product .woocommerce-tabs ul.tabs li.active, .single-product #right-sidebar .widget-title,.contact_info_map .info_contact .info_column ul:before,
.vcard.author a,.caftc-link a, .tags-link a,.woocommerce-info::before,.woocommerce-account .woocommerce-MyAccount-navigation ul li.is-active a,.single-product .product_list_widget span.yith-wcwl-wishlistexistsbrowse.show i,.single-product .product_list_widget span.yith-wcwl-wishlistaddedbrowse.show i,.woocommerce-page .products.list .product h3.product-name a:hover,
.mc4wp-form-fields .widgettitle,
.price .woocommerce-Price-amount,
.woocommerce table.wishlist_table .product-price .woocommerce-Price-amount, .info-com .no-padding.info-company li a:hover,
.mobile-wishlist a.tini-wishlist:hover i, .mobile-wishlist a.tini-wishlist:hover span,
.ftc-product-video-button .watch-video:hover,
.slider-h1 span.text1,
.header-layout1 .custom_content .banner_hide .free_ship.container p,
.slider-products.home3 .owl-nav > div.owl-prev,
.slider-products.home3 .owl-nav > div.owl-next,
.blog-home .blogs a.button-readmore,
.ftc-sidebar .yith-woo-ajax-reset-navigation .yith-wcan a.yith-wcan-reset-navigation.button:hover,
a.lang_sel_sel.icl-en:hover,
.ft-home .ft-top ul.no-padding.bullet.noSwipe li a:hover,
.ft-home .ft-middle .contact li a:hover,
p.copy a.text1:hover,
.mfp-close-btn-in .mfp-close:hover,
.dropdown-menu-header .dropdown-list .tini-wishlist:hover span,
.ftc-shop-cart .cart-item >a:hover i,
.ftc-shop-cart .cart-item >a:hover .cart-total,
.widget-container.ftc-product-categories-widget ul.product-categories li.cat-parent:hover > span.icon-toggle,
.info_column.email li a:hover,
.widget-container ul > li.cat-item:hover,
.ftc-blogs-widget .ftc-blogs-widget-wrapper .post_list_widget .post-meta .author:hover .fa,
.dokan-category-menu #cat-drop-stack > ul li.parent-cat-wrap a:hover,
.dokan-category-menu #cat-drop-stack > ul li.parent-cat-wrap a:hover .fa,
.widget-container ul.product-categories ul.children li a:hover,
span.comment-count span.number,
.ftc-product-video-button:hover:before,
.woocommerce .product .images a.ftc-video360:hover:before,
.slider-products .owl-nav > div.owl-next:hover,
.slider-products .owl-nav > div.owl-prev:hover,
#swipebox-arrows a:hover:before,
.deal-product.home3 .owl-nav > div.owl-prev:hover,
.deal-product.home3 .owl-nav > div.owl-next:hover,
.ftc-off-canvas-cart .woocommerce ul.product_list_widget span.woocommerce-Price-amount.amount,
.ftc-element-testimonial .testimonial-content h4.name,
.ftc-element-testimonial .testimonial-content h4.name a,
.ftc-element-testimonial .navigation-slider .nav-prev:hover:before,
.ftc-element-testimonial .navigation-slider .nav-next:hover:before,
.bloghome .ftc-blogs-slider .style_1  .inner-wrap .post-text .ftc-readmore:hover,
.ftc-element-testimonial.style_2 .title-testi-slider h2:before,
.ftc-element-testimonial.style_2 .title-testi-slider h2:after,
.ftc-element-testimonial.style_2 .swiper-wrapper .item .byline,
.ftc-product-grid.style_2 .load-more-product a.button,
.ftc-product-grid.style_3 .load-more-product a.button,
.ftc-product-grid.style_2 .load-more-product a:hover,
.ftc-product-grid.style_3 .load-more-product a:hover,
.elementor-element.home3blogslide .elementor-widget-container .ftc-blogs-slider .blogs-slider .inner-wrap .post-text .element-date-timeline .month,
.elementor-element.home3ftform .elementor-widget-container .elementor-text-editor .mc4wp-form .mc4wp-form-fields .submit input[type="submit"]

{
color: <?php echo esc_html($ftc_primary_color) ?>;
}

.info_column.email li a:hover
{
color: <?php echo esc_html($ftc_primary_color) ?> !important;
}
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-page-ancestor > .item_link,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-post-ancestor > .item_link,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link, 
.ftc-sb-testimonial .owl-next:hover, 
.ftc-sb-testimonial .owl-prev:hover,
.list a.added_to_cart.wc-forward, .woocommerce span.onsale,.text_service a,
.vc_toggle_title h4:before,a.added_to_cart.wc-forward:hover,
.woocommerce .products .product .item-image .loop-add-to-cart a:hover,
.woocommerce .products.list .product .item-description .yith-wcwl-add-to-wishlist a:hover,
.item-image .product-group-button > .quickview:hover,
.woocommerce .products .product .item-image .compare:hover,
.woocommerce .products.list .product .item-description .compare:hover,
.menu-ftc,#today, .btn-danger,
.slider-products.home3 .owl-nav > div.owl-prev:hover,
.slider-products.home3 .owl-nav > div.owl-next:hover,
.blog-home .blogs a.button-readmore:after,
.woocommerce button.button.alt:hover,
.woocommerce #customer_login button.button:hover,
.woocommerce td.product-remove a.remove:hover,
.contact_form.vc_col-sm-6 input.wpcf7-form-control.wpcf7-submit:hover,
.dokan-single-store .dokan-store-tabs ul li a:hover,
.deal-product span.yith-wcwl-wishlistaddedbrowse.show > a:hover,
.ftc-off-canvas-cart .woocommerce.widget_shopping_cart .buttons .wc-forward:hover,
.ftc-element-testimonial .testimonial-content h4.name a:before,
.ftc-products .item-description.item-description .meta_info .add-to-cart
{
      background-color: <?php echo esc_html($ftc_primary_color) ?> !important;
}
.dropdown-container .dropdown-footer > a.button.checkout:hover,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
body input.wpcf7-submit:hover,
.woocommerce .products.list .product .item-description .loop-add-to-cart a:hover,
.woocommerce .products.list .product .item-description .button-in a:not(.quickview):hover,
.woocommerce .products.list .product .item-description .quickview i:hover,
.counter-wrapper > div,
.tp-bullets .tp-bullet:after,
.woocommerce .product .conditions-box .onsale,
.woocommerce #respond input#submit:hover, 
.woocommerce a.button:hover,
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
.woocommerce .products .product .item-image .button-in:hover a:hover,
.vc_color-orange.vc_message_box-solid,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce-page nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li a.next:hover,
.woocommerce-page nav.woocommerce-pagination ul li a.next:hover,
.woocommerce nav.woocommerce-pagination ul li a.prev:hover,
.woocommerce-page nav.woocommerce-pagination ul li a.prev:hover,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce-page nav.woocommerce-pagination ul li a:hover,
.woocommerce .form-row input.button:hover,
.load-more-wrapper .button:hover,
body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab:hover,
body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active,
.woocommerce div.product form.cart .button:hover,
.woocommerce div.product div.summary p.cart a:hover,
div.product .summary .yith-wcwl-add-to-wishlist a:hover,
.woocommerce #content div.product .summary .compare:hover,
div.product .social-sharing li a:hover,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
.tagcloud a:hover,
.woocommerce .wc-proceed-to-checkout a.button.alt:hover,
.woocommerce .wc-proceed-to-checkout a.button:hover,
.woocommerce-cart table.cart input.button:hover,
.owl-dots > .owl-dot span:hover,
.owl-dots > .owl-dot.active span,
footer .style-3 .feedburner-subscription .button.button-secondary.transparent,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
body div.pp_details a.pp_close:hover:before,
.vc_toggle_title h4:after,
body.error404 .page-header a,
body .button.button-secondary,
.pp_woocommerce div.product form.cart .button,
.shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-orange.vc_icon_element-background,
.style1 .ftc-countdown .counter-wrapper > div,
.style2 .ftc-countdown .counter-wrapper > div,
.style3 .ftc-countdown .counter-wrapper > div,
#cboxClose:hover,
body > h1,
table.compare-list .add-to-cart td a:hover,
.vc_progress_bar.wpb_content_element > .vc_general.vc_single_bar > .vc_bar,
div.product.vertical-thumbnail .details-img .owl-controls div.owl-prev:hover,
div.product.vertical-thumbnail .details-img .owl-controls div.owl-next:hover,
ul > .page-numbers.current,
ul > .page-numbers:hover,
article a.button-readmore:hover, .owl-nav > div.owl-next:hover, .owl-nav > div.owl-prev:hover, .shortcode-heading-wrapper .heading-title:before, .deal-product a:hover.add_to_wishlist.wishlist, .deal-product a:hover.quickview, .woocommerce .form-row input.button, .woocommerce .wishlist_table td.product-add-to-cart a, .woocommerce div.product div.summary p.cart a, .woocommerce div.product form.cart .button, .ftc-shortcode .shortcode-heading-wrapper .heading-title:before, body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tabs-container:before, .site-content .related.products h2:before, .ftc-heading:before, .related-posts .theme-title .heading-title:before, .woocommerce #respond input#submit,body .subscribe_comingsoon .subscribe-email .button.button-secondary:hover,
.mc4wp-form-fields input[type="submit"],
.item-image .product-group-button > .quickview:hover,
.woocommerce .products .product .item-image .compare:hover,
.deal-product .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a:hover,
.ftc-sidebar .yith-woocompare-widget .compare:hover,
body a.dokan-btn-theme, body .dokan-btn-theme,
body a.dokan-btn-theme, body .dokan-btn-theme:focus,
body .dokan-category-menu h3.widget-title, body #dokan-secondary .widget h3.widget-title,
.woocommerce-account .woocommerce-MyAccount-content a.woocommerce-Button.button:hover,
.cookies-buttons a.btn.btn-size-small.btn-color-primary.cookies-accept-btn:hover,
.widget.dokan-store-contact .dokan-btn-theme,
.elementor-element .footerdesc .elementor-widget-container .elementor-text-editor p:before,
.ftc-smartmenu li.current-menu-ancestor > a,
.ftc-smartmenu li:hover > a
{
        background-color: <?php echo esc_html($ftc_primary_color) ?>;
}
.profile-info-box .img-social  .social-store ul li a:hover
{
        background-color: <?php echo esc_html($ftc_primary_color) ?> !important;
}
.dropdown-container .dropdown-footer > a.button.view-cart:hover,
.dropdown-container .dropdown-footer > a.button.checkout:hover,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
body input.wpcf7-submit:hover,
.counter-wrapper > div,
.woocommerce .products .product:hover,
.woocommerce-page .products .product:hover,
#right-sidebar .product_list_widget:hover li,
.woocommerce .product .item-description .meta_info a:hover,
.woocommerce-page .product .item-description .meta_info a:hover,
.ftc-wg-meta.item-description .meta_info a:hover,
.ftc-wg-meta.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
.woocommerce .products .product:hover,
.woocommerce-page .products .product:hover,
.ftc-products-category-tabs-block ul.tabs li:hover,
.ftc-products-category-tabs-block ul.tabs li.current,
body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
body div.pp_details a.pp_close:hover:before,
.wpcf7 p input:focus,
.wpcf7 p textarea:focus,
.woocommerce form .form-row .input-text:focus,
body .button.button-secondary,
.ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
.ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
#cboxClose:hover, .feedburner-subscription, #ftc-ajax-search-result,.subscribe_comingsoon .feedburner-subscription input[type="text"]:focus,body .subscribe_comingsoon .subscribe-email .button.button-secondary:hover,
.mc4wp-form-fields, .ftc-mobile-wrapper .menu-text .btn-toggle-canvas.btn-danger,
.mega_main_menu.primary li.default_dropdown > .mega_dropdown > .menu-item > .item_link:hover:before,
body a.dokan-btn-theme, body .dokan-btn-theme:focus
{
        border-color: <?php echo esc_html($ftc_primary_color) ?>;
}
.ftc_language ul ul,
.header-currency ul,
.ftc-tiny-account-wrapper .dropdown-container,
.ftc-shop-cart .dropdown-container,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item,
.mega_main_menu > .menu_holder > .menu_inner > ul > li:hover,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
.mega_main_menu > .menu_holder > .menu_inner > ul > li.current_page_item > a:first-child:after,
.mega_main_menu > .menu_holder > .menu_inner > ul > li > a:first-child:hover:before,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link:before,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item > .item_link:before,
.mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .mega_dropdown,
.woocommerce .product .conditions-box .onsale:before,
.woocommerce .product .conditions-box .featured:before,
.woocommerce .product .conditions-box .out-of-stock:before,.woocommerce-info
{
        border-top-color: <?php echo esc_html($ftc_primary_color) ?>;
}
.woocommerce .products.list .product:hover .item-description:after,
.woocommerce-page .products.list .product:hover .item-description:after
{
        border-left-color: <?php echo esc_html($ftc_primary_color) ?>;
}
footer#colophon .ftc-footer .widget-title:before,
.woocommerce div.product .woocommerce-tabs ul.tabs,
#customer_login h2 span:before,
.cart_totals  h2 span:before
{
        border-bottom-color: <?php echo esc_html($ftc_primary_color) ?>;
}
.slider-products span.yith-wcwl-wishlistexistsbrowse.show a, .grid span.yith-wcwl-wishlistexistsbrowse.show a, .related span.yith-wcwl-wishlistexistsbrowse.show a, .slider-2 span.yith-wcwl-wishlistexistsbrowse.show a, .yith-wcwl-add-to-wishlist.added a.add_to_wishlist.wishlist, .slider-products span.yith-wcwl-wishlistaddedbrowse.show > a, .grid span.yith-wcwl-wishlistaddedbrowse.show > a, .related span.yith-wcwl-wishlistaddedbrowse.show > a, .slider-2 span.yith-wcwl-wishlistaddedbrowse.show > a
{
     color: <?php echo esc_html($ftc_primary_color) ?> !important;
}
/* ========== Secondary color ========== */
body,
.mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
.woocommerce a.remove,
body.wpb-js-composer .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab,
.woocommerce .products .star-rating.no-rating,
.woocommerce-page .products .star-rating.no-rating,
.star-rating.no-rating:before,
.pp_woocommerce .star-rating.no-rating:before,
.woocommerce .star-rating.no-rating:before,
.woocommerce-page .star-rating.no-rating:before,
.woocommerce .product .item-image .product-group-button > div a,
.vc_progress_bar .vc_single_bar .vc_label,
.vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline,
.vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline-custom,
.vc_btn3.vc_btn3-size-md.vc_btn3-style-outline,
.vc_btn3.vc_btn3-size-md.vc_btn3-style-outline-custom,
.vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline,
.vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline-custom,
.style1 .ftc-countdown .counter-wrapper > div .ref-wrapper,
.style2 .ftc-countdown .counter-wrapper > div .ref-wrapper,
.style3 .ftc-countdown .counter-wrapper > div .ref-wrapper,
.style4 .ftc-countdown .counter-wrapper > div .number-wrapper .number,
.style4 .ftc-countdown .counter-wrapper > div .ref-wrapper,
body table.compare-list tr.remove td > a .remove:before,
.woocommerce-page .products.list .product h3.product-name a,
.blogs-slider.style_2 .blogs-slider .inner-wrap .post-text .ftc-readmore,
.elementor-section.h4bottom_3 .elementor-container .elementor-row .elementor-column .elementor-column-wrap .elementor-widget-wrap .elementor-element .elementor-widget-container h2,
.elementor-element.h4imgcontent .elementor-widget-container .elementor-image .wp-caption .ftc-image-content .ftc-image-caption .h4title_1,
.ftc-element-testimonial.style_2 .swiper-wrapper .item .name a,
.ftc-element-testimonial.style_2 .title-testi-slider h2,
.ftc_products_slider.style_3 .ftc-products .post .products .ftc-products .ftc-product:hover .item-description .heading-title a

{
        color: <?php echo esc_html($ftc_secondary_color) ?>;
}
.dropdown-container .dropdown-footer > a.button.checkout,
.pp_woocommerce div.product form.cart .button:hover,
.info-company li i,
body .button.button-secondary:hover,
div.pp_default .pp_close, body div.pp_woocommerce.pp_pic_holder .pp_close,
body div.ftc-product-video.pp_pic_holder .pp_close,
body .ftc-lightbox.pp_pic_holder a.pp_close,
#cboxClose
{
        background-color: <?php echo esc_html($ftc_secondary_color) ?>;
}
.dropdown-container .dropdown-footer > a.button.checkout,
.pp_woocommerce div.product form.cart .button:hover,
body .button.button-secondary:hover,
#cboxClose
{
        border-color: <?php echo esc_html($ftc_secondary_color) ?>;
}

/* ========== Body Background color ========== */
body
{
        background-color: <?php echo esc_html($ftc_body_background_color) ?>;
}
/* Custom CSS */
<?php 
if( !empty($ftc_custom_css_code) ){
      echo html_entity_decode( trim( $ftc_custom_css_code ) );
}
?>