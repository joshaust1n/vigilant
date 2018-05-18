<?php
/**
 * Name: Vigilant
 * Description: A WordPress Theme with an emphasis on mobile usability
 * License: MIT
 * Author: Josh Austin
 * Author URI: https://twitter.com/joshaust1n
 */

get_header();
if ( have_posts() ) {
    while( have_posts() ) {
        the_post();
        get_template_part('page');
    }
} else {
    get_template_part('error');
}
get_footer();