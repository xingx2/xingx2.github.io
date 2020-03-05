<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'id' => array( 'type' => 'unique' ),
	'clients_slider' => array(
		'label'         => esc_html__( 'Clients', 'kerge-shortcodes' ),
		'popup-title'   => esc_html__( 'Add/Edit Client Item', 'kerge-shortcodes' ),
		'desc'          => esc_html__( 'Here you can add, remove and edit Clients.', 'kerge-shortcodes' ),
		'type'          => 'addable-popup',
		'template'      => '{{=client_title}}',
		'popup-options' => array(
			'client_logo' => array(
				'label' => esc_html__( 'Logo', 'kerge-shortcodes' ),
				'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'kerge-shortcodes' ),
				'type'  => 'upload',
			),
			'client_title'      => array(
				'label' => esc_html__( 'Title', 'kerge-shortcodes' ),
				'desc'  => esc_html__( 'Link to the Clients website', 'kerge-shortcodes' ),
				'type'  => 'text'
			),
			'site_url'      => array(
				'label' => esc_html__( 'Website Link', 'kerge-shortcodes' ),
				'desc'  => esc_html__( 'Link to the Clients website', 'kerge-shortcodes' ),
				'type'  => 'text'
			)
		)
	),
	'items'         => array(
		'label' => esc_html__( 'Items on the front: Desktop', 'kerge-shortcodes' ),
		'desc'  => esc_html__( 'Example: 2', 'kerge-shortcodes' ),
		'type'  => 'text',
		'value' => '3'
	),
	'items_tablet'         => array(
		'label' => esc_html__( 'Items on the front: Tablet', 'kerge-shortcodes' ),
		'desc'  => esc_html__( 'Example: 2', 'kerge-shortcodes' ),
		'type'  => 'text',
		'value' => '2'
	),
	'items_mobile'         => array(
		'label' => esc_html__( 'Items on the front: Mobile', 'kerge-shortcodes' ),
		'desc'  => esc_html__( 'Example: 2', 'kerge-shortcodes' ),
		'type'  => 'text',
		'value' => '1'
	)
);