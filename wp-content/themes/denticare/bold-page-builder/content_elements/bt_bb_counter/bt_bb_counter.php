<?php

class bt_bb_counter extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'number'        => '',
			'size'          => '',
                        'font_color'    => ''
		) ), $atts, $this->shortcode ) );
		
		$class = array(); 
		
		$class[] = 'bt_bb_counter_holder';

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}
                
        if ( $el_style != '' ) {
			$el_style = $el_style;
		}
                
        if ( $font_color != '' ) {
			$el_style = $el_style . 'color:' . $font_color . ';';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		if ( $size != '' ) {
			$class[] = $this->prefix . 'size' . '_' . $size;
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		$class_attr = implode( ' ', $class );
		
		if ( $el_class != '' ) {
			$class_attr = $class_attr . ' ' . $el_class;
		}
		
		$strlen = mb_strlen( $number, 'UTF-8' );
		$number = $this->msplit( $number );

		$output = '';
		$output .= '<div' . $id_attr . ' class="' . esc_attr( $class_attr ) . '"' . $style_attr . '>';
			$output .= '<span class="bt_bb_counter animate" data-digit-length="' . esc_attr( $strlen ) . '">';			
				for ( $i = 0; $i < $strlen; $i++ ) {
					
					$output .= '<span class="onedigit p' . ( $strlen - $i ) . ' d' . $number[ $i ] . '" data-digit="' . esc_attr( $number[ $i ] ) . '">';
					
						if ( ctype_digit( $number[ $i ] ) ) {
							for ( $j = 0; $j <= 9; $j++ ) {
								$output .= '<span class="n' . $j . '">' . $j . '</span>';
							}
							$output .= '<span class="n0">0</span>';				
						} else {
							$output .= '<span class="t">' . $number[ $i ] . '</span>';	
						}
					
					$output .= '</span>';
				}			
			$output .= '</span>';
		$output .= '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
			
		return $output;
	}
	
	function msplit( $str, $len = 1 ) {
		$arr = [];
		$length = mb_strlen( $str, 'UTF-8' );
		for ( $i = 0; $i < $length; $i += $len ) {
			$arr[] = mb_substr( $str, $i, $len, 'UTF-8' );
		}
		return $arr;
	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Counter', 'denticare' ), 'description' => esc_html__( 'Animated counter', 'denticare' ),  
			'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'number', 'type' => 'textfield', 'heading' => esc_html__( 'Number', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Size', 'denticare' ), 'preview' => true,
					'value' => array(
						esc_html__('Small', 'denticare' ) => 'small',
						esc_html__('Extra small', 'denticare' ) => 'xsmall',
						esc_html__('Normal', 'denticare' ) => 'normal',
						esc_html__('Large', 'denticare' ) => 'large',
						esc_html__('Extra large', 'denticare' ) => 'xlarge'		
				) ),
                array( 'param_name' => 'font_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Font color', 'denticare' ), 'preview' => true ),
			)
		) );

	}
}