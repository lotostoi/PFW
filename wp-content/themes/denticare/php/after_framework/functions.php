<?php

// BUTTONS - shape

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_button', 'shape' );
}
if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_button', array(		
		array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'denticare' ), 
			'group' => esc_html__( 'Design', 'denticare' ),
			'value' => array(
				esc_html__('Inherit', 'denticare' ) => 'inherit',
				esc_html__('Square', 'denticare' ) => 'square',
				esc_html__('Hard Rounded', 'denticare' ) => 'round',
				esc_html__('Hard Rounded except top left corner', 'denticare' ) => 'round-top-left',
				esc_html__('Hard Rounded except top right corner', 'denticare' ) => 'round-top-right',
				esc_html__('Hard Rounded except bottom left corner', 'denticare' ) => 'round-bottom-left',
				esc_html__('Hard Rounded except bottom right corner', 'denticare' ) => 'round-bottom-right',
				esc_html__('Soft Rounded', 'denticare' ) => 'rounded',
				esc_html__('Soft Rounded except top left corner', 'denticare' ) => 'rounded-top-left',
				esc_html__('Soft Rounded except top right corner', 'denticare' ) => 'rounded-top-right',
				esc_html__('Soft Rounded except bottom left corner', 'denticare' ) => 'rounded-bottom-left',
				esc_html__('Soft Rounded except bottom right corner', 'denticare' ) => 'rounded-bottom-right'
			)
		),
	));
}

// HEADLINE - new: dash_type, edited: size, dash, 

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_headline', 'size' );
	bt_bb_remove_params( 'bt_bb_headline', 'dash' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_headline', array(		
		array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Size', 'denticare' ), 'description' => 'Predefined heading sizes, independent of html tag',
			'value' => array(
				esc_html__( 'Inherit', 'denticare' ) => 'inherit',
				esc_html__( 'Extra Small', 'denticare' ) => 'extrasmall',
				esc_html__( 'Small', 'denticare' ) => 'small',
				esc_html__( 'Medium', 'denticare' ) => 'medium',
				esc_html__( 'Normal', 'denticare' ) => 'normal',
				esc_html__( 'Large', 'denticare' ) => 'large',
				esc_html__( 'Extra large', 'denticare' ) => 'extralarge',
				esc_html__( 'Huge', 'denticare' ) => 'huge',
				esc_html__( 'Extra huge', 'denticare' ) => 'extrahuge'
			)
		),			
		array( 'param_name' => 'dash', 'type' => 'dropdown', 'heading' => esc_html__( 'Dash', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
			'value' => array(
				esc_html__( 'None', 'denticare' ) => 'none',
				esc_html__( 'Bottom', 'denticare' ) => 'bottom'
			)
		),
		array( 'param_name' => 'dash_type', 'type' => 'dropdown', 'heading' => esc_html__( 'Dash design type', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
			'value' => array(
				esc_html__( 'Dash', 'denticare' ) => 'none',
				esc_html__( 'Circle', 'denticare' ) => 'circle',
				esc_html__( 'Outline Circle', 'denticare' ) => 'outlinecircle',
				esc_html__( 'Square', 'denticare' ) => 'square',
				esc_html__( 'Outline Square', 'denticare' ) => 'outlinesquare'
			)
		),
	));
}

function denticare_bt_bb_headline_class( $class, $atts ) {
	if ( isset( $atts['dash_type'] ) && $atts['dash_type'] != '' ) {
		$class[] = 'bt_bb_dash_type_' . $atts['dash_type'];
	}
	return $class;
}
add_filter( 'bt_bb_headline_class', 'denticare_bt_bb_headline_class', 10, 2 );

