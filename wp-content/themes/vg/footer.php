<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>
<footer class="main-footer">
    <div id="site-description" class="footer-row">
        <h2>Based in Zürich,<br>
            working worldwide.<br>
            Made with <i class="fa-solid fa-heart"></i></h2>
    </div>
    <nav id="social-media-links" class="footer-column" role="navigation">
        <?php
        wp_nav_menu(
            array(
                'menu' => 'social-media',
                'container' => '',
                'theme_location' => 'social-media',
                'walker' => '',
                'items_wrap' => '<ul id="" class="nav-link text-dark">%3$s</ul>'
            )
        )
        ?>
    </nav>
    <nav id="footer-navigation" class="footer-column" role="navigation">
        <?php
        wp_nav_menu(
            array(
                'menu' => 'secondary',
                'container' => '',
                'theme_location' => 'secondary',
                'walker' => '',
                'items_wrap' => '<ul id="" class="nav-link text-dark">%3$s</ul>'
            )
        )
        ?>
    </nav>
</footer>
<div class="subfooter">
    <p>Copyright © Victoria Golding, 2023</p>
    <script src="https://unpkg.com/website-carbon-badges@1.1.3/b.min.js" defer></script>
    <div id="wcb" class="carbonbadge"></div>
</div>
<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/dfe96ba0a1.js" crossorigin="anonymous"></script>
</body>
</html>