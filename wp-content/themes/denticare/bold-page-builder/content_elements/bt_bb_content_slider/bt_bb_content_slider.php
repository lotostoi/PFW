<?php

class bt_bb_content_slider extends BT_BB_Element {
	
	public $auto_play = '';

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'height'    			=> '',
			'show_dots' 			=> '',
			'dots_style' 			=> '',
			'show_paging_as'		=> '',
			'animation' 			=> '',
			'gap' 					=> '',
			'arrows_size' 			=> '',
			'arrows_style' 			=> '',
			'arrows_position'		=> '',
			'pause_on_hover'     	=> '',
			'slides_to_show' 		=> '',
			'auto_play' 			=> '',
            'shadow'                        => 'no',  
		) ), $atts, $this->shortcode ) );
		
		$class = array( $this->shortcode );
		$slider_class = array( 'slick-slider' );
                
                $slider_id = $this->shortcode . '_' . rand(1000, 100000);                
                $class[] = $slider_id;                
                wp_enqueue_script( 
			'bt_bb_content_slider_js' . $slider_id,
			get_parent_theme_file_uri( 'bold-page-builder/content_elements/bt_bb_content_slider/' ) . 'bt_bb_content_slider.js',
			array( 'jquery' ),
			'',
			true
		);
                wp_localize_script( 'bt_bb_content_slider_js' . $slider_id, 'slider_object', array( 'slider_id' => $slider_id ) );
		
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
		
		if ( $gap != '' ) {
			$class[] = $this->prefix . 'gap' . '_' . $gap;
		}
		
		if ( $arrows_size != '' ) {
			$class[] = $this->prefix . 'arrows_size' . '_' . $arrows_size;
		}
		
		if ( $arrows_style != '' ) {
			$class[] = $this->prefix . 'arrows_style' . '_' . $arrows_style;
		}
		
		if ( $arrows_position != '' ) {
			$class[] = $this->prefix . 'arrows_position' . '_' . $arrows_position;
		}
		
		if ( $show_dots != '' ) {
			$class[] = $this->prefix . 'show_dots_' . $show_dots;
		}
		
		if ( $dots_style != '' ) {
			$class[] = $this->prefix . 'dots_style_' . $dots_style;
		}
		
		if ( $show_paging_as != '' ) {
			$class[] = $this->prefix . 'show_paging_as_' . $show_paging_as;
		}

		if ( $height != '' ) {
			$class[] = $this->prefix . 'height' . '_' . $height;
		}
		
		if ( $animation != '' ) {
			$class[] = $this->prefix . 'animation' . '_' . $animation;
		}
                
                if ( $shadow == 'yes' ) {
			$class[] = $this->prefix . 'shadow';
		}
		
		$data_slick  = ' data-slick=\'{ "lazyLoad": "progressive", "cssEase": "ease-out", "speed": "600"';
		
		if ( $animation == 'fade' ) {
			$data_slick .= ', "fade": true';
			$slider_class[] = 'fade';
			$slides_to_show = 1;
		}
		
		if ( $arrows_size != 'no_arrows' ) {
			$data_slick  .= ', "prevArrow": "&lt;button type=\"button\" class=\"slick-prev\"&gt;", "nextArrow": "&lt;button type=\"button\" class=\"slick-next\"&gt;"';
		} else {
			$data_slick  .= ', "prevArrow": "", "nextArrow": ""';
		}
		
		if ( $height != 'keep-height' ) {
			$data_slick .= ', "adaptiveHeight": true';
		}
		
		if ( $show_dots != 'hide' ) {
			$data_slick .= ', "dots": true' ;
		}
		
		if ( $slides_to_show > 1 ) {
			$data_slick .= ',"slidesToShow": ' . intval( $slides_to_show );
			$class[] = $this->prefix . 'multiple_slides';
		}
		
		if ( $auto_play != '' ) {
			$data_slick .= ',"autoplay": true, "autoplaySpeed": ' . intval( $auto_play );
		}
		
		if ( $pause_on_hover == 'no' ) {
			$data_slick .= ',"pauseOnHover": false';
		}
		
		if ( is_rtl() ) {
			$data_slick .= ', "rtl": true' ;
		}
		
		if ( $slides_to_show > 1 ) {
			$data_slick .= ', "responsive": [';
			if ( $slides_to_show > 1 ) {
				$data_slick .= '{ "breakpoint": 480, "settings": { "slidesToShow": 1, "slidesToScroll": 1 } }';	
			}
			if ( $slides_to_show > 2 ) {
				$data_slick .= ',{ "breakpoint": 768, "settings": { "slidesToShow": 2, "slidesToScroll": 2 } }';	
			}
			if ( $slides_to_show > 3 ) {
				$data_slick .= ',{ "breakpoint": 920, "settings": { "slidesToShow": 3, "slidesToScroll": 3 } }';	
			}
			if ( $slides_to_show > 4 ) {
				$data_slick .= ',{ "breakpoint": 1024, "settings": { "slidesToShow": 3, "slidesToScroll": 3 } }';	
			}				
			$data_slick .= ']';
		}
		$data_slick = $data_slick . '}\' ';
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );

		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '><div class="' . implode( ' ', $slider_class ) . '" ' . $data_slick .  '>' . do_shortcode( $content ) . '</div></div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
		
		return $output;

	}

	function map_shortcode() {
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Slider', 'denticare' ), 'description' => esc_html__( 'Slider with custom content', 'denticare' ), 'container' => 'vertical', 'accept' => array( 'bt_bb_content_slider_item' => true ), 'toggle' => true, 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'height', 'type' => 'dropdown', 'preview' => true, 'heading' => esc_html__( 'Size', 'denticare' ),
					'value' => array(
						esc_html__('Auto', 'denticare' ) => 'auto',
						esc_html__('Keep height', 'denticare' ) => 'keep-height',
						esc_html__('Half screen', 'denticare' ) => 'half_screen',
						esc_html__('Full screen', 'denticare' ) => 'full_screen'
					)
				),
				array( 'param_name' => 'animation', 'type' => 'dropdown', 'heading' => esc_html__( 'Animation', 'denticare' ), 'description' => esc_html__( 'If fade is selected, number of slides to show will be 1', 'denticare' ),
					'value' => array(
						esc_html__('Default', 'denticare' ) => 'slide',
						esc_html__('Fade', 'denticare' ) => 'fade'
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
				array( 'param_name' => 'dots_style', 'type' => 'dropdown', 'heading' => esc_html__( 'Dots style', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Accent active dot', 'denticare' ) => 'accent_dot',
						esc_html__('Alternate active dot', 'denticare' ) => 'alternate_dot',
						esc_html__('Light active dot', 'denticare' ) => 'light_dot',
						esc_html__('Dark active dot', 'denticare' ) => 'dark_dot'
					)
				),
				array( 'param_name' => 'pause_on_hover', 'default' => 'yes', 'type' => 'dropdown', 'heading' => esc_html__( 'Pause slideshow on hover', 'denticare' ),
					'value' => array(
						esc_html__('Yes', 'denticare' ) => 'yes',
						esc_html__('No', 'denticare' ) => 'no'
					)
				),
				array( 'param_name' => 'slides_to_show', 'type' => 'textfield', 'preview' => true, 'default' => 1, 'heading' => esc_html__( 'Number of slides to show', 'denticare' ), 'description' => esc_html__( 'e.g. 3', 'denticare' ) ),
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
				array( 'param_name' => 'auto_play', 'type' => 'textfield', 'heading' => esc_html__( 'Autoplay interval (ms)', 'denticare' ), 'description' => esc_html__( 'e.g. 2000', 'denticare' ) ),
                array( 'param_name' => 'shadow', 'type' => 'dropdown', 'heading' => esc_html__( 'Shadow', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__( 'No', 'denticare' ) => 'no',
						esc_html__( 'Yes', 'denticare' ) => 'yes'
					)
				)
			)
		) );
	}
}