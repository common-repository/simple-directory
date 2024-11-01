<?php
/*
Title: Welcome to Simple Directory
Setting: simple_directory_settings
Tab: About
Sub Tab: About Simple Directory
Order: 1
Flow: SDIR Workflow
Default: true
*/
?>

 <h4><?php _e('Version','simple-dir');?>: <?php $version = get_option('SDIR_VERSION_NUM');
     echo $version;?></h4>

<h3><?php _e('Quick Start Guide','simple-dir');?></h3>

  <ol>
    <li>
      <?php _e('Create new listings by going to <strong>Listings->Add New</strong>.','simple-dir');?>
    </li>
    <li>
      <?php _e('Add a title and description.','simple-dir');?>
    </li>
    <li>
      <?php _e('Choose the listing level.  Listings can be either <strong>Basic</strong> or <strong>Premium</strong>.  Premium listings show more information, such as social media links.','simple-dir');?>
    </li>
    <li>
    <?php _e('Add contact information, and a physical address (if available).  If you enter an address, the listing will feature a Google Map of the location, as well as a  "Get Directions" link.  If you include a phone number, the listing will show a click-to-call link.','simple-dir');?>
    </li>
    <li>
      <?php _e('Add a logo using the <strong>Featured Image</strong> meta-box.','simple-dir');?>
    </li>
    <li>
      <?php _e('Add social media links.  These will appear below the title, website link and phone number for premium listings.','simple-dir');?>
    </li>
    <li>
      <?php _e('Add categories.  Categories are at the heart of how Simple Directory is organized.  Make sure each listing has at least one category.','simple-dir');?>
    </li>
  </ol>
  <h3><?php _e('Using Categories','simple-dir');?></h3>
  <p>
   <?php _e('When you create a category, you can add a title, slug, description AND an image.','simple-dir');?>
   <ul>
     <li>
      <strong><?php _e('Title:','simple-dir');?></strong> <?php _e('The title of your category page is displayed at the top of the page.  Choose titles that are brief and to the point - good for visitors and SEO.','simple-dir');?>
     </li>
     <li>
       <strong><?php _e('Slug:','simple-dir');?></strong><?php _e('If you don\'t enter a slug, WordPress will generate one automatically.  To improve useability and SEO, you can choose a custom slug for each category.','simple-dir' );?>
     </li>
     <li>
       <strong><?php _e('Description:','simple-dir');?></strong><?php _e('The description appears under the title when a category page is loaded.  This can be great for SEO, but make sure the description you write is useful for site visitors, and not spammy.  You can use HTML in the description to make it look good.','simple-dir');?>
     </li>
     <li>
       <strong><?php _e('Image:','simple-dir');?></strong><? _e('You can upload an image to display on category pages.','simple-dir');?>
     </li>
   </ul>
  </p>
<hr/>
 <?php
function sdir_sdp_promo(){
  echo '<div>';
  _e('<h2>Need More Features?</h2>','simple-dir');
  _e('<p><strong>Simple Directory Pro</strong> gives you more features and more control so you can take your directory site to new heights! </p>','simple-dir');
_e('<span class="dashicons-before dashicons-yes"></span> Bootstrap Templates<br/>','simple-dir');
_e('<span class="dashicons-before dashicons-clock"></span> Display business hours and OPEN NOW indicator','simple-dir');
  echo '</div>';
}

  if(!is_plugin_active('simple-directory-pro/simple-directory-pro.php')){
  sdir_sdp_promo();}
else {return;}


  ?>
