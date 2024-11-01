<?php

//Search Box Shortcode
function simple_dir_search_shortcode( $form ) {

     $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    
    <input type="search" placeholder="'.__("search listings...").'" value="' . get_search_query() . '" name="s" id="s" />
	<input type="hidden" name="post_type" value="listings" />
    <input type="submit" id="searchsubmit" value="'.__('Search Listings').'" />
    </form>';

    return $form;
}

add_shortcode('listing_search', 'simple_dir_search_shortcode');
