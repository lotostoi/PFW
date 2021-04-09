<?php

class bt_bb_floating_image extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'image'      					=> '',
			'horizontal_position'  			=> 'left',
			'vertical_position'  			=> 'top',
			'animation_style'  				=> 'ease_out',
			'animation_delay'  				=> 'default',
			'animation_duration'  			=> '',
			'animation_speed'  				=> '1.0',
			'lazy_load'  					=> 'no'
		) ), $atts, $this->shortcode ) );
		
		wp_enqueue_script(
			'bt_bb_floating_image',
			get_template_directory_uri() . '/bold-page-builder/content_elements/bt_bb_floating_image/bt_bb_floating_image.js',
			array( 'jquery' ),
			'',
			true
		);

		$class = array( $this->shortcode );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}
		if ( $horizontal_position != '' ) {
			$class[] = $this->shortcode . '_horizontal_position' . '_' . $horizontal_position;
		}
		if ( $vertical_position != '' ) {
			$class[] = $this->shortcode . '_vertical_position' . '_' . $vertical_position;
		}
		if ( $animation_delay != '' ) {
			$class[] = $this->shortcode . '_animation_delay' . '_' . $animation_delay;
		}
		if ( $animation_duration != '' ) {
			$class[] = $this->shortcode . '_animation_duration' . '_' . $animation_duration;
		}
		if ( $animation_style != '' ) {
			$class[] = $this->shortcode . '_animation_style' . '_' . $animation_style;
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );		
		$class_attr = implode( ' ', $class );
		
		if ( $el_class != '' ) {
			$class_attr = $class_attr . ' ' . $el_class;
		}
	
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}


		$output = '';

		
		if ( $image != '' ) {
			$output .=  '<div class="' . esc_attr( $this->shortcode . '_image') . '" data-speed="' . esc_attr( $animation_speed ) . '">' . do_shortcode( '[bt_bb_image image="' . esc_attr( $image ) . '" size="full" lazy_load="' . esc_attr( $lazy_load ) . '"]' ) . '</div>';	
		}
		

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . ' data-speed="' . esc_attr( $animation_speed ) . '">' . ( $output ) . '</div>';

		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Floating image', 'denticare' ), 'description' => esc_html__( 'Absolute positioned floating image', 'denticare' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'image', 'type' => 'attach_image', 'preview' => true, 'heading' => esc_html__( 'Image', 'denticare' ) 
				),
				array( 'param_name' => 'vertical_position', 'preview' => true, 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Vertical position', 'denticare' ), 
					'value' => array(
						esc_html__( 'Default', 'denticare' ) 				=> 'default',
						esc_html__( 'Top (absolute)', 'denticare' ) 		=> 'top',
						esc_html__( 'Middle (absolute)', 'denticare' ) 	=> 'middle',
						esc_html__( 'Bottom (absolute)', 'denticare' ) 	=> 'bottom'
					)
				),
				array( 'param_name' => 'horizontal_position', 'preview' => true, 'default' => '', 'type' => 'dropdown', 'heading' => esc_html__( 'Horizontal position', 'denticare' ), 
					'value' => array(
						esc_html__( 'Default', 'denticare' ) 				=> 'default',
						esc_html__( 'Left (absolute)', 'denticare' ) 		=> 'left',
						esc_html__( 'Center (absolute)', 'denticare' ) 	=> 'center',
						esc_html__( 'Right (absolute)', 'denticare' ) 	=> 'right'
					)
				),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'no', 'heading' => esc_html__( 'Lazy load this image', 'denticare' ),
					'value' => array(
						esc_html__( 'No', 'denticare' ) 	=> 'no',
						esc_html__( 'Yes', 'denticare' ) 	=> 'yes'
					)
				),
				array( 'param_name' => 'animation_style', 'preview' => true, 'default' => 'ease_out', 'type' => 'dropdown', 'group' => esc_html__( 'Animation', 'denticare' ), 'heading' => esc_html__( 'Animation style (check https://easings.net/en)', 'denticare' ), 
					'value' => array(
						esc_html__( 'Ease out (default)', 'denticare' ) 		=> 'ease_out',
						esc_html__( 'Ease out sine', 'denticare' ) 			=> 'ease_out_sine',
						esc_html__( 'Ease in', 'denticare' ) 					=> 'ease_in',
						esc_html__( 'Ease in sine', 'denticare' ) 			=> 'ease_in_sine',
						esc_html__( 'Ease in out', 'denticare' ) 				=> 'ease_in_out',
						esc_html__( 'Ease in out sine', 'denticare' ) 		=> 'ease_in_out_sine',
						esc_html__( 'Ease in out bounce', 'denticare' ) 		=> 'ease_in_out_back'
					)
				),
				array( 'param_name' => 'animation_delay', 'default' => '', 'type' => 'dropdown', 'group' => esc_html__( 'Animation', 'denticare' ), 'heading' => esc_html__( 'Animation delay', 'denticare' ), 
					'value' => array(
						esc_html__( 'Default', 'denticare' ) 				=> 'default',
						esc_html__( '0ms', 'denticare' ) 					=> '0',
						esc_html__( '100ms', 'denticare' ) 				=> '100',
						esc_html__( '200ms', 'denticare' ) 				=> '200',
						esc_html__( '300ms', 'denticare' ) 				=> '300',
						esc_html__( '400ms', 'denticare' ) 				=> '400',
						esc_html__( '500ms', 'denticare' ) 				=> '500',
						esc_html__( '600ms', 'denticare' ) 				=> '600',
						esc_html__( '700ms', 'denticare' ) 				=> '700',
						esc_html__( '800ms', 'denticare' ) 				=> '800',
						esc_html__( '900ms', 'denticare' ) 				=> '900',
						esc_html__( '1000ms', 'denticare' ) 				=> '1000'
					)
				),
				array( 'param_name' => 'animation_duration', 'preview' => true, 'default' => '', 'type' => 'dropdown', 'group' => esc_html__( 'Animation', 'denticare' ), 'heading' => esc_html__( 'Animation duration', 'denticare' ), 
					'value' => array(
						esc_html__( 'Default', 'denticare' ) 				=> 'default',
						esc_html__( '0ms', 'denticare' ) 					=> '0',
						esc_html__( '100ms', 'denticare' ) 				=> '100',
						esc_html__( '200ms', 'denticare' ) 				=> '200',
						esc_html__( '300ms', 'denticare' ) 				=> '300',
						esc_html__( '400ms', 'denticare' ) 				=> '400',
						esc_html__( '500ms', 'denticare' ) 				=> '500',
						esc_html__( '600ms', 'denticare' ) 				=> '600',
						esc_html__( '700ms', 'denticare' ) 				=> '700',
						esc_html__( '800ms', 'denticare' ) 				=> '800',
						esc_html__( '900ms', 'denticare' ) 				=> '900',
						esc_html__( '1000ms', 'denticare' ) 				=> '1000',
						esc_html__( '1100ms', 'denticare' ) 				=> '1100',
						esc_html__( '1200ms', 'denticare' ) 				=> '1200',
						esc_html__( '1300ms', 'denticare' ) 				=> '1300',
						esc_html__( '1400ms', 'denticare' ) 				=> '1400',
						esc_html__( '1500ms', 'denticare' ) 				=> '1500',
						esc_html__( '2000ms', 'denticare' ) 				=> '2000',
						esc_html__( '2500ms', 'denticare' ) 				=> '2500',
						esc_html__( '3000ms', 'denticare' ) 				=> '3000',
						esc_html__( '3500ms', 'denticare' ) 				=> '3500',
						esc_html__( '4000ms', 'denticare' ) 				=> '4000',
						esc_html__( '5000ms', 'denticare' ) 				=> '5000',
						esc_html__( '6000ms', 'denticare' ) 				=> '6000'
					)
				),
				array( 'param_name' => 'animation_speed', 'preview' => true, 'default' => '1.0', 'type' => 'dropdown', 'group' => esc_html__( 'Animation speed', 'denticare' ), 'heading' => esc_html__( 'Animation s', 'denticare' ), 
					'value' => array(
						esc_html__( '0.4 (very short)', 'denticare' ) 		=> '0.4',
						esc_html__( '0.6', 'denticare' ) 						=> '0.6',
						esc_html__( '0.8', 'denticare' ) 						=> '0.8',
						esc_html__( '1.0', 'denticare' ) 						=> '1.0',
						esc_html__( '1.2 (default)', 'denticare' ) 			=> '1.2',
						esc_html__( '1.4', 'denticare' ) 						=> '1.4',
						esc_html__( '1.6 (long)', 'denticare' ) 				=> '1.6',
						esc_html__( '1.8', 'denticare' ) 						=> '1.8',
						esc_html__( '2.0 (very long)', 'denticare' ) 			=> '2.0',
						esc_html__( '2.5 (very very long)', 'denticare' ) 	=> '2.5'
					)
				)
			)
		) );
	}
}