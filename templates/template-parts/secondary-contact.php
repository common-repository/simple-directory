<?php
/*
*  Secondary Contact Information
*
*/

function sdir_secondary_contact(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  ?>
  <div class="row hide-for-small-down">
  	<div class="medium-6 columns">
  		<?php
  		(isset($m['phone_2_label'][0])) ? $phone_2_label = $m['phone_2_label'][0] : __('Other Phone','sdp');
  		if(isset($m['listing_phone_2'][0]) && $m['listing_phone_2'][0] != '' ){
  			echo '<strong>'.$phone_2_label.':</strong>&nbsp;';
  			echo '<span itemprop="telephone"><a href="tel:'.$m['listing_phone_2'][0].'">'. $m['listing_phone_2'][0] .'</a></span>';

  		}?>
  	</div>
  	<div class="medium-6 columns">
  		<?php
  		if(isset($m['listing_fax'][0]) && $m['listing_fax'][0] != ''){
  			echo '<span itemprop="faxNumber"><strong>'. __('Fax','sdp'). ':</strong>&nbsp;'. $m['listing_fax'][0].'</span>';
  		}
  		?>
  	</div>
  </div>


<?php }



 ?>
