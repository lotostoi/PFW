<?php

class bt_bb_working_hours extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'wh_content'      => ''
		) ), $atts, $this->shortcode ) );
		
		$content_elements_misc_path_css	= get_parent_theme_file_uri( 'bold-page-builder/content_elements_misc/css/' );
		
		wp_enqueue_style( 
			'bt_bb_working_hours', 
			$content_elements_misc_path_css . 'bt_bb_working_hours.css', 
			array(), 
			false, 
			'screen' 
		);


		$class = array( $this->shortcode );
		
		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}		

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		

		$output_inner = '';
		$has_link = '';
		$items_arr = preg_split( '/$\R?^/m', $wh_content );
		
		foreach ( $items_arr as $item ) {
			$output_inner .= '<div class="' . esc_attr( $this->shortcode ) . '_inner_row"><div class="' . esc_attr( $this->shortcode ) . '_inner_wrapper">';
			$item_arr = explode( ';', $item );
			$output_inner .= '<div class="' . esc_attr( $this->shortcode ) . '_inner_title">' . $item_arr[0] . '</div>';
			unset( $item_arr[0] );
			$link = array_pop($item_arr);
		
			foreach ( $item_arr as $inner_item ) {
				$output_inner .= '<div class="' . esc_attr( $this->shortcode ) . '_inner_content">' . $inner_item . '</div>';
			}

			if( $link != '' && !ctype_space($link) ) {
				$link_arr = explode( ',', $link );
				$output_inner .= '<div class="' . esc_attr( $this->shortcode ) . '_inner_link">';
				$output_inner .=  '<a href="' . esc_attr( $link_arr[1] ) . '" title="' . esc_attr( $link_arr[0] ) . '">' . $link_arr[0] . '</a>';
				$output_inner .= '</div>';
				$has_link = ' ' . $this->shortcode . '_has_link';
			}
			$output_inner .= '</div></div>';
		}

		$output = '<div class="btWorkingHours ' . $el_class . $has_link . '" ' . $style_attr . '>';
			$output .= '<div class="btWorkingHoursInner">';
				$output .= $output_inner;
			$output .= '</div>';
		$output .= '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Working Hours', 'denticare' ), 'description' => esc_html__( 'Displays a working hours table with an option for immediate booking via hyperlink.', 'denticare' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode, 'highlight' => true,
			'params' => array(
				array( 'param_name' => 'wh_content', 'type' => 'textarea', 'heading' => esc_html__( 'Working Hours', 'denticare' ) , 'description' => esc_html__( 'value;value;URL title,URL separated by new line (leave ; at the end to remove link)', 'denticare' ) 
				)	
			)
		) );
	}
}