// ICON - new: vertical position ; edited: style, shape

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_icon', 'style' );
	bt_bb_remove_params( 'bt_bb_icon', 'shape' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_icon', array(
		array( 'param_name' => 'vertical_position', 'type' => 'dropdown', 'heading' => esc_html__( 'Vertical position', 'denticare' ),
			'value' => array(
				esc_html__( 'Default', 'denticare' ) => '',
				esc_html__( 'Half above', 'denticare' ) => 'half_above',
				esc_html__( 'Full above', 'denticare' ) => 'full_above'
			)
		),
		array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Style', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
			'value' => array(
				esc_html__('Outline', 'denticare' ) => 'outline',
				esc_html__('Light Outline', 'denticare' ) => 'lightoutline',
				esc_html__('Filled', 'denticare' ) => 'filled',
				esc_html__('Filled with light background', 'denticare' ) => 'lightfilled',
				esc_html__('Borderless', 'denticare' ) => 'borderless'
			)
		),
		array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
			'value' => array(
				esc_html__('Circle', 'denticare' ) => 'circle',
				esc_html__('Circle except top left corner', 'denticare' ) => 'circle-top-left',
				esc_html__('Circle except top right corner', 'denticare' ) => 'circle-top-right',
				esc_html__('Circle except bottom left corner', 'denticare' ) => 'circle-bottom-left',
				esc_html__('Circle except bottom right corner', 'denticare' ) => 'circle-bottom-right',
				esc_html__('Square', 'denticare' ) => 'square',
				esc_html__('Soft Rounded', 'denticare' ) => 'round',
				esc_html__('Soft Rounded except top left corner', 'denticare' ) => 'round-top-left',
				esc_html__('Soft Rounded except top right corner', 'denticare' ) => 'round-top-right',
				esc_html__('Soft Rounded except bottom left corner', 'denticare' ) => 'round-bottom-left',
				esc_html__('Soft Rounded except bottom right corner', 'denticare' ) => 'round-bottom-right'
			)
		)
	));
}

function denticare_bt_bb_icon_class( $class, $atts ) {
	if ( isset( $atts['vertical_position'] ) && $atts['vertical_position'] != '' ) {
		$class[] = 'bt_bb_vertical_position' . '_' . $atts['vertical_position'];
	}
	return $class;
}
add_filter( 'bt_bb_icon_class', 'denticare_bt_bb_icon_class', 10, 2 );

// IMAGE - shape

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_image', 'shape' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_image', array(		
		array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Shape', 'denticare' ),
			'value' => array(
				esc_html__( 'Square', 'denticare' ) => 'square',
				esc_html__( 'Soft Rounded', 'denticare' ) => 'soft-rounded',
				esc_html__( 'Soft Rounded except top left corner', 'denticare' ) => 'soft-rounded-top-left',
				esc_html__( 'Soft Rounded except top right corner', 'denticare' ) => 'soft-rounded-top-right',
				esc_html__( 'Soft Rounded except bottom left corner', 'denticare' ) => 'soft-rounded-bottom-left',
				esc_html__( 'Soft Rounded except bottom right corner', 'denticare' ) => 'soft-rounded-bottom-right',
				esc_html__( 'Hard Rounded', 'denticare' ) => 'hard-rounded',
				esc_html__( 'Hard Rounded except top left corner', 'denticare' ) => 'hard-rounded-top-left',
				esc_html__( 'Hard Rounded except top right corner', 'denticare' ) => 'hard-rounded-top-right',
				esc_html__( 'Hard Rounded except bottom left corner', 'denticare' ) => 'hard-rounded-bottom-left',
				esc_html__( 'Hard Rounded except bottom right corner', 'denticare' ) => 'hard-rounded-bottom-right'
			)
		),
	));
}

