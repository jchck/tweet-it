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
		add_shortcode( 'tweet-it', array( 'tweet_it', 'tweet_func' ) );
	}

	function tweet_func( $atts, $content = null ){
		$post_id = $post->ID;
		$permalink = get_permalink( $post_id );
		$the_tweet = ucfirst( strip_tags( $tweet_content ) );

		$ret = '<span class="tweet-it">';
		$ret .= '<a href="https://twitter.com/intent/tweet?original_referer=' . urlencode($permalink) . '&source=tweetbutton&text=' . rawurlencode(($tweet_content)) . '&url=' . urlencode($permalink) .' >$tweet_content&thinsp;<i class="fa fa-twitter"></i>';
		$ret .= '</a>';
		$ret .= '<span class="sharebuttons">';
		$ret .= '<a href="https://twitter.com/intent/tweet?original_referer=' . urlencode($permalink) . '&source=tweetbutton&text=' . rawurlencode(($tweet_content)) . '&url=' . urlencode($permalink). '">TWEET';
		$ret .= '</a>';
		$ret .= '</span></span>';

		return $ret;
	}
}

$tweet_it = new tweet_it();

function tweet_it_scripts(){
	$plugin_dir = trailingslashit( get_bloginfo( wpurl ) ) . PLUGINDIR . '/' . dirname( plugin_basename( __FILE__ ) );

	if (! is_admin()){
		wp_enqueue_style( 'tweet-it-style', $plugin_dir . '/assets/styles.css', false, null );
		wp_enqueue_style( 'tweet-it-fa', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css', false, null );

		wp_enqueue_script( 'tweet-it-script', $plugin_dir . '/assets/scripts.js', 'jquert', null, true );
	}
}
add_action('wp_enqueue_scripts', 'tweet_it_scripts');