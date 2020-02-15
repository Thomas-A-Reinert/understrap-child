<?php
/**
 * Kirki Advanced Customizer
 *
 * This is a sample configuration file to demonstrate all fields & capabilities.
 * 
 * CAUTION:
 * USE THIS WITH THE DEVELOP BRANCH ON THE GITHUB REPOSITORY:
 * https://github.com/aristath/kirki/tree/develop
 *
 * @package Kirki
 */

function theme_color_palette() {
  // Palette Generator: http://mcg.mbitson.com/#!?mcgpalette0=%23455a64
  return array(
    '#00bcd4',
    '#009CFC',
    '#17A7FF',
    '#4ABAFF',
    '#7DCDFF',
    '#1F2E36',
    '#364852',
    '#3E525C',
    '#455A64',
    '#61737B',
    '#7D8C93',
    '#A2ADB2',
    '#C7CED1',
    '#E9EBEC',
  );
}//end fallback

/**
 * Create our panels and sections.
 *
 * For this example we'll be creating 2 panels (1 for default WordPress controls and another for our custom controls)
 * and then a separate section for each control type.
 */
function kirki_demo_panels_sections( $wp_customize ) {
	/**
	 * Add panels
	 */
	$wp_customize->add_panel( 'default_controls', array(
		'priority'    => 10,
		'title'       => __( 'Default WordPress Controls', 'understrap-extended-child' ),
		'description' => __( 'This panel contains the default WordPress Controls', 'understrap-extended-child' ),
	) );

	$wp_customize->add_panel( 'kirki_controls', array(
		'priority'    => 10,
		'title'       => __( 'Kirki Custom Controls', 'ornea' ),
		'description' => __( 'This panel contains the Kirki custom controls', 'understrap-extended-child' ),
	) );

	/**
	 * Add sections
	 */
	$wp_customize->add_section( 'radio_section', array(
		'title'       => __( 'Radio Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'default_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'checkbox_section', array(
		'title'       => __( 'Checkbox Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'default_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'color_section', array(
		'title'       => __( 'Color Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'default_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'dropdown_pages_section', array(
		'title'       => __( 'Dropdown-Pages Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'default_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'image_section', array(
		'title'       => __( 'Image Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'default_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'select_section', array(
		'title'       => __( 'Select Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'default_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'text_section', array(
		'title'       => __( 'Text Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'default_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'textarea_section', array(
		'title'       => __( 'Textarea Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'default_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'upload_section', array(
		'title'       => __( 'Upload Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'default_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'radio_image_section', array(
		'title'       => __( 'Radio-Image Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'radio_buttonset_section', array(
		'title'       => __( 'Radio-Buttonset Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'background_section', array(
		'title'       => __( 'Backgrounds', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
  ) );
  
  $wp_customize->add_section( 'typography_section', array(
		'title'       => __( 'Typography', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'Adjust Typography with Google fonts', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'multicheck_section', array(
		'title'       => __( 'Multicheck Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'slider_section', array(
		'title'       => __( 'Slider Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'switch_section', array(
		'title'       => __( 'Switch Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'toggle_section', array(
		'title'       => __( 'Toggle Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'sortable_section', array(
		'title'       => __( 'Sortable Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'number_section', array(
		'title'       => __( 'Number Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'custom_section', array(
		'title'       => __( 'Custom Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

	$wp_customize->add_section( 'palette_section', array(
		'title'       => __( 'Palette Control', 'understrap-extended-child' ),
		'priority'    => 10,
		'panel'       => 'kirki_controls',
		'description' => __( 'This is the section description', 'understrap-extended-child' ),
	) );

}
add_action( 'customize_register', 'kirki_demo_panels_sections' );


/**
 * Add our controls.
 */
function kirki_demo_controls( $controls ) {

	$controls[] = array(
		'type'        => 'radio',
		'setting'     => 'radio_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'radio_section',
		'default'     => 'option-1',
		'priority'    => 10,
		'choices'     => array(
			'option-1' => __( 'Option 1', 'understrap-extended-child' ),
			'option-2' => __( 'Option 2', 'understrap-extended-child' ),
			'option-3' => __( 'Option 3', 'understrap-extended-child' ),
			'option-4' => __( 'Option 4', 'understrap-extended-child' ),
		),
	);

	// checked
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'checkbox_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'checkbox_section',
		'default'     => 1,
		'priority'    => 10,
	);

	// unchecked
	$controls[] = array(
		'type'        => 'checkbox',
		'setting'     => 'checkbox_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'checkbox_section',
		'default'     => 0,
		'priority'    => 10,
	);

	$controls[] = array(
		'type'        => 'color',
		'setting'     => 'color_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'color_section',
		'default'     => '#0088cc',
		'priority'    => 10,
		'output'      => array(
			array(
				'element'  => 'a, a:visited',
				'property' => 'color',
				'units'    => ' !important'
			),
			array(
				'element'  => '#content',
				'property' => 'border-color'
			),
		),
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => 'a, a:visited',
				'function' => 'css',
				'property' => 'color',
			),
			array(
				'element'  => '#content',
				'function' => 'css',
				'property' => 'background-color',
			),
		)
	);

	$controls[] = array(
		'type'        => 'dropdown-pages',
		'setting'     => 'dropdown_pages_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'dropdown_pages_section',
		'priority'    => 10,
	);

	$controls[] = array(
		'type'        => 'image',
		'setting'     => 'image_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'image_section',
		'default'     => '',
		'priority'    => 10,
		'output'      => array(
			array(
				'element'  => 'p',
				'property' => 'background-image',
			),
		),
	);

	$controls[] = array(
		'type'        => 'select',
		'setting'     => 'select_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'select_section',
		'default'     => 'option-1',
		'priority'    => 10,
		'choices'     => array(
			'option-1' => __( 'Option 1', 'understrap-extended-child' ),
			'option-2' => __( 'Option 2', 'understrap-extended-child' ),
			'option-3' => __( 'Option 3', 'understrap-extended-child' ),
			'option-4' => __( 'Option 4', 'understrap-extended-child' ),
		),
	);

	$controls[] = array(
		'type'        => 'text',
		'setting'     => 'text_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'text_section',
		'default'     => 'This is some default text',
		'priority'    => 10,
	);

	$controls[] = array(
		'type'        => 'textarea',
		'setting'     => 'textarea_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'textarea_section',
		'default'     => 'This is some default text',
		'priority'    => 10,
	);

	$controls[] = array(
		'type'        => 'editor',
		'setting'     => 'wysiwyg',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'default'     => '',
		'section'     => 'textarea_section',
	);

	$controls[] = array(
		'type'        => 'upload',
		'setting'     => 'upload_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'upload_section',
		'default'     => '',
		'priority'    => 10,
	);

	$controls[] = array(
		'type'        => 'radio-image',
		'setting'     => 'radio_image_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'radio_image_section',
		'default'     => 'option-1',
		'priority'    => 10,
		'choices'     => array(
			'option-1' => admin_url() . '/images/align-left-2x.png',
			'option-2' => admin_url() . '/images/align-center-2x.png',
			'option-3' => admin_url() . '/images/align-right-2x.png',
		),
	);

	$controls[] = array(
		'type'        => 'radio-buttonset',
		'setting'     => 'radio_buttonset_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'radio_buttonset_section',
		'default'     => 'option-1',
		'priority'    => 10,
		'choices'     => array(
			'option-1' => __( 'Option 1', 'understrap-extended-child' ),
			'option-2' => __( 'Option 2', 'understrap-extended-child' ),
			'option-3' => __( 'Option 3', 'understrap-extended-child' ),
		),
	);

	// $controls[] = array(
	// 	'type'        => 'background',
	// 	'setting'     => 'background-header',
	// 	'label'       => __( 'Header Background', 'understrap-extended-child' ),
	// 	'section'     => 'background_section',
	// 	'default'     => array(
	// 		'color'    => '#455a64',
	// 		'opacity'  => 100,
	// 	),
	// 	'priority'    => 10,
	// 	'output'      => array(
  //     array(
  //         'element'  => '#main-nav.navbar.navbar-dark',
  //         'property' => 'background-color',
  //         'suffix'   => ' !important',
  //     ),
  //   ),
  // );
  
  // $controls[] = array(
	// 	'type'        => 'background',
	// 	'setting'     => 'background-page',
	// 	'label'       => __( 'Page Background', 'understrap-extended-child' ),
	// 	'section'     => 'background_section',
	// 	'default'     => array(
	// 		'color'    => '#5c7884',
	// 		'image'    => '',
	// 		'repeat'   => 'no-repeat',
	// 		'size'     => 'cover',
	// 		'attach'   => 'fixed',
	// 		'position' => 'left-top',
	// 		'opacity'  => 100,
	// 	),
	// 	'priority'    => 10,
	// 	'output'      => 'body, body.custom-background',
  // );
  
  $controls[] = array(
    'type'        => 'color-palette',
    'settings'    => 'background-header',
    'label'       => esc_html__( 'Header Color', 'understrap-extended-child' ),
    // 'description' => esc_html__( 'This is a color-palette control', 'understrap-extended-child' ),
    'section'     => 'background_section',
    'default'     => '#3E525C',
    'choices'     => [
      'colors' => theme_color_palette(),
      'style'  => 'round',
    ],
    'output'      => array(
      array(
          'element'  => '#main-nav.navbar.navbar-dark',
          'property' => 'background-color',
          'suffix'   => ' !important',
      ),
    ),
  );

  $controls[] = array(
    'type'        => 'color-palette',
    'settings'    => 'background-page',
    'label'       => esc_html__( 'Page Background Color', 'understrap-extended-child' ),
    // 'description' => esc_html__( 'This is a color-palette control', 'understrap-extended-child' ),
    'section'     => 'background_section',
    'default'     => '#E9EBEC',
    'choices'     => [
      'colors' => theme_color_palette(),
      'style'  => 'round',
    ],
    'output'      => array(
      array(
          'element'  => 'body, body.custom-background',
          'property' => 'background-color',
          // 'suffix'   => ' !important',
      ),
    ),
  );

  Kirki::add_field( 'theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'headline-font',
    'label'       => esc_html__( 'Headline Font', 'understrap-extended-child' ),
    'section'     => 'typography_section',
    'default'     => [
      'font-family'    => 'Roboto',
      'variant'        => 'regular',
      'line-height'    => '1.5',
      'letter-spacing' => '0',
      'color'          => '#333333',
      'text-transform' => 'none',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
      [
        'element' => 'h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6',
      ],
    ],
  ] );

  Kirki::add_field( 'theme_config_id', [
    'type'        => 'typography',
    'settings'    => 'body-font',
    'label'       => esc_html__( 'Body Font', 'understrap-extended-child' ),
    'section'     => 'typography_section',
    'default'     => [
      'font-family'    => 'Roboto',
      'variant'        => 'regular',
      'font-size'      => '14px',
      'line-height'    => '1.5',
      'letter-spacing' => '0',
      'color'          => '#ffffff',
      'text-transform' => 'none',
      'text-align'     => 'left',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
      [
        'element' => 'body',
      ],
    ],
  ] );

	$controls[] = array(
		'type'        => 'multicheck',
		'setting'     => 'multicheck_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'multicheck_section',
		'default'     => array(
			'option-1',
			'option-2'
		),
		'priority'    => 10,
		'choices'     => array(
			'option-1' => __( 'Option 1', 'understrap-extended-child' ),
			'option-2' => __( 'Option 2', 'understrap-extended-child' ),
			'option-3' => __( 'Option 3', 'understrap-extended-child' ),
			'option-4' => __( 'Option 4', 'understrap-extended-child' ),
		),
	);

	// step = 10
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'slider_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'slider_section',
		'default'     => 20,
		'priority'    => 10,
		'choices'     => array(
			'min'  => -100,
			'max'  => 100,
			'step' => 10
		),
	);

	// step = 0.01
	$controls[] = array(
		'type'        => 'slider',
		'setting'     => 'slider_demo_2',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'slider_section',
		'default'     => 1.58,
		'priority'    => 20,
		'choices'     => array(
			'min'  => 0,
			'max'  => 5,
			'step' => .01
		),
	);

	// Off
	$controls[] = array(
		'type'        => 'switch',
		'setting'     => 'switch_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'switch_section',
		'default'     => 0,
		'priority'    => 10,
	);

	// On
	$controls[] = array(
		'type'        => 'switch',
		'setting'     => 'switch_demo_2',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'switch_section',
		'default'     => 1,
		'priority'    => 10,
	);

	// Off
	$controls[] = array(
		'type'        => 'toggle',
		'setting'     => 'toggle_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'toggle_section',
		'default'     => 0,
		'priority'    => 10,
	);

	// On
	$controls[] = array(
		'type'        => 'toggle',
		'setting'     => 'toggle_demo_2',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'toggle_section',
		'default'     => 1,
		'priority'    => 10,
	);

	$controls[] = array(
		'type'        => 'sortable',
		'setting'     => 'sortable_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'sortable_section',
		'default'     => array(
			'option-3',
			'option-1',
			'option-4'
		),
		'priority'    => 10,
		'choices'     => array(
			'option-1' => __( 'Option 1', 'understrap-extended-child' ),
			'option-2' => __( 'Option 2', 'understrap-extended-child' ),
			'option-3' => __( 'Option 3', 'understrap-extended-child' ),
			'option-4' => __( 'Option 4', 'understrap-extended-child' ),
			'option-5' => __( 'Option 5', 'understrap-extended-child' ),
			'option-6' => __( 'Option 6', 'understrap-extended-child' ),
		),
	);

	$controls[] = array(
		'type'        => 'number',
		'setting'     => 'number_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'number_section',
		'default'     => '42',
		'priority'    => 10,
	);

	$controls[] = array(
		'type'        => 'custom',
		'setting'     => 'custom_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'custom_section',
		'default'     => '<div style="padding: 30px;background-color: #333; color: #fff; border-radius: 50px;">You can enter custom markup in this control and use it however you want</div>',
		'priority'    => 10,
	);

	// Define custom palettes
	$controls[] = array(
		'type'        => 'palette',
		'setting'     => 'palette_demo',
		'label'       => __( 'This is the label', 'understrap-extended-child' ),
		'description' => __( 'This is the control description', 'understrap-extended-child' ),
		'help'        => __( 'This is some extra help. You can use this to add some additional instructions for users. The main description should go in the "description" of the field, this is only to be used for help tips.', 'understrap-extended-child' ),
		'section'     => 'palette_section',
		'default'     => 'red',
		'priority'    => 10,
		'choices'     => array(
			'red' => array(
				'#ef9a9a',
				'#f44336',
				'#ff1744',
			),
			'pink' => array(
				'#fce4ec',
				'#f06292',
				'#e91e63',
				'#ad1457',
				'#f50057',
			),
			'cyan' => array(
				'#e0f7fa',
				'#80deea',
				'#26c6da',
				'#0097a7',
				'#00e5ff',
			),
		),
	);

	return $controls;

}
add_filter( 'kirki/controls', 'kirki_demo_controls' );

/**
 * Configuration sample for the Kirki Customizer
 */
function kirki_understrap_extended_child_config() {

    $args = array(
        'logo_image'    => 'https://kirki.org/images/logo.png',
        'description'   => __( 'Welcome to UnderStrap Extended Child (UEC).', 'understrap-extended-child' ),
        'color_accent'  => '#00bcd4',
        'color_back'    => '#455a64',
    );

    return $args;

}

add_filter( 'kirki/config', 'kirki_understrap_extended_child_config' );
