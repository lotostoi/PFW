<?php

class bt_bb_menu_item extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'menu_item_title'			=> '',
			'menu_item_description'		=> '',
			'menu_item_price'			=> '',
			'color_scheme'				=> ''
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}
		
		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}

		if ( $menu_item_description == '' ) {
			$class[] = "btNoText";
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		$menu_item_description = nl2br( $menu_item_description );

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		
		
		$output = '<div class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . ' ' . $id_attr . '>';

			$output .= '<div class="' . esc_attr( $this->shortcode . '_title_price' ) . '">';
				
				if ( $menu_item_title != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_title' ) .'"><span>' . $menu_item_title . ''  . '</span></div>';
				$output .= '<div class="' . esc_attr( $this->shortcode . '_separator' ) . '"></div>';
				if ( $menu_item_price != '' ) $output .= '<div class="' . esc_attr( $this->shortcode . '_price' ) . '"><span>' . $menu_item_price . '</span></div>';
			
			$output .= '</div>';
			
			if ( $menu_item_description != '' ) $output .= '<div class="' .esc_attr( $this->shortcode . '_description' ) . '"><span>' . $menu_item_description . '</span></div>';
			
		$output .= '</div>';

		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );


		return $output;

	}

	function map_shortcode() {
		
		$color_scheme_arr = bt_bb_get_color_scheme_param_array();
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Price Table', 'denticare' ), 'container' => 'vertical', 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode, 'description' => esc_html__( 'Menu items with details and prices',  'denticare' ),
			'params' => array(
				array( 'param_name' => 'menu_item_title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'denticare' ), 'preview' => true ),
				
				array( 'param_name' => 'menu_item_description', 'type' => 'textarea', 'heading' => esc_html__( 'Description', 'denticare' ) ),
				array( 'param_name' => 'menu_item_price', 'type' => 'textfield', 'heading' => esc_html__( 'Price', 'denticare' ), 'preview' => true ),
				
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'denticare' ), 'value' => $color_scheme_arr, 'preview' => true )
			)
		) );
	}
}