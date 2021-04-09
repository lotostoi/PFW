<?php

/**
 * Override header options
 */
 if ( ! function_exists( 'boldthemes_customize_header_style' ) ) {
	function boldthemes_customize_header_style( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[header_style]', array(
			'default'           => BoldThemes_Customize_Default::$data['header_style'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'header_style', array(
			'label'     => esc_html__( 'Header Style', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_header_footer_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[header_style]',
			'priority'  => 62,
			'type'      => 'select',
			'choices'   => array(
				'transparent-light'  	=> esc_html__( 'Transparent Light', 'denticare' ),
				'transparent-dark'   	=> esc_html__( 'Transparent Dark', 'denticare' ),
				'accent-dark' 			=> esc_html__( 'Accent + Dark', 'denticare' ),
				'accent-light' 			=> esc_html__( 'Light + Accent ', 'denticare' ),
				'light-accent' 			=> esc_html__( 'Accent + Light', 'denticare' ),
				'light-alternate'		=> esc_html__( 'Alternate + Light', 'denticare' ),
				'light-dark' 			=> esc_html__( 'Light + Dark', 'denticare' ),
				'accent-gradient'		=> esc_html__( 'Accent with Gradient + Light', 'denticare' ),
				'alternate-gradient'		=> esc_html__( 'Alternate with Gradient + Light', 'denticare' )
			)
		));
	}
}

/**
 * Override header options
 */
 if ( ! function_exists( 'boldthemes_customize_header_style' ) ) {
	function boldthemes_customize_header_style( $wp_customize ) {
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[header_style]', array(
			'default'           => BoldThemes_Customize_Default::$data['header_style'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'header_style', array(
			'label'     => esc_html__( 'Header Style', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_header_footer_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[header_style]',
			'priority'  => 62,
			'type'      => 'select',
			'choices'   => array(
				'transparent-light'  	=> esc_html__( 'Transparent Light', 'denticare' ),
				'transparent-dark'   	=> esc_html__( 'Transparent Dark', 'denticare' ),
				'accent-dark' 			=> esc_html__( 'Accent + Dark', 'denticare' ),
				'accent-light' 			=> esc_html__( 'Light + Accent ', 'denticare' ),
				'light-accent' 			=> esc_html__( 'Accent + Light', 'denticare' ),
				'light-dark' 			=> esc_html__( 'Light + Dark', 'denticare' ),
				'accent-gradient'		=> esc_html__( 'Accent + Light with Gradient', 'denticare' )
			)
		));
	}
}

/**
 * Buttons shape addon
 */
if ( ! function_exists( 'boldthemes_customize_heading_buttons_shape' ) ) {
	function boldthemes_customize_heading_buttons_shape( $wp_customize ) {
		
		$wp_customize->add_setting( BoldThemesFramework::$pfx . '_theme_options[buttons_shape]', array(
			'default'           => BoldThemes_Customize_Default::$data['buttons_shape'],
			'type'              => 'option',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'boldthemes_sanitize_select'
		));
		$wp_customize->add_control( 'buttons_shape', array(
			'label'     => esc_html__( 'Buttons Shape', 'denticare' ),
			'section'   => BoldThemesFramework::$pfx . '_typo_section',
			'settings'  => BoldThemesFramework::$pfx . '_theme_options[buttons_shape]',
			'priority'  => 101,
			'type'      => 'select',
			'choices'   => array(
				'hard-rounded' => esc_html__( 'Hard Rounded', 'denticare' ),
				'hard-rounded-top-left' => esc_html__( 'Hard Rounded except top left corner', 'denticare' ),
				'hard-rounded-top-right' => esc_html__( 'Hard Rounded except top right corner', 'denticare' ),
				'hard-rounded-bottom-left' => esc_html__( 'Hard Rounded except bottom left corner', 'denticare' ),
				'hard-rounded-bottom-right' => esc_html__( 'Hard Rounded except bottom right corner', 'denticare' ),
				'soft-rounded' => esc_html__( 'Soft Rounded', 'denticare' ),
				'soft-rounded-top-left' => esc_html__( 'Soft Rounded except top left corner', 'denticare' ),
				'soft-rounded-top-right' => esc_html__( 'Soft Rounded except top right corner', 'denticare' ),
				'soft-rounded-bottom-left' => esc_html__( 'Soft Rounded except bottom left corner', 'denticare' ),
				'soft-rounded-bottom-right' => esc_html__( 'Soft Rounded except bottom right corner', 'denticare' ),
				'square' => esc_html__( 'Square', 'denticare' )
			)
		));
	}
}

/**
 * Preloader HTML output
 */
 if ( ! function_exists( 'boldthemes_preloader_html' ) ) {
	function boldthemes_preloader_html() {
		if ( ! boldthemes_get_option( 'disable_preloader' ) ) { ?>
			<div id="btPreloader" class="btPreloader">
				<div class="animation">
					<div><?php boldthemes_logo( 'preloader' ); ?></div>
					<div class="btLoader">
						<span class="box1"></span>
						<span class="box2"></span>
						<span class="box3"></span>
						<span class="box4"></span>
						<span class="box5"></span>
					</div>
					<p><?php echo boldthemes_get_option( 'preloader_text' ); ?></p>
				</div>
			</div><!-- /.preloader -->
		<?php }
	}
}

/**
 * WooCommerce share small icons
 */

add_filter( 'boldthemes_shop_share_settings', 'boldthemes_shop_share_settings_function' );
if ( ! function_exists( 'boldthemes_shop_share_settings_function' ) ) {
	function boldthemes_shop_share_settings_function( $extra_class ) {		
		return array( 'xsmall', 'filled', 'circle' );
	}
}

/**
 * WooCommerce related products
 */

if ( ! function_exists( 'boldthemes_related_products_args' ) ) {
	function boldthemes_related_products_args( $args ) {
		$args['posts_per_page'] = 3; // n related products
		$args['columns'] = 3; // arranged in n columns
		return $args;
	}
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );

if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
	function woocommerce_output_upsells() {
	    woocommerce_upsell_display( 3,3 ); // Display 3 products in rows of 3
	}
}

/**
 * WooCommerce headline size
 */
if ( ! function_exists( 'boldthemes_product_list_headline_size' ) ) {
	function boldthemes_product_list_headline_size ( ) {
		return 'small';
	}
}
add_filter( 'boldthemes_product_list_headline_size', 'boldthemes_product_list_headline_size' );

/**
 * WooCommerce headline size
 */
if ( ! function_exists( 'boldthemes_product_headline_size' ) ) {
	function boldthemes_product_headline_size ( ) {
		return 'medium';
	}
}
add_filter( 'boldthemes_product_headline_size', 'boldthemes_product_headline_size' );

/**
 * Default header dash
 */
if ( ! function_exists( 'boldthemes_header_headline_dash' ) ) {
	function boldthemes_header_headline_dash() {
		return "bottom"; 
	}
}
add_filter( 'boldthemes_header_headline_dash', 'boldthemes_header_headline_dash' );
if ( ! function_exists( 'boldthemes_header_headline' ) ) {
	function boldthemes_header_headline( $arg = array() ) {
		
		$extra_class = 'btPageHeadline';
		$feat_image = false;
		$dash  = '';
		$use_dash = boldthemes_get_option( 'sidebar_use_dash' );
		if ( $use_dash ) $dash  = apply_filters( 'boldthemes_header_headline_dash', 'bottom' );
		$title = is_front_page() ? get_bloginfo( 'description' ) : wp_title( '', false );
		
		if ( BoldThemesFramework::$page_for_header_id != '' ) {
			$feat_image = wp_get_attachment_url( get_post_thumbnail_id( BoldThemesFramework::$page_for_header_id ) );
			
			$excerpt = boldthemes_get_the_excerpt( BoldThemesFramework::$page_for_header_id );
			if ( ! $feat_image ) {
				if ( is_singular() &&  !is_singular( "product" ) ) {
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
				} else {
					$feat_image = false;
				}
			}
		} else {
			if ( is_singular() ) {
				$feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
			} else {
				$feat_image = false;
			}
			$excerpt = boldthemes_get_the_excerpt( get_the_ID() );
		}
		
		$parallax = isset( $arg['parallax'] ) ? $arg['parallax'] : '0.8';
		$parallax_class = 'bt_bb_parallax';
		if ( wp_is_mobile() ) {
			$parallax = 0;
			$parallax_class = '';
		}
		
		$supertitle = '';

		$subtitle = $excerpt;
		
		$breadcrumbs = isset( $arg['breadcrumbs'] ) ? $arg['breadcrumbs'] : true;

		if ( $breadcrumbs ) {
			$heading_args = boldthemes_breadcrumbs( false, $title, $subtitle );
			$supertitle = $heading_args['supertitle'];
			$title = $heading_args['title'];
			$subtitle = $heading_args['subtitle'];
		}
                
                $style_background_image = '';
                if ( $feat_image ) {
                    $style_background_image = ' style="background-image:url(' . esc_url_raw( $feat_image ) . ')" ';
                }

		if ( $title != '' || $supertitle != '' || $subtitle != '' ) {
			$extra_class .= $feat_image ? ' bt_bb_background_image bt_bb_background_overlay_light_solid ' . $parallax_class . ' btLightSkin ' : ' ';
			
			echo '<section class="bt_bb_section gutter bt_bb_vertical_align_top ' . esc_attr( $extra_class ) . '" ' .$style_background_image . 'data-parallax="' . esc_attr( $parallax ) . '" data-parallax-offset="-300">';
				echo '<div class="bt_bb_port port">';
					echo '<div class="bt_bb_cell">';
						echo '<div class="bt_bb_cell_inner">';
							echo '<div class = "bt_bb_row">';
								echo '<div class="bt_bb_column">';
									echo '<div class="bt_bb_column_content">';
										echo boldthemes_get_heading_html(
											array(
												'superheadline' => $supertitle,
												'headline' => $title,
												'subheadline' => $subtitle,
												'html_tag' => "h1",
												'size' => apply_filters( 'boldthemes_header_headline_size', 'large' ),
												'dash' => $dash,
												'el_style' => '',
												'el_class' => ''
											)
										);
										echo '</div><!-- /rowItemContent -->' ;
									echo '</div><!-- /rowItem -->';
							echo '</div><!-- /boldRow -->';
						echo '</div><!-- boldCellInner -->';	
					echo '</div><!-- boldCell -->';			
				echo '</div><!-- port -->';
			echo '</section>';
		}
		
	}
}

/**
 * Returns custom header class
 *
 * @return string
 */
if ( ! function_exists( 'boldthemes_get_body_class' ) ) {
	function boldthemes_get_body_class( $extra_class ) {
		
		if ( boldthemes_get_option( 'alt_logo' ) ) {
			$extra_class[] = 'btHasAltLogo';
		}
                
		if ( boldthemes_get_option( 'menu_font_size' ) ) {
			$menu_font_size = boldthemes_get_option( 'menu_font_size' );
			$extra_class[]  = 'btMenuFontSize-' . $menu_font_size;
		}
		
		if ( boldthemes_get_option( 'menu_focus_element' ) ) {
			$menu_focus_element = boldthemes_get_option( 'menu_focus_element' );
			$extra_class[]  = 'btMenuFocusElement' . $menu_focus_element;
		}                

		if ( boldthemes_get_option( 'template_dash_design' ) ) {
			$template_dash_design = boldthemes_get_option( 'template_dash_design' );
			$extra_class[]  = 'btTemplateDash' . $template_dash_design;
		}                
		if ( boldthemes_get_option( 'template_headline_style' ) ) {
			$template_headline_style = boldthemes_get_option( 'template_headline_style' );
			$extra_class[]  = 'btPageHeadline' . $template_headline_style;
		}                
		
		$show_logo_and_logo_widgets = false;
		$menu_type = boldthemes_get_option( 'menu_type' );
		if ( $menu_type == 'horizontal-center' ) {
			$extra_class[] = 'btMenuCenterEnabled'; 
		} else if ( $menu_type == 'horizontal-left' ) {
			$extra_class[] = 'btMenuLeftEnabled';
		}  else if ( $menu_type == 'horizontal-right' ) {
			$extra_class[] = 'btMenuRightEnabled';
		} else if ( $menu_type == 'horizontal-below-left' ) {
			$extra_class[] = 'btMenuLeftEnabled';
			$extra_class[] = 'btMenuBelowLogo';
			$show_logo_and_logo_widgets = true;
		} else if ( $menu_type == 'horizontal-below-center' ) {
			$extra_class[] = 'btMenuCenterBelowEnabled';
			$extra_class[] = 'btMenuBelowLogo';
			$show_logo_and_logo_widgets = true;
		} else if ( $menu_type == 'horizontal-below-right' ) {
			$extra_class[] = 'btMenuRightEnabled';
			$extra_class[] = 'btMenuBelowLogo';
			$show_logo_and_logo_widgets = true;
		} else if ( $menu_type == 'vertical-left' ) {
			$extra_class[] = 'btMenuVerticalLeftEnabled';
		} else if ( $menu_type == 'vertical-right' ) {
			$extra_class[] = 'btMenuVerticalRightEnabled';
		} else {
			$extra_class[] = 'btMenuRightEnabled';
		}

		if ( boldthemes_get_option( 'change_number_ligatures' ) ) {
			$extra_class[] = 'btSwapNumberLigature';
		}

		if ( boldthemes_get_option( 'sticky_header' ) ) {
			$extra_class[] = 'btStickyEnabled';
		}

		if ( boldthemes_get_option( 'hide_menu' ) ) {
			$extra_class[] = 'btHideMenu';
		}

		if ( boldthemes_get_option( 'hide_headline' ) || boldthemes_get_option( 'hide_headline' ) == 'hide' ) {
			$extra_class[] = 'btHideHeadline';
		}

		$template_skin = boldthemes_get_option( 'template_skin' );
		if ( $template_skin == '' ) $template_skin = 'light';
		if ( $template_skin != '' ) {
			$extra_class[] = 'bt' . boldthemes_convert_param_to_camel_case( $template_skin ) . 'Skin';
		}

		if ( boldthemes_get_option( 'below_menu' ) ) {
			$extra_class[] = 'btBelowMenu';
		}

		if ( ! boldthemes_get_option( 'sidebar_use_dash' ) ) {
			$extra_class[] = 'btNoDashInSidebar';
		}

		if ( boldthemes_get_option( 'disable_preloader' ) ) {
			$extra_class[] = 'noBodyPreloader';
		} else {
			$extra_class[] = 'bodyPreloader'; 
		}
		
		$buttons_shape = boldthemes_get_option( 'buttons_shape' );
		if ( $buttons_shape != '' ) {
			$extra_class[] = 'bt' . boldthemes_convert_param_to_camel_case( $buttons_shape ) . 'Buttons';
		}
		
		$header_style = boldthemes_get_option( 'header_style' );
		if ( $header_style != '' ) {
			$extra_class[] =  'bt' . boldthemes_convert_param_to_camel_case( $header_style ) . 'Header';
		} else {
			$extra_class[] =  'btTransparentDarkHeader';
		}
		
		if ( boldthemes_get_option( 'page_width' ) == 'boxed' ) {
			$extra_class[] = 'btBoxedPage';
		}

		BoldThemesFramework::$sidebar = boldthemes_get_option( 'sidebar' );
		
		global $wp_registered_sidebars;
		$widget_areas = array_keys( $wp_registered_sidebars );
		
		if ( ! ( ( BoldThemesFramework::$sidebar == 'left' || BoldThemesFramework::$sidebar == 'right' ) && ! is_404() )
			|| 
			( function_exists( 'is_woocommerce' ) && is_woocommerce() && in_array( 'bt_shop_sidebar', $widget_areas ) && ! is_active_sidebar( 'bt_shop_sidebar' ) )
			||
			! is_active_sidebar( 'primary_widget_area' )
			) {
			BoldThemesFramework::$has_sidebar = false;
			$extra_class[] = 'btNoSidebar';
		} else {
			BoldThemesFramework::$has_sidebar = true;
			if ( BoldThemesFramework::$sidebar == 'left' ) {
				$extra_class[] = 'btWithSidebar btSidebarLeft';
			} else {
				$extra_class[] = 'btWithSidebar btSidebarRight';
			}
		}
		
		$animations = boldthemes_rwmb_meta( BoldThemesFramework::$pfx . '_animations' );
		if ( $animations == 'half_page' ) {
			$extra_class[] = 'btHalfPage';
		}
                
		if ( boldthemes_get_option( 'shop_sale_tag_design' ) ) {
			$shop_sale_tag_design = boldthemes_get_option( 'shop_sale_tag_design' );
			$extra_class[] = 'btShopSaleTagDesign' . boldthemes_convert_param_to_camel_case( $shop_sale_tag_design );
		}
                
                if ( boldthemes_get_option( 'sticky_header' ) && $show_logo_and_logo_widgets && boldthemes_get_option( 'show_logo_and_logo_widgets' ) ) {
			$extra_class[] = 'btMenuBelowLogoShowArea';
		}
                
                
		
		$extra_class = apply_filters( 'boldthemes_extra_class', $extra_class );
		
		return $extra_class;
	}
}

/**
 * Returns custom 404 image
 *
 * @return string - 404 image path
 */
if ( ! function_exists( 'boldthemes_get_404_image' ) ) {
	function boldthemes_get_404_image() {		
		$image_404 = boldthemes_get_option( 'image_404' );
                if ( is_numeric( $image_404 ) ) {
					$image_404 = wp_get_attachment_image_src( $image_404, 'full' );
					$image_404 = isset($image_404[0]) ? $image_404[0] : BoldThemes_Customize_Default::$data['image_404'];
                }
			return $image_404;
        }
}
