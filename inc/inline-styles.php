<?php
//Inject Custom CSS from settings





add_action( 'wp_head', 'simple_directory_custom_styles' );

function simple_directory_custom_styles() {

if(!is_tax('listing_category') || 'listing'!=get_post_type()){
  return;
}
else{
 $s = get_option('simple_directory_settings');
$css_start = '<style type="text/css" id="sdir-custom-css" media="all">';
$css_end  ='</style>'. "\r\n";

 //The Custom CSS
 if(isset($s['listing_custom_css']) && !empty($s['listing_custom_css'])){
$custom_css = $s['listing_custom_css'];
}
else{$custom_css = '';}

//Template-Specific
//Single Listings

  //Page Width
  if(isset($s['single_listing_width']) && $s['single_listing_width'] !=''){
    $single_width = 'width:'. $s['single_listing_width'] .'!important;';

  }
  else {$single_width ='';}


//Padding
(isset($s['single_content_padding'][0]))? $padding = unserialize($s['single_content_padding'][0]):'';
(isset($padding['sdir_single_padding_top']))? $padding_top = 'padding-top:'.$padding['sdir_single_padding_top'].'px!important;':$padding_top ='';
(isset($padding['sdir_single_padding_right']))? $padding_right = 'padding-right:'.$padding['sdir_single_padding_right'].'px!important;':$padding_right ='';
(isset($padding['sdir_single_padding_bottom']))? $padding_bottom = 'padding-bottom:'. $padding['sdir_single_padding_bottom'].'px!important;':$padding_bottom = '';

(isset($padding['sdir_single_padding_left']))? $padding_left = 'padding-left:'.$padding['sdir_single_padding_left'].'px!important;':$padding_left ='';

//Title Size
if(isset($s['sdir_single_list_title_size'])){
  $single_listing_title = '.single-title{font-size:'.$s['sdir_single_list_title_size'].'rem!important;}';
}
else{$single_listing_title = '';}


//CATEGORY pages

if(isset($s['archive_listing_width']) && $s['archive_listing_width'] !=''){
  $archive_width = 'width:'. $s['archive_listing_width'] .'!important;';

}
else {$archive_width ='';}

if(isset($s['archive_content_padding'])){ $a_padding = unserialize($s['archive_content_padding'][0]);
}
else {return null;}

(isset($a_padding['sdir_category_padding_top']))? $a_padding_top = 'padding-top:'.$a_padding['sdir_category_padding_top'].'px!important;':$a_padding_top = '';
(isset($a_padding['sdir_category_padding_right']))? $a_padding_right = 'padding-right:'.$a_padding['sdir_category_padding_right'].'px!important;':$a_padding_right = '';
(isset($a_padding['sdir_category_padding_bottom']))? $a_padding_bottom = 'padding-bottom:'.$a_padding['sdir_category_padding_bottom'].'px!important;':$a_padding_bottom = '';

(isset($a_padding['sdir_category_padding_left']))? $a_padding_left = 'padding-left:'.$a_padding['sdir_category_padding_left'].'px!important;':$a_padding_left = '';


//Title Size
if(isset($s['sdir_archive_list_title_size'])){
  $archive_listing_title = '.category-listing-title {font-size:'.$s['sdir_archive_list_title_size'].'rem!important;}';
}
else{$archive_listing_title ='';}


//Search Results


//Width
if(isset($s['sdir_search_results_width']) && $s['sdir_search_results_width'] !=''){
  $search_width = 'width:'.$s['sdir_search_results_width']. '!important;';
}
else {
  $search_width = '';
}

//Padding
(isset($s['sdir_search_results_padding']))? $s_padding = unserialize($s['sdir_search_results_padding'][0]):'';
(isset($s_padding['sdir_search_padding_top']))? $s_padding_top = 'padding-top:'.$s_padding['sdir_search_padding_top'].'px!important;':$s_padding_top = '';
(isset($s_padding['sdir_search_padding_right']))? $s_padding_right = 'padding-right:'.$s_padding['sdir_search_padding_right'].'px!important;':$s_padding_right='';
(isset($s_padding['sdir_search_padding_bottom']))? $s_padding_bottom = 'padding-bottom:'.$s_padding['sdir_search_padding_bottom'].'px!important;':$s_padding_bottom = '';

(isset($s_padding['sdir_search_padding_left']))? $s_padding_left = 'padding-left:'.$s_padding['sdir_search_padding_left'].'px!important;':$s_padding_left='';

//Title
if(isset($s['sdir_search_title_size'])){
  $search_page_title = '.search-listing-title {font-size:'.$s['sdir_search_title_size'].'rem!important;}';
}
else {$search_page_title ='';}
//The Output
echo $css_start;
echo $custom_css;


echo $single_listing_title;

echo $search_page_title;

  echo $archive_listing_title;
echo '@media screen and (min-width:61.5625em){';
  echo '.single-listing-content {'.$single_width.$padding_top.$padding_right.$padding_bottom.$padding_left.'}';
  echo '.archive-listing {'.$archive_width.$a_padding_top.$a_padding_right.$a_padding_bottom.$a_padding_left.'}';
echo '.search-listing {'.$search_width.$s_padding_top.$s_padding_right.$s_padding_bottom.$s_padding_left.'}';
echo '}';
echo $css_end;
}
}
