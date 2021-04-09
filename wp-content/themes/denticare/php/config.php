<?php

/**
 * Color schemes
 */

if ( ! function_exists( 'denticare_color_schemes' ) ) {
	function denticare_color_schemes( $color_scheme_arr ) {

		$theme_color_schemes = array();
		$theme_color_schemes[] = 'dark-skin;Light font, dark background;#ffffff;#191919';
		$theme_color_schemes[] = 'light-skin;Dark font, light background;#191919;#ffffff';
		
		$theme_color_schemes[] = 'accent-light-skin;Accent font, dark background (or details);' . boldthemes_get_option( 'accent_color' ) . ';#191919';
		$theme_color_schemes[] = 'accent-dark-skin;Accent font, light background (or details);' . boldthemes_get_option( 'accent_color' ) . ';#ffffff';
		$theme_color_schemes[] = 'light-accent-skin;Dark font, accent background (or details);#191919;' . boldthemes_get_option( 'accent_color' );
		$theme_color_schemes[] = 'dark-accent-skin;Light font, accent background (or details);#ffffff;' . boldthemes_get_option( 'accent_color' );
		
		$theme_color_schemes[] = 'alternate-light-skin;Alternate font, dark background (or details);' . boldthemes_get_option( 'alternate_color' ) . ';#191919';
		$theme_color_schemes[] = 'alternate-dark-skin;Alternate font, light background (or details);' . boldthemes_get_option( 'alternate_color' ) . ';#ffffff';
		$theme_color_schemes[] = 'light-alternate-skin;Dark font, alternate background (or details);#191919;' . boldthemes_get_option( 'alternate_color' );
		$theme_color_schemes[] = 'dark-alternate-skin;Light font, alternate background (or details);#ffffff;' . boldthemes_get_option( 'alternate_color' );
		$theme_color_schemes[] = 'dark-alternate-skin-1;Light font, alternate background (or details);#ffffff;' . boldthemes_get_option( 'alternate_color' );

		$theme_color_schemes[] = 'cyan-light-skin;Cyan font, dark background (or details);#62ebe2;#191919';
		$theme_color_schemes[] = 'light-cyan-skin;Dark font, cyan background (or details);#191919;#62ebe2';
		$theme_color_schemes[] = 'cyan-dark-skin;Cyan font, light background (or details);#62ebe2;#fff';
		$theme_color_schemes[] = 'dark-cyan-skin;Light font, cyan background (or details);#fff;#62ebe2';
		
		$theme_color_schemes[] = 'accent-alternate-skin;Accent font, alternate background (or details);' . boldthemes_get_option( 'accent_color' ) . ';' . boldthemes_get_option( 'alternate_color' );
		$theme_color_schemes[] = 'alternate-accent-skin;Alternate font, accent background (or details);' . boldthemes_get_option( 'alternate_color' ) . ';' . boldthemes_get_option( 'accent_color' );
		

		return array_merge( $theme_color_schemes, $color_scheme_arr );
	}
}

/*
* set content width
*/
if ( ! isset( $content_width ) ) {
	$content_width = 1200;
}

/**
 * Change number of related products
 */
if ( ! function_exists( 'boldthemes_change_number_related_products' ) ) {
	function boldthemes_change_number_related_products( $args ) {
		$args['posts_per_page'] = 4;
		$args['columns'] = 4;
		return $args;
	}
}

/**
 * Loop shop per page
 */
 
if ( ! function_exists( 'boldthemes_loop_shop_per_page' ) ) {
	function boldthemes_loop_shop_per_page( $cols ) {
		if ( BoldThemesFramework::$has_sidebar ) return 8; 
		else return 12;
	}
}

/**
 * Loop columns
 */
if ( ! function_exists( 'boldthemes_loop_shop_columns' ) ) {
	function boldthemes_loop_shop_columns() {
		if ( BoldThemesFramework::$has_sidebar ) return 2; 
		else return 3;
	}
}