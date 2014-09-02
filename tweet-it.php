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