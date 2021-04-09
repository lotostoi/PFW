<?php
if ( ! function_exists( 'boldthemes_customize_heading_style' ) ) {
	function boldthemes_customize_heading_style( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[heading_style]', array(
			'default'           => BoldThemes_Customize_Default::$data['heading_style'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'heading_style', array(
			'label'     => esc_html__( 'Heading Style', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_typography_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[heading_style]',
			'priority'  => 100,
			'type'      => 'select',
			'choices'   => array(
			'default' => esc_html__( 'Default', 'denticare' ),
			'compact' => esc_html__( 'Compact (small line height + bold)', 'denticare' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_heading_style' );

// BUTTONS FONT

if ( ! function_exists( 'boldthemes_customize_button_font' ) ) {
	function boldthemes_customize_button_font( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[button_font]', array(
			'default'           => urlencode( BoldThemes_Customize_Default::$data['button_font'] ),
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'button_font', array(
			'label'     => esc_html__( 'Button Font', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[button_font]',
			'priority'  => 99,
			'type'      => 'select',
			'choices'   => BoldThemesFramework::$customize_fonts
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_button_font' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_button_font' );

// MENU FONT SIZE

if ( ! function_exists( 'boldthemes_customize_menu_font_size' ) ) {
	function boldthemes_customize_menu_font_size( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[menu_font_size]', array(
			'default'           => BoldThemes_Customize_Default::$data['menu_font_size'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'menu_font_size', array(
			'label'     => esc_html__( 'Menu Font Size', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[menu_font_size]',
			'priority'  => 100,
			'type'      => 'select',
			'choices'   => array(
				'12'  	=> esc_html__( '12px', 'denticare' ),
				'13'  	=> esc_html__( '13px', 'denticare' ),
				'14'  	=> esc_html__( '14px', 'denticare' ),
				'15'  	=> esc_html__( '15px', 'denticare' ),
				'16'  	=> esc_html__( '16px', 'denticare' ),
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_menu_font_size' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_menu_font_size' );

// MENU FOCUS ELEMENT OPTION

if ( ! function_exists( 'boldthemes_customize_menu_focus_element' ) ) {
	function boldthemes_customize_menu_focus_element( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[menu_focus_element]', array(
			'default'           => BoldThemes_Customize_Default::$data['menu_focus_element'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'menu_focus_element', array(
			'label'     => esc_html__( 'Menu Focus Element', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_header_footer_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[menu_focus_element]',
			'priority'  => 60,
			'description' => esc_html__( 'Choose a design of the element that will be used for hover / selected element on menu items, filters, etc. Preloaders, filters, simple tabs and WooCommerce account tabs will also match this style.', 'denticare' ),
			'type'      => 'select',
			'choices'   => array(
				'Circle'  			=> esc_html__( 'Circle', 'denticare' ),
				'OutlineCircle'  	=> esc_html__( 'Outline circle', 'denticare' ),
				'Square'  			=> esc_html__( 'Square', 'denticare' ),
				'OutlineSquare'  	=> esc_html__( 'Outline square', 'denticare' ),
				'Dash'  			=> esc_html__( 'Dash / Line', 'denticare' ),
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_menu_focus_element' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_menu_focus_element' );

// DASH DESIGN

if ( ! function_exists( 'boldthemes_customize_template_dash_design' ) ) {
	function boldthemes_customize_template_dash_design( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[template_dash_design]', array(
			'default'           => BoldThemes_Customize_Default::$data['template_dash_design'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'template_dash_design', array(
			'label'     => esc_html__( 'Template Headline Dash design', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_general_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[template_dash_design]',
			'priority'  => 100,
			'description' => esc_html__( 'Choose a design of the element that will be used default Page Headlines, sidebar headlines, etc.', 'denticare' ),
			'type'      => 'select',
			'choices'   => array(
				'Circle'  			=> esc_html__( 'Circle', 'denticare' ),
				'OutlineCircle'  	=> esc_html__( 'Outline circle', 'denticare' ),
				'Square'  			=> esc_html__( 'Square', 'denticare' ),
				'OutlineSquare'  	=> esc_html__( 'Outline square', 'denticare' ),
				''  				=> esc_html__( 'Dash / Line', 'denticare' ),
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_template_dash_design' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_template_dash_design' );

// DASH DESIGN

if ( ! function_exists( 'boldthemes_customize_template_headline_style' ) ) {
	function boldthemes_customize_template_headline_style( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[template_headline_style]', array(
			'default'           => BoldThemes_Customize_Default::$data['template_headline_style'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'template_headline_style', array(
			'label'     => esc_html__( 'Default Template Headline style', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_general_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[template_headline_style]',
			'priority'  => 100,
			'description' => esc_html__( 'Choose a style of default template headline', 'denticare' ),
			'type'      => 'select',
			'choices'   => array(
				''  				=> esc_html__( 'Default behaviour, depending on whether featured image is selected', 'denticare' ),
				'Light'  			=> esc_html__( 'Light background / image overlay, dark font', 'denticare' ),
				'Dark'  			=> esc_html__( 'Dark background / image overlay, light font', 'denticare' ),
				'Accent'  			=> esc_html__( 'Accent background / image overlay, light font', 'denticare' ),
				'Alternate'  		=> esc_html__( 'Alternate background / image overlay, light font', 'denticare' ),
				'AccentAlternate'  	=> esc_html__( 'Accent to alternate background / image overlay, light font', 'denticare' ),
				'AlternateAccent'	=> esc_html__( 'Alternate to accent background / image overlay, light font', 'denticare' )
			)
		));
	}
}
add_action( 'customize_register', 'boldthemes_customize_template_headline_style' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_template_headline_style' );

// SHOP SALE TAG DESIGN
if ( ! function_exists( 'boldthemes_customize_shop_sale_tag_design' ) ) {
	function boldthemes_customize_shop_sale_tag_design( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[shop_sale_tag_design]', array(
			'default'           => BoldThemes_Customize_Default::$data['shop_sale_tag_design'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'shop_sale_tag_design', array(
			'label'     => esc_html__( 'Shop Sale Tag Design', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_shop_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[shop_sale_tag_design]',
			'priority'  => 98,
			'description' => esc_html__( 'Choose a design for shop sale tag.', 'denticare' ),
			'type'      => 'select',
			'choices'   => array(
			'hard-rounded' => esc_html__( 'Hard Rounded', 'denticare' ),
			'hard-rounded-top-left' => esc_html__( 'Hard Rounded except top left corner', 'denticare' ),
			'hard-rounded-top-right' => esc_html__( 'Hard Rounded except top right corner', 'denticare' ),
			'hard-rounded-bottom-left' => esc_html__( 'Hard Rounded except bottom left corner', 'denticare' ),
			'hard-rounded-bottom-right' => esc_html__( 'Hard Rounded except bottom right corner', 'denticare' ),
			'soft-rounded' => esc_html__( 'Soft Rounded', 'denticare' ),
			'soft-rounded-top-left' => esc_html__( 'Soft Rounded except top left corner', 'denticare' ),
			'soft-rounded-top-right' => esc_html__( 'Soft Rounded except top right corner', 'denticare' ),
			'soft-rounded-bottom-left' => esc_html__( 'Soft Rounded except bottom left corner', 'denticare' ),
			'soft-rounded-bottom-right' => esc_html__( 'Soft Rounded except bottom right corner', 'denticare' ),
			'square' => esc_html__( 'Square', 'denticare' )
			)
		));	
	}
}
add_action( 'customize_register', 'boldthemes_customize_shop_sale_tag_design' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_shop_sale_tag_design' );

// CUSTOM 404 IMAGE
if ( ! function_exists( 'boldthemes_customize_image_404' ) ) {
	function boldthemes_customize_image_404( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[image_404]', array(
			'default'           => BoldThemes_Customize_Default::$data['image_404'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_image'
		));
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_404', array(
			'label'    => esc_html__( 'Custom Error 404 Page Image', 'denticare' ),
			'section'  => BoldThemesFramework::$pfx . '_general_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[image_404]',
			'priority' => 121,
			'context'  => BoldThemesFramework::$pfx . '_image_404'
		)));
	}
}
add_action( 'customize_register', 'boldthemes_customize_image_404' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_image_404' );

// Show logo and logo widgets
if ( ! function_exists( 'boldthemes_customize_show_logo_and_logo_widgets' ) ) {
	function boldthemes_customize_show_logo_and_logo_widgets( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[show_logo_and_logo_widgets]', array(
			'default'           => BoldThemes_Customize_Default::$data['show_logo_and_logo_widgets'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'show_logo_and_logo_widgets', array(
			'label'    => esc_html__( 'Show logo and logo widgets on sticky header when menu is below logo', 'denticare' ),
			'section'  => BoldThemesFramework::$pfx . '_header_footer_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[show_logo_and_logo_widgets]',
			'priority' => 61,
			'type'     => 'checkbox'
		));	
	}
}
add_action( 'customize_register', 'boldthemes_customize_show_logo_and_logo_widgets' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_show_logo_and_logo_widgets' );

// Change number ligatures
if ( ! function_exists( 'boldthemes_customize_change_number_ligatures' ) ) {
	function boldthemes_customize_change_number_ligatures( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[change_number_ligatures]', array(
			'default'           => BoldThemes_Customize_Default::$data['change_number_ligatures'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_checkbox'
		));
		$wp_customize->add_control( 'change_number_ligatures', array(
			'label'    => esc_html__( 'Change number ligatures to "uppercase" numbers if they aren\'t aligned by default (if supported by font, such as Playfair Display, Raleway or similar).', 'denticare' ),
			'section'  => BoldThemesFramework::$pfx . '_typo_section',
			'settings' => BoldThemesFramework::$pfx . '_theme_options[change_number_ligatures]',
			'priority' => 200,
			'type'     => 'checkbox'
		));	
	}
}
add_action( 'customize_register', 'boldthemes_customize_change_number_ligatures' );
add_action( 'boldthemes_customize_register', 'boldthemes_customize_change_number_ligatures' );
