<?php
// Widgets for Denticare theme by BoldThemes
function denticare_register_widgets() {
        register_widget( 'BT_Divider_Widget' );
		register_widget( 'BT_Button_Widget' );        
}
add_action( 'widgets_init', 'denticare_register_widgets' );

// BT_Divider_Widget
if ( ! class_exists( 'BT_Divider_Widget' ) ) {
	class BT_Divider_Widget extends WP_Widget {

		function __construct() {
			parent::__construct(
				'bt_divider_widget', // Base ID
				__( 'BT Divider', 'bt_plugin' ), // Name
				array( 'description' => __( 'Divider Widget, used as a vertical divider in header or footer, or horizontal divider in responsive header or sidebar.', 'bt_plugin' ) ) // Args
			);
                        $this->prefix = 'bt_divider_widget';
		}
		
		public function widget( $args, $instance ) {
                        $hide_on_responsive_vertical_menu    = ! empty( $instance['hide_on_responsive_vertical_menu'] ) ? $instance['hide_on_responsive_vertical_menu'] : '';
                        $show_border    = ! empty( $instance['show_border'] ) ? $instance['show_border'] : '';
                        $border_style   = ! empty( $instance['border_style'] ) ? $instance['border_style'] : '';
                        $border_width   = ! empty( $instance['border_width'] ) ? $instance['border_width'] : '';
                        $spacing_round  = ! empty( $instance['spacing_round'] ) ? $instance['spacing_round'] : '';
                        
                        $div_class = array( 'btIconWidget' );
                        if ( $hide_on_responsive_vertical_menu != '' ) {
                               $div_class[] =  esc_attr( $this->prefix . '_hide_on_responsive_vertical_menu' );
			}
                        
                        $class = array( ); 
                        if ( $show_border != '' ) {
                               $class[] =  esc_attr( $this->prefix . '_show_border' );
			}
                        if ( $border_style != '' ) {
                               $class[] = esc_attr( $this->prefix . '_border_style_' . $border_style );
                        }
                        if ( $border_width != '' ) {
                               $class[] = esc_attr( $this->prefix . '_border_width_' . $border_width . 'px' );
                        }
                        if ( $spacing_round != '' ) {
                               $class[] = esc_attr( $this->prefix . '_spacing_round_' . $spacing_round );
                        }
                        
                        $args['before_widget'] = '<div class="widget_' . $this->prefix . ' ' . implode( ' ', $div_class ) . '">';
                        
                        echo $args['before_widget'];
                         
                        echo '<span class="widget_' . $this->prefix . ' ' . implode( ' ', $class ) . '"></span>';
                        
			echo $args['after_widget'];
                }
                
                public function form( $instance ) {
                        $hide_on_responsive_vertical_menu  = ! empty( $instance['hide_on_responsive_vertical_menu'] ) ? $instance['hide_on_responsive_vertical_menu'] : '';
                        $show_border    = ! empty( $instance['show_border'] ) ? $instance['show_border'] : '';
                        $border_style   = ! empty( $instance['border_style'] ) ? $instance['border_style'] : '';
                        $border_width   = ! empty( $instance['border_width'] ) ? $instance['border_width'] : '';
                        $spacing_round  = ! empty( $instance['spacing_round'] ) ? $instance['spacing_round'] : '';
                        ?>
                        <p>
                                <input class="checkbox" type="checkbox" <?php checked( $hide_on_responsive_vertical_menu, 'on' ); ?> id="<?php echo $this->get_field_id('hide_on_responsive_vertical_menu'); ?>" name="<?php echo $this->get_field_name('hide_on_responsive_vertical_menu'); ?>" /> 
                                <label for="<?php echo $this->get_field_id('hide_on_responsive_vertical_menu'); ?>"><?php _e( 'Hide on responsive vertical menu', 'bt_plugin' ); ?></label>
                        </p>
                        <p>
                                <input class="checkbox" type="checkbox" <?php checked( $show_border, 'on' ); ?> id="<?php echo $this->get_field_id('show_border'); ?>" name="<?php echo $this->get_field_name('show_border'); ?>" /> 
                                <label for="<?php echo $this->get_field_id('show_border'); ?>"><?php _e( 'Show border', 'bt_plugin' ); ?></label>
                        </p>
                        <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'border_style' ) ); ?>"><?php _e( 'Border Style:', 'bt_plugin' ); ?></label> 
				<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'border_style' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'border_style' ) ); ?>">
					<option value=""></option>;
					<?php
					$style_arr = array("Solid" => "solid", "Dotted" => "dotted");
					foreach( $style_arr as $key => $value ) {
						if ( $value == $border_style ) {
							echo '<option value="' . $value . '" selected>' . $key . '</option>';
						} else {
							echo '<option value="' . $value . '">' . $key . '</option>';
						}
					}
					?>
				</select>
			</p>
                        <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'border_width' ) ); ?>"><?php _e( 'Border Width:', 'bt_plugin' ); ?></label> 
				<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'border_width' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'border_width' ) ); ?>">
					<option value=""></option>;
					<?php
					$style_arr = array("1px" => "1", "2px" => "2", "3px" => "3");
					foreach( $style_arr as $key => $value ) {
						if ( $value == $border_width ) {
							echo '<option value="' . $value . '" selected>' . $key . '</option>';
						} else {
							echo '<option value="' . $value . '">' . $key . '</option>';
						}
					}
					?>
				</select>
			</p>
                        <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'spacing_round' ) ); ?>"><?php _e( 'Spacing Round:', 'bt_plugin' ); ?></label> 
				<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'spacing_round' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'spacing_round' ) ); ?>">
					<option value=""></option>;
					<?php
					$style_arr = array("Small" => "small", "Normal" => "normal", "Medium" => "medium", "Large" => "large");
					foreach( $style_arr as $key => $value ) {
						if ( $value == $spacing_round ) {
							echo '<option value="' . $value . '" selected>' . $key . '</option>';
						} else {
							echo '<option value="' . $value . '">' . $key . '</option>';
						}
					}
					?>
				</select>
			</p>
                        <?php
                }
                
                public function update( $new_instance, $old_instance ) {
			$instance = array();
                        $instance['hide_on_responsive_vertical_menu']    = ( ! empty( $new_instance['hide_on_responsive_vertical_menu'] ) ) ? strip_tags( $new_instance['hide_on_responsive_vertical_menu'] ) : '';
                        $instance['show_border']    = ( ! empty( $new_instance['show_border'] ) ) ? strip_tags( $new_instance['show_border'] ) : '';
                        $instance['border_style']   = ( ! empty( $new_instance['border_style'] ) ) ? strip_tags( $new_instance['border_style'] ) : '';
                        $instance['border_width']   = ( ! empty( $new_instance['border_width'] ) ) ? strip_tags( $new_instance['border_width'] ) : '';
                        $instance['spacing_round']   = ( ! empty( $new_instance['spacing_round'] ) ) ? strip_tags( $new_instance['spacing_round'] ) : '';
			
			return $instance;
		}
	}
}


