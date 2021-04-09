<?php

class bt_bb_google_maps extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'api_key'      => '',
			'zoom'         => '',
			'height'       => '',
			'custom_style' => '',
			'center_map'   => '',
			'info_position'         => 'left',
			'map_coverage_image'    => ''
		) ), $atts, $this->shortcode ) );
                
                $class_master = 'bt_bb_map';
		
		$class = array( $this->shortcode, $class_master );
		
		if ( $el_class != '' ) {
			$class[] = $el_class;                       
		}

		if ( $info_position == 'right' ) {
			$class[] = $this->shortcode . '_info_right';
		}

		if ( $center_map == 'yes_no_overlay' ) {
			$class[] = $this->shortcode . '_no_overlay';
            $class[] = $class_master . '_no_overlay';
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}

		if ( $api_key != '' ) {
			wp_enqueue_script( 
				'gmaps_api',
				'https://maps.googleapis.com/maps/api/js?key=' . $api_key
			);
		} else {
			wp_enqueue_script( 
				'gmaps_api',
				'https://maps.googleapis.com/maps/api/js?v=&sensor=false'
			);
		}
		
		if ( $zoom == '' ) {
			$zoom = 14;
		}

		$style_height = '';
		if ( $height != '' ) {
			$style_height = ' ' . 'style="height:' . $height . '"';
		}
		
		$map_id = uniqid( 'map_canvas' );

		$content_html = wptexturize( do_shortcode( $content ) );

		$locations = substr_count( $content_html, '"bt_bb_google_maps_location' );
		$locations_without_content = substr_count( $content_html, 'bt_bb_google_maps_location_without_content' );
	
                if ( $content != '' && $locations != $locations_without_content ) {
			$content = '<span class="' . esc_attr( $this->shortcode ) . '_content_toggler ' . esc_attr( $class_master ) . '_content_toggler"></span>'; 
			$content .= '<div class="' . esc_attr( $this->shortcode ) . '_content ' . esc_attr($class_master) . '_content">';
				$content .= '<div class="' . esc_attr( $this->shortcode ) . '_content_wrapper ' . esc_attr( $class_master ) . '_content_wrapper">' ;
				$content .= $content_html ;
				$content .= '</div>';
			$content .= '</div>';
			$class[] = $this->shortcode . '_with_content';
			$class[] = $class_master . '_with_content';
			$style_height = '';
		} else {
		   $content = $content_html;
		}
                
                $map_coverage_image_output = '';
		if ( $map_coverage_image != '' ) {   
                        $alt_map_coverage_image = get_post_meta($map_coverage_image, '_wp_attachment_image_alt', true);
                        $alt_map_coverage_image = $alt_map_coverage_image ? $alt_map_coverage_image : $this->shortcode . '_coverage_image';
			$map_coverage_image = wp_get_attachment_image_src( $map_coverage_image, 'full' );                    
			if ( isset($map_coverage_image[0]) ){
				$map_coverage_image = $map_coverage_image[0];
				$map_coverage_image_output = 
				'<div class="bt_bb_map_coverage_image">'
					. '<img src="' . esc_url_raw($map_coverage_image) . '" alt="' . esc_attr($alt_map_coverage_image) . '" />'
				. '</div>';
                                $class[] = $this->shortcode . '_with_coverage_image';
			}
		}
                
                $class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$output = '<div class="' . esc_attr( $this->shortcode ) . '_map ' . esc_attr( $class_master ) . '_map" id="' . esc_attr( $map_id ) . '"' . $style_height . '></div>';


		$output .= $content;
               

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . ' data-center="' . esc_attr( $center_map ) . '">' . $map_coverage_image_output . $output . '</div>';

                
		$output .= '<script type="text/javascript">';
			$output .= 'var bt_bb_google_map_' . $map_id . '_init_finished = false; ';
			$output .= 'document.addEventListener("readystatechange", function() { ';
				$output .= 'if ( !bt_bb_google_map_' . $map_id . '_init_finished && ( document.readyState === "interactive" || document.readyState === "complete" ) ) { ';
					$output .= 'if ( typeof( bt_bb_gmap_init ) !== typeof(Function) ) { return false; }';
					$output .= 'bt_bb_gmap_init( "' . $map_id . '", ' . $zoom . ', "' . $custom_style . '" );';
					$output .= 'bt_bb_google_map_' . $map_id . '_init_finished = true; ';
				$output .= '};';
			$output .= '}, false);';
		$output .= '</script>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Google Maps', 'denticare' ), 'description' => esc_html__( 'Google Maps with custom content', 'denticare' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_google_maps_location' => true ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'api_key', 'type' => 'textfield', 'heading' => esc_html__( 'API key', 'denticare' ) ),
				array( 'param_name' => 'zoom', 'type' => 'textfield', 'heading' => esc_html__( 'Zoom (e.g. 14)', 'denticare' ) ),
				array( 'param_name' => 'height', 'type' => 'textfield', 'heading' => esc_html__( 'Height (e.g. 250px)', 'denticare' ), 'description' => esc_html__( 'Used when there is no content', 'denticare' ) ),
				array( 'param_name' => 'custom_style', 'type' => 'textarea_object', 'heading' => esc_html__( 'Custom map style array', 'denticare' ), 'description' => esc_html__( 'Find more custom styles at https://snazzymaps.com/', 'denticare' ) ),
				array( 'param_name' => 'center_map', 'type' => 'dropdown', 'heading' => esc_html__( 'Center map', 'denticare' ),
					'value' => array(
						esc_html__( 'No', 'denticare' ) => 'no',
						esc_html__( 'Yes', 'denticare' ) => 'yes',
						esc_html__( 'Yes (without overlay initially)', 'denticare' ) => 'yes_no_overlay'
					)
				),
				array( 'param_name' => 'info_position', 'type' => 'dropdown', 'default' => 'left', 'heading' => esc_html__( 'Show info box', 'denticare' ), 'description' => esc_html__( 'Select where the info box will be shown if the map location pin has content.', 'denticare' ),
					'value' => array(
						esc_html__( 'On the left side', 'denticare' ) => 'left',
						esc_html__( 'On the right side', 'denticare' ) => 'right'
					)
				),				
				array( 'param_name' => 'map_coverage_image', 'type' => 'attach_image',  'preview' => true, 'heading' => esc_html__( 'Map Covering Image', 'denticare' ), 'description' => esc_html__( 'When selecting map covering image, without any of locations having a content itself - the covering map image will dictate the map size', 'denticare' ),),
			)
		) );
	}
}