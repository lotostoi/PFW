<?php

class bt_bb_section extends BT_BB_Element {
    
        function  bb_exist(){
            if ( file_exists( WP_PLUGIN_DIR . '/bold-page-builder/bold-builder.php' ) ) { return true; }
            return false;
        }

	function handle_shortcode( $atts, $content ) {
                if ( !$this->bb_exist() ) { return false; }
            
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'layout'                		=> '',
			'full_screen'           		=> '',
			'vertical_align'        		=> '',
			'top_spacing'           		=> '',
			'bottom_spacing'        		=> '',
			'color_scheme'          		=> '',
			'background_color'      		=> '',
			'background_image'      		=> '',
			'lazy_load'  					=> 'no',
			'background_overlay'    		=> '',
			'background_video_yt'   		=> '',
			'yt_video_settings'     		=> '',
			'background_video_mp4'  		=> '',
			'background_video_ogg'  		=> '',
			'background_video_webm' 		=> '',
			'parallax'              		=> '',
			'parallax_offset'       		=> '',
			'background_position'    		=> '',
			'background_size'               => '',
			'top_section_coverage_image'    => '',
			'bottom_section_coverage_image' => '',
			'overlap_columns'          		=> '',
			'show_boxed_content'            => 'no',
			'allow_content_outside'         => 'no'
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );

		wp_enqueue_script(
			'bt_bb_elements',
			 plugins_url() . '/bold-page-builder/content_elements/bt_bb_section/bt_bb_elements.js',
			 array( 'jquery' ),
			 '',
			 true
		);

		if ( $top_spacing != '' ) {
			$class[] = $this->prefix . 'top_spacing' . '_' . $top_spacing;
		}

		if ( $bottom_spacing != '' ) {
			$class[] = $this->prefix . 'bottom_spacing' . '_' . $bottom_spacing;
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}
		
		if ( $background_color != '' ) {
			$el_style = $el_style . ';' . 'background-color:' . $background_color . ';';
		}

		if ( $layout != '' ) {
			$class[] = $this->prefix . 'layout' . '_' . $layout;
		}

		if ( $full_screen == 'yes' ) {
			$class[] = $this->prefix . 'full_screen';
		}

		if ( $vertical_align != '' ) {
			$class[] = $this->prefix . 'vertical_align' . '_' . $vertical_align;
		}

		$data_parallax_attr = '';
		if ( $parallax != '' && ! wp_is_mobile() ) {
			$data_parallax_attr = 'data-parallax="' . esc_attr( $parallax ) . '" data-parallax-offset="' . esc_attr( intval( $parallax_offset ) ) . '"';
			$class[] = $this->prefix . 'parallax';
		}
		$background_data_attr = '';

		if ( $background_image != '' ) {
			$background_image = wp_get_attachment_image_src( $background_image, 'full' );
			$background_image_url = $background_image ? $background_image[0] : '';
                        if ( $background_image_url != '' ) {
                            if ( $lazy_load == 'yes' ) {
                                    $blank_image_src = BT_BB_Root::$path . 'img/blank.gif';
                                    $background_image_style = 'background-image:url(\'' . $blank_image_src . '\');';
                                    $background_data_attr .= ' data-background_image_src="\'' . $background_image_url . '\'"';
                                    $class[] = 'btLazyLoadBackground';
                            } else {
                                    $background_image_style = 'background-image:url(\'' . $background_image_url . '\');';

                            }
                            $el_style = $background_image_style . $el_style;	
                            $class[] = $this->prefix . 'background_image';
                        }
		}

		if ( $background_overlay != '' ) {
			$class[] = $this->prefix . 'background_overlay' . '_' . $background_overlay;
		}

		$id_attr = '';
		if ( $el_id == '' ) {
			$el_id = uniqid( 'bt_bb_section' );
		}
		$id_attr = 'id="' . esc_attr( $el_id ) . '"';

		$background_video_attr = '';

		$video_html = '';

