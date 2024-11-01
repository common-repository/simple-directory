<?php

//Theme & Plugin Compatibility
function simple_directory_vc_compatibility(){
  $s = get_option('simple_directory_settings');
  if(isset($s['listing_vc_compatibility']) && $s['listing_vc_compatibility'] == 'yes'){
    echo '<div class="theme_page" style="visibility: hidden; padding: 0 !important; height: 0 !important;">
  	<div class="vc_row wpb_row vc_row-fluid"></div>
  </div>';
  }
  else { echo '';}
}


 ?>
