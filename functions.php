<?php

/**
 * START VERSION REMOVAL
 * (It's a bad idea to tell bots if your WP version is out of date)
 * From: https://digwp.com/2009/07/remove-wordpress-version-number/
 */

// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function vigilant_remove_version_scripts_styles($src) {
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter('style_loader_src', 'vigilant_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'vigilant_remove_version_scripts_styles', 9999);

/**
 * END VERSION REMOVAL
 */