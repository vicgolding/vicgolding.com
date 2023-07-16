<?php
/**
 * functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscores
 */

/*
 * PHP functions names must not include hyphens
 * it's also best to prefix your functions with the theme name to differentiate between built-in functions
 */
if ( ! function_exists( 'vgtheme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress
     * features.
     *
     * Note that this function is hooked into the after_setup_theme
     * hook, which runs before the init hook.
     *
     * It is important to set up these functions before the init hook so
     * that none of these features are lost.
     *
     * The init hook is too late
     * for some features, such as indicating support post thumbnails.
     *
     */
    function vgtheme_setup() {

        // to enable translation, translations can be placed in the /languages/ directory.
        load_theme_textdomain( 'vgtheme', get_template_directory() . '/languages' );

        // Add theme support for document Title tag
        add_theme_support( 'title-tag' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        // Add support for block styles.
        add_theme_support( 'wp-block-styles' );

        /**
         * In block themes, the following theme supports are enabled automatically:
         * Add default posts and comments RSS feed links to <head>.
         * add_theme_support( 'automatic-feed-links' );
         * add_theme_support( 'responsive-embeds' );
         * add_theme_support( 'editor-styles' );
         * add_theme_support( 'html5', array('style','script', ) );
         */

        // Enable support for the following post formats: aside, gallery, quote, image, and video
        add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'vgtheme_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Enable support for post thumbnails and featured images.
        add_theme_support( 'post-thumbnails' );

        // Enable support for sidebars.
        add_theme_support('widgets');

        // Add support for two custom navigation menus.
        register_nav_menus( array(
            'primary'   => __( 'Primary Menu', 'vgtheme' ),
            'secondary' => __( 'Footer Menu', 'vgtheme' ),
            'social-media' => __( 'Social', 'vgtheme' ),
            'mobile' => __( 'Mobile', 'vgtheme' ),
        ) );

    }
endif; // vgtheme_setup

// when wordpress runs this hook, also execute this function:
add_action( 'after_setup_theme', 'vgtheme_setup' ); // init hook

/**
 * Enqueue scripts and styles.
 */
function vgtheme_scripts_styles() {
    wp_enqueue_style('style', get_stylesheet_uri(), array(), 1.0 );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/resources/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'vgtheme_scripts_styles' );

/*
 *
 * ACF Custom Blocks
 *
*/

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types() {
    acf_register_block_type(array(
        'name'             => 'accordion',
        'title'            => __('Accordion'),
        'description'      => __('A custom accordion block.'),
        'render_template'  => 'resources/views/partials/blocks/accordion/accordion.php',
        'icon'             => 'image-flip-vertical',
        'keywords'         => array('accordion', 'text'),
    ));
}