// BT_Button_Widget
if ( ! class_exists( 'BT_Button_Widget' ) ) {

	class BT_Button_Widget extends WP_Widget {

		function __construct() {
			parent::__construct(
				'bt_button_widget', // Base ID
				__( 'BT Button', 'bt_plugin' ), // Name
				array( 'description' => __( 'Button Widget, used as a button with or without link and icon, fully customizable.', 'bt_plugin' ) ) // Args
			);
                        $this->prefix = 'bt_button_widget';
		}

		public function widget( $args, $instance ) {	                    
			$icon   = ! empty( $instance['icon'] ) ? $instance['icon'] : '';
			$icon_position = ( ! empty( $instance['icon_position'] ) ) ? $instance['icon_position'] : '';
			$text   = ! empty( $instance['text'] ) ? $instance['text'] : '';
			$url    = ! empty( $instance['url'] ) ? $instance['url'] : '';
			$target = ! empty( $instance['target'] ) ? $instance['target'] : '_self';
			$style  = ! empty( $instance['style'] ) ? $instance['style'] : '';
			$css    = ! empty( $instance['css'] ) ? $instance['css'] : '';                        
                        $buttons_shape = ! empty( $instance['buttons_shape'] ) ? $instance['buttons_shape'] : '';
			
			$class = array( 'btIconWidget ' );                        
			/*if ( $icon != '' && $icon != 'no_icon' ) {
					$class[] = 'btIconWidget ';
			}  */                      
			
			if ( $icon_position != '' ) {
					$class[] = "btIconWidget" . $icon_position;
			}
			
			$args['before_widget'] = '<div class="btBox widget_' . $this->prefix . ' ' . implode( ' ', $class ) . '">';
                       
			echo $args['before_widget'];

			if ( ! empty( $instance['title'] ) ) {
				echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
			}
                        
                        $output = $this->get_html( $icon, $text, $url, $target, $style, $css, $buttons_shape );  
                        echo $output;
                        
			echo $args['after_widget'];

		}
                
		function get_html( $icon, $text, $url, $target, $style, $css, $buttons_shape  ) {
				$class = array( $this->prefix , 'bt_bb_button_link' );
				
				if ( $style != '' ) {
						 $class[] = esc_attr( $this->prefix . '_' . $style );
				}
				
				if ( $css != '' ) {
						 $class[] = esc_attr( $css );
				}
                                
                                if ( $buttons_shape != '' ) {
                                        $class[] = esc_attr( $this->prefix . '_shape' . '_' . $buttons_shape );
                                }
				
				if ( $url == '' ) {
						$url = '#';
				}

				$text_output = '';
				if ( $text != '' ) {
						$text_output = '<span class="bt_bb_button_text">' . $text . '</span>';
				}
                                

				$link = '';
				$url = untrailingslashit( $url );
				if ( $url != '' && $url != '#' && substr( $url, 0, 4 ) != 'http' && substr( $url, 0, 5 ) != 'https' && substr( $url, 0, 6 ) != 'mailto' ) {
						$link = bt_bb_get_permalink_by_slug( $url );
				} else {
						$link = $url;
				}
				
				$output = '<a href="' . esc_attr( $link ) . '" target="' . esc_attr( $target ) . '" class="' . implode( ' ', $class ) . '" title="' . esc_attr( $text ) . '">';
						if ( $icon == '' || $icon == 'no_icon' ) {
								$output .= $text_output;
						} else {
								$output .= $text_output . bt_bb_icon::get_html( $icon, '', '', '' );
						}
				$output .= '</a>';                        
				
				return $output;
		}

		public function form( $instance ) {	
                        $icon   = ! empty( $instance['icon'] ) ? $instance['icon'] : '';
                        $icon_position   = ! empty( $instance['icon_position'] ) ? $instance['icon_position'] : '';
			$text   = ! empty( $instance['text'] ) ? $instance['text'] : '';
			$url    = ! empty( $instance['url'] ) ? $instance['url'] : '';
                        $target = ! empty( $instance['target'] ) ? $instance['target'] : '';
                        $style  = ! empty( $instance['style'] ) ? $instance['style'] : '';
                        $css    = ! empty( $instance['css'] ) ? $instance['css'] : '';
                        
                        $buttons_shape = ! empty( $instance['buttons_shape'] ) ? $instance['buttons_shape'] : '';
                        
                        $icon_arr = array();
                        if ( function_exists( 'boldthemes_get_icon_fonts_bb_array' ) ) {
				$icon_arr = boldthemes_get_icon_fonts_bb_array();
			} else {
                            if ( class_exists( 'BoldThemes_BB_Settings') ) {
				require_once( WP_PLUGIN_DIR . '/bold-page-builder/content_elements_misc/fa_icons.php' );
				require_once( WP_PLUGIN_DIR . '/bold-page-builder/content_elements_misc/s7_icons.php' );
                                if ( function_exists( 'bt_bb_fa_icons' ) && function_exists( 'bt_bb_s7_icons' ) ) {
                                    $icon_arr = array( 'Font Awesome' => bt_bb_fa_icons(), 'S7' => bt_bb_s7_icons() );
                                }
                            }
			}

			$clear_display = $icon != '' ? 'block' : 'none';
			
			$icon_set = '';
			$icon_code = '';
			$icon_name = '';

			if ( $icon != '' ) {
				$icon_set = substr( $icon, 0, -5 );
				$icon_code = substr( $icon, -4 );
				$icon_code = '&#x' . $icon_code;
				foreach( $icon_arr as $k => $v ) {
					foreach( $v as $k_inner => $v_inner ) {
						if ( $icon == $v_inner ) {
							$icon_name = $k_inner;
						}
					}
				}
			}
                        
			?>
			<div class="bt_bb_iconpicker_widget_container">
				<label for="<?php echo esc_attr( $this->get_field_id( 'icon' ) ); ?>"><?php _e( 'Icon:', 'bt_plugin' ); ?></label>
				<div class="bt_bb_iconpicker">
					<input type="hidden" id="<?php echo esc_attr( $this->get_field_id( 'icon' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon' ) ); ?>">
					<div class="bt_bb_iconpicker_select">
						<div class="bt_bb_icon_preview bt_bb_icon_preview_<?php echo $icon_set; ?>" data-icon="<?php echo $icon; ?>" data-icon-code="<?php echo $icon_code; ?>"></div>
						<div class="bt_bb_iconpicker_select_text"><?php echo $icon_name; ?></div>
						<i class="fa fa-close bt_bb_iconpicker_clear" style="display:<?php echo $clear_display; ?>"></i>
						<i class="fa fa-angle-down"></i>
					</div>
					<div class="bt_bb_iconpicker_filter_container">
						<input type="text" class="bt_bb_filter" placeholder="<?php _e( 'Filter...', 'bt_plugin' ); ?>">
					</div>
					<div class="bt_bb_iconpicker_icons">
						<?php
						$icon_content = '';
						foreach( $icon_arr as $k => $v ) {
							$icon_content .= '<div class="bt_bb_iconpicker_title">' . $k . '</div>';
							foreach( $v as $k_inner => $v_inner ) {
								$icon = $v_inner;
								$icon_set = substr( $icon, 0, -5 );
								$icon_code = substr( $icon, -4 );
								$icon_content .= '<div class="bt_bb_icon_preview bt_bb_icon_preview_' . $icon_set . '" data-icon="' . $icon . '" data-icon-code="&#x' . $icon_code . '" title="' . $k_inner . '"></div>';
							}
						}
						echo $icon_content;
						?>
					</div>
				</div>
			</div>
                        <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'icon_position' ) ); ?>"><?php _e( 'Icon Position:', 'bt_plugin' ); ?></label> 
				<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'icon_position' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'icon_position' ) ); ?>">
					<option value=""></option>;
					<?php
					$icon_position_arr = array("Left" => "Left", "Right" => "Right");
					foreach( $icon_position_arr as $key => $value ) {
						if ( $value == $icon_position ) {
							echo '<option value="' . $value . '" selected>' . $key . '</option>';
						} else {
							echo '<option value="' . $value . '">' . $key . '</option>';
						}
					}
					?>
				</select>
			</p>
                        <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php _e( 'Text:', 'bt_plugin' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" value="<?php echo esc_attr( $text ); ?>">
			</p>
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>"><?php _e( 'URL or slug:', 'bt_plugin' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'url' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'url' ) ); ?>" type="text" value="<?php echo esc_attr( $url ); ?>">
			</p>
                        <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>"><?php _e( 'Target:', 'bt_plugin' ); ?></label> 
				<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'target' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'target' ) ); ?>">
					<option value=""></option>;
					<?php
					$target_arr = array("Self" => "_self", "Blank" => "_blank", "Parent" => "_parent", "Top" => "_top");
					foreach( $target_arr as $key => $value ) {
						if ( $value == $target ) {
							echo '<option value="' . $value . '" selected>' . $key . '</option>';
						} else {
							echo '<option value="' . $value . '">' . $key . '</option>';
						}
					}
					?>
				</select>
			</p>
                        <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'style' ) ); ?>"><?php _e( 'Style:', 'bt_plugin' ); ?></label> 
				<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'style' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'style' ) ); ?>">
					<option value=""></option>;
					<?php
					$style_arr = array("Accent" => "accent", "Alternate" => "alternate", "Dark" => "dark", "Light" => "light");
					foreach( $style_arr as $key => $value ) {
						if ( $value == $style ) {
							echo '<option value="' . $value . '" selected>' . $key . '</option>';
						} else {
							echo '<option value="' . $value . '">' . $key . '</option>';
						}
					}
					?>
				</select>
			</p>
                        <p>
                                <label for="<?php echo esc_attr( $this->get_field_id( 'buttons_shape' ) ); ?>"><?php _e( 'Buttons Shape:', 'bt_plugin' ); ?></label> 
                                <select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'buttons_shape' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'buttons_shape' ) ); ?>">
					<option value=""></option>;
					<?php
					$shape_arr = array(
                                                "inherit" => "",
                                                "Hard Rounded" => "hard-rounded", 
                                                "Hard Rounded except top left corner" => "hard-rounded-top-left", 
                                                "Hard Rounded except top right corner" => "hard-rounded-top-right", 
                                                "Hard Rounded except bottom left corner" => "hard-rounded-bottom-left",
                                                "Hard Rounded except bottom right corner" => "hard-rounded-bottom-right",
                                                "Soft Rounded" => 'soft-rounded',
                                                "Soft Rounded except top left corner" => 'soft-rounded-top-left',
                                                "Soft Rounded except top right corner" => 'soft-rounded-top-right' ,
                                                "Soft Rounded except bottom left corner" => 'soft-rounded-bottom-left' ,
                                                "Soft Rounded except bottom right corner" => 'soft-rounded-bottom-right',
                                                "Square" => 'square'
                                            );
					foreach( $shape_arr as $key => $value ) {
						if ( $value == $buttons_shape ) {
							echo '<option value="' . $value . '" selected>' . $key . '</option>';
						} else {
							echo '<option value="' . $value . '">' . $key . '</option>';
						}
					}
					?>
				</select>
                        </p>
                        <p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'css' ) ); ?>"><?php _e( 'CSS extra class:', 'bt_plugin' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'css' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'css' ) ); ?>" type="text" value="<?php echo esc_attr( $css ); ?>">
			</p>
			<?php
		}

		public function update( $new_instance, $old_instance ) {
			$instance = array();
			$instance['icon']   = ( ! empty( $new_instance['icon'] ) ) ? strip_tags( $new_instance['icon'] ) : '';
			$instance['icon_position'] = ( ! empty( $new_instance['icon_position'] ) ) ? strip_tags( $new_instance['icon_position'] ) : '';
			$instance['text']   = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';
			$instance['url']    = ( ! empty( $new_instance['url'] ) ) ? strip_tags( $new_instance['url'] ) : '';
			$instance['target'] = ( ! empty( $new_instance['target'] ) ) ? strip_tags( $new_instance['target'] ) : '';
			$instance['style']  = ( ! empty( $new_instance['style'] ) ) ? strip_tags( $new_instance['style'] ) : '';
			$instance['css']    = ( ! empty( $new_instance['css'] ) ) ? strip_tags( $new_instance['css'] ) : '';
            $instance['buttons_shape']    = ( ! empty( $new_instance['buttons_shape'] ) ) ? strip_tags( $new_instance['buttons_shape'] ) : '';

			return $instance;
		}
	}	
}

