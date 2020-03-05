<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<div class="fw-accordion">
	<?php foreach ( $atts['tabs'] as $tab ) : ?>
		<h3 class="fw-accordion-title"><?php echo esc_html($tab['tab_title']); ?></h3>
		<div class="fw-accordion-content">
			<div><?php echo do_shortcode( $tab['tab_content'] ); ?></div>
		</div>
	<?php endforeach; ?>
</div>