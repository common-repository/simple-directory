<?php
//Custom Div id for single listing
function sdir_single_id(){
  $s = get_option('simple_directory_settings');
  $listing_id = $s['single_parent_id'];
  if(isset($listing_id) && $listing_id != ''){
    echo $listing_id;
  }
  else {echo '';}
}

// Custom div class for single listing
function sdir_single_class(){
  $s = get_option('simple_directory_settings');
  $listing_class = $s['single_parent_class'];
  if(isset($listing_class) && $listing_class !=''){
    echo $listing_class;
  }
  else {echo '';}
}

//Custom div id for category pages
function sdir_archive_id(){
  $s = get_option('simple_directory_settings');
  $listing_id = $s['archive_parent_id'];
  if(isset($listing_id) && $listing_id != ''){
    echo $listing_id;
  }
  else {echo '';}
}

//Custom div class for category pages
function sdir_archive_class(){
  $s = get_option('simple_directory_settings');
  $listing_class = $s['archive_parent_class'];
  if(isset($listing_class) && $listing_class !=''){
    echo $listing_class;
  }
  else {echo '';}
}

function sdir_logo_class(){
  if(has_post_thumbnail()) {echo 'medium-2 hide-for-small-down columns';}
  if(!has_post_thumbnail()){ echo  'hidden';}
}
function sdir_title_class(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(!has_post_thumbnail()  && empty($m['listing_street_address'][0])){  echo 'small-12 columns';}
  if(has_post_thumbnail() && empty($m['listing_street_address'][0])){echo 'small-12 medium-8 columns';}
  if(!has_post_thumbnail() && !empty($m['listing_street_address'][0])){echo'small-12 medium-8 columns';}
  if(has_post_thumbnail() && !empty($m['listing_street_address'][0])) {echo'small-12 medium-6 columns';}
}

function sdir_title_on_cat_class(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(has_post_thumbnail()){echo 'small-10 columns';}
  else {echo 'small-12 columns';}
}
function sdir_map_class(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(empty($m['listing_street_address'][0])){echo 'hidden';}
  if(!has_post_thumbnail() && !empty($m['listing_street_address'][0])) {echo 'medium-4 columns hide-for-small-down';}
  if(has_post_thumbnail() && !empty($m['listing_street_address'][0])) {echo 'medium-4 columns hide-for-small-down';}

}


 ?>
