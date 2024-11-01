<?php
add_action('wp_enqueue_scripts','sdir_styles');
function sdir_styles(){
  	wp_register_style( 'foundation', plugins_url('/css/foundation.css', dirname(__FILE__)), false, 'null','all' );
    wp_enqueue_style('foundation');
    wp_register_style('simple-directory-ficons', plugins_url('/icons/foundation-icons.css', dirname(__FILE__)),false, false);
    wp_enqueue_style ('simple-directory-ficons');
    wp_register_style('sdir',plugins_url('/css/style.css', dirname(__FILE__)), false, 'null', 'all');
    wp_enqueue_style('sdir');
}


 ?>
