<?php
/*
Title: Depricated Settings
Setting: simple_directory_settings
Order: 2
Tab: Settings
Sub Tab: Depricated

Flow: SDIR Workflow

*/

piklist('field', array(
  'type' => 'textarea'
  ,'field' => 'listing_custom_css'
  ,'label' => __('Custom CSS','simple-dir')
,'help' => __('You can customize the appearance of your listings and archive pages with your own CSS.','simple-dir')
  ,'value' => ''
  ,'attributes' => array(
    'rows' => 10
    ,'cols' => 50
    ,'class' => 'large-text code'
  )
));
