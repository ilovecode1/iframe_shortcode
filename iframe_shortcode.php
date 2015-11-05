<?php
/* 
Plugin Name: iframe_shortcode
Description: Add Iframes with Shortcodes.
Version: 1.0.0
Author: Cosmic Web Services
Author URI: http://cosmicsearch.org
*/

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

function addAlert() { ?>
<script type="text/javascript">
$j = jQuery;
$j().ready(function(){
	$j('.wrap > h2').parent().prev().after('<div class="update-nag">Thanks so much for installing! Add [iframe src=¨website url¨ error=¨add error text¨]</div>');
});
</script>
<?php } add_action('admin_head','addAlert');
