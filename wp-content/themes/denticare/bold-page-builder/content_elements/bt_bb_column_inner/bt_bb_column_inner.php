<?php

class bt_bb_column_inner extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'width'						=> '',
			'align'						=> 'left',
			'vertical_align'			=> 'top',
			'padding'					=> '',
			'background_image'			=> '',
			'inner_background_image'	=> '',
			'lazy_load'					=> 'no',
			'animation'					=> '',
			'background_color'			=> '',
			'inner_background_color'	=> '',
			'opacity'					=> '',
			'background_position'		=> '',
			'background_size'			=> '',
			'inner_background_position'	=> '',
			'inner_background_size'		=> '',
			'highlight'					=> 'no'
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}
		
		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = 'id="' . esc_attr( $el_id ) . '"';
		}

		$array = explode( '/', $width );

		if ( empty( $array ) || $array[0] == 0 || $array[1] == 0 ) {
			$width = 12;
		} else {
			$top = $array[0];
			$bottom = $array[1];
			
			$width = 12 * $top / $bottom;
			
			if ( ! is_int( $width ) || $width < 1 || $width > 12 ) {
				$width = 12;
			}
		}

		if ( $width == 2 ) {
			$class[] = 'col-md-2 col-sm-4 col-ms-12';
		} else if ( $width == 3 ) {
			$class[] = 'col-md-3 col-sm-6 col-ms-12';
		} else if ( $width == 4 ) {
			$class[] = 'col-md-4 col-ms-12';
		} else if ( $width == 6 ) {
			$class[] = 'col-md-6 col-sm-12';	
		} else if ( $width == 8 ) {
			$class[] = 'col-md-8 col-ms-12';
		} else {
			$class[] = 'col-md-' . $width . ' ' . 'col-ms-12';
		}
		
		if ( $align != '' ) {
			$class[] = $this->prefix . 'align' . '_' . $align;
		}
		
		if ( $vertical_align != '' ) {
			$class[] = $this->prefix . 'vertical_align' . '_' . $vertical_align;
		}
		
		if ( $animation != 'no_animation' && $animation != '' ) {
			$class[] = $this->prefix . 'animation' . '_' . $animation;
			$class[] = 'animate';
		}

		if ( $padding != '' ) {
			$class[] = $this->prefix . 'padding' . '_' . $padding;
		}
		
		if ( $background_color != '' ) {
			$background_color = bt_bb_column::hex2rgb( $background_color );
			if ( $opacity == '' ) {
				$opacity = 1;
			}
			$el_style .= 'background-color: rgba(' . $background_color[0] . ', ' . $background_color[1] . ', ' . $background_color[2] . ', ' . $opacity . ');';
		}

		$el_inner_style = '';
		
		if ( $inner_background_color != '' ) {
			$inner_background_color = bt_bb_column::hex2rgb( $inner_background_color );
			if ( $opacity == '' ) {
				$opacity = 1;
			}
			$el_inner_style .= '"background-color: rgba(' . $inner_background_color[0] . ', ' . $inner_background_color[1] . ', ' . $inner_background_color[2] . ', ' . $opacity . ');" ';
		}
		
		$highlight_class = array( $this->shortcode . '_highlight' );
		$inner_class = array( $this->shortcode . '_content' );
		$background_data_attr = '';
		$inner_background_data_attr = '';
		
		if ( $background_image != '' ) {
			$background_image = wp_get_attachment_image_src( $background_image, 'full' );
			$background_image_url = $background_image[0];
			if ( $lazy_load == 'yes' ) {
				$blank_image_src = BT_BB_Root::$path . 'img/blank.gif';
				$el_style .= 'background-image:url(\'' . $blank_image_src . '\');';
				$background_data_attr .= ' data-background_image_src=\'' . $background_image_url . '\'';
				$class[] = 'btLazyLoadBackground';
			} else {
				$el_style .= 'background-image:url(\'' . $background_image_url . '\');';				
			}
                        
			if ( $background_position != '' ) {
					$el_style .= 'background-position:' . $background_position . ';';
			}
			if ( $background_size != '' ) {
					$el_style .= 'background-size:' . $background_size . ';';
			}
				
			$class[] = 'bt_bb_column_inner_background_image';
		}
		
		if ( $inner_background_image != '' ) {
			$inner_background_image = wp_get_attachment_image_src( $inner_background_image, 'full' );
			$inner_background_image_url = $inner_background_image[0];
			if ( $lazy_load == 'yes' ) {
				$blank_image_src = BT_BB_Root::$path . 'img/blank.gif';
				$el_inner_style .= 'background-image:url(\'' . $blank_image_src . '\');';
				$inner_background_data_attr .= ' data-background_image_src="' . esc_attr( $inner_background_image_url ) . '"';
				$inner_class[] = 'btLazyLoadBackground';
			} else {
				$el_inner_style .= 'background-image:url(\'' . esc_attr( $inner_background_image_url ) . '\');';				
			}
                        
                        if ( $inner_background_position != '' ) {
                                $el_inner_style .= 'background-position:' . $inner_background_position . ';';
                        }
                        if ( $inner_background_size != '' ) {
                                $el_inner_style .= 'background-size:' . $inner_background_size . ';';
                        }
                        
			$class[] = 'bt_bb_column_inner_inner_background_image';
		}
		
		if ( $el_inner_style != "" ) $el_inner_style = ' style=' . $el_inner_style;
		
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = 'style="' . esc_attr( $el_style ) . '"';
		}
                
                if ( $highlight == 'yes' ) {
                        $class[] =  $this->prefix . 'highlight';
                }

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );		
	
		$output = '<div ' . $id_attr . ' class="' . implode( ' ', $class ) . '" ' . $style_attr . $background_data_attr . ' data-width="' . esc_attr( $width ) . '">';
			$output .= '<div class="' . implode( ' ', $inner_class ) . '"' . $el_inner_style . $inner_background_data_attr . '>';
				$output .= do_shortcode( $content );
				$output .= '<div class="' . esc_attr( implode( ' ', $highlight_class ) ) . '"></div>';
			$output .= '</div>';
		$output .= '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {		
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Inner Column', 'denticare' ), 'description' => esc_html__( 'Inner Column element', 'denticare' ), 'width_param' => 'width', 'container' => 'vertical', 
			'accept' => array( 'bt_bb_section' => false, 'bt_bb_row' => false, 'bt_bb_row_inner' => false, 'bt_bb_column' => false, 'bt_bb_column_inner' => false, 'bt_bb_tab_item' => false, 'bt_bb_accordion_item' => false, 'bt_bb_cost_calculator_item' => false, 'bt_cc_group' => false, 'bt_cc_multiply' => false, 'bt_cc_item' => false, 'bt_bb_content_slider_item' => false, 'bt_bb_google_maps_location' => false, '_content' => false ),
			'accept_all' => true, 'toggle' => true, 'show_settings_on_create' => false, 'icon' => 'bt_bb_icon_bt_bb_row_inner',
			'params' => array(
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Align', 'denticare' ), 'preview' => true,
				'value' => array(
					esc_html__( 'Left', 'denticare' ) => 'left',
					esc_html__( 'Right', 'denticare' ) => 'right',
					esc_html__( 'Center', 'denticare' ) => 'center'					
				) ),
				array( 'param_name' => 'padding', 'type' => 'dropdown', 'heading' => esc_html__( 'Padding', 'denticare' ), 'preview' => true,
					'value' => array(
					esc_html__( 'Normal', 'denticare' ) => 'normal',
					esc_html__( 'Double', 'denticare' ) => 'double',
					esc_html__( 'Text Indent', 'denticare' ) => 'text_indent'					
				) ),				
				array( 'param_name' => 'vertical_align', 'type' => 'dropdown', 'heading' => esc_html__( 'Vertical Align', 'denticare' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Top', 'denticare' )     => 'top',
						esc_html__( 'Middle', 'denticare' )  => 'middle',
						esc_html__( 'Bottom', 'denticare' )  => 'bottom'					
				) ),
				array( 'param_name' => 'animation', 'type' => 'dropdown', 'heading' => esc_html__( 'Animation', 'denticare' ), 'preview' => true,
					'value' => array(
						esc_html__( 'No Animation', 'denticare' ) => 'no_animation',
						esc_html__( 'Fade In', 'denticare' ) => 'fade_in',
						esc_html__( 'Move Up', 'denticare' ) => 'move_up',
						esc_html__( 'Move Left', 'denticare' ) => 'move_left',
						esc_html__( 'Move Right', 'denticare' ) => 'move_right',
						esc_html__( 'Move Down', 'denticare' ) => 'move_down',
						esc_html__( 'Zoom in', 'denticare' ) => 'zoom_in',
						esc_html__( 'Zoom out', 'denticare' ) => 'zoom_out',
						esc_html__( 'Fade In / Move Up', 'denticare' ) => 'fade_in move_up',
						esc_html__( 'Fade In / Move Left', 'denticare' ) => 'fade_in move_left',
						esc_html__( 'Fade In / Move Right', 'denticare' ) => 'fade_in move_right',
						esc_html__( 'Fade In / Move Down', 'denticare' ) => 'fade_in move_down',
						esc_html__( 'Fade In / Zoom in', 'denticare' ) => 'fade_in zoom_in',
						esc_html__( 'Fade In / Zoom out', 'denticare' ) => 'fade_in zoom_out'
				) ),
				array( 'param_name' => 'background_image', 'type' => 'attach_image',  'preview' => true, 'heading' => esc_html__( 'Background image', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'inner_background_image', 'type' => 'attach_image',  'preview' => true, 'heading' => esc_html__( 'Inner background image', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'yes', 'heading' => esc_html__( 'Lazy load background image', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__( 'No', 'denticare' ) => 'no',
						esc_html__( 'Yes', 'denticare' ) => 'yes'
					) ),
				array( 'param_name' => 'background_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Background color', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'inner_background_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Inner background color', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'opacity', 'type' => 'textfield', 'heading' => esc_html__( 'Opacity (0 - 1, e.g. 0.4)', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'background_position', 'type' => 'textfield', 'heading' => esc_html__( 'Background position in keywords (e.g. left, right, top, bottom, center) or in pixels / percentage', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'background_size', 'type' => 'textfield', 'heading' => esc_html__( 'Background size (e.g. auto, cover, contain, initial, inherit or size in pixels', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'inner_background_position', 'type' => 'textfield', 'heading' => esc_html__( 'Inner Background position in keywords (e.g. left, right, top, bottom, center) or in pixels / percentage', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'inner_background_size', 'type' => 'textfield', 'heading' => esc_html__( 'Inner Background size (e.g. auto, cover, contain, initial, inherit or size in pixels', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),                                
				array( 'param_name' => 'highlight', 'type' => 'dropdown', 'default' => 'no', 'heading' => esc_html__( 'Outer column with shadow', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
							esc_html__( 'No', 'denticare' ) => 'no',
							esc_html__( 'Yes', 'denticare' ) => 'yes'
					)
				)
			)
		) );
		
	}

}