<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c058fc0484a9',
	'title' => 'UCF Theme Settings',
	'fields' => array(
		array(
			'key' => 'field_5c05900d0a12e',
			'label' => 'Sidebar',
			'name' => 'ucf_theme_sidebar',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'no_sidebar' => 'No Sidebar',
				'left_sidebar' => 'Left Sidebar',
				'right_sidebar' => 'Right Sidebar',
			),
			'default_value' => array(
				0 => 'right_sidebar',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5c0594a2ff53e',
			'label' => 'Content Layout',
			'name' => 'ucf_theme_content_layout',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'container' => 'Boxed',
				'container-fluid' => 'Full Width',
			),
			'default_value' => array(
				0 => 'container',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5c05953c2ef72',
			'label' => 'Disable',
			'name' => 'ucf_theme_disable',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top_padding' => 'Content Top Padding',
			),
			'allow_custom' => 0,
			'default_value' => array(
			),
			'layout' => 'vertical',
			'toggle' => 0,
			'return_format' => 'value',
			'save_custom' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'default',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