// SERVICE - align, style, shape

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_service', 'align' );
	bt_bb_remove_params( 'bt_bb_service', 'style' );
	bt_bb_remove_params( 'bt_bb_service', 'shape' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_service', array(
		array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon alignment', 'denticare' ),
			'value' => array(
					esc_html__('Inherit', 'denticare' ) => 'inherit',
					esc_html__('Left', 'denticare' ) => 'left',
					esc_html__('Top Left', 'denticare' ) => 'top_left',
					esc_html__('Right', 'denticare' ) => 'right',
					esc_html__('Top Right', 'denticare' ) => 'top_right'
				)
			),
		array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon style', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
			'value' => array(
					esc_html__('Outline', 'denticare' ) => 'outline',
					esc_html__('Light Outline', 'denticare' ) => 'lightoutline',
					esc_html__('Filled', 'denticare' ) => 'filled',
					esc_html__('Filled with light background', 'denticare' ) => 'lightfilled',
					esc_html__('Borderless', 'denticare' ) => 'borderless'
				)
			),
		array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon shape', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
			'value' => array(
				esc_html__('Circle', 'denticare' ) => 'circle',
				esc_html__('Circle except top left corner', 'denticare' ) => 'circle-top-left',
				esc_html__('Circle except top right corner', 'denticare' ) => 'circle-top-right',
				esc_html__('Circle except bottom left corner', 'denticare' ) => 'circle-bottom-left',
				esc_html__('Circle except bottom right corner', 'denticare' ) => 'circle-bottom-right',
				esc_html__('Square', 'denticare' ) => 'square',
				esc_html__('Soft Rounded', 'denticare' ) => 'round',
				esc_html__('Soft Rounded except top left corner', 'denticare' ) => 'round-top-left',
				esc_html__('Soft Rounded except top right corner', 'denticare' ) => 'round-top-right',
				esc_html__('Soft Rounded except bottom left corner', 'denticare' ) => 'round-bottom-left',
				esc_html__('Soft Rounded except bottom right corner', 'denticare' ) => 'round-bottom-right'
			)
		),			
	));
}

// GOOGLE MAPS LOCATION - highlight

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_google_maps_location', array(
		array( 'param_name' => 'highlight', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_highlighted' ), 'heading' => esc_html__( 'Show as highlighted', 'denticare' ), 'description' => esc_html__( 'Adds a gradient background, accent to alternate and turns text into white.', 'denticare' ), 'preview' => true )
	));
}

function denticare_bt_bb_google_maps_location_class( $class, $atts ) {
	if ( isset( $atts['highlight'] ) && $atts['highlight'] != '' ) {
		$class[] = 'bt_bb_highlight';
	}
	return $class;
}
add_filter( 'bt_bb_google_maps_location_class', 'denticare_bt_bb_google_maps_location_class', 10, 2 );

// LEAFLET MAP LOCATION - highlight

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_leaflet_map_location', array(
		array( 'param_name' => 'highlight', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_highlighted' ), 'heading' => esc_html__( 'Show as highlighted', 'denticare' ), 'description' => esc_html__( 'Adds a gradient background, accent to alternate and turns text into white.', 'denticare' ), 'preview' => true )
	));
}

function denticare_bt_bb_leaflet_map_location_class( $class, $atts ) {
	if ( isset( $atts['highlight'] ) && $atts['highlight'] != '' ) {
		$class[] = 'bt_bb_highlight';
	}
	return $class;
}
add_filter( 'bt_bb_leaflet_map_location_class', 'denticare_bt_bb_leaflet_map_location_class', 10, 2 );

// IMAGE SLIDER - new: dots_style, show_paging_as, arrows_size, arrows_style, arrows_position, gap, shadow; 
// deleted: size, pause_on_hover, use_lightbox; changed: show_dots

