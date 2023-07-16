<?php
/**
 * Accordion Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'accordion-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
} ?>

<div <?php echo $anchor; ?> class="<?php echo esc_attr($className); ?>">
    <?php
    // Load values and assign defaults.
    foreach ( get_field( 'accordion_item' ) as $accordion_item ) :
    $heading = $accordion_item['accordion_heading'] ?: __( 'Your Heading Goes Here' );
    $content = $accordion_item['accordion_content'] ?: __( 'Your Content Goes Here' );
    $slug = $accordion_item['accordion_slug'] ?: __( 'your_slug' );
    ?>
    <div class="accordion-heading">
        <a data-toggle="collapse" href="#<?php echo esc_html( $slug ); ?>" class="accordion-title" role="button" aria-expanded="false" aria-controls="skill1">
            <?php echo esc_html( $heading ); ?>
        </a>
    </div>
    <div class="accordion-content" id="<?php echo esc_html( $slug ); ?>">
        <?php echo $content ?>
    </div>
    <?php
    endforeach;
    ?>
</div>

