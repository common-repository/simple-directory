<?php
/*
*Header functions for single listing pages
*/

function sdir_search_listing_header(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  ?>
  <div class=" listing-header">
    <div class="row">
      <div class="small-12 columns">

<div class="<?php sdir_logo_class();?>">
<?php echo get_the_post_thumbnail();?>
</div><!-- END logo -->
<div class="<?php sdir_title_class();?>">
<?php //$m = get_post_meta($post);
if($m['listing_status'][0] == 'basic'){
  the_title('<span itemprop="name"><h1 class="search-listing-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">','</a></h1></span>');
}
else{
  the_title('<span itemprop="name"><h1 class="search-listing-title"><a href="'.esc_url(get_permalink()).'" rel="bookmark">','&nbsp;<i class="fi-star"></i></a></h1></span>');
}?>
<?php sdir_address_output();?>
<?php sdir_job_info();?>
</div>
<div class="<?php sdir_map_class();?>">
	<?php sdir_embedded_map();?>
</div><!--END MAP-->
</div>
<div class="row">
<div class="small-12 columns">
  <div class="small-12 columns">


<div class="expanded button-group show-for-medium ">
  <?php

  sdir_full_link_bar();
  ?>

</div>
<div class="stacked button-group show-for-small-only ">
  <?php sdir_mobile_link_bar();?>
</div>
</div>
  </div>
</div><!--END TITLE -->





</div>

  </div><!-- END .listing-header-->

<?php

}