if ( function_exists( 'bt_bb_remove_params' ) ) {
	bt_bb_remove_params( 'bt_bb_slider', 'size' );
	bt_bb_remove_params( 'bt_bb_slider', 'pause_on_hover' );
	bt_bb_remove_params( 'bt_bb_slider', 'use_lightbox' );
	bt_bb_remove_params( 'bt_bb_slider', 'show_dots' );
}

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_slider', array(
		array( 'param_name' => 'show_dots', 'type' => 'dropdown', 'heading' => esc_html__( 'Dots / paging navigation', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
				'value' => array(
						esc_html__('Bottom', 'denticare' ) => 'bottom',
						esc_html__('Below slider', 'denticare' ) => 'below',
						esc_html__('Below slider right horizontal', 'denticare' ) => 'below_right',
						esc_html__('Below slider left horizontal', 'denticare' ) => 'below_left',
						esc_html__('Left vertical', 'denticare' ) => 'left',
						esc_html__('Right vertical', 'denticare' ) => 'right',
						esc_html__('Bottom right horizontal', 'denticare' ) => 'bottom_right',
						esc_html__('Bottom left horizontal', 'denticare' ) => 'bottom_left',
						esc_html__('Hide', 'denticare' ) => 'hide'
					)
				),
		array( 'param_name' => 'dots_style', 'type' => 'dropdown', 'heading' => esc_html__( 'Dots style', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
				'value' => array(
						esc_html__('Accent active dot', 'denticare' ) => 'accent_dot',
						esc_html__('Alternate active dot', 'denticare' ) => 'alternate_dot',
						esc_html__('Light active dot', 'denticare' ) => 'light_dot',
						esc_html__('Dark active dot', 'denticare' ) => 'dark_dot'
					)
				),
		array( 'param_name' => 'show_paging_as', 'default' => 'dots', 'type' => 'dropdown', 'heading' => esc_html__( 'Show slider paging as dots or numbers', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
				'value' => array(
						esc_html__('Inherit', 'denticare' ) => 'dots',
						esc_html__('Circle', 'denticare' ) => 'circle',
						esc_html__('Outline circle', 'denticare' ) => 'outline_circle',
						esc_html__('Square', 'denticare' ) => 'square',
						esc_html__('Outline Square', 'denticare' ) => 'outline_square',
						esc_html__('Numbers eg. 02/04', 'denticare' ) => 'numbers'
					)
				),
		array( 'param_name' => 'arrows_size', 'type' => 'dropdown', 'preview' => true, 'default' => 'normal', 'heading' => esc_html__( 'Navigation arrows size', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
				'value' => array(
						esc_html__('No arrows', 'denticare' ) => 'no_arrows',
						esc_html__('Small', 'denticare' ) => 'small',
						esc_html__('Normal', 'denticare' ) => 'normal',
						esc_html__('Medium', 'denticare' ) => 'medium',
						esc_html__('Large', 'denticare' ) => 'large'
					)
				),
		array( 'param_name' => 'arrows_style', 'type' => 'dropdown', 'preview' => true, 'default' => 'normal', 'heading' => esc_html__( 'Navigation arrows style', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
				'value' => array(
						esc_html__('Default', 'denticare' ) => '',
						esc_html__('Transparent background, light arrow', 'denticare' ) => 'transparent_light',
						esc_html__('Transparent background, dark arrow', 'denticare' ) => 'transparent_dark',
						esc_html__('Transparent background, light arrow semi transparent', 'denticare' ) => 'semitransparent_light',
						esc_html__('Transparent background, dark arrow semi transparent', 'denticare' ) => 'semitransparent_dark',
						esc_html__('Transparent background, accent arrow', 'denticare' ) => 'transparent_accent',
						esc_html__('Transparent background, alternate arrow', 'denticare' ) => 'transparent_alternate',
						esc_html__('Accent background, light arrow', 'denticare' ) => 'accent_light',
						esc_html__('Accent background, dark arrow', 'denticare' ) => 'accent_dark',
						esc_html__('Alternate background, light arrow', 'denticare' ) => 'alternate_light',
						esc_html__('Alternate background, dark arrow', 'denticare' ) => 'alternate_dark'
					)
				),
		array( 'param_name' => 'arrows_position', 'type' => 'dropdown', 'preview' => true, 'default' => 'normal', 'heading' => esc_html__( 'Navigation arrows position', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
				'value' => array(
						esc_html__('At sides', 'denticare' ) => '',
						esc_html__('From outside, at sides', 'denticare' ) => 'outside',
						esc_html__('Bottom left', 'denticare' ) => 'bottom_left',
						esc_html__('Bottom right', 'denticare' ) => 'bottom_right',
						esc_html__('Below', 'denticare' ) => 'below'
					)
				),	
		array( 'param_name' => 'gap', 'type' => 'dropdown', 'heading' => esc_html__( 'Gap', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('No gap', 'denticare' ) => 'no_gap',
						esc_html__('Small', 'denticare' ) => 'small',
						esc_html__('Normal', 'denticare' ) => 'normal',
						esc_html__('Large', 'denticare' ) => 'large',
						esc_html__('Extra Large', 'denticare' ) => 'extra_large',
						esc_html__('Huge', 'denticare' ) => 'huge'
					)
				),
		array( 'param_name' => 'shadow', 'type' => 'dropdown', 'heading' => esc_html__( 'Shadow', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__( 'No', 'denticare' ) => 'no',
						esc_html__( 'Yes', 'denticare' ) => 'yes'
					)
				)

	));
}

function denticare_bt_bb_slider_class( $class, $atts ) {
	if ( isset( $atts['dots_style'] ) && $atts['dots_style'] != '' ) {
		$class[] = 'bt_bb_dots_style_' . $atts['dots_style'];
	}

	if ( isset( $atts['show_paging_as'] ) && $atts['show_paging_as'] != '' ) {
		$class[] = 'bt_bb_show_paging_as_' . $atts['show_paging_as'];
	}

	if ( isset( $atts['arrows_size'] ) && $atts['arrows_size'] != '' ) {
		$class[] = 'bt_bb_arrows_size' . '_' . $atts['arrows_size'];
	}

	if ( isset( $atts['arrows_style'] ) && $atts['arrows_style'] != '' ) {
		$class[] = 'bt_bb_arrows_style' . '_' . $atts['arrows_style'];
	}

	if ( isset( $atts['arrows_position'] ) && $atts['arrows_position'] != '' ) {
		$class[] = 'bt_bb_arrows_position' . '_' . $atts['arrows_position'];
	}
	
	if ( isset( $atts['gap'] ) && $atts['gap'] != '' ) {
		$class[] = 'bt_bb_gap_' . $atts['gap'];
	}

	if ( isset( $atts['shadow'] ) && $atts['shadow'] == 'yes' ) {
		$class[] = 'bt_bb_shadow';
	}

	return $class;
}
add_filter( 'bt_bb_slider_class', 'denticare_bt_bb_slider_class', 10, 2 );

// CONTENT SLIDER ITEM - new: responsive_overlay, show_boxed_content

if ( function_exists( 'bt_bb_add_params' ) ) {
	bt_bb_add_params( 'bt_bb_content_slider_item', array(	
		array( 'param_name' => 'responsive_overlay', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'responsive_overlay' ), 'heading' => esc_html__( 'Show background overlay only on resolutions under 992px', 'denticare' ), 'preview' => true ),
		array( 'param_name' => 'show_boxed_content', 'type' => 'dropdown', 'default' => 'no', 'heading' => esc_html__( 'Box column content - used to stretch or box column content, only applicable for one and two column layouts, for sliders in wide sections.', 'denticare' ),
			'value' => array(
				esc_html__( 'No', 'denticare' ) => 'no',
				esc_html__( 'Box both columns', 'denticare' ) => 'yes',
				esc_html__( 'Box left column', 'denticare' ) => 'left',
				esc_html__( 'Box right column', 'denticare' ) => 'right'
			)
		)
	));
}

function denticre_bt_bb_content_slider_item_class( $class, $atts ) {
	if ( isset( $atts['show_boxed_content'] ) && $atts['show_boxed_content'] != '' ) {
		if ( $atts['show_boxed_content'] == 'yes' ) {
				$class[] = 'bt_bb_show_boxed_content';
		}
		if ( $atts['show_boxed_content'] == 'left' ) {
				$class[] = 'bt_bb_show_left_boxed_content';
		}
		if ( $atts['show_boxed_content'] == 'right' ) {
				$class[] = 'bt_bb_show_right_boxed_content';
		}
	}
	
	if ( isset( $atts['responsive_overlay'] ) && $atts['responsive_overlay'] != '' ) {
		$class[] = 'bt_bb_content_slider_item' . '_responsive_overlay';
	}
		
	return $class;
}
add_filter( 'bt_bb_content_slider_item_class', 'denticre_bt_bb_content_slider_item_class', 10, 2 );