<?php
/*
Plugin Name: Tweet It
Version: 0.0.0
Plugin URI: http://justinchick.com
Description: A Wordpress plugin to make it easier for your readers to tweet your content
Author: Justin Chick
Author URI: http://justinchick.com
License: WTFPL
License URI: http://www.wtfpl.net/
*/


class tweet_it {
	function __construct(){
		add_shortcode( 'tweet', array( 'tweet_it', 'tweet_func' ) );
	}

	function tweet_func( $atts, $content = null ){
		$post_id = $post->ID;
		$permalink = get_permalink( $post_id );
		$the_tweet = ucfirst( strip_tags( $tweet_content ) );
	}
}