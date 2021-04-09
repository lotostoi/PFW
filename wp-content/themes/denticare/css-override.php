<?php
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars ) ) {
	$boldthemes_crush_vars = BoldThemesFramework::$crush_vars;
}
if ( class_exists( 'BoldThemesFramework' ) && isset( BoldThemesFramework::$crush_vars_def ) ) {
	$boldthemes_crush_vars_def = BoldThemesFramework::$crush_vars_def;
}
if ( isset( $boldthemes_crush_vars['accentColor'] ) ) {
	$accentColor = $boldthemes_crush_vars['accentColor'];
} else {
	$accentColor = "#fdabb7";
}
if ( isset( $boldthemes_crush_vars['alternateColor'] ) ) {
	$alternateColor = $boldthemes_crush_vars['alternateColor'];
} else {
	$alternateColor = "#333c4a";
}
if ( isset( $boldthemes_crush_vars['bodyFont'] ) ) {
	$bodyFont = $boldthemes_crush_vars['bodyFont'];
} else {
	$bodyFont = "Roboto";
}
if ( isset( $boldthemes_crush_vars['buttonFont'] ) ) {
	$buttonFont = $boldthemes_crush_vars['buttonFont'];
} else {
	$buttonFont = "Roboto Condensed";
}
if ( isset( $boldthemes_crush_vars['menuFont'] ) ) {
	$menuFont = $boldthemes_crush_vars['menuFont'];
} else {
	$menuFont = "Roboto Condensed";
}
if ( isset( $boldthemes_crush_vars['headingFont'] ) ) {
	$headingFont = $boldthemes_crush_vars['headingFont'];
} else {
	$headingFont = "Playfair Display";
}
if ( isset( $boldthemes_crush_vars['headingSuperTitleFont'] ) ) {
	$headingSuperTitleFont = $boldthemes_crush_vars['headingSuperTitleFont'];
} else {
	$headingSuperTitleFont = "Roboto";
}
if ( isset( $boldthemes_crush_vars['headingSubTitleFont'] ) ) {
	$headingSubTitleFont = $boldthemes_crush_vars['headingSubTitleFont'];
} else {
	$headingSubTitleFont = "Roboto";
}
if ( isset( $boldthemes_crush_vars['logoHeight'] ) ) {
	$logoHeight = $boldthemes_crush_vars['logoHeight'];
} else {
	$logoHeight = "100";
}
$accentColorDark = CssCrush\fn__l_adjust( $accentColor." -15" );$css_override = sanitize_text_field("select,
input{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
input[type=\"file\"]::-webkit-file-upload-button{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%) !important;}
.btMenuFocusElementCircle .fancy-select ul.options li:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .fancy-select ul.options li:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .fancy-select ul.options li:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .fancy-select ul.options li:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .fancy-select ul.options li:before{background-color: {$accentColor};}
.fancy-select ul.options li:hover{color: {$accentColor};}
.fancy-select ul.options li.selected:before{background: {$accentColor};}
.btContent a{color: {$accentColor};}
a:hover{
    color: {$accentColor};}
.btText a{color: {$accentColor};}
body{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
h1,
h2,
h3,
h4,
h5,
h6{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
blockquote{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btAlternateQuote blockquote:before,
.btAlternateQuote blockquote:after,
blockquote.btAlternateQuote:before,
blockquote.btAlternateQuote:after{background: {$alternateColor};}
.btAccentQuote blockquote:before,
.btAccentQuote blockquote:after,
blockquote.btAccentQuote:before,
blockquote.btAccentQuote:after,
.single-portfolio blockquote:before,
.single-portfolio blockquote:after,
.single-post blockquote:before,
.single-post blockquote:after{background: {$accentColor};}
cite{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.btContentHolder table thead th{
    background-color: {$accentColor};}
.btAccentDarkHeader .btPreloader .animation > div:first-child,
.btLightAccentHeader .btPreloader .animation > div:first-child,
.btTransparentLightHeader .btPreloader .animation > div:first-child{
    background-color: {$accentColor};}
.btPreloader .animation .preloaderLogo{height: {$logoHeight}px;}
.btMenuFocusElementCircle .btLoader > div,
.btMenuFocusElementCircle .btLoader > span{background: {$accentColor};}
.btMenuFocusElementOutlineCircle .btLoader > div,
.btMenuFocusElementOutlineCircle .btLoader > span{border: 3px solid {$accentColor};}
.btMenuFocusElementSquare .btLoader > div,
.btMenuFocusElementSquare .btLoader > span{background: {$accentColor};}
.btMenuFocusElementOutlineSquare .btLoader > div,
.btMenuFocusElementOutlineSquare .btLoader > span{border: 3px solid {$accentColor};}
.btMenuFocusElementDash .btLoader > div:nth-child(2),
.btMenuFocusElementDash .btLoader > span:nth-child(2){background-image: linear-gradient(to right,{$accentColor},{$accentColor});}
.btTemplateDashOutlineCircle .btPageHeadline header.bt_bb_dash_bottom .bt_bb_headline_content:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btTemplateDashOutlineSquare .btPageHeadline header.bt_bb_dash_bottom .bt_bb_headline_content:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btPageHeadlineAccent .btPageHeadline.bt_bb_section:before{background-color: {$accentColor};}
.btPageHeadlineAccent .btPageHeadline.bt_bb_section .btArticleDate:before,
.btPageHeadlineAccent .btPageHeadline.bt_bb_section .btArticleAuthor:before,
.btPageHeadlineAccent .btPageHeadline.bt_bb_section .btArticleComments:before,
.btPageHeadlineAccent .btPageHeadline.bt_bb_section .btArticleCategories:before{color: {$alternateColor};}
.btPageHeadlineAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{background: {$alternateColor};}
.btPageHeadlineAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinecircle:after{box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btTemplateDashOutlineCircle.btPageHeadlineAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btPageHeadlineAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinesquare:after{
    box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btTemplateDashOutlineSquare.btPageHeadlineAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btPageHeadlineAlternate .btPageHeadline.bt_bb_section:before{background-color: {$alternateColor};}
.btPageHeadlineAlternate .btPageHeadline.bt_bb_section .btArticleDate:before,
.btPageHeadlineAlternate .btPageHeadline.bt_bb_section .btArticleAuthor:before,
.btPageHeadlineAlternate .btPageHeadline.bt_bb_section .btArticleComments:before,
.btPageHeadlineAlternate .btPageHeadline.bt_bb_section .btArticleCategories:before{color: {$accentColor};}
.btPageHeadlineAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{background: {$accentColor};}
.btPageHeadlineAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinecircle:after{box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btTemplateDashOutlineCircle.btPageHeadlineAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btPageHeadlineAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinesquare:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btTemplateDashOutlineSquare.btPageHeadlineAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section:before{background: linear-gradient(to left,{$accentColor},{$alternateColor});}
.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section .btArticleDate:before,
.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section .btArticleAuthor:before,
.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section .btArticleComments:before,
.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section .btArticleCategories:before{color: {$accentColor};}
.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{background: {$accentColor};}
.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinecircle:after{box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btTemplateDashOutlineCircle.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinesquare:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btTemplateDashOutlineSquare.btPageHeadlineAlternateAccent .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section:before{background: linear-gradient(to right,{$accentColor},{$alternateColor});}
.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section .btArticleDate:before,
.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section .btArticleAuthor:before,
.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section .btArticleComments:before,
.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section .btArticleCategories:before{color: {$alternateColor};}
.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{background: {$alternateColor};}
.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinecircle:after{box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btTemplateDashOutlineCircle.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinesquare:after{
    box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btTemplateDashOutlineSquare.btPageHeadlineAccentAlternate .btPageHeadline.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btPageHeadlineAccent .btErrorPage.bt_bb_section:before{background-color: {$accentColor};}
.btPageHeadlineAccent .btErrorPage.bt_bb_section .btArticleDate:before,
.btPageHeadlineAccent .btErrorPage.bt_bb_section .btArticleAuthor:before,
.btPageHeadlineAccent .btErrorPage.bt_bb_section .btArticleComments:before,
.btPageHeadlineAccent .btErrorPage.bt_bb_section .btArticleCategories:before{color: {$alternateColor};}
.btPageHeadlineAccent .btErrorPage.bt_bb_section .bt_bb_headline.bt_bb_dash_bottom .bt_bb_headline_content:after{background: {$alternateColor};}
.btPageHeadlineAccent .btErrorPage.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinecircle:after{box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btPageHeadlineAccent .btErrorPage.bt_bb_section .bt_bb_headline.bt_bb_dash_type_outlinesquare:after{
    box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btPageHeadlineAlternate .btErrorPage.bt_bb_section:before{background-color: {$alternateColor};}
.btPageHeadlineAlternateAccent .btErrorPage.bt_bb_section:before{background: linear-gradient(to left,{$accentColor},{$alternateColor});}
.btPageHeadlineAccentAlternate .btErrorPage.bt_bb_section:before{background: linear-gradient(to right,{$accentColor},{$alternateColor});}
.btErrorPage .bt_bb_column.bt_bb_align_center .bt_bb_headline_subheadline a{
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.mainHeader{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.mainHeader a:hover{color: {$accentColor};}
.menuPort{font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.menuPort nav > ul > li > a{line-height: {$logoHeight}px;}
.btTextLogo{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;
    line-height: {$logoHeight}px;}
.btLogoArea .logo img{height: {$logoHeight}px;}
.btStickyHeaderActive.btMenuHorizontal.btHideMenu .btHorizontalMenuTrigger .bt_bb_icon{margin: calc({$logoHeight}px * .125) 0;}
.btHorizontalMenuTrigger .bt_bb_icon{width: calc({$logoHeight}px * .25);
    height: calc({$logoHeight}px * .25);
    margin: calc({$logoHeight}px * .375) 0;}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btAccentGradientHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon:after,
.btAccentGradientHeader .btHorizontalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentGradientHeader .btHorizontalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuFocusElementOutlineCircle.btMenuHorizontal .menuPort nav > ul > li > a:after{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare.btMenuHorizontal .menuPort nav > ul > li > a:after{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare.btMenuHorizontal .menuPort nav > ul > li > a:after{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash.btMenuHorizontal .menuPort nav > ul > li > a:after{background-color: {$accentColor};}
.btMenuHorizontal .menuPort nav > ul > li.on > a:after{
    background-color: {$accentColor};}
.btStickyHeaderActive.btMenuHorizontal .menuPort nav > ul > li.on > a:after{background-color: {$accentColor};}
.btStickyHeaderActive.btMenuHorizontal .menuPort nav > ul > li.current-menu-ancestor > a:after,
.btStickyHeaderActive.btMenuHorizontal .menuPort nav > ul > li.current-menu-item > a:after{background-color: {$accentColor};}
.btMenuHorizontal .menuPort ul ul li a:hover{color: {$accentColor};}
body.btMenuHorizontal .subToggler{
    line-height: {$logoHeight}px;}
.btMenuHorizontal .menuPort > nav > ul > li{padding: calc({$logoHeight}px * .25) calc(50px * .2) calc({$logoHeight}px * .25) 0;}
.btMenuHorizontal .menuPort > nav > ul > li > a{line-height: calc({$logoHeight}px * .5);}
.rtl.btMenuHorizontal .menuPort > nav > ul > li{padding: calc({$logoHeight}px * .25) 0 calc({$logoHeight}px * .25) calc(50px * .2);}
.btMenuHorizontal .menuPort > nav > ul > li > ul > li{font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btMenuHorizontal .menuPort > nav > ul ul{
    top: calc({$logoHeight}px * .75);}
.btMenuFocusElementCircle.btMenuHorizontal .menuPort > nav > ul > li > ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle.btMenuHorizontal .menuPort > nav > ul > li > ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare.btMenuHorizontal .menuPort > nav > ul > li > ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare.btMenuHorizontal .menuPort > nav > ul > li > ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash.btMenuHorizontal .menuPort > nav > ul > li > ul li a:before{background-color: {$accentColor};}
.btMenuHorizontal .menuPort > nav > ul > li > ul li a:hover{color: {$accentColor};}
.btMenuHorizontal.btMenuCenter .logo{
    height: {$logoHeight}px;}
.btMenuHorizontal.btMenuCenter .logo .btTextLogo{
    height: {$logoHeight}px;}
html:not(.touch) body.btMenuHorizontal .menuPort > nav > ul > li.btMenuWideDropdown > ul > li > a{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btMenuHorizontal .topBarInMenu{
    height: {$logoHeight}px;}
.btAccentLightHeader .btBelowLogoArea,
.btAccentLightHeader .topBar{background-color: {$accentColor};}
.btAccentDarkHeader .btBelowLogoArea,
.btAccentDarkHeader .topBar{background-color: {$accentColor};}
.btAccentDarkHeader:not(.btMenuBelowLogo) .topBarInMenu .btIconWidget:hover{color: {$accentColor};}
.btAccentTrasparentHeader .btBelowLogoArea,
.btAccentTrasparentHeader .topBar{background-color: {$accentColor};}
.btAccentTrasparentHeader .btBelowLogoArea a:hover,
.btAccentTrasparentHeader .topBar a:hover{color: {$alternateColor} !important;}
.btAccentTrasparentHeader .btMenuHorizontal .menuPort ul ul li a:hover{color: {$alternateColor};}
.btLightAccentHeader .btLogoArea,
.btLightAccentHeader .btVerticalHeaderTop{background-color: {$accentColor};}
.btLightAccentHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea{background-color: {$accentColor};}
.btAccentGradientHeader .btBelowLogoArea,
.btAccentGradientHeader .topBar{background-color: {$accentColor};}
.btAccentGradientHeader.btMenuVertical .btVerticalMenuTrigger .bt_bb_icon{color: {$accentColor};}
.btAlternateGradientHeader .btBelowLogoArea,
.btAlternateGradientHeader .topBar{background-color: {$alternateColor};}
.btAlternateGradientHeader.btMenuBelowLogo .menuPort nav > ul > li.current-menu-ancestor > a:after,
.btAlternateGradientHeader.btMenuBelowLogo .menuPort nav > ul > li.current-menu-item > a:after{background-color: {$accentColor};}
.btAlternateGradientHeader.btMenuBelowLogo .topBarInMenu .btIconWidget.btAccentIconWidget .btIconWidgetIcon{color: {$accentColor};}
.btAlternateGradientHeader.btMenuBelowLogo .topBarInMenu .btIconWidget:hover{color: {$accentColor};}
.btAlternateGradientHeader.btMenuBelowLogo .topBarInMenu .widget_shopping_cart_content:hover .btCartWidgetIcon:hover{color: {$accentColor};}
.btAlternateGradientHeader .topBar .btIconWidget.btAccentIconWidget .btIconWidgetIcon{color: {$accentColor};}
.btAlternateGradientHeader .topBar .btIconWidget:hover{color: {$accentColor};}
.btAlternateGradientHeader .topBar .btIconWidget .widget_shopping_cart_content:hover .btCartWidgetIcon:hover{color: {$accentColor};}
.btAlternateGradientHeader.btMenuVertical .btVerticalMenuTrigger .bt_bb_icon{color: {$alternateColor};}
.btLightAlternateHeader .btLogoArea,
.btLightAlternateHeader .btVerticalHeaderTop{background-color: {$alternateColor};}
.btLightAlternateHeader:not(.btMenuBelowLogo) .topBarInMenu .btIconWidget.btAccentIconWidget .btIconWidgetIcon{color: {$accentColor};}
.btLightAlternateHeader:not(.btMenuBelowLogo) .topBarInMenu .btIconWidget:hover{color: {$accentColor};}
.btLightAlternateHeader:not(.btMenuBelowLogo) .topBarInMenu .widget_shopping_cart_content:hover .btCartWidgetIcon:hover{color: {$accentColor};}
.btLightAlternateHeader.btMenuBelowLogo .topBarInLogoArea .btIconWidget.btAccentIconWidget .btIconWidgetIcon{color: {$accentColor};}
.btLightAlternateHeader.btMenuBelowLogo .topBarInLogoArea .btIconWidget:hover{color: {$accentColor};}
.btLightAlternateHeader.btMenuBelowLogo .topBarInLogoArea .btIconWidget:hover .btIconWidgetText{color: {$accentColor};}
.btLightAlternateHeader.btMenuBelowLogo .topBarInLogoArea .widget_shopping_cart_content:hover .btCartWidgetIcon:hover{color: {$accentColor};}
.btLightAlternateHeader .mainHeader .btTextLogo:hover{color: {$accentColor};}
.btLightAlternateHeader.btMenuHorizontal.btBelowMenu .mainHeader .btLogoArea{background-color: {$alternateColor};}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .logo img{height: calc({$logoHeight}px*0.5);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .btTextLogo{
    line-height: calc({$logoHeight}px*0.5);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .menuPort nav > ul > li > a,
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .menuPort nav > ul > li > .subToggler{line-height: calc({$logoHeight}px*0.5);}
.btStickyHeaderActive.btMenuHorizontal .mainHeader .btLogoArea .topBarInMenu{height: calc({$logoHeight}px*0.5);}
.btStickyHeaderActive.btMenuBelowLogo.btMenuBelowLogoShowArea.btMenuHorizontal .mainHeader .btLogoArea .topBarInLogoArea{height: calc({$logoHeight}px*0.5);}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:before,
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon:after,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon:after{border-top-color: {$accentColor};}
.btTransparentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btTransparentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentLightHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btAccentDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btLightDarkHeader .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before,
.btHasAltLogo.btStickyHeaderActive .btVerticalMenuTrigger:hover .bt_bb_icon .bt_bb_icon_holder:before{border-top-color: {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btMenuHorizontal .topBarInLogoArea{
    height: {$logoHeight}px;}
.btMenuHorizontal .topBarInLogoArea .topBarInLogoAreaCell{border: 0 solid {$accentColor};}
.btMenuVertical .mainHeader .btCloseVertical:before:hover{color: {$accentColor};}
.btMenuVertical .mainHeader nav > ul > li.current-menu-ancestor > a,
.btMenuVertical .mainHeader nav > ul > li.current-menu-item > a{background: {$accentColor};}
.btMenuVertical .mainHeader .topBarInLogoArea .btIconWidget.btWidgetWithText .btIconWidgetContent .btIconWidgetTitle,
.btMenuVertical .mainHeader .topBarInLogoArea .btIconWidget.btWidgetWithText .btIconWidgetContent .btIconWidgetText{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btSiteFooter .bt_bb_custom_menu li.bt_bb_back_to_top_alternate_arrow:before{color: {$alternateColor};}
.btSiteFooterCopyMenu{font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btDarkSkin .btSiteFooterCopyMenu{background: {$accentColor};}
.btSiteFooterCopyMenu .port > div .btFooterCopy{font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btSiteFooterCopyMenu .port > div .btFooterMenu ul{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btMenuFocusElementCircle .btSiteFooterCopyMenu .port > div .btFooterMenu ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .btSiteFooterCopyMenu .port > div .btFooterMenu ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .btSiteFooterCopyMenu .port > div .btFooterMenu ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .btSiteFooterCopyMenu .port > div .btFooterMenu ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .btSiteFooterCopyMenu .port > div .btFooterMenu ul li a:before{background-color: {$accentColor};}
.btDarkSkin .btSiteFooter .port:before,
.btLightSkin .btDarkSkin .btSiteFooter .port:before,
.btDarkSkin.btLightSkin .btDarkSkin .btSiteFooter .port:before{background-color: {$accentColor};}
.btContent .btArticleHeadline .bt_bb_headline a:hover{color: {$accentColor};}
.btPostSingleItemStandard .btArticleShareEtc > div.btReadMoreColumn .bt_bb_button a{background: {$accentColor};
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif !important;}
.btPostSingleItemStandard .btArticleShareEtc .btTags ul a:hover{background: {$accentColor};}
.btAboutAuthor{
    box-shadow: 0 0 0 4px {$accentColor} inset;}
.btAboutAuthor:before{
    background: {$accentColor};}
.btAboutAuthor .aaTxt h1,
.btAboutAuthor .aaTxt h2,
.btAboutAuthor .aaTxt h3,
.btAboutAuthor .aaTxt h4,
.btAboutAuthor .aaTxt h5,
.btAboutAuthor .aaTxt h6,
.btAboutAuthor .aaTxt h7,
.btAboutAuthor .aaTxt h8{
    color: {$alternateColor};}
.btMediaBox.btQuote:before,
.btMediaBox.btLink:before{
    background: linear-gradient(to right,{$accentColor},{$alternateColor});}
.btMediaBox.btQuote p,
.btMediaBox.btLink p{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.articleSideGutter .asgItem.title .btArticleAuthor{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.sticky.btArticleListItem .btArticleHeadline h1 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h2 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h3 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h4 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h5 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h6 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h7 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleHeadline h8 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleTextContent h1 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleTextContent h2 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleTextContent h3 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleTextContent h4 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleTextContent h5 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleTextContent h6 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleTextContent h7 .bt_bb_headline_content span a:after,
.sticky.btArticleListItem .btArticleTextContent h8 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleHeadline h1 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleHeadline h2 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleHeadline h3 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleHeadline h4 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleHeadline h5 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleHeadline h6 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleHeadline h7 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleHeadline h8 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleTextContent h1 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleTextContent h2 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleTextContent h3 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleTextContent h4 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleTextContent h5 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleTextContent h6 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleTextContent h7 .bt_bb_headline_content span a:after,
.btArticleListItem[class*=\"sticky\"] .btArticleTextContent h8 .bt_bb_headline_content span a:after{
    color: {$accentColor};}
.btPostSingleItemColumns .btTags ul a:hover{background: {$accentColor};}
.post-password-form p:nth-child(2) input[type=\"submit\"]{
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.btPagination{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btPagination .paging a{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btPagination .paging a:after{
    background: {$accentColor};}
.btPrevNextNav .btPrevNext:before{
    background: {$accentColor};}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextTitle{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btPrevNextNav .btPrevNext .btPrevNextItem .btPrevNextDir{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.btPrevNextNav .btPrevNext:hover .btPrevNextTitle{color: {$accentColor};}
.btLinkPages ul a{
    background: {$accentColor};}
.btLinkPages ul a:hover{
    background: {$alternateColor};}
.btContent .btArticleAuthor a:hover,
.btContent .btArticleComments:hover{color: {$accentColor};}
.btArticleDate:before,
.btArticleAuthor:before,
.btArticleComments:before,
.btArticleCategories:before{
    color: {$accentColor};}
.btArticleComments:before{
    color: {$accentColor};}
.btCommentsBox ul.comments li.pingback p a:not(.comment-edit-link){font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btCommentsBox ul.comments li.pingback p a:not(.comment-edit-link):hover{color: {$accentColor};}
.btCommentsBox ul.comments li.pingback p .edit-link a:before{
    color: {$accentColor};}
.btCommentsBox .vcard h1.author a:hover,
.btCommentsBox .vcard h2.author a:hover,
.btCommentsBox .vcard h3.author a:hover,
.btCommentsBox .vcard h4.author a:hover,
.btCommentsBox .vcard h5.author a:hover,
.btCommentsBox .vcard h6.author a:hover,
.btCommentsBox .vcard h7.author a:hover,
.btCommentsBox .vcard h8.author a:hover{color: {$accentColor};}
.btCommentsBox .vcard .posted:before{
    color: {$alternateColor};}
.btCommentsBox .commentTxt p.edit-link a:before,
.btCommentsBox .commentTxt p.reply a:before{
    color: {$accentColor};}
.btCommentsBox .comment-form input[type=\"checkbox\"]:before,
.btCommentsBox + #review_form_wrapper .comment-form input[type=\"checkbox\"]:before{
    background: {$accentColor};}
.btCommentsBox .comment-navigation a:before,
.btCommentsBox .comment-navigation a:after{
    color: {$accentColor};}
.comment-awaiting-moderation{color: {$accentColor};}
.comment-reply-title small{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.comment-reply-title small a#cancel-comment-reply-link:before{
    color: {$accentColor};}
.btCommentSubmit{
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
@media (max-width: 520px){.btCommentsBox ul.comments ul.children li.comment article:after{
    background: {$accentColor};}
}.no-comments{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btBox > h4,
.btCustomMenu > h4,
.btTopBox > h4{
    color: {$accentColor};}
.btTemplateDashCircle .btBox > h4:after,
.btTemplateDashOutlineCircle .btBox > h4:after,
.btTemplateDashSquare .btBox > h4:after,
.btTemplateDashOutlineSquare .btBox > h4:after,
.btTemplateDashCircle .btCustomMenu > h4:after,
.btTemplateDashOutlineCircle .btCustomMenu > h4:after,
.btTemplateDashSquare .btCustomMenu > h4:after,
.btTemplateDashOutlineSquare .btCustomMenu > h4:after,
.btTemplateDashCircle .btTopBox > h4:after,
.btTemplateDashOutlineCircle .btTopBox > h4:after,
.btTemplateDashSquare .btTopBox > h4:after,
.btTemplateDashOutlineSquare .btTopBox > h4:after{
    background: {$accentColor};}
.btTemplateDashOutlineCircle .btBox > h4:after,
.btTemplateDashOutlineCircle .btCustomMenu > h4:after,
.btTemplateDashOutlineCircle .btTopBox > h4:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btTemplateDashOutlineSquare .btBox > h4:after,
.btTemplateDashOutlineSquare .btCustomMenu > h4:after,
.btTemplateDashOutlineSquare .btTopBox > h4:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btBox > ul,
.btBox > .menu-all-pages-container > ul,
.btCustomMenu > ul,
.btCustomMenu > .menu-all-pages-container > ul,
.btTopBox > ul,
.btTopBox > .menu-all-pages-container > ul{font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btMenuFocusElementCircle .btBox ul li a:before,
.btMenuFocusElementCircle .btCustomMenu ul li a:before,
.btMenuFocusElementCircle .btTopBox ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .btBox ul li a:before,
.btMenuFocusElementOutlineCircle .btCustomMenu ul li a:before,
.btMenuFocusElementOutlineCircle .btTopBox ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .btBox ul li a:before,
.btMenuFocusElementSquare .btCustomMenu ul li a:before,
.btMenuFocusElementSquare .btTopBox ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .btBox ul li a:before,
.btMenuFocusElementOutlineSquare .btCustomMenu ul li a:before,
.btMenuFocusElementOutlineSquare .btTopBox ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .btBox ul li a:before,
.btMenuFocusElementDash .btCustomMenu ul li a:before,
.btMenuFocusElementDash .btTopBox ul li a:before{background-color: {$accentColor};}
.btBox ul li.current-menu-item > a,
.btCustomMenu ul li.current-menu-item > a,
.btTopBox ul li.current-menu-item > a{color: {$accentColor};}
.btBox .btImageTextWidget .btImageTextWidgetText .bt_bb_headline_content span a:hover,
.btCustomMenu .btImageTextWidget .btImageTextWidgetText .bt_bb_headline_content span a:hover,
.btTopBox .btImageTextWidget .btImageTextWidgetText .bt_bb_headline_content span a:hover{color: {$accentColor};}
.widget_calendar table caption{background: {$accentColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_calendar table tfoot{background: {$alternateColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_calendar table tbody tr td#today{color: {$accentColor};}
.widget_calendar table tbody td a:hover{background: {$accentColor};}
.widget_recent_comments li{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.widget_recent_comments li > a{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_recent_comments li > a:hover{border-bottom: 2px solid {$accentColor};
    color: {$accentColor};}
.widget_recent_comments .comment-author-link a:after{
    color: {$accentColor};}
.widget_rss li a.rsswidget{font-family: \"{$headingFont}\";}
.widget_rss li .rss-date{font-family: {$headingSuperTitleFont},Arial,Helvetica,sans-serif;}
.widget_rss li .rss-date:before{
    color: {$accentColor};}
.widget_rss li .rssSummary{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.widget_rss li cite{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .total{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove{
    background-color: {$alternateColor};}
.widget_shopping_cart .widget_shopping_cart_content .mini_cart_item .ppRemove a.remove:hover{background: {$accentColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetIcon span.cart-contents{
    background: {$accentColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent li.empty,
.topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent li.empty,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent li.empty{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btMenuVertical .menuPort .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler:hover:after,
.btMenuVertical .topTools .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler:hover:after,
.btMenuVertical .topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent .verticalMenuCartToggler:hover:after{color: {$accentColor};}
.menuPort .widget_shopping_cart .widget_shopping_cart_content:hover .btCartWidgetIcon:hover,
.topTools .widget_shopping_cart .widget_shopping_cart_content:hover .btCartWidgetIcon:hover,
.topBarInLogoArea .widget_shopping_cart .widget_shopping_cart_content:hover .btCartWidgetIcon:hover{color: {$accentColor};}
.btMenuHorizontal .topBarInMenu .widget_shopping_cart .widget_shopping_cart_content .btCartWidgetInnerContent{top: calc(({$logoHeight}px - 13px)/4 + 13px);}
.widget_recent_reviews{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle{
    background: {$accentColor};}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-range{
    background: {$alternateColor};}
.widget_price_filter .price_slider_amount .price_label{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.btBox .tagcloud a,
.btTags ul a{
    background: {$alternateColor};}
.btBox .tagcloud a:hover,
.btTags ul a:hover{background: {$accentColor};}
.topTools .btIconWidget.bt_icon_alternate .btIconWidgetIcon,
.topBarInMenu .btIconWidget.bt_icon_alternate .btIconWidgetIcon{color: {$alternateColor};}
.topTools .btIconWidget.bt_icon_alternate:hover,
.topBarInMenu .btIconWidget.bt_icon_alternate:hover{color: {$accentColor};}
.topTools .btIconWidget:hover,
.topBarInMenu .btIconWidget:hover{color: {$accentColor};}
.btIconWidget.widget_bt_button_widget .bt_button_widget .bt_bb_button_text{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.btIconWidget.widget_bt_button_widget .bt_button_widget.bt_button_widget_accent{
    background-color: {$accentColor};
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);}
.btIconWidget.widget_bt_button_widget .bt_button_widget.bt_button_widget_alternate{
    background-color: {$alternateColor};
    background-image: linear-gradient(to right,{$alternateColor} 51%,{$accentColor} 100%);}
.btSidebar .btIconWidget .btIconWidgetContent .btIconWidgetTitle,
footer .btIconWidget .btIconWidgetContent .btIconWidgetTitle,
.topBarInLogoArea .btIconWidget .btIconWidgetContent .btIconWidgetTitle{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btAccentIconWidget.btIconWidget .btIconWidgetIcon{color: {$accentColor};}
.bt_icon_alternate.btIconWidget .btIconWidgetIcon{color: {$alternateColor};}
a.btAccentIconWidget.btIconWidget:hover,
a.bt_icon_alternate.btIconWidget:hover{color: {$accentColor};}
.btSiteFooterWidgets .btSearch button,
.btSiteFooterWidgets .btSearch input[type=submit],
.btSidebar .btSearch button,
.btSidebar .btSearch input[type=submit],
.btSidebar .widget_product_search button,
.btSidebar .widget_product_search input[type=submit]{
    background: {$accentColor} !important;}
.btSiteFooterWidgets .btSearch button:hover,
.btSiteFooterWidgets .btSearch input[type=submit]:hover,
.btSidebar .btSearch button:hover,
.btSidebar .btSearch input[type=submit]:hover,
.btSidebar .widget_product_search button:hover,
.btSidebar .widget_product_search input[type=submit]:hover{background: {$alternateColor} !important;}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon a.bt_bb_icon_holder{color: {$accentColor};}
.btSearchInner.btFromTopBox .btSearchInnerClose .bt_bb_icon:hover a.bt_bb_icon_holder{color: {$alternateColor};}
.btSearchInner.btFromTopBox button{
    background: {$accentColor};}
.btSearchInner.btFromTopBox button:hover{background: {$alternateColor};}
.btMenuHorizontal .topBarInMenu .widget_bt_divider_widget > span{height: calc({$logoHeight}px * .5);}
::selection{background: {$accentColor};}
.bt_bb_headline .bt_bb_headline_content b{
    color: {$accentColor};}
.bt_bb_headline .bt_bb_headline_content u{
    color: {$alternateColor};}
.bt_bb_dash_bottom.bt_bb_headline .bt_bb_headline_content:after{
    background: {$accentColor};}
.bt_bb_dash_type_outlinecircle.bt_bb_headline .bt_bb_headline_content:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.bt_bb_dash_type_outlinesquare.bt_bb_headline .bt_bb_headline_content:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.bt_bb_headline.bt_bb_superheadline .bt_bb_headline_superheadline{font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_headline.bt_bb_subheadline .bt_bb_headline_subheadline{font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_section[class*=\"accent_solid\"]:before{background-color: {$accentColor};}
.bt_bb_section[class*=\"alternate_solid\"]:before{background-color: {$alternateColor};}
.bt_bb_section[class*=\"accent_alternate_gradient\"]:before{background: linear-gradient(to right,{$accentColor},{$alternateColor});}
.bt_bb_section[class*=\"alternate_accent_gradient\"]:before{background: linear-gradient(to right,{$alternateColor},{$accentColor});}
.bt_bb_progress_bar.bt_bb_style_line .bt_bb_progress_bar_inner:after{
    background: {$accentColor};}
.bt_bb_button .bt_bb_button_text{font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_button.bt_bb_style_filled.bt_bb_color_scheme_5 a{background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);}
.bt_bb_button.bt_bb_style_filled.bt_bb_color_scheme_6 a{background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);}
.bt_bb_button.bt_bb_style_filled.bt_bb_color_scheme_9 a{background-image: linear-gradient(to right,{$alternateColor} 51%,{$accentColor} 100%);}
.bt_bb_button.bt_bb_style_filled.bt_bb_color_scheme_11 a{background-image: linear-gradient(to right,{$alternateColor} 51%,{$accentColor} 100%);}
.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title b{
    color: {$accentColor};}
.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title u{
    color: {$alternateColor};}
.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title s b{background: linear-gradient(to right,{$accentColor},{$alternateColor});}
.bt_bb_service .bt_bb_service_content .bt_bb_service_content_title s u{background: linear-gradient(to right,{$alternateColor},{$accentColor});}
.btLightSkin .bt_bb_service .bt_bb_service_content .bt_bb_service_content_title s em{background: linear-gradient(to right,#181818,{$accentColor});}
.btDarkSkin .bt_bb_service .bt_bb_service_content .bt_bb_service_content_title s em{background: linear-gradient(to right,#fff,{$accentColor});}
.btLightSkin .bt_bb_service .bt_bb_service_content .bt_bb_service_content_title s i{background: linear-gradient(to right,{$accentColor},#181818);}
.btDarkSkin .bt_bb_service .bt_bb_service_content .bt_bb_service_content_title s i{background: linear-gradient(to right,{$accentColor},#fff);}
.bt_bb_service:hover .bt_bb_service_content_title a:hover{color: {$accentColor};}
.bt_bb_content_slider_item[class*=\"accent_solid\"]:before{background-color: {$accentColor};}
.bt_bb_content_slider_item[class*=\"alternate_solid\"]:before{background-color: {$alternateColor};}
.bt_bb_content_slider_item[class*=\"accent_alternate_gradient\"]:before{background: linear-gradient(to right,{$accentColor},{$alternateColor});}
.bt_bb_content_slider_item[class*=\"alternate_accent_gradient\"]:before{background: linear-gradient(to right,{$alternateColor},{$accentColor});}
button.slick-arrow{
    background: {$accentColor};}
.bt_bb_arrows_style_transparent_accent button.slick-arrow:before{color: {$accentColor};}
.bt_bb_arrows_style_transparent_alternate button.slick-arrow:before{color: {$alternateColor};}
.bt_bb_arrows_style_accent_light button.slick-arrow{background: {$accentColor} !important;}
.bt_bb_arrows_style_accent_dark button.slick-arrow{background: {$accentColor} !important;}
.bt_bb_arrows_style_alternate_light button.slick-arrow{background: {$alternateColor} !important;}
.bt_bb_arrows_style_alternate_dark button.slick-arrow{background: {$alternateColor} !important;}
button.slick-arrow:hover{
    background: {$accentColor};}
.slick-dots li:after{
    background: {$accentColor};}
.btMenuFocusElementCircle .slick-dots li:after{background: {$accentColor};}
.btMenuFocusElementOutlineCircle .slick-dots li:after{
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .slick-dots li:after{background: {$accentColor};}
.btMenuFocusElementOutlineSquare .slick-dots li:after{
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .bt_bb_show_paging_as_circle .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_circle .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_circle .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_circle .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_circle .slick-dots li:after{background: {$accentColor};}
.btMenuFocusElementDash .bt_bb_show_paging_as_outline_circle .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_outline_circle .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_outline_circle .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_outline_circle .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_outline_circle .slick-dots li:after{
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .bt_bb_show_paging_as_outline_square .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_outline_square .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_outline_square .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_outline_square .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_outline_square .slick-dots li:after{
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_dots_style_accent_dot .slick-dots li:after{background: {$accentColor} !important;}
.btMenuFocusElementDash .bt_bb_show_paging_as_circle.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_circle.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_circle.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_circle.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_circle.bt_bb_dots_style_accent_dot .slick-dots li:after{background: {$accentColor} !important;}
.btMenuFocusElementDash .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_accent_dot .slick-dots li:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btMenuFocusElementDash .bt_bb_show_paging_as_square.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_square.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_square.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_square.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_square.bt_bb_dots_style_accent_dot .slick-dots li:after{background: {$accentColor} !important;}
.btMenuFocusElementDash .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_accent_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_accent_dot .slick-dots li:after{
    box-shadow: 0 0 0 2px {$accentColor} inset !important;}
.btMenuFocusElementDash .bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_dots_style_alternate_dot .slick-dots li:after{background: {$alternateColor} !important;}
.btMenuFocusElementDash .bt_bb_show_paging_as_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after{background: {$alternateColor} !important;}
.btMenuFocusElementDash .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_outline_circle.bt_bb_dots_style_alternate_dot .slick-dots li:after{
    box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.btMenuFocusElementDash .bt_bb_show_paging_as_square.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_square.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_square.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_square.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_square.bt_bb_dots_style_alternate_dot .slick-dots li:after{background: {$alternateColor} !important;}
.btMenuFocusElementDash .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementCircle .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineCircle .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementSquare .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_alternate_dot .slick-dots li:after,
.btMenuFocusElementOutlineSquare .bt_bb_show_paging_as_outline_square.bt_bb_dots_style_alternate_dot .slick-dots li:after{
    box-shadow: 0 0 0 2px {$alternateColor} inset !important;}
.bt_bb_show_paging_as_numbers .slick-dots li button{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_show_paging_as_numbers .slick-dots li.bt_bb_slider_paging,
.bt_bb_show_paging_as_numbers .slick-dots li.bt_bb_content_slider_paging{font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_custom_menu div ul a:hover{color: {$accentColor};}
.btMenuAsInSidebar.bt_bb_custom_menu div ul{font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btMenuFocusElementCircle .btMenuAsInSidebar.bt_bb_custom_menu div ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .btMenuAsInSidebar.bt_bb_custom_menu div ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .btMenuAsInSidebar.bt_bb_custom_menu div ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .btMenuAsInSidebar.bt_bb_custom_menu div ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .btMenuAsInSidebar.bt_bb_custom_menu div ul li a:before{background-color: {$accentColor};}
.bt_bb_map .bt_bb_map_content .bt_bb_map_content_wrapper .bt_bb_map_location.bt_bb_highlight{background: linear-gradient(115deg,{$accentColor},{$alternateColor}) !important;}
.bt_bb_style_simple ul.bt_bb_tabs_header li.on{border-color: {$accentColor};}
.bt_bb_tabs ul.bt_bb_tabs_header{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btMenuFocusElementCircle .bt_bb_style_simple.bt_bb_tabs ul.bt_bb_tabs_header li span:after{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .bt_bb_style_simple.bt_bb_tabs ul.bt_bb_tabs_header li span:after{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .bt_bb_style_simple.bt_bb_tabs ul.bt_bb_tabs_header li span:after{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .bt_bb_style_simple.bt_bb_tabs ul.bt_bb_tabs_header li span:after{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .bt_bb_style_simple.bt_bb_tabs ul.bt_bb_tabs_header li span:after{background-color: {$accentColor};}
.bt_bb_style_simple.bt_bb_tabs ul.bt_bb_tabs_header li.on span:after{background: {$accentColor};}
.btMenuFocusElementCircle .bt_bb_style_simple.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .bt_bb_style_simple.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .bt_bb_style_simple.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .bt_bb_style_simple.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .bt_bb_style_simple.bt_bb_accordion .bt_bb_accordion_item .bt_bb_accordion_item_title:before{background-color: {$accentColor};}
.bt_bb_style_simple.bt_bb_accordion .bt_bb_accordion_item.on .bt_bb_accordion_item_title:before{
    background: {$accentColor};}
.bt_bb_price_list .bt_bb_price_list_title_subtitle_price .bt_bb_price_list_price{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_price_list .bt_bb_price_list_title_subtitle_price .bt_bb_price_list_title_subtitle .bt_bb_price_list_title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.wpcf7-form .wpcf7-submit:not([type='checkbox']):not([type='radio']){
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.wpcf7-form .bt_bb_alternate_submit .wpcf7-submit{background-image: linear-gradient(to right,{$alternateColor} 51%,{$accentColor} 100%) !important;}
.bt_bb_required:after{
    color: {$accentColor} !important;}
.required{color: {$accentColor} !important;}
button.mfp-close:hover{color: {$accentColor};}
button.mfp-arrow:hover{
    background: {$accentColor};}
.bt_bb_cost_calculator .bt_bb_cost_calculator_total{
    background: {$accentColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_widget_select_items > div[data-value]:before{
    box-shadow: 0 0 0 2px {$accentColor} inset;}
.on.bt_bb_widget_switch > div{background: {$accentColor};}
.bt_bb_progress_bar_advanced .progressbar-text{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_counter_holder{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btCounterHolder{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btCountDownAccentNumbers.btCounterHolder .btCountdownHolder span[class^=\"n\"],
.btCountDownAccentNumbers.btCounterHolder .btCountdownHolder .days > span:first-child,
.btCountDownAccentNumbers.btCounterHolder .btCountdownHolder .days > span:nth-child(2),
.btCountDownAccentNumbers.btCounterHolder .btCountdownHolder .days > span:nth-child(3){color: {$accentColor};}
.btWorkingHours .bt_bb_working_hours_inner_row .bt_bb_working_hours_inner_wrapper .bt_bb_working_hours_inner_link a{background-color: {$accentColor};
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.btWorkingHoursAltButton.btWorkingHours .bt_bb_working_hours_inner_row .bt_bb_working_hours_inner_wrapper .bt_bb_working_hours_inner_link a{background-color: {$alternateColor};
    background-image: linear-gradient(to right,{$alternateColor} 51%,{$accentColor} 100%);}
.btWorkingHoursLightAccButton.btWorkingHours .bt_bb_working_hours_inner_row .bt_bb_working_hours_inner_wrapper .bt_bb_working_hours_inner_link a{
    color: {$accentColor};}
.lightColorBookButton.btWorkingHours .bt_bb_working_hours_inner_row .bt_bb_working_hours_inner_wrapper .bt_bb_working_hours_inner_link a:after{color: {$accentColor};}
.bt_bb_masonry_image_grid .bt_bb_grid_item_inner > .bt_bb_grid_item_inner_image:after{
    background: {$accentColor};}
.btMenuFocusElementCircle .bt_bb_post_grid_loader > div,
.btMenuFocusElementCircle .bt_bb_post_grid_loader > span{background: {$accentColor};}
.btMenuFocusElementOutlineCircle .bt_bb_post_grid_loader > div,
.btMenuFocusElementOutlineCircle .bt_bb_post_grid_loader > span{border: 3px solid {$accentColor};}
.btMenuFocusElementSquare .bt_bb_post_grid_loader > div,
.btMenuFocusElementSquare .bt_bb_post_grid_loader > span{background: {$accentColor};}
.btMenuFocusElementOutlineSquare .bt_bb_post_grid_loader > div,
.btMenuFocusElementOutlineSquare .bt_bb_post_grid_loader > span{border: 3px solid {$accentColor};}
.btMenuFocusElementDash .bt_bb_post_grid_loader > div:nth-child(2),
.btMenuFocusElementDash .bt_bb_post_grid_loader > span:nth-child(2){background: linear-gradient(to right,{$accentColor},{$accentColor});}
.bt_bb_post_grid_filter{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btMenuFocusElementCircle .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .bt_bb_post_grid_filter .bt_bb_post_grid_filter_item:before{background-color: {$accentColor};}
.bt_bb_post_grid_filter .bt_bb_post_grid_filter_item.active:before{background: {$accentColor};}
.bt_bb_masonry_post_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_inner_content .bt_bb_grid_item_post_title + .bt_bb_grid_item_post_excerpt:before,
.bt_bb_masonry_portfolio_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_inner_content .bt_bb_grid_item_post_title + .bt_bb_grid_item_post_excerpt:before{
    background: {$accentColor};}
.bt_bb_masonry_post_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_inner_content .bt_bb_grid_item_post_show_more a,
.bt_bb_masonry_portfolio_tiles .bt_bb_grid_item .bt_bb_grid_item_inner .bt_bb_grid_item_inner_content .bt_bb_grid_item_post_show_more a{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;
    background-color: {$accentColor};
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_category{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_category .post-categories:before{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > span:before{
    color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > span.bt_bb_latest_posts_item_author a:hover,
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > span.bt_bb_latest_posts_item_author_avatar a:hover{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_title{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_title a:hover{color: {$accentColor};}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_read_more{font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_latest_posts .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_read_more a{
    color: {$accentColor};}
.bt_bb_latest_posts.bt_bb_look_standard_highlighted .bt_bb_latest_posts_item:first-child .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_category .post-categories:before{background: {$accentColor};}
.bt_bb_latest_posts.bt_bb_look_standard_highlighted .bt_bb_latest_posts_item:first-child .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_title a:hover{color: {$accentColor};}
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_round .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_round-top-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_round-top-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_round-bottom-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_round-bottom-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_rounded .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_rounded-top-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_rounded-top-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_rounded-bottom-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_rounded-bottom-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_standard.bt_bb_date_design_square .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_round .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_round-top-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_round-top-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_round-bottom-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_round-bottom-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_rounded .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_rounded-top-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_rounded-top-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_rounded-bottom-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_rounded-bottom-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_highlighted.bt_bb_date_design_square .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_round .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_round-top-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_round-top-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_round-bottom-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_round-bottom-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_rounded .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_rounded-top-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_rounded-top-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_rounded-bottom-left .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_rounded-bottom-right .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date,
.bt_bb_latest_posts.bt_bb_look_clean.bt_bb_date_design_square .bt_bb_latest_posts_item_content .bt_bb_latest_posts_item_meta > .bt_bb_latest_posts_item_date{
    background: {$alternateColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_category,
.bt_bb_masonry_post_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_category,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_category,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_category{
    font-family: \"{$headingSuperTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_category:before,
.bt_bb_masonry_post_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_category:before,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_category:before,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_category:before{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span:before,
.bt_bb_masonry_post_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span:before,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span:before,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span:before{
    color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span.bt_bb_grid_item_item_author a:hover,
.bt_bb_masonry_post_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span.bt_bb_grid_item_item_author a:hover,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span.bt_bb_grid_item_item_author a:hover,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > span.bt_bb_grid_item_item_author a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title,
.bt_bb_masonry_post_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover,
.bt_bb_masonry_post_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_title a:hover{color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_share .bt_bb_icon .bt_bb_icon_holder:before,
.bt_bb_masonry_post_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_share .bt_bb_icon .bt_bb_icon_holder:before,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_share .bt_bb_icon .bt_bb_icon_holder:before,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_post_share .bt_bb_icon .bt_bb_icon_holder:before{
    color: {$accentColor};}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_item_read_more,
.bt_bb_masonry_post_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_item_read_more,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_item_read_more,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_item_read_more{font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_item_read_more a,
.bt_bb_masonry_post_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_item_read_more a,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_item_read_more a,
.bt_bb_masonry_portfolio_grid .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_content .bt_bb_grid_item_item_read_more a{
    color: {$accentColor};}
.bt_bb_masonry_post_grid.bt_bb_date_design_round .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_round-top-left .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_round-top-right .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_round-bottom-left .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_round-bottom-right .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_rounded .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_rounded-top-left .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_rounded-top-right .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_rounded-bottom-left .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_rounded-bottom-right .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_post_grid.bt_bb_date_design_square .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_round .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_round-top-left .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_round-top-right .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_round-bottom-left .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_round-bottom-right .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_rounded .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_rounded-top-left .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_rounded-top-right .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_rounded-bottom-left .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_rounded-bottom-right .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date,
.bt_bb_masonry_portfolio_grid.bt_bb_date_design_square .bt_bb_grid_item_post_content .bt_bb_grid_item_meta > .bt_bb_grid_item_date{
    background: {$alternateColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_masonry_post_grid.bt_bb_look_image_above .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_thumbnail a:after,
.bt_bb_masonry_post_grid.bt_bb_look_image_above .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_thumbnail a:after,
.bt_bb_masonry_portfolio_grid.bt_bb_look_image_above .bt_bb_masonry_post_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_thumbnail a:after,
.bt_bb_masonry_portfolio_grid.bt_bb_look_image_above .bt_bb_masonry_portfolio_grid_content .bt_bb_grid_item .bt_bb_grid_item_post_thumbnail a:after{
    background: {$accentColor};}
.btNoSearchResults{border: 2px solid {$accentColor};}
.btNoSearchResults #searchform input[type='submit']{
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.btNoSearchResults .bt_bb_button:last-child a{background: linear-gradient(to right,{$alternateColor} 51%,{$accentColor} 100%);}
.bt_bb_service_image .bt_bb_service_image_content .bt_bb_service_image_content_title h3 b{
    color: {$accentColor};}
.bt_bb_service_image .bt_bb_service_image_content .bt_bb_service_image_content_title h3 u{
    color: {$alternateColor};}
.bt_bb_service_image .bt_bb_service_image_content_read_more{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_service_image .bt_bb_service_image_content_read_more a:hover{color: {$accentColor};}
.btLightSkin .bt_bb_features_table table thead tr th,
.btDarkSkin .btLightSkin .bt_bb_features_table table thead tr th,
.btLightSkin .btDarkSkin .btLightSkin .bt_bb_features_table table thead tr th{border-bottom-color: {$accentColor};}
.btDarkSkin .bt_bb_features_table table thead tr th,
.btLightSkin .btDarkSkin .bt_bb_features_table table thead tr th,
.btDarkSkin.btLightSkin .btDarkSkin .bt_bb_features_table table thead tr th{border-bottom-color: {$accentColor};}
.bt_bb_features_table table thead tr th strong{color: {$accentColor};}
.bt_bb_features_table table tbody tr td .bt_bb_features_table_yes:after{
    color: {$accentColor};}
.btMenuFocusElementCircle .bt_bb_before_after_image .bt_bb_before_after_image-horizontal .bt_bb_before_after_image-handle .bt_bb_before_after_image-left-arrow{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .bt_bb_before_after_image .bt_bb_before_after_image-horizontal .bt_bb_before_after_image-handle .bt_bb_before_after_image-left-arrow{
    border: 2px solid {$accentColor};}
.btMenuFocusElementSquare .bt_bb_before_after_image .bt_bb_before_after_image-horizontal .bt_bb_before_after_image-handle .bt_bb_before_after_image-left-arrow{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .bt_bb_before_after_image .bt_bb_before_after_image-horizontal .bt_bb_before_after_image-handle .bt_bb_before_after_image-left-arrow{
    border: 2px solid {$accentColor};}
.btMenuFocusElementDash .bt_bb_before_after_image .bt_bb_before_after_image-horizontal .bt_bb_before_after_image-handle .bt_bb_before_after_image-left-arrow{background-color: {$accentColor};}
.bt_bb_before_after_image .bt_bb_before_after_image-container.active .bt_bb_before_after_image-handle{background: {$accentColor};}
.bt_bb_before_after_image .bt_bb_before_after_image_block{
    background: {$accentColor};}
.bt_bb_before_after_image .bt_bb_before_after_image_block .bt_bb_before_after_image_headline{font-family: {$headingFont};}
.bt_bb_before_after_image .bt_bb_before_after_image_block .bt_bb_before_after_image_headline:after{background: {$alternateColor};}
.bt_bb_before_after_image .bt_bb_before_after_image_before_txt_holder,
.bt_bb_before_after_image .bt_bb_before_after_image_after_txt_holder{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.mptt-shortcode-wrapper .mptt-shortcode-table tr.mptt-shortcode-row th{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.mptt-shortcode-wrapper .mptt-shortcode-table tbody .mptt-event-container{background-color: {$accentColor};}
.mptt-shortcode-wrapper .mptt-shortcode-table tbody .mptt-event-container:hover{background-color: {$alternateColor};}
.mptt-shortcode-wrapper .mptt-shortcode-table tbody .mptt-event-container .event-title{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.mptt-shortcode-wrapper .mptt-shortcode-list .mptt-column .mptt-events-list .mptt-list-event .mptt-event-title{font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_menu_item .bt_bb_menu_item_title_price .bt_bb_menu_item_title span{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_menu_item .bt_bb_menu_item_title_price .bt_bb_menu_item_price span{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_menu_item .bt_bb_menu_item_description span{
    font-family: \"{$bodyFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_organic_animation_fill.bt_bb_organic_animation .item .item__deco{fill: {$alternateColor};}
.bt_bb_organic_animation_fill_accent.bt_bb_organic_animation .item .item__deco{fill: {$accentColor};}
.bt_bb_organic_animation_stroke.bt_bb_organic_animation .item .item__deco{stroke: {$alternateColor};}
.bt_bb_organic_animation_stroke_accent.bt_bb_organic_animation .item .item__deco{stroke: {$accentColor};}
.bt_bb_organic_animation .item .item__meta .item__subtitle{
    font-family: \"{$headingSubTitleFont}\",Arial,Helvetica,sans-serif;}
.bt_bb_organic_animation .item .item__meta .item__button_text{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
@media (max-width: 480px){.bt_bb_style_filled.bt_bb_organic_animation .item .item__meta .item__button_text a{box-shadow: 0 0 0 0 {$accentColor} inset !important;}
}.products ul li.product .btWooShopLoopItemInner .bt_bb_image a:before,
ul.products li.product .btWooShopLoopItemInner .bt_bb_image a:before{
    background: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_content a:hover,
ul.products li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_content a:hover{color: {$accentColor};}
.products ul li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_subheadline .star-rating span:before,
ul.products li.product .btWooShopLoopItemInner .bt_bb_headline .bt_bb_headline_subheadline .star-rating span:before{color: {$alternateColor};}
.products ul li.product .btWooShopLoopItemInner .price,
ul.products li.product .btWooShopLoopItemInner .price{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.products ul li.product .btWooShopLoopItemInner .added:after,
.products ul li.product .btWooShopLoopItemInner .loading:after,
ul.products li.product .btWooShopLoopItemInner .added:after,
ul.products li.product .btWooShopLoopItemInner .loading:after{
    background-color: {$alternateColor};}
.products ul li.product .btWooShopLoopItemInner .added_to_cart,
ul.products li.product .btWooShopLoopItemInner .added_to_cart{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif !important;}
.btShopSaleTagDesignHardRounded .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignHardRoundedTopLeft .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignHardRoundedTopRight .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignHardRoundedBottomLeft .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignHardRoundedBottomRight .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRounded .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRoundedTopLeft .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRoundedTopRight .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRoundedBottomLeft .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRoundedBottomRight .products ul li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignHardRounded ul.products li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignHardRoundedTopLeft ul.products li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignHardRoundedTopRight ul.products li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignHardRoundedBottomLeft ul.products li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignHardRoundedBottomRight ul.products li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRounded ul.products li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRoundedTopLeft ul.products li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRoundedTopRight ul.products li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRoundedBottomLeft ul.products li.product .btWooShopLoopItemInner:hover .onsale,
.btShopSaleTagDesignSoftRoundedBottomRight ul.products li.product .btWooShopLoopItemInner:hover .onsale{background: {$alternateColor};}
.btShopSaleTagDesignHardRounded .products ul li.product .onsale,
.btShopSaleTagDesignHardRoundedTopLeft .products ul li.product .onsale,
.btShopSaleTagDesignHardRoundedTopRight .products ul li.product .onsale,
.btShopSaleTagDesignHardRoundedBottomLeft .products ul li.product .onsale,
.btShopSaleTagDesignHardRoundedBottomRight .products ul li.product .onsale,
.btShopSaleTagDesignSoftRounded .products ul li.product .onsale,
.btShopSaleTagDesignSoftRoundedTopLeft .products ul li.product .onsale,
.btShopSaleTagDesignSoftRoundedTopRight .products ul li.product .onsale,
.btShopSaleTagDesignSoftRoundedBottomLeft .products ul li.product .onsale,
.btShopSaleTagDesignSoftRoundedBottomRight .products ul li.product .onsale,
.btShopSaleTagDesignSquare .products ul li.product .onsale,
.btShopSaleTagDesignHardRounded ul.products li.product .onsale,
.btShopSaleTagDesignHardRoundedTopLeft ul.products li.product .onsale,
.btShopSaleTagDesignHardRoundedTopRight ul.products li.product .onsale,
.btShopSaleTagDesignHardRoundedBottomLeft ul.products li.product .onsale,
.btShopSaleTagDesignHardRoundedBottomRight ul.products li.product .onsale,
.btShopSaleTagDesignSoftRounded ul.products li.product .onsale,
.btShopSaleTagDesignSoftRoundedTopLeft ul.products li.product .onsale,
.btShopSaleTagDesignSoftRoundedTopRight ul.products li.product .onsale,
.btShopSaleTagDesignSoftRoundedBottomLeft ul.products li.product .onsale,
.btShopSaleTagDesignSoftRoundedBottomRight ul.products li.product .onsale,
.btShopSaleTagDesignSquare ul.products li.product .onsale{
    background: {$alternateColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.products ul li.product.product-category a:hover h2,
ul.products li.product.product-category a:hover h2{color: {$accentColor};}
nav.woocommerce-pagination ul li a:hover{
    background: {$alternateColor};}
nav.woocommerce-pagination ul li a.next:before,
nav.woocommerce-pagination ul li a.prev:before{
    background: {$accentColor};}
.btShopSaleTagDesignHardRounded div.product > .onsale,
.btShopSaleTagDesignHardRoundedTopLeft div.product > .onsale,
.btShopSaleTagDesignHardRoundedTopRight div.product > .onsale,
.btShopSaleTagDesignHardRoundedBottomLeft div.product > .onsale,
.btShopSaleTagDesignHardRoundedBottomRight div.product > .onsale,
.btShopSaleTagDesignSoftRounded div.product > .onsale,
.btShopSaleTagDesignSoftRoundedTopLeft div.product > .onsale,
.btShopSaleTagDesignSoftRoundedTopRight div.product > .onsale,
.btShopSaleTagDesignSoftRoundedBottomLeft div.product > .onsale,
.btShopSaleTagDesignSoftRoundedBottomRight div.product > .onsale,
.btShopSaleTagDesignSquare div.product > .onsale{
    background: {$alternateColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
div.product div.images .woocommerce-product-gallery__wrapper .woocommerce-product-gallery__image a:after{
    background: {$accentColor};}
div.product div.images .woocommerce-product-gallery__trigger:after{
    background: {$accentColor};}
div.product div.images .woocommerce-product-gallery__trigger:hover:after{
    background: {$alternateColor};}
div.product div.summary .price{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
div.product div.summary form.cart .group_table th .amount,
div.product div.summary form.cart .group_table td .amount{font-family: \"{$headingFont}\",Arial,Helvetica;}
div.product div.summary form.cart .group_table a{font-family: \"{$headingFont}\",Arial,Helvetica;}
div.product div.summary form.cart .group_table a:hover{color: {$accentColor};}
table.shop_table thead th{
    border-bottom: 3px solid {$accentColor};
    color: {$accentColor} !important;}
table.shop_table td.product-remove a.remove{
    background: {$alternateColor};}
table.shop_table td.product-remove a.remove:hover{background: {$accentColor};}
table.shop_table td.product-name{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
table.shop_table td.product-name a:hover{color: {$accentColor};}
table.shop_table tfoot{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
tr.cart-subtotal,
tfoot,
tr.order-total{
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
tr.order-total{
    border-bottom: 3px solid {$alternateColor};}
ul.wc_payment_methods li .about_paypal{
    color: {$accentColor};}
.woocommerce-MyAccount-navigation ul{
    font-family: \"{$menuFont}\",Arial,Helvetica,sans-serif;}
.btMenuFocusElementCircle .woocommerce-MyAccount-navigation ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .woocommerce-MyAccount-navigation ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .woocommerce-MyAccount-navigation ul li a:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .woocommerce-MyAccount-navigation ul li a:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .woocommerce-MyAccount-navigation ul li a:before{background-color: {$accentColor};}
.woocommerce-MyAccount-navigation ul li.is-active a:before{background: {$accentColor};}
.reset_variations:before{
    color: {$accentColor};}
form fieldset legend{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.woocommerce-info a:not(.button),
.woocommerce-message a:not(.button){color: {$accentColor};}
.woocommerce-info a.showcoupon:before,
.woocommerce-message a.showcoupon:before{
    color: {$accentColor};}
.woocommerce-info a.showcoupon:hover,
.woocommerce-message a.showcoupon:hover{color: {$accentColor};}
.woocommerce-message:before,
.woocommerce-info:before,
.woocommerce-error:before{
    background: {$accentColor};}
.woocommerce .btSidebar a.button,
.woocommerce .btContent a.button,
.woocommerce-page .btSidebar a.button,
.woocommerce-page .btContent a.button,
.woocommerce .btSidebar input[type=\"submit\"],
.woocommerce .btContent input[type=\"submit\"],
.woocommerce-page .btSidebar input[type=\"submit\"],
.woocommerce-page .btContent input[type=\"submit\"],
.woocommerce .btSidebar :not(.widget_product_search) button[type=\"submit\"],
.woocommerce .btContent :not(.widget_product_search) button[type=\"submit\"],
.woocommerce-page .btSidebar :not(.widget_product_search) button[type=\"submit\"],
.woocommerce-page .btContent :not(.widget_product_search) button[type=\"submit\"],
.woocommerce .btSidebar input.button,
.woocommerce .btContent input.button,
.woocommerce-page .btSidebar input.button,
.woocommerce-page .btContent input.button,
div.woocommerce a.button,
div.woocommerce input[type=\"submit\"],
div.woocommerce :not(.widget_product_search) button[type=\"submit\"],
div.woocommerce input.button{
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif !important;}
.woocommerce .btSidebar input.alt,
.woocommerce .btContent input.alt,
.woocommerce-page .btSidebar input.alt,
.woocommerce-page .btContent input.alt,
.woocommerce .btSidebar a.button.alt,
.woocommerce .btContent a.button.alt,
.woocommerce-page .btSidebar a.button.alt,
.woocommerce-page .btContent a.button.alt,
.woocommerce .btSidebar .button.alt,
.woocommerce .btContent .button.alt,
.woocommerce-page .btSidebar .button.alt,
.woocommerce-page .btContent .button.alt,
.woocommerce .btSidebar button.alt,
.woocommerce .btContent button.alt,
.woocommerce-page .btSidebar button.alt,
.woocommerce-page .btContent button.alt,
.woocommerce .btSidebar .shipping-calculator-button,
.woocommerce .btContent .shipping-calculator-button,
.woocommerce-page .btSidebar .shipping-calculator-button,
.woocommerce-page .btContent .shipping-calculator-button,
div.woocommerce input.alt,
div.woocommerce a.button.alt,
div.woocommerce .button.alt,
div.woocommerce button.alt,
div.woocommerce .shipping-calculator-button{
    background-image: linear-gradient(to right,{$alternateColor} 51%,{$accentColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif !important;}
.woocommerce .btSidebar a.edit:before,
.woocommerce .btContent a.edit:before,
.woocommerce-page .btSidebar a.edit:before,
.woocommerce-page .btContent a.edit:before,
div.woocommerce a.edit:before{
    color: {$accentColor};}
.widget_price_filter .price_slider_wrapper .ui-slider .ui-slider-handle{
    background: {$accentColor};}
.widget_price_filter .price_slider_amount .price_label{
    font-family: {$headingFont},Arial,Helvetica,sans-serif;}
.star-rating span:before{
    color: {$alternateColor};}
p.stars a[class^=\"star-\"].active:after,
p.stars a[class^=\"star-\"]:hover:after{color: {$alternateColor};}
.select2-container--default .select2-results__option--highlighted[aria-selected],
.select2-container--default .select2-results__option--highlighted[data-selected]{background-color: {$accentColor};}
button.pswp__button.pswp__button--arrow--left:hover,
button.pswp__button.pswp__button--arrow--right:hover{
    background: {$accentColor};}
.woocommerce input[type=\"checkbox\"]:before,
.woocommerce input[type=\"radio\"]:before{
    background: {$accentColor};}
.btQuoteBooking .btContactNext{
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.btQuoteBooking .btQuoteSlider .ui-slider-handle{
    background: {$accentColor};}
.btQuoteBooking .btQuoteSwitch.on .btQuoteSwitchInner{background: {$accentColor};}
.btMenuFocusElementCircle .btQuoteBooking .ddChild ul li:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineCircle .btQuoteBooking .ddChild ul li:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementSquare .btQuoteBooking .ddChild ul li:before{background-color: {$accentColor};}
.btMenuFocusElementOutlineSquare .btQuoteBooking .ddChild ul li:before{box-shadow: 0 0 0 2px {$accentColor} inset;}
.btMenuFocusElementDash .btQuoteBooking .ddChild ul li:before{background-color: {$accentColor};}
.btQuoteBooking .ddChild ul li.hover{color: {$accentColor};}
.btQuoteBooking .ddChild ul li.selected:before{background: {$accentColor};}
.btQuoteBooking .btQuoteBookingForm .btQuoteTotal{
    background: {$accentColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea,
.btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea,
.btLightSkin .btDarkSkin .btLightSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{box-shadow: 0 3px 20px rgba(34,34,34,.2),0 0 0 2px {$accentColor} inset;}
.btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError input,
.btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea,
.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea,
.btDarkSkin.btLightSkin .btDarkSkin .btQuoteBooking .btContactFieldMandatory.btContactFieldError textarea{box-shadow: 0 3px 20px rgba(0,0,0,.2),0 0 0 2px {$accentColor} inset;}
.btQuoteBooking .btSubmitMessage{color: {$accentColor};}
.btQuoteBooking .btContactSubmit{
    background-image: linear-gradient(to right,{$accentColor} 51%,{$alternateColor} 100%);
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
.btQuoteBooking .bt_cc_email_confirmation_container [type=\"checkbox\"]:not(:checked) + label:after,
.btQuoteBooking .bt_cc_email_confirmation_container [type=\"checkbox\"]:checked + label:after{
    background: {$accentColor};}
.btDatePicker .ui-datepicker-header{
    background-color: {$accentColor};
    font-family: \"{$headingFont}\",Arial,Helvetica,sans-serif;}
.btDatePicker table.ui-datepicker-calendar td.ui-datepicker-today a{background: {$alternateColor};}
.btDatePicker table.ui-datepicker-calendar td a.ui-state-active{
    background: {$accentColor};}
.wp-block-button__link{
    font-family: \"{$buttonFont}\",Arial,Helvetica,sans-serif;}
", array() );