<?php

class bt_bb_price_list extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'icon'         => '',
			'title'        => '',
			'subtitle'     => '',
			'currency'     => '',
			'price'        => '',			
			'items'        => '',
			'color_scheme' => '',
			'align'        => '',
			'size'         => '',
			'style'        => '',
			'shape'        => '',
			'vertical_position'        => '',
			'background_color'        => '',
			'highlight'        => '',
			'design'        => ''
		) ), $atts, $this->shortcode ) );

		$class = array( $this->shortcode );
		
		$icon_class = array( 'bt_bb_icon' );

		if ( $el_class != '' ) {
			$class[] = $el_class;
		}

		$id_attr = '';
		if ( $el_id != '' ) {
			$id_attr = ' ' . 'id="' . esc_attr( $el_id ) . '"';
		}

		if ( $background_color != '' ) {
			$el_style = $el_style . ';' . 'background-color:' . $background_color . ';';
		}

		if ( $color_scheme != '' ) {
			$class[] = $this->prefix . 'color_scheme_' . bt_bb_get_color_scheme_id( $color_scheme );
		}		

		if ( $align != '' ) {
			$icon_class[] = $this->prefix . 'align' . '_' . $align;
		}
		
		if ( $style != '' ) {
			$icon_class[] = $this->prefix . 'style' . '_' . $style;
		}

		if ( $size != '' ) {
			$icon_class[] = $this->prefix . 'size' . '_' . $size;
		}

		if ( $shape != '' ) {
			$icon_class[] = $this->prefix . 'shape' . '_' . $shape;
		}

		if ( $vertical_position != '' ) {
			$icon_class[] = $this->prefix . 'vertical_position' . '_' . $vertical_position;
		}
		
		$style_attr = '';
		if ( $el_style != '' ) {
			$style_attr = ' ' . 'style="' . esc_attr( $el_style ) . '"';
		}
		
		if ( $design != '' ) {
			$class[] = $this->prefix . 'design' . '_' . $design;
		}
                
                if ( $highlight != '' ) {
			$class[] = $this->prefix . 'highlight';
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$output = '';
		
		if ( strpos($icon, "&#x;") === FALSE && $icon != "")
		{
			$icon_shortcode = do_shortcode( '[bt_bb_icon icon="' . esc_attr( $icon  ) . '" size="' . esc_attr( $size ) . '" style="' . esc_attr( $style ) . '" shape="' . esc_attr( $shape ) . '" vertical_position="' . esc_attr( $vertical_position ) . '" ]' );
			$output .= $icon_shortcode;
		}
		
		$output .= '<div class="' . esc_attr( $this->shortcode . '_title_subtitle_price' ) . '">';
		$output .= '<div class="' . esc_attr( $this->shortcode . '_title_wrap' ) . '">';
		$output .= '<div class="' . esc_attr( $this->shortcode . '_price' ) . '"><span class="' . esc_attr( $this->shortcode . '_currency' ) . '">' . $currency . '</span><span class="' . esc_attr( $this->shortcode . '_amount' ) . '">' . $price . '</span></div>';
		$output .= '<div class="' . esc_attr( $this->shortcode . '_title_subtitle' ) . '">';
		$output .= '<div class="' . esc_attr( $this->shortcode . '_title' ) . '">' . $title . '</div>';
		$output .= '<div class="' . esc_attr( $this->shortcode . '_subtitle' ) . '">' . $subtitle . '</div>';
		$output .= '</div>';
		$output .= '</div>';
		$output .= '</div>';

		$items_arr = preg_split( '/$\R?^/m', $items );

		$items = '<ul>';
			foreach ( $items_arr as $item ) {
				$items .= '<li>' . $item . '</li>';
			}
		$items .= '</ul>';
		
		$output .= $items;

		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . '>' . $output . '</div>';

		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );
		
		return $output;
	}

	function map_shortcode() {
		
		if ( function_exists('boldthemes_get_icon_fonts_bb_array') ) {
			$icon_arr = boldthemes_get_icon_fonts_bb_array();
		} else {
			$icon_arr = array();
		}
			
		$color_scheme_arr = bt_bb_get_color_scheme_param_array();			
		
		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Price List', 'denticare' ), 'description' => esc_html__( 'Display item with it\'s features, headline, icon and price.', 'denticare' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'icon', 'type' => 'iconpicker', 'heading' => esc_html__( 'Icon', 'denticare' ), 'value' => $icon_arr, 'preview' => true ),
				array( 'param_name' => 'title', 'type' => 'textfield', 'heading' => esc_html__( 'Title', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'subtitle', 'type' => 'textfield', 'heading' => esc_html__( 'Subtitle', 'denticare' ) ),
				array( 'param_name' => 'currency', 'type' => 'textfield', 'heading' => esc_html__( 'Currency', 'denticare' ) ),
				array( 'param_name' => 'price', 'type' => 'textfield', 'heading' => esc_html__( 'Price', 'denticare' ) ),				
				array( 'param_name' => 'items', 'type' => 'textarea', 'heading' => esc_html__( 'Items', 'denticare' ) ),
				array( 'param_name' => 'color_scheme', 'type' => 'dropdown', 'heading' => esc_html__( 'Color scheme', 'denticare' ), 'value' => $color_scheme_arr, 'preview' => true ),
				
				array( 'param_name' => 'align', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon alignment', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Inherit', 'denticare' ) => 'inherit',
						esc_html__('Left', 'denticare' ) => 'left',
						esc_html__('Right', 'denticare' ) => 'right'
					)
				),
				array( 'param_name' => 'background_color', 'type' => 'colorpicker', 'heading' => esc_html__( 'Background color', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'size', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon size', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Small', 'denticare' ) => 'small',
						esc_html__('Extra small', 'denticare' ) => 'xsmall',
						esc_html__('Normal', 'denticare' ) => 'normal',
						esc_html__('Large', 'denticare' ) => 'large',
						esc_html__('Extra large', 'denticare' ) => 'xlarge'
					)
				),
				array( 'param_name' => 'style', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon style', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Outline', 'denticare' ) => 'outline',
						esc_html__('Filled', 'denticare' ) => 'filled',
						esc_html__('Borderless', 'denticare' ) => 'borderless'
					)
				),
				array( 'param_name' => 'shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Icon shape', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Circle', 'denticare' ) => 'circle',
						esc_html__('Circle except top left corner', 'denticare' ) => 'circle-top-left',
						esc_html__('Circle except top right corner', 'denticare' ) => 'circle-top-right',
						esc_html__('Circle except bottom left corner', 'denticare' ) => 'circle-bottom-left',
						esc_html__('Circle except bottom right corner', 'denticare' ) => 'circle-bottom-right',
						esc_html__('Square', 'denticare' ) => 'square',
						esc_html__('Soft Rounded', 'denticare' ) => 'round',
						esc_html__('Soft Rounded except top left corner', 'denticare' ) => 'round-top-left',
						esc_html__('Soft Rounded except top right corner', 'denticare' ) => 'round-top-right',
						esc_html__('Soft Rounded except bottom left corner', 'denticare' ) => 'round-bottom-left',
						esc_html__('Soft Rounded except bottom right corner', 'denticare' ) => 'round-bottom-right'
					)
				),
				array( 'param_name' => 'vertical_position', 'type' => 'dropdown', 'heading' => esc_html__( 'Vertical position', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Default', 'denticare' ) => '',
						esc_html__('Half above', 'denticare' ) => 'half_above',
						esc_html__('Full above', 'denticare' ) => 'full_above'
					)
				),
				array( 'param_name' => 'highlight', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_highlighted' ), 'heading' => esc_html__( 'Show shadow around pricelist', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
				),
				array( 'param_name' => 'design', 'type' => 'dropdown', 'heading' => esc_html__( 'Pricelist roundness', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Standard', 'denticare' ) => '',
						esc_html__('Hard Rounded', 'denticare' ) => 'round',
						esc_html__('Hard Rounded except top left corner', 'denticare' ) => 'round-top-left',
						esc_html__('Hard Rounded except top right corner', 'denticare' ) => 'round-top-right',
						esc_html__('Hard Rounded except bottom left corner', 'denticare' ) => 'round-bottom-left',
						esc_html__('Hard Rounded except bottom right corner', 'denticare' ) => 'round-bottom-right',
						esc_html__('Soft Rounded', 'denticare' ) => 'rounded',
						esc_html__('Soft Rounded except top left corner', 'denticare' ) => 'rounded-top-left',
						esc_html__('Soft Rounded except top right corner', 'denticare' ) => 'rounded-top-right',
						esc_html__('Soft Rounded except bottom left corner', 'denticare' ) => 'rounded-bottom-left',
						esc_html__('Soft Rounded except bottom right corner', 'denticare' ) => 'rounded-bottom-right'
					)
				)
			)
		) );
	}
}