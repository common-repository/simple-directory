<?php
/*
*Create The Settings
*/
//Create The Settings Page
  add_filter('piklist_admin_pages', 'simple_directory_setting_pages');
  function simple_directory_setting_pages($pages)
  {
     $pages[] = array(
      'page_title' => __('Simple Directory Settings')
      ,'menu_title' => __('Settings', 'piklist')
      ,'sub_menu' => 'edit.php?post_type=listing'
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'sdir-settings'
      ,'setting' => 'simple_directory_settings'
      ,'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png')
      ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
      ,'single_line' => true
      ,'default_tab' => 'Settings'
      ,'save_text' => 'Save  Settings'
    );
		return $pages;
  }

//add_filter('piklist_admin_pages','simple_directory_guide_page');
  function simple_directory_guide_page($pages){


    $pages[] = array(
      'page_title' => __('Welcome To Simple Directory', 'simple-dir')
      ,'menu_title' => 'About'
		,'sub_menu' => 'edit.php?post_type=listing'
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'simple-directory-guide'
      ,'single_line' => false
      ,'menu_icon' => plugins_url('piklist/parts/img/piklist-menu-icon.svg')
      ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
    );
	return $pages;
	}
//Create link from plugins pages
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'add_action_links' );

function add_action_links ( $links ) {
 $mylinks = array(
 '<a href="' . admin_url( 'page=sdir-settings' ) . '">Settings</a>',
 );
return array_merge( $links, $mylinks );
}

 ?>
