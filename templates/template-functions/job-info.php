<?php

function sdir_job_info(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
 if(isset($m['listing_type'][0]) && $m['listing_type'][0] == 'individual') {
    if(isset($m['listing_ind_title'][0])){
    echo'<span itemprop="jobTitle">' . $m['listing_ind_title'][0] .'</span><br/>';
  }

    if(isset($m['listing_ind_org'][0])) {
    echo '<span itemprop="worksFor"><strong>' .  $m['listing_ind_org'][0] . '</strong></span>' ;
    }
  }

}

 ?>
