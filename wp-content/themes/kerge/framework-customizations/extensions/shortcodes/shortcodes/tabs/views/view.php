<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $tabs_id = uniqid('fw-tabs-'); ?>
<?php
/*
 * the `.fw-tabs-container` div also supports
 * a `tabs-justified` class, that strethes the tabs
 * to the width of the whole container
 */
?>
<div class="fw-tabs-container" id="<?php echo esc_attr($tabs_id); ?>">
	<div class="fw-tabs">
		<ul>
			<?php foreach ($atts['tabs'] as $key => $tab) : ?>
				<li><a href="#<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>"><?php echo esc_html($tab['tab_title']); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php foreach ( $atts['tabs'] as $key => $tab ) : ?>
		<div class="fw-tab-content" id="<?php echo esc_attr($tabs_id . '-' . ($key + 1)); ?>">
			<div><?php echo do_shortcode( $tab['tab_content'] ) ?></div>
		</div>
	<?php endforeach; ?>
</div>