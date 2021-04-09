<?php 
get_header(); 

$image_404      = boldthemes_get_404_image();
?>
        <section class="btErrorPage gutter bt_bb_section bt_bb_top_spacing_large bt_bb_bottom_spacing_large bt_bb_layout_boxed_1200 bt_bb_vertical_align_top bt_bb_background_image bt_bb_background_overlay_light_solid"  style="background-image: url('<?php echo esc_url_raw( $image_404 )?>')">
                <div class="bt_bb_port">
                        <div class="bt_bb_cell">
                                <div class="bt_bb_cell_inner">
                                        <div class="bt_bb_row" data-structure="12">
                                                <div class="bt_bb_column col-md-12 col-ms-12 bt_bb_align_center bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal animated" data-width="12">
                                                        <div class="bt_bb_column_content">
                                                                <?php echo boldthemes_get_heading_html( 
                                                                        array ( 
                                                                                'superheadline' => esc_html__( 'We are sorry, page not found.', 'denticare' ), 
                                                                                'headline' => esc_html__( 'Error 404.', 'denticare' ),
                                                                                'subheadline' => '<a href="' . home_url( '/' ) . '">' . esc_html__( 'Back to homepage', 'denticare' ) . '</a>',
                                                                                'size' => 'huge',
                                                                                'dash' => 'top'
                                                                                ) 
                                                                        )
                                                                ?>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
<?php get_footer();