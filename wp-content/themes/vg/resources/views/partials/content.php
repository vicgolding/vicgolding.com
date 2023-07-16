<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

?>
<div><?php echo get_the_date('F j, Y'); ?></div>
<div>
    <?php
    the_content();
    ?>
</div>
