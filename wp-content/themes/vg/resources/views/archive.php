<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
get_header();
?>

    <main class="main">
        <header>
            <?php
            the_archive_title( '<h1>', '</h1>' );
            the_archive_description( '<div>', '</div>' );
            ?>
        </header>

        <?php
        /* Start the Loop */

        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('resources/views/partials', 'content');
            }
        }
        ?>
        <?php the_posts_pagination(); ?>
    </main>

<?php
get_footer();
?>