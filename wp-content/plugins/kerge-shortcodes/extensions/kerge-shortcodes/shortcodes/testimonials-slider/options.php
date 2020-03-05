<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'id' => array( 'type' => 'unique' ),
	'title'         => array(
		'label' => esc_html__( 'Title', 'kerge-shortcodes' ),
		'desc'  => esc_html__( 'Option Testimonials Title', 'kerge-shortcodes' ),
		'type'  => 'text',
	),
	'testimonials_style' => array(
	    'type'  => 'select',
	    'value' => 'second-style',
	    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
	    'label' => __('Testimonials Style', 'kerge'),
	    'choices' => array(
	        'first-style' => __('Style 1', 'kerge'),
	        'second-style' => __('Style 2', 'kerge'),
	    ),
	    'no-validate' => false,
	),
	'testimonials_slider' => array(
		'label'         => esc_html__( 'Testimonials', 'kerge-shortcodes' ),
		'popup-title'   => esc_html__( 'Add/Edit Testimonial', 'kerge-shortcodes' ),
		'desc'          => esc_html__( 'Here you can add, remove and edit your Testimonials.', 'kerge-shortcodes' ),
		'type'          => 'addable-popup',
		'template'      => '{{=author_name}}',
		'popup-options' => array(
			'content'       => array(
				'label' => esc_html__( 'Quote', 'kerge-shortcodes' ),
				'desc'  => esc_html__( 'Enter the testimonial here', 'kerge-shortcodes' ),
				'type'  => 'textarea',
			),
			'author_avatar' => array(
				'label' => esc_html__( 'Image', 'kerge-shortcodes' ),
				'desc'  => esc_html__( 'Either upload a new, or choose an existing image from your media library', 'kerge-shortcodes' ),
				'type'  => 'upload',
			),
			'author_name'   => array(
				'label' => esc_html__( 'Name', 'kerge-shortcodes' ),
				'desc'  => esc_html__( 'Enter the Name of the Person to quote', 'kerge-shortcodes' ),
				'type'  => 'text'
			),
			'author_company'   => array(
				'label' => esc_html__( 'Company', 'kerge-shortcodes' ),
				'desc'  => esc_html__( 'Enter the Company Name', 'kerge-shortcodes' ),
				'type'  => 'text'
			),
			'site_url'      => array(
				'label' => esc_html__( 'Website Link', 'kerge-shortcodes' ),
				'desc'  => esc_html__( 'Link to the Persons website', 'kerge-shortcodes' ),
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