<?php
if ( ! function_exists( 'avrup_ecommerce_0001_setup' ) ) :

function avrup_ecommerce_0001_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'avrup_ecommerce_0001', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'avrup_ecommerce_0001' ),
        'social'  => __( 'Social Links Menu', 'avrup_ecommerce_0001' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // avrup_ecommerce_0001_setup

add_action( 'after_setup_theme', 'avrup_ecommerce_0001_setup' );


if ( ! function_exists( 'avrup_ecommerce_0001_init' ) ) :

function avrup_ecommerce_0001_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // avrup_ecommerce_0001_setup

add_action( 'init', 'avrup_ecommerce_0001_init' );


if ( ! function_exists( 'avrup_ecommerce_0001_custom_image_sizes_names' ) ) :

function avrup_ecommerce_0001_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'avrup_ecommerce_0001_custom_image_sizes_names' );
endif;// avrup_ecommerce_0001_custom_image_sizes_names



if ( ! function_exists( 'avrup_ecommerce_0001_widgets_init' ) ) :

function avrup_ecommerce_0001_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'avrup_ecommerce_0001_widgets_init' );
endif;// avrup_ecommerce_0001_widgets_init



if ( ! function_exists( 'avrup_ecommerce_0001_customize_register' ) ) :

function avrup_ecommerce_0001_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'avrup_ecommerce_0001_customize_register' );
endif;// avrup_ecommerce_0001_customize_register


if ( ! function_exists( 'avrup_ecommerce_0001_enqueue_scripts' ) ) :
    function avrup_ecommerce_0001_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.0.min.js', [], '1.0.1', true);

    wp_deregister_script( 'avrup_ecommerce_0001-swiperbundle' );
    wp_enqueue_script( 'avrup_ecommerce_0001-swiperbundle', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', [], '1.0.1', true);

    wp_deregister_script( 'avrup_ecommerce_0001-bootstrapbundle' );
    wp_enqueue_script( 'avrup_ecommerce_0001-bootstrapbundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', [], '1.0.1', true);

    wp_deregister_script( 'avrup_ecommerce_0001-plugins' );
    wp_enqueue_script( 'avrup_ecommerce_0001-plugins', get_template_directory_uri() . '/js/plugins.js', [], '1.0.1', true);

    wp_deregister_script( 'avrup_ecommerce_0001-script' );
    wp_enqueue_script( 'avrup_ecommerce_0001-script', get_template_directory_uri() . '/js/script.js', [], '1.0.1', true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'avrup_ecommerce_0001-swiperbundle' );
    wp_enqueue_style( 'avrup_ecommerce_0001-swiperbundle', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', [], '1.0.1', 'all');

    wp_deregister_style( 'avrup_ecommerce_0001-bootstrap' );
    wp_enqueue_style( 'avrup_ecommerce_0001-bootstrap', get_template_directory_uri() . '/bootstrap_theme/bootstrap.css', [], '1.0.1', 'all');

    wp_deregister_style( 'avrup_ecommerce_0001-vendor' );
    wp_enqueue_style( 'avrup_ecommerce_0001-vendor', get_template_directory_uri() . '/css/vendor.css', [], '1.0.1', 'all');

    wp_deregister_style( 'avrup_ecommerce_0001-style' );
    wp_enqueue_style( 'avrup_ecommerce_0001-style', get_bloginfo('stylesheet_url'), [], '1.0.1', 'all');

    wp_deregister_style( 'avrup_ecommerce_0001-style-1' );
    wp_enqueue_style( 'avrup_ecommerce_0001-style-1', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', [], '1.0.1', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'avrup_ecommerce_0001_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }
if( !class_exists( 'PG_WC_Helper' ) ) { require_once "inc/wc_pg_helpers.php"; }

    /* Pinegrow generated Include Resources End */

/* Setting up theme supports options */

function avrup_ecommerce_0001_setup_theme_supports() {
    // Don't edit anything between the following comments.
    /* Pinegrow generated Theme Supports Begin */

    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    /* Pinegrow generated Theme Supports End */
}
add_action('after_setup_theme', 'avrup_ecommerce_0001_setup_theme_supports');

/* End of setting up theme supports options */


/* Setting up WooCommerce filters */
/* Pinegrow generated WooCommerce Filters Begin */

    /* This filter lets us multiple variants of the same template name. It also handles locating the templates that are present in the theme or plugin. */        
    add_filter( 'wc_get_template', function( $template, $template_name, $args, $template_path, $default_path ) {
        global $pg_wc_use_template, $pg_wc_use_template_cache_avrup_ecommerce_0001;
        if(!isset($pg_wc_use_template_cache_avrup_ecommerce_0001)) $pg_wc_use_template_cache_avrup_ecommerce_0001 = array();
        
        if( !empty($pg_wc_use_template) ) {
            $template_variant = trailingslashit( get_template_directory() ) . 'woocommerce/' . str_replace( '.php', '-'.$pg_wc_use_template.'.php', $template_name);
            $template_key = $template_name . '-' . $pg_wc_use_template;
        } else {
            $template_key = $template_name;
            $template_variant = trailingslashit( get_template_directory() ) . 'woocommerce/' . $template_name;
        }
            
        if(isset($pg_wc_use_template_cache_avrup_ecommerce_0001[ $template_key ])) {
            if($pg_wc_use_template_cache_avrup_ecommerce_0001[ $template_key ]) {
                $template = $template_variant;
            }
        } else if(file_exists($template_variant)) {
            $template = $template_variant;
            $pg_wc_use_template_cache_avrup_ecommerce_0001[ $template_key ] = true;
        } else {
            $pg_wc_use_template_cache_avrup_ecommerce_0001[ $template_key ] = false;
        }
 
        return $template;
    }, 10, 5 );  
            
    /* Pinegrow generated WooCommerce Filters End */
/* End Setting up WooCommerce filters */


/* Control how block assets are loaded on the front-end */
function avrup_ecommerce_0001_should_load_separate_core_block_assets() {
    /* Pinegrow generated Load Block Assets Separately Begin */
    //Load only assets of blocks that are used on the page
    add_filter( 'should_load_separate_core_block_assets', '__return_true' );

    /* Pinegrow generated Load Block Assets Separately End */
}
add_action('init', 'avrup_ecommerce_0001_should_load_separate_core_block_assets');
/* End of controlling how block assets are loaded on the front-end */

?>