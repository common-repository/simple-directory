<?php
function sdir_social_block(){
  global $wp_query;
	$postid = $wp_query->post->ID;
	$m = get_post_meta($postid);
  if (isset($m['listing_status'][0]) && $m['listing_status'][0] =='premium'){
    echo '<div id="social-block" class="row"><div class="small-12 columns">';
	if(isset($m['listing_email'][0]) && $m['listing_email'][0] != ''){
		echo '<a href="mailto:'.$m['listing_email'][0].'"><i class="fi-mail icon-medium sdir-icon"></i></a>&nbsp;';	}
 if(isset($m['listing_facebook'][0]) && $m['listing_facebook'][0] != '') {
 echo '<a href="'. $m['listing_facebook'][0] .'" target="_blank" rel="nofollow"> <i class="fi-social-facebook icon-medium sdir-icon"></i></a>&nbsp;'; }
 if(isset($m['listing_twitter'][0]) && $m['listing_twitter'][0] !=''){
 echo '<a href="http://twitter.com/'.$m['listing_twitter'][0].'" rel="nofollow" target="_blank"><i class="fi-social-twitter icon-medium sdir-icon"></i></a>&nbsp;'; }
if(isset($m['listing_gplus'][0])&& $m['listing_gplus'][0] != '') {
	echo '<a href="' . $m['listing_gplus'][0] .'" rel="nofollow" target="_blank"><i class="fi-social-google-plus icon-medium sdir-icon"></i></a>&nbsp;'; }
if(isset($m['listing_linkedin'][0]) && $m['listing_linkedin'][0] !='') {
echo '<a href="'. $m['listing_linkedin'][0] . '" rel="nofollow" target="_blank"><i class="fi-social-linkedin icon-medium sdir-icon"></i></a>&nbsp;'; }
if(isset($m['listing_youtube'][0]) && $m['listing_youtube'][0] !='') {
	echo '<a href="'. $m['listing_youtube'][0] .'" rel="nofollow" target="_blank"><i class="fi-social-youtube icon-medium sdir-icon"></i></a>&nbsp;'; }
if(isset($m['listing_instagram'][0]) && $m['listing_instagram'][0] !='') {
	echo '<a href="http://instagram.com/'. $m['listing_instagram'][0] .'" rel="nofollow" target="_blank"><i class="fi-social-instagram icon-medium sdir-icon"></i></a>&nbsp;'; }
if(isset($m['listing_pinterest'][0])&& $m['listing_pinterest'][0] !='') { echo '<a href="' . $m['listing_pinterest'][0] .'" rel="nofollow" target="_blank"><i class="fi-social-pinterest icon-medium sdir-icon"></i></a>&nbsp;'; }
 if(isset($m['listing_rss'][0]) && $m['listing_rss'][0] !='') { echo '<a href="' . $m['listing_rss'][0] .'" rel="nofollow" target="_blank"><i class="fi-rss icon-medium sdir-icon"></i></a>&nbsp;'; }
 echo '</div></div>';
}
else {echo '';}
}





 ?>