		if ( $background_video_yt != '' ) {
			wp_enqueue_style( 'bt_bb_style_yt', plugins_url() . '/bold-page-builder/content_elements/bt_bb_section/YTPlayer.css' );
			wp_enqueue_script( 
				'bt_bb_yt',
				plugins_url() . '/bold-page-builder/content_elements/bt_bb_section/jquery.mb.YTPlayer.min.js',
				array( 'jquery' ),
				'',
				true
			);

			$class[] = $this->prefix . 'background_video_yt';

			if ( $yt_video_settings == '' ) {
				$yt_video_settings = 'showControls:false,showYTLogo:false,mute:true,stopMovieOnBlur:false,opacity:1';
			}

			$background_video_attr = ' ' . 'data-property="{videoURL:\'' . $background_video_yt . '\',containment:\'self\',' . $yt_video_settings . '}"';
			$proxy = new BT_BB_YT_Video_Proxy( $this->prefix );
			add_action( 'wp_footer', array( $proxy, 'js_init' ) );

		} else if ( ( $background_video_mp4 != '' || $background_video_ogg != '' || $background_video_webm != '' ) ) {
			$class[] = $this->prefix . 'video';
			$video_html = '<video autoplay loop muted onplay="bt_bb_video_callback( this )">';
			if ( $background_video_mp4 != '' ) {
				$video_html .= '<source src="' . esc_url_raw( $background_video_mp4 ) . '" type="video/mp4">';
			}
			if ( $background_video_ogg != '' ) {
				$video_html .= '<source src="' . esc_url_raw( $background_video_ogg ) . '" type="video/ogg">';
			}
			if ( $background_video_webm != '' ) {
				$video_html .= '<source src="' . esc_url_raw( $background_video_webm ) . '" type="video/webm">';
			}
			$video_html .= '</video>';
		}
                
