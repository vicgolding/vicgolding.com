<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
    <?php wp_head(); ?>
</head>
<body>

<header class="main-header">
    <div id="site-branding" class="header-column">
        <a href="/" class="text-dark">
            <?php if( function_exists('the_custom_logo') ) {
                if( has_custom_logo() ) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                    echo '<img class="header-logo" src="' . esc_url($logo[0]) . '" alt="site logo"/>';
                }
            }?>
            <h2><?php bloginfo( 'name' ); ?></h2>
            <h3><?php bloginfo('description'); ?></h3>
        </a>
    </div>
    <nav id="main-navigation" class="header-column" role="navigation">
        <?php
        wp_nav_menu(
            array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'walker' => '',
                'items_wrap' => '<ul id="" class="nav-link text-dark">%3$s</ul>'
            )
        )
        ?>
    </nav>
	<nav id="mobile-navigation" class="header-column" role="navigation">
        <?php
        wp_nav_menu(
            array(
                'menu' => 'mobile',
                'container' => '',
                'theme_location' => 'mobile',
                'walker' => '',
                'items_wrap' => '<ul id="" class="nav-link text-dark">%3$s</ul>'
            )
        )
        ?>
    </nav>
</header>
