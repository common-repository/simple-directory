<?php
/*
*
*  Generates Schema Markup for the Type of listing
*
*/

function sdir_listing_type(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(isset($m['listing_type'][0]) && $m['listing_type'][0] == 'individual') {
  echo  'Person';
}
else {
  echo 'LocalBusiness';
}
}