                if ( $overlap_columns != '' ) {
			$class[] = $this->prefix . 'overlap_columns' . '_' .$overlap_columns;
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		$class_attr = implode( ' ', $class );

		if ( $el_class != '' ) {
			$class_attr = $class_attr . ' ' . $el_class;
		}
                
                if ( $show_boxed_content == 'yes' ) {
                        $class_attr = $class_attr . ' ' . $this->shortcode . '_show_boxed_content';
                }
                if ( $show_boxed_content == 'left' ) {
                        $class_attr = $class_attr . ' ' . $this->shortcode . '_show_left_boxed_content';
                }
                if ( $show_boxed_content == 'right' ) {
                        $class_attr = $class_attr . ' ' . $this->shortcode . '_show_right_boxed_content';
                }
                
                if ( $allow_content_outside == 'yes' ) {
                        $class_attr = $class_attr . ' ' . $this->shortcode . '_allow_content_outside';
                }

                $top_section_coverage_image_output = '';
                if ( $top_section_coverage_image != '' ) { 
                    $alt_top_section_coverage_image = get_post_meta($top_section_coverage_image, '_wp_attachment_image_alt', true);
                    $alt_top_section_coverage_image = $alt_top_section_coverage_image ? $alt_top_section_coverage_image : $this->shortcode . '_top_section_coverage_image';
                    
                    $top_section_coverage_image = wp_get_attachment_image_src( $top_section_coverage_image, 'full' );                     
                    if ( isset($top_section_coverage_image[0]) ){
                        $class_attr = $class_attr . ' ' . $this->shortcode . '_with_top_coverage_image';
                        $top_section_coverage_image = $top_section_coverage_image[0];
                        $top_section_coverage_image_output = '<div class="' . esc_attr( $this->shortcode ) . '_top_section_coverage_image"><img src="' . esc_url_raw($top_section_coverage_image) . '" alt="' . esc_attr($alt_top_section_coverage_image) . '" /></div>';
                    }
                }
                $bottom_section_coverage_image_output = '';
                if ( $bottom_section_coverage_image != '' ) {  
                    $alt_bottom_section_coverage_image = get_post_meta($bottom_section_coverage_image, '_wp_attachment_image_alt', true);
                    $alt_bottom_section_coverage_image = $alt_bottom_section_coverage_image ? $alt_bottom_section_coverage_image : $this->shortcode . '_bottom_section_coverage_image';
                   
                    $bottom_section_coverage_image = wp_get_attachment_image_src( $bottom_section_coverage_image, 'full' );
                    if ( isset($bottom_section_coverage_image[0]) ){
                        $class_attr = $class_attr . ' ' .$this->shortcode . '_with_bottom_coverage_image';
                        $bottom_section_coverage_image = $bottom_section_coverage_image[0];                    
                        $bottom_section_coverage_image_output = '<div class="' . esc_attr( $this->shortcode ) . '_bottom_section_coverage_image"><img src="' . esc_url_raw($bottom_section_coverage_image) . '" alt="' . esc_attr($alt_bottom_section_coverage_image) . '" /></div>';
                    }
                }
                
                $background_position_style  = $background_position  != '' ? 'background-position:' . $background_position . ';' : '';
                $background_size_style      = $background_size      != '' ? 'background-size:' . $background_size . ';' : '';
		
                $style_attr = '';
		if ( $el_style != '' || $background_position_style != '' || $background_size_style != '' ) {
			$style_attr = 'style="' . esc_attr( $el_style . $background_position_style . $background_size_style ) . '"';
		}  

		$output = '<section ' . $id_attr . ' ' . $data_parallax_attr . $background_data_attr . ' class="' . esc_attr( $class_attr ) . '" ' . $style_attr . $background_video_attr . '>';
		$output .= $video_html;
		$output .= '<div class="' . esc_attr( $this->prefix ) . 'port">';
		$output .= '<div class="' . esc_attr( $this->prefix ) . 'cell">';
		$output .= '<div class="' . esc_attr( $this->prefix ) . 'cell_inner">';
		$output .= do_shortcode( $content );
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= $top_section_coverage_image_output;
		$output .= $bottom_section_coverage_image_output;
		$output .= '</section>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {
		if ( !$this->bb_exist() ) { return false; }
		require_once( WP_PLUGIN_DIR   . '/bold-page-builder/content_elements_misc/misc.php' );
		$color_scheme_arr = bt_bb_get_color_scheme_param_array();

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Section', 'denticare' ), 'description' => esc_html__( 'Basic root element', 'denticare' ), 'root' => true, 'container' => 'vertical', 'accept' => array( 'bt_bb_row' => true ), 'toggle' => true, 'auto_add' => 'bt_bb_row', 'show_settings_on_create' => false,
			'params' => array( 
				array( 'param_name' => 'layout', 'type' => 'dropdown', 'default' => 'boxed_1200', 'heading' => esc_html__( 'Layout', 'denticare' ), 'group' => esc_html__( 'General', 'denticare' ), 'weight' => 0, 'preview' => true,
					'value' => array(
						esc_html__( 'Boxed (800px)', 'denticare' ) => 'boxed_800',
						esc_html__( 'Boxed (900px)', 'denticare' ) => 'boxed_900',
						esc_html__( 'Boxed (1000px)', 'denticare' ) => 'boxed_1000',
						esc_html__( 'Boxed (1100px)', 'denticare' ) => 'boxed_1100',
						esc_html__( 'Boxed (1200px)', 'denticare' ) => 'boxed_1200',
						esc_html__( 'Boxed (1300px)', 'denticare' ) => 'boxed_1300',
						esc_html__( 'Boxed (1400px)', 'denticare' ) => 'boxed_1400',
						esc_html__( 'Boxed (1500px)', 'denticare' ) => 'boxed_1500',
						esc_html__( 'Boxed (1600px)', 'denticare' ) => 'boxed_1600',
						esc_html__( 'Wide', 'denticare' ) => 'wide'
					)
				),
				array( 'param_name' => 'top_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Top spacing', 'denticare' ), 'preview' => true,
					'value' => array(
						esc_html__( 'No spacing', 'denticare' ) => '',
						esc_html__( 'Extra small', 'denticare' ) => 'extra_small',
						esc_html__( 'Small', 'denticare' ) => 'small',		
						esc_html__( 'Normal', 'denticare' ) => 'normal',
						esc_html__( 'Medium', 'denticare' ) => 'medium',
						esc_html__( 'Large', 'denticare' ) => 'large',
						esc_html__( 'Extra large', 'denticare' ) => 'extra_large'
					)
				),
				array( 'param_name' => 'bottom_spacing', 'type' => 'dropdown', 'heading' => esc_html__( 'Bottom spacing', 'denticare' ), 'preview' => true,
					'value' => array(
						esc_html__( 'No spacing', 'denticare' ) => '',
						esc_html__( 'Extra small', 'denticare' ) => 'extra_small',
						esc_html__( 'Small', 'denticare' ) => 'small',		
						esc_html__( 'Normal', 'denticare' ) => 'normal',
						esc_html__( 'Medium', 'denticare' ) => 'medium',
						esc_html__( 'Large', 'denticare' ) => 'large',
						esc_html__( 'Extra large', 'denticare' ) => 'extra_large'
					)
				),
				array( 'param_name' => 'full_screen', 'type' => 'dropdown', 'heading' => esc_html__( 'Full screen', 'denticare' ), 
					'value' => array(
						esc_html__( 'No', 'denticare' ) => '',
						esc_html__( 'Yes', 'denticare' ) => 'yes'
					)
				),
				array( 'param_name' => 'vertical_align', 'type' => 'dropdown', 'heading' => esc_html__( 'Vertical align (for fullscreen section)', 'denticare' ), 'preview' => true,
					'value' => array(
						esc_html__( 'Top', 'denticare' )     => 'top',
						esc_html__( 'Middle', 'denticare' )  => 'middle',
						esc_html__( 'Bottom', 'denticare' )  => 'bottom'					
					)
				),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'denticare' ), 'value' => $color_scheme_arr, 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' )  ),
				array( 'param_name' => 'background_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Background color', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'background_image', 'type' => 'attach_image',  'preview' => true, 'heading' => esc_html__( 'Background image', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'yes', 'heading' => esc_html__( 'Lazy load background image', 'denticare' ),
					'value' => array(
						esc_html__( 'No', 'denticare' ) => 'no',
						esc_html__( 'Yes', 'denticare' ) => 'yes'
					)
				),
				array( 'param_name' => 'background_overlay', 'type' => 'dropdown', 'heading' => esc_html__( 'Background overlay', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ), 
					'value' => array(
						esc_html__( 'No overlay', 'denticare' )    => '',
						esc_html__( 'Light stripes', 'denticare' ) => 'light_stripes',
						esc_html__( 'Dark stripes', 'denticare' )  => 'dark_stripes',
						esc_html__( 'Light solid', 'denticare' )	  => 'light_solid',
						esc_html__( 'Dark solid', 'denticare' )	  => 'dark_solid',
						esc_html__( 'Light gradient', 'denticare' )	  => 'light_gradient',
						esc_html__( 'Dark gradient', 'denticare' )	  => 'dark_gradient',
						esc_html__( 'Accent solid', 'denticare' )	  => 'accent_solid',
						esc_html__( 'Alternate solid', 'denticare' )	  => 'alternate_solid',
						esc_html__( 'Accent to alternate gradient', 'denticare' )	  => 'accent_alternate_gradient',
						esc_html__( 'Alternate to accent gradient', 'denticare' )	  => 'alternate_accent_gradient'
					)
				),
				array( 'param_name' => 'background_position', 'type' => 'textfield', 'heading' => esc_html__( 'Background position in keywords', 'denticare' ), 'description' => esc_html__( 'E.g. left, right, top, bottom, center or in pixels / percentage - ineffective if parallax is used.', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'background_size', 'type' => 'textfield', 'heading' => esc_html__( 'Background size', 'denticare' ), 'description' => esc_html__( 'E.g. auto, cover, contain, initial, inherit or size in pixels - ineffective if parallax is used.', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'top_section_coverage_image', 'type' => 'attach_image',  'preview' => true, 'heading' => esc_html__( 'Top Section Covering Image', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'bottom_section_coverage_image', 'type' => 'attach_image',  'preview' => true, 'heading' => esc_html__( 'Bottom Section Covering Image', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'overlap_columns', 'type' => 'dropdown', 'default' => '', 'heading' => esc_html__( 'Overlap two columns one over another', 'denticare' ),  'description' => esc_html__( 'Column that overlaps will not change width, only the column being overlapped - applicable only on two column layouts.', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__( 'No overlapping', 'denticare' ) => '',
						esc_html__( 'Overlap left over right', 'denticare' ) => 'left',
						esc_html__( 'Overlap left over right (content in right goes under left column)', 'denticare' ) => 'left_under',
						esc_html__( 'Overlap right over left', 'denticare' ) => 'right',
						esc_html__( 'Overlap right over left (content in left goes under right column)', 'denticare' ) => 'right_under'
					)
				),				
				array( 'param_name' => 'show_boxed_content', 'type' => 'dropdown', 'default' => 'no', 'heading' => esc_html__( 'Box column content', 'denticare' ), 'description' => esc_html__( 'Used to stretch or box column content, only applicable for one and two column layouts', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__( 'No', 'denticare' ) => 'no',
						esc_html__( 'Box both columns', 'denticare' ) => 'yes',
						esc_html__( 'Box left column', 'denticare' ) => 'left',
						esc_html__( 'Box right column', 'denticare' ) => 'right'
					)
				),				
				array( 'param_name' => 'allow_content_outside', 'type' => 'dropdown', 'default' => 'no', 'heading' => esc_html__( 'Show content over top or bottom covering image', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
							esc_html__( 'No (content to be underneath top and bottom covering image)', 'denticare' ) => 'no',
							esc_html__( 'Yes (content will cover both covering images)', 'denticare' ) => 'yes'
					)
				),				
				array( 'param_name' => 'parallax', 'type' => 'textfield', 'heading' => esc_html__( 'Parallax (e.g. 0.7)', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'parallax_offset', 'type' => 'textfield', 'heading' => esc_html__( 'Parallax offset in px (e.g. -100)', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ) ),
				array( 'param_name' => 'background_video_yt', 'type' => 'textfield', 'heading' => esc_html__( 'YouTube background video', 'denticare' ), 'group' => esc_html__( 'Video', 'denticare' ) ),
				array( 'param_name' => 'yt_video_settings', 'type' => 'textfield', 'heading' => esc_html__( 'YouTube video settings (e.g. startAt:20, mute:true, stopMovieOnBlur:false)', 'denticare' ), 'group' => esc_html__( 'Video', 'denticare' ) ),
				array( 'param_name' => 'background_video_mp4', 'type' => 'textfield', 'heading' => esc_html__( 'MP4 background video', 'denticare' ), 'group' => esc_html__( 'Video', 'denticare' ) ),
				array( 'param_name' => 'background_video_ogg', 'type' => 'textfield', 'heading' => esc_html__( 'OGG background video', 'denticare' ), 'group' => esc_html__( 'Video', 'denticare' ) ),
				array( 'param_name' => 'background_video_webm', 'type' => 'textfield', 'heading' => esc_html__( 'WEBM background video', 'denticare' ), 'group' => esc_html__( 'Video', 'denticare' ) )
			)
		) );		

	} 

}

class BT_BB_YT_Video_Proxy {
	function __construct( $prefix ) {
		$this->prefix = $prefix;
	}
	public function js_init() {
            wp_register_script( 'boldthemes-script-bt-bb-section-js-init', '' );
            wp_enqueue_script( 'boldthemes-script-bt-bb-section-js-init' );
            wp_add_inline_script( 'boldthemes-script-bt-bb-section-js-init', 'jQuery(function() { jQuery( ".' . esc_html($this->prefix) . 'background_video_yt" ).YTPlayer();});' );
        }
}