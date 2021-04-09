<?php

$custom_css = "


	/* Headline
	--------------------------------------- */		
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_content small { color: {$color_scheme[2]}; }
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_content em { color: {$color_scheme[2]}; }
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_superheadline { color: {$color_scheme[2]}; }

	/* Icons
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon a { color: {$color_scheme[1]}; }
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon:hover a { color: {$color_scheme[2]}; }
	
	/* Outline */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
		background-color: transparent;
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline.bt_bb_size_xsmall .bt_bb_icon_holder:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline.bt_bb_size_small .bt_bb_icon_holder:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline.bt_bb_size_normal .bt_bb_icon_holder:before {
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_outline:hover a.bt_bb_icon_holder:before {
		background-color: {$color_scheme[1]};
		box-shadow: 0 0 0 2em {$color_scheme[1]} inset;
		color: {$color_scheme[2]};
	}
	/* Light outline */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightoutline .bt_bb_icon_holder:before {
		background-color: transparent;
		box-shadow: none;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightoutline:hover a.bt_bb_icon_holder:before {
		background-color: transparent;
		box-shadow: none;
		color: {$color_scheme[1]};
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightoutline.bt_bb_size_xsmall .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightoutline.bt_bb_size_small .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightoutline.bt_bb_size_normal .bt_bb_icon_holder:after {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightoutline .bt_bb_icon_holder:after {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightoutline:hover a.bt_bb_icon_holder:after {
		box-shadow: 0 0 0 2em {$color_scheme[1]} inset;
	}
	/* Filled */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
		box-shadow: 0 0 0 2em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled:hover a.bt_bb_icon_holder:before {
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]};
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled.bt_bb_size_xsmall:hover a.bt_bb_icon_holder:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled.bt_bb_size_small:hover a.bt_bb_icon_holder:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_filled.bt_bb_size_normal:hover a.bt_bb_icon_holder:before {
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
		color: {$color_scheme[1]};
	}
	/* Light filled */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightfilled .bt_bb_icon_holder:before {
		box-shadow: none;
		background-color: transparent;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightfilled:hover a.bt_bb_icon_holder:before {
		box-shadow: none;
		background-color: transparent;
		color: {$color_scheme[2]};
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightfilled.bt_bb_size_xsmall .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightfilled.bt_bb_size_small .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightfilled.bt_bb_size_normal .bt_bb_icon_holder:after {
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightfilled .bt_bb_icon_holder:after {
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_lightfilled:hover a.bt_bb_icon_holder:after {
		box-shadow: 0 0 0 2em {$color_scheme[2]} inset;
	}
	/* Borderless*/
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover a:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover a.bt_bb_icon_holder > span {
		color: {$color_scheme[2]};
	}


	/* Buttons
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline {
		border: 0;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline a {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset, 0 20px 30px rgba(33,33,33,.07);
		background-color: transparent;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline:hover a,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_outline:hover a:hover {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset, 0 7.5px 15px rgba(33,33,33,.2);
		background-color: transparent;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled {
		border: 0;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a {
		background-color: {$color_scheme[2]};
		color: {$color_scheme[1]};		
		box-shadow: 1px 1px 3px 1px rgba(34,34,34,.2);
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled:hover a,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_filled a:hover {
		background-color: {$color_scheme[2]};
		color: {$color_scheme[1]};		
		box-shadow: 1px 1px 10px 1px rgba(34,34,34,.2);
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless a {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean:hover a,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_button.bt_bb_style_clean a:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_icon.bt_bb_style_borderless:hover a {
		color: {$color_scheme[2]};
	}

	/* Services
	--------------------------------------- */
	/* Outline */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service:hover .bt_bb_icon_holder {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service.bt_bb_size_extrasmall .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service.bt_bb_size_extrasmall:hover .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service.bt_bb_size_small .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service.bt_bb_size_small:hover .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service.bt_bb_size_normal .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service.bt_bb_size_normal:hover .bt_bb_icon_holder {
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_outline.bt_bb_service:hover a.bt_bb_icon_holder:hover {
		box-shadow: 0 0 0 2em {$color_scheme[1]} inset;
		background-color: {$color_scheme[1]};
		color: {$color_scheme[2]} !important;
	}
	/* Light outline */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service:hover .bt_bb_icon_holder {
		box-shadow: none;
		color: {$color_scheme[1]};
		background-color: transparent;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service:hover a.bt_bb_icon_holder:hover {
		box-shadow: none;
		background-color: transparent;
		color: {$color_scheme[2]} !important;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service:hover .bt_bb_icon_holder:after {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service.bt_bb_size_extrasmall .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service.bt_bb_size_extrasmall:hover .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service.bt_bb_size_small .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service.bt_bb_size_small:hover .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service.bt_bb_size_normal .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service.bt_bb_size_normal:hover .bt_bb_icon_holder:after {
		box-shadow: 0 0 0 1px {$color_scheme[1]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightoutline.bt_bb_service:hover a.bt_bb_icon_holder:hover:after {
		box-shadow: 0 0 0 2em {$color_scheme[1]} inset;
	}
	/* Filled */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service:hover .bt_bb_icon_holder {
		box-shadow: 0 0 0 2em {$color_scheme[2]} inset;
		color: {$color_scheme[1]};
		background-color: transparent;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service:hover a.bt_bb_icon_holder:hover {
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset;
		background-color: transparent;
		color: {$color_scheme[2]} !important;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service.bt_bb_size_extrasmall:hover a.bt_bb_icon_holder:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service.bt_bb_size_small:hover a.bt_bb_icon_holder:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_filled.bt_bb_service.bt_bb_size_normal:hover a.bt_bb_icon_holder:hover {
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
	}
	/* Light filled */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service:hover .bt_bb_icon_holder {
		box-shadow: none;
		background-color: transparent;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service:hover a.bt_bb_icon_holder:hover {
		box-shadow: none;
		background-color: transparent;
		color: {$color_scheme[2]} !important;
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service:hover .bt_bb_icon_holder:after {
		box-shadow: 0 0 0 2em {$color_scheme[2]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service.bt_bb_size_extrasmall .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service.bt_bb_size_extrasmall:hover .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service.bt_bb_size_small .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service.bt_bb_size_small:hover .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service.bt_bb_size_normal .bt_bb_icon_holder:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service.bt_bb_size_normal:hover .bt_bb_icon_holder:after {
		box-shadow: 0 0 0 1px {$color_scheme[2]} inset;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_lightfilled.bt_bb_service:hover a.bt_bb_icon_holder:hover:after {
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset;
		background: transparent;
	}
	/* Borderless */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service .bt_bb_icon_holder,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service:hover .bt_bb_icon_holder {
		color: {$color_scheme[1]};
	}	
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_style_borderless.bt_bb_service:hover a.bt_bb_icon_holder:hover {
		color: {$color_scheme[2]};
	}

	
	/* Headline
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_superheadline {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_content s em {
		background: linear-gradient(to right, {$color_scheme[1]}, {$color_scheme[2]}) !important;
		-webkit-background-clip: text !important;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_headline .bt_bb_headline_content s i {
		background: linear-gradient(to right, {$color_scheme[2]}, {$color_scheme[1]}) !important;
		-webkit-background-clip: text !important;
	}

	/* Price List
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_price_list {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_price_list .bt_bb_price_list_title_subtitle .bt_bb_price_list_title,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_price_list ul li:before {
		color: {$color_scheme[2]};
	}
	
	/* Icons in Price List
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_price_list .bt_bb_icon.bt_bb_style_outline .bt_bb_icon_holder:before {
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset;
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_price_list .bt_bb_icon.bt_bb_style_filled .bt_bb_icon_holder:before {
		box-shadow: 0 0 0 2em {$color_scheme[2]} inset;
		color: #FFF;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_price_list .bt_bb_icon.bt_bb_style_borderless .bt_bb_icon_holder:before {
		color: {$color_scheme[2]};
	}
	
	/* Section
	--------------------------------------- */
	.bt_bb_section.bt_bb_color_scheme_{$scheme_id} {
		color: {$color_scheme[1]};
		background-color: {$color_scheme[2]};
	}
	
	/* Latest posts
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_latest_posts .bt_bb_latest_posts_item .bt_bb_latest_posts_title_excerpt_holder:before {
		background-color: {$color_scheme[2]} !important;
	}
	
	/* Post & Portfolio grid
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_masonry_post_grid .bt_bb_grid_item_post_content:before,
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_masonry_portfolio_grid .bt_bb_grid_item_post_content:before	{
		background-color: {$color_scheme[2]} !important;
	}
	
	/* Google map
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_map.bt_bb_map_with_content .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_map_location {
		background-color: {$color_scheme[2]};
		color: {$color_scheme[1]};
	}

	/* Working hours line
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id} .btWorkingHours .bt_bb_working_hours_inner_row:after {
		border-color: {$color_scheme[1]} !important;
	}

	/* Feature table
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_features_table table tbody tr td:after {
		background: {$color_scheme[1]} !important;
	}
	
	/* Simple accordion
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title,
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover,
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:before,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:before {
		background: {$color_scheme[2]} !important;
	}
	.btMenuFocusElementOutlineCircle .bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover:before,
	.btMenuFocusElementOutlineCircle .bt_bb_color_scheme_{$scheme_id}.bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover:before,
	.btMenuFocusElementOutlineSquare .bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover:before,
	.btMenuFocusElementOutlineSquare .bt_bb_color_scheme_{$scheme_id}.bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item .bt_bb_accordion_item_title:hover:before {
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset;
		background: transparent !important;
	}
	.btMenuFocusElementOutlineCircle .bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before,
	.btMenuFocusElementOutlineCircle .bt_bb_color_scheme_{$scheme_id}.bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before,
	.btMenuFocusElementOutlineSquare .bt_bb_color_scheme_{$scheme_id} .bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before,
	.btMenuFocusElementOutlineSquare .bt_bb_color_scheme_{$scheme_id}.bt_bb_accordion.bt_bb_style_simple .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before {
		box-shadow: none !important;
		background: {$color_scheme[2]} !important;
	}

	/* Tabs
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li,
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li.on,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li.on {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li.on span:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li.on span:after {
		background-color: {$color_scheme[2]};
		box-shadow: none;
	}
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li:hover span:after,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li:hover span:after {
		background-color: {$color_scheme[2]};
		box-shadow: none;
	}
	.btMenuFocusElementOutlineCircle .bt_bb_color_scheme_{$scheme_id} .bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li:hover span:after,
	.btMenuFocusElementOutlineCircle .bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li:hover span:after,
	.btMenuFocusElementOutlineSquare .bt_bb_color_scheme_{$scheme_id} .bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li:hover span:after,
	.btMenuFocusElementOutlineSquare .bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_simple .bt_bb_tabs_header li:hover span:after {
		background: transparent;
		box-shadow: 0 0 0 2px {$color_scheme[2]} inset !important;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_outline .bt_bb_tabs_header,
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_tabs.bt_bb_style_filled .bt_bb_tabs_header {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset;
	}
	
	/* Line progress bar
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_progress_bar.bt_bb_style_line .bt_bb_progress_bar_inner {
		color: currentColor;
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_progress_bar.bt_bb_style_line .bt_bb_progress_bar_inner:after {
		background: {$color_scheme[1]};
	}
	
	/* Line progress bar
	--------------------------------------- */
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_separator.bt_bb_border_style_solid,
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_separator.bt_bb_border_style_dotted,
	.bt_bb_color_scheme_{$scheme_id} .bt_bb_separator.bt_bb_border_style_dashed {
		border-bottom-color: {$color_scheme[1]} !important;
		opacity: .1;
	}

	/* Menu item
	-------------------- */

	.bt_bb_color_scheme_{$scheme_id}.bt_bb_menu_item {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_menu_item .bt_bb_menu_item_title_price .bt_bb_menu_item_price {
		color: {$color_scheme[2]};
	}

	/* Organic Animation
	-------------------- */

	.bt_bb_icon_color_scheme_{$scheme_id}.bt_bb_organic_animation .item .item__meta .item__icon .bt_bb_icon_holder svg .cls-2 {
		fill: {$color_scheme[1]};
	}
	.bt_bb_icon_color_scheme_{$scheme_id}.bt_bb_organic_animation .item .item__meta .item__icon .bt_bb_icon_holder svg .cls-1 {
		fill: {$color_scheme[2]};
	}
	.bt_bb_title_color_scheme_{$scheme_id}.bt_bb_organic_animation .item .item__meta .item__meta_inner .item__title {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation .item .item__meta .item__meta_inner .item__button_link {
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation .item .item__meta .item__meta_inner .item__button_link:hover {
		color: {$color_scheme[2]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation.bt_bb_style_outline .item .item__meta .item__meta_inner .item__button_link {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset, 0 20px 30px rgba(33,33,33,.07);
		background-color: transparent;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation.bt_bb_style_outline .item .item__meta .item__meta_inner .item__button_link:hover {
		box-shadow: 0 0 0 2px {$color_scheme[1]} inset, 0 7.5px 15px rgba(33,33,33,.2);
		background-color: transparent;
		color: {$color_scheme[1]};
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation.bt_bb_style_filled .item .item__meta .item__meta_inner .item__button_link {
		background-color: {$color_scheme[2]};
		color: {$color_scheme[1]};		
		box-shadow: 0 2px 10px rgba(34,34,34,.2);
	}
	.bt_bb_color_scheme_{$scheme_id}.bt_bb_organic_animation.bt_bb_style_filled .item .item__meta .item__meta_inner .item__button_link:hover {
		background-color: {$color_scheme[2]};
		color: {$color_scheme[1]};		
		box-shadow: 0 3px 20px rgba(34,34,34,.2);
	}

";