<?php
/**
 * Testimonials Block Template.
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
$class_name = 'sample-block';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$testimonials = get_field( 'testimonials' ) ?: null;

if ( $testimonials ) : ?>
	
	<div class="<?= $class_name; ?>"  id="<?= $anchor; ?>">
		
		<?php foreach( $testimonials as $testimonial ) : ?>
            
            <div class="slider">
                <p><?php echo $testimonial['quote']; ?></p>
                <h5><?php echo $testimonial['title']; ?></h5>
            </div>
            
        <?php endforeach; ?>
		
	</div>

<?php endif; ?>