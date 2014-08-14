<?php
/*
Plugin Name: WP-Mibbit
Plugin URI: https://github.com/xnite/wp-mibbit
Description: Allows you to embed a Mibbit IRC client with a shortcode.
Version: 1.0
Author: Robert Whitney &lt;<a href="mailto:xnite@xnite.org">xnite@xnite.org</a>&gt;
Author URI: http://xnite.org
License: http://xnite.org/copyright#code
*/

function mibbit_embed_func($atts) {
	extract(shortcode_atts(array(
		'width'		=> '95%',
		'height'	=> '450px',
		'settings'	=> '',
		'server'	=> 'irc.afraidirc.net',
		'channel'	=> '#lobby'
	), $atts));
	return '<iframe style="width:'.$width.';height:'.$height.';border:0;" src="https://widget.mibbit.com/?settings='.$settings.'&server='.$server.'&channel='.urlencode($channel).'"></iframe>';
}
add_shortcode('mibbit', 'mibbit_embed_func');
?>