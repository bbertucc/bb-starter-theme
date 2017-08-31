<?php
//Add Google API 
function decubing_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyBekoSVXQxTDFrLifAGwzl80VllFSsZa14';
	return $api;	
}
add_filter('acf/fields/google_map/api', 'decubing_acf_google_map_api');

//Add ACF Page Content
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59a2f5fadcdec',
	'title' => 'Page Content (copy)',
	'fields' => array (
		array (
			'key' => 'field_59a2f5fae3602',
			'label' => 'Content Display',
			'name' => 'content_display',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'Standard Page' => 'Standard Page',
				'Segmented Page' => 'Segmented Page',
			),
			'default_value' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array (
			'key' => 'field_59a2f5fae361a',
			'label' => 'Segments',
			'name' => 'segments',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59a2f5fae3602',
						'operator' => '==',
						'value' => 'Segmented Page',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => '+ Add Segment',
			'sub_fields' => array (
				array (
					'key' => 'field_59a2f5fae61b3',
					'label' => 'Segment Type',
					'name' => 'segment_type',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Text' => 'Text',
						'Text and Media' => 'Text and Media',
						'Only Media' => 'Only Media',
						'Callout' => 'Callout',
						'Info Box' => 'Info Box',
						'Testimonials' => 'Testimonials',
						'Filterable Map' => 'Filterable Map',
					),
					'default_value' => array (
					),
					'allow_null' => 1,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_59a2f5fae61ca',
					'label' => 'Text',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text and Media',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Callout',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Info Box',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Testimonials',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Filterable Map',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array (
					'key' => 'field_59a2f5fae6204',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text and Media',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Callout',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Info Box',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Testimonials',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Filterable Map',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59a2f5fae6251',
					'label' => 'Body',
					'name' => 'body',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text and Media',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Callout',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Info Box',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Testimonials',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Filterable Map',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 0,
					'delay' => 0,
				),
				array (
					'key' => 'field_59a3074adf238',
					'label' => 'Testimonials',
					'name' => 'testimonials',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Testimonials',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => '+Add Testimonial',
					'sub_fields' => array (
						array (
							'key' => 'field_59a30765df239',
							'label' => 'Testimonial',
							'name' => 'testimonial',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'new_lines' => '',
						),
						array (
							'key' => 'field_59a307b6df23a',
							'label' => 'Source',
							'name' => 'source',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array (
							'key' => 'field_59a307cedf23b',
							'label' => 'Source Image',
							'name' => 'source_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
				),
				array (
					'key' => 'field_59a2f5fae628a',
					'label' => 'Media',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text and Media',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Only Media',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array (
					'key' => 'field_59a2f5fae62b5',
					'label' => 'Add Media',
					'name' => 'add_media',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text and Media',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Only Media',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Single Media Item' => 'Single Media Item',
						'Portrait and Landscape' => 'Portrait and Landscape',
						'Grid' => 'Grid',
						'Slideshow' => 'Slideshow',
					),
					'default_value' => array (
					),
					'allow_null' => 1,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_59a2f5fae6315',
					'label' => 'Media',
					'name' => 'media',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae62b5',
								'operator' => '==',
								'value' => 'Slideshow',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae62b5',
								'operator' => '==',
								'value' => 'Grid',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => '+ Add Media',
					'sub_fields' => array (
						array (
							'key' => 'field_59a2f5fb050f2',
							'label' => 'Media Type',
							'name' => 'media_type',
							'type' => 'select',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '!=',
										'value' => '',
									),
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '!=',
										'value' => 'Circles',
									),
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '!=',
										'value' => 'Slideshow',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'Image' => 'Image',
								'YouTube Video' => 'YouTube Video',
								'PDF' => 'PDF',
								'Link' => 'Link',
							),
							'default_value' => array (
							),
							'allow_null' => 1,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'return_format' => 'value',
							'placeholder' => '',
						),
						array (
							'key' => 'field_59a2f5fb05107',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_59a2f5fb050f2',
										'operator' => '!=',
										'value' => '',
									),
								),
								array (
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '==',
										'value' => 'Circles',
									),
								),
								array (
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '==',
										'value' => 'Slideshow',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array (
							'key' => 'field_59a2f5fb05117',
							'label' => 'Link URL',
							'name' => 'link_url',
							'type' => 'url',
							'instructions' => 'Enter link to PDF, YouTube Video, or any site. Defaults to the image URL.',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_59a2f5fb050f2',
										'operator' => '!=',
										'value' => '',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
						),
						array (
							'key' => 'field_59a2f5fb05128',
							'label' => 'Caption',
							'name' => 'caption',
							'type' => 'text',
							'instructions' => '50 Character Limit',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '!=',
										'value' => 'Circles',
									),
									array (
										'field' => 'field_59a2f5fb050f2',
										'operator' => '!=',
										'value' => '',
									),
								),
								array (
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '==',
										'value' => 'Slideshow',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => 50,
						),
					),
				),
				array (
					'key' => 'field_59a2f5fae6340',
					'label' => 'Single Media Item',
					'name' => 'single_media_item',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae62b5',
								'operator' => '==',
								'value' => 'Single Media Item',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae62b5',
								'operator' => '==',
								'value' => 'Portrait and Landscape',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'table',
					'sub_fields' => array (
						array (
							'key' => 'field_599f2de62617e',
							'label' => 'Media Type',
							'name' => 'media_type',
							'type' => 'select',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '==',
										'value' => 'Single Media Item',
									),
								),
								array (
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '==',
										'value' => 'Portrait and Landscape',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'Image' => 'Image',
								'YouTube Video' => 'YouTube Video',
								'PDF' => 'PDF',
								'Link' => 'Link',
							),
							'default_value' => array (
							),
							'allow_null' => 1,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'return_format' => 'value',
							'placeholder' => '',
						),
						array (
							'key' => 'field_599f2de62617f',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_599f2de62617e',
										'operator' => '!=',
										'value' => '',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array (
							'key' => 'field_599f2de626183',
							'label' => 'Caption',
							'name' => 'caption',
							'type' => 'text',
							'instructions' => '50 Character Limit',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_599f2de62617e',
										'operator' => '!=',
										'value' => '',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => 50,
						),
						array (
							'key' => 'field_599f2de626182',
							'label' => 'Link URL',
							'name' => 'link_url',
							'type' => 'url',
							'instructions' => 'Enter link to PDF, YouTube Video, or any site. Defaults to the image URL.',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_599f2de62617e',
										'operator' => '!=',
										'value' => '',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
						),
					),
				),
				array (
					'key' => 'field_59a2f5fae635f',
					'label' => 'Portrait Media Item',
					'name' => 'portrait_media_item',
					'type' => 'group',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae62b5',
								'operator' => '==',
								'value' => 'Portrait and Landscape',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'layout' => 'table',
					'sub_fields' => array (
						array (
							'key' => 'field_599f2f1a26188',
							'label' => 'Media Type',
							'name' => 'media_type',
							'type' => 'select',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_59a2f5fae62b5',
										'operator' => '==',
										'value' => 'Portrait and Landscape',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array (
								'Image' => 'Image',
								'YouTube Video' => 'YouTube Video',
								'PDF' => 'PDF',
								'Link' => 'Link',
							),
							'default_value' => array (
							),
							'allow_null' => 1,
							'multiple' => 0,
							'ui' => 0,
							'ajax' => 0,
							'return_format' => 'value',
							'placeholder' => '',
						),
						array (
							'key' => 'field_599f2f1a26189',
							'label' => 'Image',
							'name' => 'image',
							'type' => 'image',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_599f2f1a26188',
										'operator' => '!=',
										'value' => '',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array (
							'key' => 'field_599f2f1a2618a',
							'label' => 'Caption',
							'name' => 'caption',
							'type' => 'text',
							'instructions' => '50 Character Limit',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_599f2f1a26188',
										'operator' => '!=',
										'value' => '',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => 50,
						),
						array (
							'key' => 'field_599f2f1a2618b',
							'label' => 'Link URL',
							'name' => 'link_url',
							'type' => 'url',
							'instructions' => 'Enter link to PDF, YouTube Video, or any site. Defaults to the image URL.',
							'required' => 0,
							'conditional_logic' => array (
								array (
									array (
										'field' => 'field_599f2f1a26188',
										'operator' => '!=',
										'value' => '',
									),
								),
							),
							'wrapper' => array (
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
						),
					),
				),
				array (
					'key' => 'field_59a597e6a938a',
					'label' => 'Portrait Position',
					'name' => 'portrait_position',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae62b5',
								'operator' => '==',
								'value' => 'Portrait and Landscape',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Right of Landscape' => 'Right of Landscape',
						'Left of Landscape' => 'Left of Landscape',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_59a5ce617d48c',
					'label' => 'Map Settings',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Filterable Map',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array (
					'key' => 'field_59a5cd277d48a',
					'label' => 'Map Content',
					'name' => 'map_content',
					'type' => 'checkbox',
					'instructions' => 'Select or add content types to add to map.',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Filterable Map',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'page' => 'page',
						'post' => 'post',
					),
					'allow_custom' => 1,
					'save_custom' => 1,
					'default_value' => array (
					),
					'layout' => 'vertical',
					'toggle' => 0,
					'return_format' => 'value',
				),
				array (
					'key' => 'field_59a5ce0f7d48b',
					'label' => 'Filter Items',
					'name' => 'fiter_items',
					'type' => 'checkbox',
					'instructions' => 'Select or add filter items to add to list.',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Filterable Map',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
					),
					'allow_custom' => 1,
					'save_custom' => 1,
					'default_value' => array (
					),
					'layout' => 'vertical',
					'toggle' => 0,
					'return_format' => 'value',
				),
				array (
					'key' => 'field_59a2f5fae6372',
					'label' => 'Segment Options',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => '',
							),
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => 'Info Box',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array (
					'key' => 'field_59a2f5fae6385',
					'label' => 'Segment Display',
					'name' => 'segment_display',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae62b5',
								'operator' => '==',
								'value' => 'Single Media Item',
							),
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text and Media',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae62b5',
								'operator' => '==',
								'value' => 'Slideshow',
							),
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text and Media',
							),
						),
						array (
							array (
								'field' => 'field_59a2f5fae62b5',
								'operator' => '==',
								'value' => 'Grid',
							),
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Text and Media',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'One Column' => 'One Column',
						'Two Column' => 'Two Column',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_59a592d2ca146',
					'label' => 'Text Position',
					'name' => 'text_position',
					'type' => 'select',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae6385',
								'operator' => '==',
								'value' => 'Two Column',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'Left of Media' => 'Left of Media',
						'Right of Media' => 'Right of Media',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_59a2f5fae6397',
					'label' => 'Background',
					'name' => 'background',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => '',
							),
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => 'Info Box',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'White' => 'White',
						'Light Shade' => 'Light Shade',
						'Image' => 'Image',
					),
					'default_value' => array (
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_59a2f649a7b19',
					'label' => 'Background Image',
					'name' => 'background_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae6397',
								'operator' => '==',
								'value' => 'Image',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array (
					'key' => 'field_59a735011da39',
					'label' => 'Add background overlay?',
					'name' => 'add_background_overlay',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Callout',
							),
							array (
								'field' => 'field_59a2f5fae6397',
								'operator' => '==',
								'value' => 'Image',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array (
					'key' => 'field_59a734cf1da38',
					'label' => 'Make callout large?',
					'name' => 'make_callout_large',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '==',
								'value' => 'Callout',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array (
					'key' => 'field_59a2f5fae63aa',
					'label' => 'Add scroll icon?',
					'name' => 'add_scroll_icon',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => '',
							),
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => 'Info Box',
							),
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => 'Filterable Map',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array (
					'key' => 'field_59a2f5fae63e6',
					'label' => 'Add button?',
					'name' => 'add_button',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => 'Info Box',
							),
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => '',
							),
							array (
								'field' => 'field_59a2f5fae61b3',
								'operator' => '!=',
								'value' => 'Filterable Map',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array (
					'key' => 'field_59a2f5fae640f',
					'label' => 'Button Text',
					'name' => 'button_text',
					'type' => 'text',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae63e6',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59a2f5fae6432',
					'label' => 'Button URL',
					'name' => 'button_url',
					'type' => 'url',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59a2f5fae63e6',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
		array (
			'key' => 'field_59a2f5fae3654',
			'label' => 'Standard Content',
			'name' => 'standard_content',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59a2f5fae3602',
						'operator' => '==',
						'value' => 'Standard Page',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'the_content',
	),
	'active' => 1,
	'description' => '',
));

endif;
?>