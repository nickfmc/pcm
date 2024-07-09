<?php

/**
 * blockname Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'c-testimonial-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'c-testimonial-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
if( $is_preview ) {
    $className .= ' is-admin';
}


?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>  <?php if( get_field('dark_button') ) { echo 'c-blk-btn--dark'; }?> <?php if( get_field('large_button') ) { echo 'c-blk-btn--large'; }?> <?php if( get_field('text_button_link_only') ) { echo 'c-btn-text-only'; }?>">

<span class="c-testimonial-block-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M6.848 2.47a1 1 0 0 1-.318 1.378A7.3 7.3 0 0 0 3.75 7.01A3 3 0 1 1 1 10v-.027a4 4 0 0 1 .01-.232c.009-.15.027-.36.062-.618c.07-.513.207-1.22.484-2.014c.552-1.59 1.67-3.555 3.914-4.957a1 1 0 0 1 1.378.318m7 0a1 1 0 0 1-.318 1.378a7.3 7.3 0 0 0-2.78 3.162A3 3 0 1 1 8 10v-.027a4 4 0 0 1 .01-.232c.009-.15.027-.36.062-.618c.07-.513.207-1.22.484-2.014c.552-1.59 1.67-3.555 3.914-4.957a1 1 0 0 1 1.378.318"/></svg></span>
<blockquote>
    <?php if( get_field('quote_text') ) { echo '<p>' . get_field('quote_text') . '</p>'; }?>
    <div class="c-testimonial-block-footer">
    <?php if( get_field('quote_cite') ) { echo '<cite>' . get_field('quote_cite') . '</cite>'; }?>
    <?php
    $image = get_field('quote_image');
    $size = 'full';
    if($image){
     echo wp_get_attachment_image($image, $size);
    }
    ?>
    </div>
</blockquote>
</div>
