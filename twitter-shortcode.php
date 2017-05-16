<?php
/**
 * Plugin Name:     Twitter Shortcode
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          kurudrive
 * Author URI:      YOUR SITE HERE
 * Text Domain:     twitter-shortcode
 * Domain Path:     /languages
 * Version:         0.1.17
 *
 * @package         Twitter_Shortcode
 */

add_shortcode( 'twitter', 'twitter_shortcode' );

function twitter_shortcode( $p, $content ){
	$content = str_replace("@", '', $content);
	if ( !preg_match( "/^[0-9a-z_]{1,15}$/i", $content ) ){
		return;
	}

	return sprintf(
		'<a href="https://twitter.com/%s">@%s</a>',
		esc_attr( $content ),
		esc_html( $content )
		);
}