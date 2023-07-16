<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package underscores
 */
get_header();
?>

    <main class="main">
        <div>
            <h1><?php the_title(); ?></h1>
            <span><?php get_the_date(); ?></span>
            <span><?php the_tags(); ?></span>
        </div>

        <article>
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    get_template_part('resources/views/partials', 'content');
                }
            }
            ?>
        </article>
    </main>

<?php
get_footer();
?>