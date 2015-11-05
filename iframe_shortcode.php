<?php
/* 
Plugin Name: iframe_shortcode
Description: Add Iframes with Shortcodes.
Version: 1.0.0
Author: Cosmic Web Services
Author URI: http://cosmicsearch.org

function iframe_shortcode( $atts , $content = null ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'src' => 'http://cosmicsearch.org',
			'error' => 'Sorry Iframes are not supported with your browser.',
		), $atts )
	);

	// Code
return ´<iframe src=¨´ . $src .´¨>´ . $error . ´</iframe>´;
}
add_shortcode( '[iframe]', 'iframe_shortcode' );
