<?php

class bt_bb_before_after_image extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'before_image'			=> '',		
			'after_image'			=> '',
			'headline'      		=> '',
			'subheadline' 			=> '',
			'smaler_subheadline'   	=> '',
			'before_text'          	=> '',
			'after_text'          	=> '',
			'show_arrows'		    => '',
			'coverage_image'    	=> ''
		) ), $atts, $this->shortcode ) );
                
                $class = array( $this->shortcode );
		
		$content_elements_misc_path_js	= get_template_directory_uri() . '/bold-page-builder/content_elements_misc/js/';

		
		wp_enqueue_script( 
			'jquery.twentytwenty',
			$content_elements_misc_path_js . 'jquery.twentytwenty.js',
			array( 'jquery' ),
			'',
			true
		);
		
		wp_enqueue_script( 
			'jquery.event.move',
			$content_elements_misc_path_js . 'jquery.event.move.js',
			array( 'jquery' ),
			'',
			true
		);
		
		wp_enqueue_script( 
			'imagesloaded.pkgd.min.js',
			$content_elements_misc_path_js . 'imagesloaded.pkgd.min.js',
			array( 'jquery' ),
			'',
			true
		);

		wp_enqueue_script( 
			'bt_bb_before_after_image',
			$content_elements_misc_path_js . 'bt_bb_before_after_image.js',
			array( 'jquery' ),
			'',
			true
		);
		
		
		$headline = html_entity_decode( $headline ) ;
		$subheadline = html_entity_decode( $subheadline ) ;
		$smaler_subheadline = html_entity_decode( $smaler_subheadline ) ;

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
		
		$alt_before = '';
		$alt_after = '';
		$size = 'full';
		
		if ( $before_image != '' && is_numeric( $before_image ) ) {
			$post_image = get_post( $before_image );
			if ( $post_image == '' ) return;
		
			$before_image = wp_get_attachment_image_src( $before_image, $size );
			$before_image = $before_image[0];
			if ( $alt_before == '' ) {
				$alt_before = $before_image;
			}
		}
		
		if ( $after_image != '' && is_numeric( $after_image ) ) {
			$post_image = get_post( $after_image );
			if ( $post_image == '' ) return;
		
			$after_image = wp_get_attachment_image_src( $after_image, $size );
			$after_image = $after_image[0];
			if ( $alt_after == '' ) {
				$alt_after = $after_image;
			}
		}
		
		if ( $headline != '' ) {
			$class[] = $this->prefix . 'headline';
			$headline = '<span class="' . esc_attr( $this->shortcode . '_headline' ) . '">' . $headline . '</span>';
		}
		
		if ( $subheadline != '' ) {
			$class[] = $this->prefix . 'subheadline';
			$subheadline = '<span class="' . esc_attr( $this->shortcode . '_subheadline' ) . '">' . $subheadline . '</span>';
		}
		
		if ( $smaler_subheadline != '' ) {
			$class[] = $this->prefix . 'smaler_subheadline';
			$smaler_subheadline = '<span class="' . esc_attr( $this->shortcode . '_smaler_subheadline' ) . '">' . $smaler_subheadline . '</span>';
		}
		
		if ( $before_text != '' ) {
			$class[] = $this->prefix . 'before_text';
			$before_text = '<span class="' . esc_attr( $this->shortcode . '_before_text' ) . '">' . $before_text . '</span>';
		}
		
		if ( $after_text != '' ) {
			$class[] = $this->prefix . 'after_text';
			$after_text = '<span class="' . esc_attr( $this->shortcode . '_after_text' ) . '">' . $after_text . '</span>';
		}
                
                if ( $show_arrows != '' ) {
			$class[] = $this->shortcode . '_show_arrows';
		}
                
                $coverage_image_output = '';
		if ( $coverage_image != '' ) {   
                        $alt_coverage_image = get_post_meta($coverage_image, '_wp_attachment_image_alt', true);
                        $alt_coverage_image = $alt_coverage_image ? $alt_coverage_image : $this->shortcode . '_coverage_image';
			$coverage_image = wp_get_attachment_image_src( $coverage_image, 'full' );                    
			if ( isset($coverage_image[0]) ){
				$coverage_image = $coverage_image[0];
				$coverage_image_output = 
				'<div class="bt_bb_coverage_image">'
					. '<img src="' . esc_url_raw($coverage_image) . '" alt="' . esc_attr($alt_coverage_image) . '" />'
				. '</div>';
                                $class[] = $this->shortcode . '_with_coverage_image';
			}
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		
		$output = '<div class="' . esc_attr( $this->shortcode . '_title bt_bb_before_after_image-container twentytwenty-container' ) . '" id="container1"><img src="' . esc_url_raw( $before_image ) . '" alt="' . esc_attr( $before_text ) . '" /><img src="' . esc_url_raw( $after_image ) . '" alt="' . esc_attr( $after_text ) . '" /></div>';
		
		if ( $headline != '' || $subheadline != '' || $smaler_subheadline != '' ) $output .= '<div class="bt_bb_before_after_image_block">' . $headline . $subheadline . $smaler_subheadline . '</div>';
		
		if ( $before_text != '') $output .= '<div class="bt_bb_before_after_image_before_txt_holder">' . $before_text . '</div>';
		
		if ( $after_text != '') $output .= '<div class="bt_bb_before_after_image_after_txt_holder">' . $after_text . '</div>';
		

		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '>' . $coverage_image_output  . $output . '</div>';
		
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );


		return $output;

	}

	function map_shortcode() {			
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Before/After Image', 'denticare' ), 'description' => esc_html__( 'Compare two images', 'denticare' ), 'icon' => 'bt_bb_icon_bt_bb_before_after_image',
			'params' => array(
				array( 'param_name' => 'before_image', 'type' => 'attach_image', 'heading' => esc_html__( 'Before image', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'after_image', 'type' => 'attach_image', 'heading' => esc_html__( 'After image', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'headline', 'type' => 'textfield', 'heading' => esc_html__( 'Headline', 'denticare' ), 'preview' => true, 'preview_strong' => true ),
				array( 'param_name' => 'subheadline', 'type' => 'textfield', 'heading' => esc_html__( 'Subheadline', 'denticare' ), 'preview' => true, 'preview_strong' => true ),
				array( 'param_name' => 'smaler_subheadline', 'type' => 'textfield', 'heading' => esc_html__( 'Smaller text', 'denticare' ), 'preview' => true, 'preview_strong' => true ),
				array( 'param_name' => 'before_text', 'type' => 'textfield', 'heading' => esc_html__( 'Before text', 'denticare' ), 'preview' => true, 'preview_strong' => true ),
				array( 'param_name' => 'after_text', 'type' => 'textfield', 'heading' => esc_html__( 'After text', 'denticare' ), 'preview' => true, 'preview_strong' => true ),
				array( 'param_name' => 'show_arrows', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_arrows' ), 'heading' => esc_html__( 'Show arrows next to Before / After text', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'coverage_image', 'type' => 'attach_image',  'preview' => true, 
					'heading' => esc_html__( 'Covering Image', 'denticare' ), 
					'description' => esc_html__( 'When selecting covering image - the covering image will dictate the size', 'denticare' )
				)
			)
		) );
	}
}