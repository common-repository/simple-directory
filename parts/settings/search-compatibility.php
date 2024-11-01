<?php
/*
Title: Search Results Pages
Setting: simple_directory_settings
Tab: Layout
Sub Tab: Search Results
Order: 2
Flow: SDIR Workflow
*/
piklist('field',array(
  'type'      => 'html'
  ,'field'    => 'sdir_search_settings_description'
  ,'value'  => sprintf(__('Use these settings to adjust the appearance of the search results pages.'))
));
piklist('field',array(
  'type'=>'select'
  ,'field'=>'sdir_search_title_size'
  ,'label'=>__('Search Results Title Font Size')
  ,'choices'=>array(
    '1.0'=>'1.0 rem'
    ,'1.25'=>'1.25 rem'
    ,'1.5'=>'1.5 rem'
    ,'1.75'=>'1.75 rem'
    ,'2.0'=>'2.0 rem'
    ,'2.25'=>'2.25 rem'
    ,'2.5'=> '2.5 rem'
  )
  ,'value'=>'1.75'
));


piklist ('field', array(
 'type' => 'select'
 ,'field'=>'sdir_search_show_sidebar'
 ,'label'=>__('Show Theme Sidebar on Search Results Page?','simple-dir')
 ,'attributes' => array(
   'class' => 'text'
   )
 ,'choices' =>array(
   'yes' => 'Yes'
   ,'no' => 'No'
   )
   ));

piklist('field',array(
  'type'=>'text'
  ,'field'=>'sdir_search_results_width'
  ,'label'=>__('Set Content Width','simple-dir')
  ,'description'=>__('Set the desired with of the content in px, percent or em.','simple-dir')
  ,'help'=>__('If the content on your single listings and category pages doesn\'t look right, or your sidebar isn\'t displaying properly, setting a value here can help.','simple-dir')
));


piklist('field',array(
  'type'=>'group'
  ,'field' => 'sdir_search_results_padding'
  ,'label'=> __('Set Content Padding','simple-dir')
  ,'help' =>__('Improve the appearance of the listings on your site by setting the padding around the content.','simple-dir')
  ,'description'=>__('Enter a number in px. Do not include\'px\'','simple-dir')
  ,'attributes' =>array(
    'class'=>'text'
  )
  ,'fields'   =>array(
    array(
    'type'      => 'text'
    ,'field'    => 'sdir_search_padding_top'
    ,'label'    => __('Top','simple-dir')
    ,'columns'  => 2
  )
  ,array(
    'type'      => 'text'
    ,'field'    => 'sdir_search_padding_right'
    ,'label'    => __('Left','simple-dir')
    ,'columns'  => 2
  )
  ,array(
    'type'      =>'text'
    ,'field'    =>'sdir_search_padding_bottom'
    ,'label'    =>__('Bottom','simple-dir')
    ,'columns'  =>2
  )
  ,array(
    'type'      => 'text'
    ,'field'    => 'sdir_search_padding_left'
    ,'label'    => __('Left','simple-dir')
    ,'columns'  => 2
  )
  )
));


piklist('field',array(
  'type'=>'text'
  ,'field'=>'sdir_search_results_parent_id'
  ,'label'=>__('Custom DIV id','simple-dir')
  ,'description' =>__('Set the ID of the top-level &lt;div&gt; on the single listing and category pages.','simple-dir')
  ,'help' =>__('This may help if your content is not displaying as expected under the header.','simple-dir')
  ,'value'=>'primary'
));

piklist('field',array(
  'type' =>'text'
  ,'field'=>'sdir_search_results_parent_class'
  ,'label' =>__('Single Listing DIV class','simple-dir')
  ,'description' =>__('Add a class to the top-level &lt;div&gt; on the category pages.','simple-dir')
  ,'help' =>__('This is not always necessary, but it can help with appearance and customization.','simple-dir'  )
));
