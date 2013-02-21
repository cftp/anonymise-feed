<?php
/*
Plugin Name: Anonymise feeds
Plugin URI: http://codeforthepeople.com
Description: Removes the author names from the feeds in your site, replacing them with the title of the site.
Author: Simon Dickson
Author URI: http://codeforthepeople.com.com/
Version: 1.0
*/

function pbox_filter_creator( $author ) {
if ( !is_feed() ) {
		return $author;
	} else {
		global $post;
		$author = get_bloginfo_rss('title');
		// $author .= ' (userid #' . $post->post_author . ')';
		return $author;
	}
}
add_filter('the_author','pbox_filter_creator');
