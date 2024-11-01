<?php
/**
 * Plugin Name: Simple Directory Plugin
 * Plugin URI: http://contexta.ca/simple-directory/
 * Description: Creates a very simple business listing post type.
 * Version:2.1.2
 * Author: michaellautman
 * Author URI: http://contexta.ca
 * Plugin Type: Piklist
 * Text Domain: simple-dir
 * Domain Path: /lang

 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *

 * @license http://www.gnu.org/licenses/old-licenses/gpl-3.0.html
 */

//Set The Version

	define('SDIR_PLUGIN_URL', untrailingslashit(plugins_url('', __FILE__)));

	global $sdir_version;

	 $sdir_version = '2.1.1';

	  if (!defined('SDIR_VERSION_KEY'))
	      define('SDIR_VERSION_KEY', 'sdir_version');

	  if (!defined('SDIR_VERSION_NUM'))
	      define('SDIR_VERSION_NUM', '1.0.0');


	  add_option(SDIR_VERSION_KEY, SDIR_VERSION_NUM);
	  global $sdir_current_version;
	  $sdir_current_version = get_option(SDIR_VERSION_NUM);
		if ($sdir_version != $sdir_current_version){

		update_option('SDIR_VERSION_NUM',$sdir_version);
		 }

//Check For Piklist
add_action('init', 'sdir_init_piklist');
function sdir_init_piklist(){
  if(is_admin()){
   include_once('inc/class-piklist-checker.php');

   if (!piklist_checker::check(__FILE__)){
     return;
   }
  }
}
//Create The Listings
include_once('inc/create-listing.php');
//Create The Settings
include_once('inc/create-settings.php');
//Load The Styles
include_once('inc/enqueue-styles.php');
include_once('inc/inline-styles.php');

//Load Template Parts
include_once('templates/template-creator.php');
//Add image field to listing categories
include_once('inc/category-images.php');
//Allow HTML in category descriptions
include_once('inc/html-in-categories.php');
//Shortcodes
include_once('inc/shortcodes.php');
//Advanced Search
include_once('inc/advanced-search.php');




//Load The Templates
$s = get_option('simple_directory_settings');
$t = $s['sdir_disable_templates'];

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( !is_plugin_active( 'simple-directory-pro/simple-directory-pro.php' ) ) {

if(!in_array('single', $t)){
add_filter( 'template_include', 'sdir_load_single_template' );
}

if(!in_array('category',$t)){
add_filter('template_include','sdir_load_category_template');
}

if(!in_array('search',$t)){
add_filter('template_include','sdir_load_search_template');
}

function sdir_load_single_template( $template )
{
 if ( 'listing' === get_post_type() && is_single() )
 return dirname( __FILE__ ) . '/templates/single-new.php';
 return $template;
 }
 function sdir_load_category_template($template)
 {
	if ( 'listing' === get_post_type() && is_archive())
		return dirname(__FILE__) . '/templates/archive-listing.php';
	return $template;
}

function sdir_load_search_template($template)
{
		if('listing'=== get_post_type()&& is_search())
		return dirname(__FILE__).'/templates/search-listing.php';
 return $template;
}
}

 ?>
