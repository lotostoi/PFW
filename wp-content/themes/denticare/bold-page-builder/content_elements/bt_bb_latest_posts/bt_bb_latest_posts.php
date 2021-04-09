<?php

class bt_bb_latest_posts extends BT_BB_Element {

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts_' . $this->shortcode, array(
			'look'			=> '',
			'date_design'		=> '',
			'rows'            	=> '',
			'columns'         	=> '',
			'gap'             	=> '',
			'category'        	=> '',
			'target'          	=> '',
			'image_shape'     	=> '',
			'show_category'   	=> '',
			'show_date'       	=> '',
			'show_author'     	=> '',
			'show_author_avatar'    => '',
			'show_comments'   	=> '',
			'show_excerpt'    	=> '',
			'show_read_more'        => '',
			'lazy_load'  		=> 'no'
		) ), $atts, $this->shortcode ) );
		
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
		
		if ( $columns != '' ) {
			$class[] = $this->prefix . 'columns' . '_' . $columns;
		}
		
		if ( $gap != '' ) {
			$class[] = $this->prefix . 'gap' . '_' . $gap;
		}
		
		if ( $look != '' ) {
			$class[] = $this->prefix . 'look' . '_' . $look;
		}

		$date_design_format         = '';
		$date_design_format_day     = '';
		$date_design_format_month   = '';
		if ( $date_design != '' ) {
			$class[] = $this->prefix . 'date_design' . '_' . $date_design;
                        switch ( $date_design ){
                            case 'round':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'round-top-left':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'round-top-right':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'round-bottom-left':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'round-bottom-right':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'rounded':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'rounded-top-left':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'rounded-top-right':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'rounded-bottom-left':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'rounded-bottom-right':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            case 'square':
                                $date_design_format         = 'j M';
                                $date_design_format_day     = 'j';
                                $date_design_format_month   = 'M';
                                break;
                            default:
                                $date_design_format         = '';
                                $date_design_format_day     = '';
                                $date_design_format_month   = '';
                                break;                            
                        }
		}
		
		if ( $image_shape != '' ) {
			$class[] = $this->prefix . 'image_shape' . '_' . $image_shape;
		}
		
		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$number = $rows * $columns;
		
		$posts = bt_bb_get_posts( $number, 0, $category );
		
		$output = '';

		foreach( $posts as $post_item ) {
                        
                        
			$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item">';
				$post_thumbnail_id = get_post_thumbnail_id( $post_item['ID'] );

				if ( $post_thumbnail_id != '' ) {
					$img = wp_get_attachment_image_src( $post_thumbnail_id, $size = 'boldthemes_medium_square' );
                                        if ( isset( $img[0] ) ) {
                                            if ( $lazy_load == 'yes' ) {
                                                    $img_src = BT_BB_Root::$path . 'img/blank.gif';
                                                    $img_class = 'btLazyLoadImage';
                                                    $data_img = ' data-image_src="' . esc_attr( $img[0] ) . '';
                                            } else {
                                                    $img_src = $img[0];
                                                    $img_class = '';
                                                    $data_img = '';
                                            }
                                            $output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_image"><a href="' . esc_url_raw( $post_item['permalink'] ) . '" target="' . esc_attr( $target ) . '"><img src="' . esc_url_raw( $img_src ) . '" alt="' . esc_attr( $post_item['title'] ) . '" title="' . esc_attr( $post_item['title'] ) . '" class="' . esc_attr( $img_class ) . '" ' . $data_img .  '"></a></div>';
                                        }                                        
                               }

				$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_content">';

					if ( $show_date == 'show_date' || $show_author == 'show_author' || $show_author == 'show_comments' ) {
				
						$meta_output = '<div class="' . esc_attr( $this->shortcode ) . '_item_meta">';
                                                        
                                                        if ( $show_author == 'show_author' ) {
                                                                if ( $show_author_avatar == 'show_author_avatar' ) {
                                                                       $post_author_id  = get_post_field( 'post_author', $post_item['ID'] );                                                                    
                                                                       $avatar_html     = get_avatar( get_the_author_meta( 'ID', $post_author_id ), 96 );                                                            
                                                                       if ( $avatar_html != '' ) {
                                                                                $meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_author_avatar">';
                                                                                    $meta_output .= '<div class="asgItem avatar">' . wp_kses_post( $avatar_html ) . $post_item['author'] . '</div>';
                                                                                $meta_output .= '</span>';
                                                                       }else{
                                                                            $meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_author">';
                                                                                    $meta_output .= $post_item['author'];
                                                                            $meta_output .= '</span>';
                                                                       }
                                                                }else{
                                                                    $meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_author">';
                                                                            $meta_output .= $post_item['author'];
                                                                    $meta_output .= '</span>';
                                                                }
							}
                                                        
                                                        if ( $show_comments == 'show_comments' && $post_item['comments'] != '' ) {
								$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_comments">';
									$meta_output .= $post_item['comments'];
								$meta_output .= '</span>';
							}

							if ( $show_date == 'show_date' ) {
								$meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_date">';
                                                                    if ( $date_design_format_day != '' && $date_design_format_month != '' ){
                                                                            $meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_date ' . esc_attr( $this->shortcode ) . '_item_date_day">';
                                                                                $meta_output .= get_the_date( $date_design_format_day, $post_item['ID'] );
                                                                            $meta_output .= '</span>';
                                                                            $meta_output .= '<span class="' . esc_attr( $this->shortcode ) . '_item_date ' . esc_attr( $this->shortcode ) . '_item_date_month">';
                                                                                $meta_output .= get_the_date( $date_design_format_month, $post_item['ID'] );
                                                                            $meta_output .= '</span>';
                                                                    }else{
                                                                            $meta_output .= get_the_date( $date_design_format, $post_item['ID'] );
                                                                    }                                                                        
								$meta_output .= '</span>';
							}
				
						$meta_output .= '</div>';
		
						$output .= $meta_output;
		
					}

					$output .= '<h5 class="' . esc_attr( $this->shortcode ) . '_item_title">';
						$output .= '<a href="' . esc_url_raw( $post_item['permalink'] ) . '" target="' . esc_attr( $target ) . '">' . $post_item['title'] . '</a>';
					$output .= '</h5>';
                                        
                                        if ( $show_category == 'show_category' ) {
						$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_category">';
							$output .= $post_item['category_list'];
						$output .= '</div>';
					}
					
					if ( $show_excerpt == 'show_excerpt' ) {
						$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_excerpt">';
							$output .= $post_item['excerpt'];
						$output .= '</div>';
					}

					if ( $show_read_more == 'show_read_more' ) {
						$output .= '<div class="' . esc_attr( $this->shortcode ) . '_item_read_more">';
							$output .= '<a href="' . esc_url_raw( $post_item['permalink'] ) . '" target="' . esc_attr( $target ) . '">' . esc_html__( 'Read more', 'denticare' ) . '</a>';
						$output .= '</div>';
					}
					
				$output .= '</div>';
				
			$output .= '</div>';
		}

		$output = '<div' . $id_attr . ' class="' . esc_attr( implode( ' ', $class ) ) . '"' . $style_attr . '>' . $output . '</div>';
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;

	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Latest Posts', 'denticare' ), 'description' => esc_html__( 'List of latest posts', 'denticare' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'look', 'type' => 'dropdown', 'heading' => esc_html__( 'Look and feel', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Standard without images', 'denticare' ) => 'standard',
						esc_html__('With image in background', 'denticare' ) => 'highlighted',
						esc_html__('Clean with image and standard date', 'denticare' ) => 'clean',
						esc_html__('Clean without image, with author image', 'denticare' ) => 'clean_author'
					)
				),
				array( 'param_name' => 'date_design', 'type' => 'dropdown', 'heading' => esc_html__( 'Design of date element', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
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
						esc_html__('Soft Rounded except bottom right corner', 'denticare' ) => 'rounded-bottom-right',
						esc_html__('Square', 'denticare' ) => 'square'
					)
				),
				array( 'param_name' => 'rows', 'type' => 'textfield', 'value' => '1', 'heading' => esc_html__( 'Rows', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'columns', 'type' => 'dropdown', 'value' => '3', 'heading' => esc_html__( 'Columns', 'denticare' ), 'preview' => true,
					'value' => array(
						esc_html__('1', 'denticare' ) => '1',
						esc_html__('2', 'denticare' ) => '2',
						esc_html__('3', 'denticare' ) => '3',
						esc_html__('4', 'denticare' ) => '4',
						esc_html__('6', 'denticare' ) => '6'
					)
				),
				array( 'param_name' => 'gap', 'type' => 'dropdown', 'heading' => esc_html__( 'Gap', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Normal', 'denticare' ) => 'normal',
						esc_html__('No gap', 'denticare' ) => 'no_gap',
						esc_html__('Small', 'denticare' ) => 'small',
						esc_html__('Large', 'denticare' ) => 'large'
					)
				),				
				array( 'param_name' => 'category', 'type' => 'textfield', 'heading' => esc_html__( 'Category', 'denticare' ), 'description' => esc_html__( 'Enter category slug or leave empty to show all', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'denticare' ),
					'value' => array(
						esc_html__('Self (open in same tab)', 'denticare' ) => '_self',
						esc_html__('Blank (open in new tab)', 'denticare' ) => '_blank',
					)
				),
				array( 'param_name' => 'image_shape', 'type' => 'dropdown', 'heading' => esc_html__( 'Image shape', 'denticare' ), 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Square', 'denticare' ) => 'square',
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
				),
				array( 'param_name' => 'show_category', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_category' ), 'heading' => esc_html__( 'Show category', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'show_date', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_date' ), 'heading' => esc_html__( 'Show date', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'show_author', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_author' ), 'heading' => esc_html__( 'Show author', 'denticare' ), 'preview' => true
				),
                                array( 'param_name' => 'show_author_avatar', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_author_avatar' ), 'heading' => esc_html__( 'Show author avatar', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'show_comments', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_comments' ), 'heading' => esc_html__( 'Show number of comments', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'show_excerpt', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_excerpt' ), 'heading' => esc_html__( 'Show excerpt', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'show_read_more', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_read_more' ), 'heading' => esc_html__( 'Show read more link', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'lazy_load', 'type' => 'dropdown', 'default' => 'yes', 'heading' => esc_html__( 'Lazy load images', 'denticare' ),
					'value' => array(
						esc_html__( 'No', 'denticare' ) => 'no',
						esc_html__( 'Yes', 'denticare' ) => 'yes'
					)
				)
			)
		) );
	} 
}