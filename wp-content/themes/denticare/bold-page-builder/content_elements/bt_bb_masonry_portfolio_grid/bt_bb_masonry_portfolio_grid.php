<?php

class bt_bb_masonry_portfolio_grid extends BT_BB_Element {

	function __construct() {
		parent::__construct();
		add_action( 'wp_ajax_bt_bb_get_grid_portfolio', array( __CLASS__, 'bt_bb_get_grid_portfolio_callback' ) );
		add_action( 'wp_ajax_nopriv_bt_bb_get_grid_portfolio', array( __CLASS__, 'bt_bb_get_grid_portfolio_callback' ) );
	}

	static function bt_bb_get_grid_portfolio_callback() {
                check_ajax_referer( 'bt-bb-masonry-portfolio-grid-nonce', 'bt-nonce' );
		bt_bb_masonry_portfolio_grid::dump_grid( intval( $_POST['number'] ), sanitize_text_field( $_POST['category'] ), $_POST['show'], $_POST['date_design'], $_POST['target'] );
		die();
	}
	
	static function dump_grid( $number, $category, $show, $date_design, $target ) {

		$show = unserialize( urldecode( $show ) );
                
                $prefix         = 'bt_bb_';
                $shortcode      = 'bt_bb_grid';
                $class = array();
                
                if ( $target == '' ) {
                    $target = '_self';
                }
                
                $date_design_format         = '';
		$date_design_format_day     = '';
		$date_design_format_month   = '';
		if ( $date_design != '' ) {
			$class[] = $prefix . 'date_design' . '_' . $date_design;
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

		$cat_slug_arr = array();
		if ( $category != '' ) {
			$cat_slug_arr = explode( ',', $category );
			$posts = bt_bb_get_posts( $number, 0, $cat_slug_arr, 'portfolio' );	
		}else{
			$posts = bt_bb_get_posts( $number, 0, '', 'portfolio' );	
		}

		foreach( $posts as $item ) {
			$post_thumbnail_id = get_post_thumbnail_id( $item['ID'] ); 
			$img = wp_get_attachment_image_src( $post_thumbnail_id, 'boldthemes_large_square' );
			$img_src = $img[0];
			$hw = 0;
			if ( $img_src != '' ) {
				$hw = $img[2] / $img[1];
			}
			
				$output = '<div class="bt_bb_grid_item_post_thumbnail"><a href="' . esc_url_raw( $item['permalink'] ) . '" title="' . esc_attr( $item['title'] ) . '"></a></div>';
				$output .= '<div class="bt_bb_grid_item_post_content" class="' . esc_attr( implode( ' ', $class ) ) . '">';

					if ( $show['category'] ) {
						$output .= '<div class="bt_bb_grid_item_category">';
							$output .= $item['category_list'];
						$output .= '</div>';
					}

					if ( $show['date'] || $show['author'] || $show['comments'] ) {
				
						$meta_output = '<div class="bt_bb_grid_item_meta">';
                                                        if ( $show['date'] ) {
								$meta_output .= '<span class="' . esc_attr( $shortcode ) . '_item_date">';
                                                                    if ( $date_design_format_day != '' && $date_design_format_month != '' ){
                                                                            $meta_output .= '<span class="' . esc_attr( $shortcode ) . '_item_date ' . esc_attr( $shortcode ) . '_item_date_day">';
                                                                                $meta_output .= get_the_date( $date_design_format_day, $item['ID'] );
                                                                            $meta_output .= '</span>';
                                                                            $meta_output .= '<span class="' . esc_attr( $shortcode ) . '_item_date ' . esc_attr( $shortcode ) . '_item_date_month">';
                                                                                $meta_output .= get_the_date( $date_design_format_month, $item['ID'] );
                                                                            $meta_output .= '</span>';
                                                                    }else{
                                                                            $meta_output .= get_the_date( $date_design_format, $item['ID'] );
                                                                    }                                                                        
								$meta_output .= '</span>';
							}

							if ( $show['author'] ) {
								$meta_output .= '<span class="bt_bb_grid_item_item_author">';
									$meta_output .= $item['author'];
								$meta_output .= '</span>';
							}

							if ( $show['comments'] && $item['comments'] != '' ) {
								$meta_output .= '<span class="bt_bb_grid_item_item_comments">';
									$meta_output .= $item['comments'];
								$meta_output .= '</span>';
							}
                                                        
                                                        
				
						$meta_output .= '</div>';
		
						$output .= $meta_output;
		
					}

					$output .= '<h5 class="bt_bb_grid_item_post_title"><a href="' . esc_url_raw($item['permalink']) . '" title="' . esc_attr($item['title']) . '">' . $item['title'] . '</a></h5>';

					if ( $show['excerpt'] ) {
						$output .= '<div class="bt_bb_grid_item_post_excerpt">' . $item['excerpt'] . '</div>';
					}

					if ( $show['share'] ) {
						$output .= '<div class="bt_bb_grid_item_post_share">' . $item['share'] . '</div>';
					}
                                        
                                        if ( $show['read_more'] ) {
                                                $output .= '<div class="bt_bb_grid_item_item_read_more">';
                                                        $output .= '<a href="' . esc_url_raw( $item['permalink'] ) . '" target="' . esc_attr( $target ) . '">' . esc_html__( 'Read more', 'denticare' ) . '</a>';
                                                $output .= '</div>';
                                        }

				$output .= '</div></div>';
				
			echo '<div class="bt_bb_grid_item" data-hw="' . esc_attr( $hw ) . '" data-src="' . esc_attr( $img_src ) . '"><div class="bt_bb_grid_item_inner">' . $output . '</div>';
		}

        wp_die(); 
                
	}

	function handle_shortcode( $atts, $content ) {
		extract( shortcode_atts( apply_filters( 'bt_bb_extract_atts', array(
			'look'			  => '',
			'date_design'	  => '',
			'number'          => '',
			'columns'         => '',
			'gap'             => '',
			'category'        => '',
			'category_filter' => '',
			'target'          => '',
			'show_category'   => '',
			'show_date'       => '',
			'show_author'     => '',
			'show_comments'   => '',
			'show_excerpt'    => '',
			'show_read_more'  => '',
			'show_share'      => ''
		) ), $atts, $this->shortcode ) );

		wp_enqueue_script( 'jquery-masonry' );

		wp_enqueue_script( 
			'bt_bb_portfolio_grid',
			get_template_directory_uri() . '/bold-page-builder/content_elements/bt_bb_masonry_portfolio_grid/bt_bb_portfolio_grid.js',
			array( 'jquery' )
		);
		
		wp_localize_script( 'bt_bb_portfolio_grid', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

		wp_enqueue_style( 
			'bt_bb_portfolio_grid', 
			get_template_directory_uri() . '/bold-page-builder/content_elements_misc/css/bt_bb_portfolio_grid.css', 
			array(), 
			false, 
			'screen' 
		);

		$class = array( $this->shortcode, 'bt_bb_grid_container' );

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

		if ( $date_design != '' ) {
			$class[] = $this->prefix . 'date_design' . '_' . $date_design;
		}
                
		if ( $show_read_more != '' ) {
			$class[] = $this->prefix . 'show_read_more' . '_' . $show_read_more;
		}

		if ( $number > 1000 || $number == '' ) {
			$number = 1000;
		} else if ( $number < 1 ) {
			$number = 1;
		}

		$show = array( 'category' => false, 'date' => false, 'author' => false, 'comments' => false, 'excerpt' => false, 'share' => false, 'read_more' => false );
		if ( $show_category == 'show_category' ) {
			$show['category'] = true;
		}
		if ( $show_date == 'show_date' ) {
			$show['date'] = true;
		}
		if ( $show_author == 'show_author' ) {
			$show['author'] = true;
		}
		if ( $show_comments == 'show_comments' ) {
			$show['comments'] = true;
		}
		if ( $show_excerpt == 'show_excerpt' ) {
			$show['excerpt'] = true;
		}
		if ( $show_share == 'show_share' ) {
			$show['share'] = true;
		}
		if ( $show_read_more != '' ) {
			$show['read_more'] = true;
		}

		$output = '';
		
		if ( $category_filter == 'yes' ) {
			$cat_arr = get_terms( 'portfolio_category' );
			$cats = array();
			if ( $category != '' ) {
				$cat_slug_arr = explode( ',', $category );
				foreach ( $cat_arr as $cat ) {
					if ( in_array( $cat->slug, $cat_slug_arr ) ) {
						$cats[] = $cat;
					}
				}
			} else {
				$cats = $cat_arr;
			}
			$output .= '<div class="bt_bb_post_grid_filter">';
				$output .= '<span class="bt_bb_masonry_portfolio_grid_filter_item bt_bb_post_grid_filter_item active" data-category-portfolio="" data-post-type="portfolio">' . esc_html__( 'All', 'denticare' ) . '</span>';
				foreach ( $cats as $cat ) {
					$output .= '<span class="bt_bb_masonry_portfolio_grid_filter_item bt_bb_post_grid_filter_item" data-category-portfolio="' . esc_attr($cat->slug) . '" data-post-type="portfolio">' . esc_html($cat->name) . '</span>';
				}
			$output .= '</div>';
		}

		$class = apply_filters( $this->shortcode . '_class', $class, $atts );
		
		$output .= '<div class="bt_bb_post_grid_loader"><span class="box1"></span><span class="box2"></span><span class="box3"></span><span class="box4"></span><span class="box5"></span></div>';

		$output .= '<div class="bt_bb_masonry_portfolio_grid_content bt_bb_grid_hide" data-bt-nonce="' . esc_attr( wp_create_nonce( 'bt-bb-masonry-portfolio-grid-nonce' ) ) . '" data-number-portfolio="' . esc_attr( $number ) . '" data-category-portfolio="' . esc_attr( $category ) . '" data-post-type="portfolio" data-show-portfolio="' . urlencode( serialize( $show ) ) . '" data-date-design="' . esc_attr( $date_design ) . '"  data-target="' . esc_attr( $target ) . '"><div class="bt_bb_grid_sizer"></div></div>';

		$output = '<div' . $id_attr . ' class="' . implode( ' ', $class ) . '"' . $style_attr . ' data-columns="' . esc_attr( $columns ) . '">' . $output . '</div>';
		
		
		$output = apply_filters( 'bt_bb_general_output', $output, $atts );
		$output = apply_filters( $this->shortcode . '_output', $output, $atts );

		return $output;
	}

	function map_shortcode() {

		bt_bb_map( $this->shortcode, array( 'name' => esc_html__( 'Portfolio Grid', 'denticare' ), 'description' => esc_html__( 'Masonry portfolio grid', 'denticare' ), 'icon' => $this->prefix_backend . 'icon' . '_' . $this->shortcode,
			'params' => array(
				array( 'param_name' => 'look', 'type' => 'dropdown', 'heading' => esc_html__( 'Look and feel', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('Image above content', 'denticare' ) => 'image_above',
						esc_html__('Image underneath content', 'denticare' ) => 'image_below'
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
				array( 'param_name' => 'gap', 'type' => 'dropdown', 'heading' => esc_html__( 'Gap', 'denticare' ), 'preview' => true, 'group' => esc_html__( 'Design', 'denticare' ),
					'value' => array(
						esc_html__('No gap', 'denticare' ) => 'no_gap',
						esc_html__('Small', 'denticare' ) => 'small',
						esc_html__('Normal', 'denticare' ) => 'normal',
						esc_html__('Large', 'denticare' ) => 'large'
					)
				),
				array( 'param_name' => 'number', 'type' => 'textfield', 'heading' => esc_html__( 'Number of items', 'denticare' ), 'description' => esc_html__( 'Enter number of items or leave empty to show all (up to 1000)', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'columns', 'type' => 'dropdown', 'heading' => esc_html__( 'Columns', 'denticare' ), 'preview' => true,
					'value' => array(
						esc_html__('1', 'denticare' ) => '1',
						esc_html__('2', 'denticare' ) => '2',
						esc_html__('3', 'denticare' ) => '3',
						esc_html__('4', 'denticare' ) => '4',
						esc_html__('5', 'denticare' ) => '5',
						esc_html__('6', 'denticare' ) => '6'
					)
				),
				array( 'param_name' => 'category', 'type' => 'textfield', 'heading' => esc_html__( 'Category', 'denticare' ), 'description' => esc_html__( 'Enter category slug or leave empty to show all', 'denticare' ), 'preview' => true ),
				array( 'param_name' => 'category_filter', 'type' => 'dropdown', 'heading' => esc_html__( 'Category filter', 'denticare' ),
					'value' => array(
						esc_html__('No', 'denticare' ) => 'no',
						esc_html__('Yes', 'denticare' ) => 'yes'
					)
				),
                array( 'param_name' => 'target', 'type' => 'dropdown', 'heading' => esc_html__( 'Target', 'denticare' ),
					'value' => array(
						esc_html__('Self (open in same tab)', 'denticare' ) => '_self',
						esc_html__('Blank (open in new tab)', 'denticare' ) => '_blank',
					)
				),

				array( 'param_name' => 'show_category', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_category' ), 'heading' => esc_html__( 'Show category', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'show_date', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_date' ), 'heading' => esc_html__( 'Show date', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'show_author', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_author' ), 'heading' => esc_html__( 'Show author', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'show_comments', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_comments' ), 'heading' => esc_html__( 'Show number of comments', 'denticare' ), 'preview' => true
				),
				array( 'param_name' => 'show_excerpt', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_excerpt' ), 'heading' => esc_html__( 'Show excerpt', 'denticare' ), 'preview' => true
				),
                array( 'param_name' => 'show_read_more', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_share' ), 'heading' => esc_html__( 'Show read more', 'denticare' ), 'preview' => true 
				),
				array( 'param_name' => 'show_share', 'type' => 'checkbox', 'value' => array( esc_html__( 'Yes', 'denticare' ) => 'show_share' ), 'heading' => esc_html__( 'Show share icons', 'denticare' ), 'preview' => true 
				)
			)
		) );
	} 
}