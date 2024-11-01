<?php
/*
Title: Contact Information
Post Type: listing
*/
//The Website
piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_website_url',
	'label' => __('Website URL','simple-dir'),
	'description' =>__('The address of your website, <strong>without the http://</strong>','simple-dir'),
	'attributes' => array(
		'class' =>'text')


));
//The email address for this listing
piklist ('field', array(
	'type'         => 'email',
	'field'        => 'listing_email',
	'label'        => __('Email Address','simple-dir'),
	'attributes'   => array(
		'class'      => 'text'
  )
  ,'sanitize'     => array(
    array(
      'type'      => 'email'
    )
  )

));

//The primary phone number

piklist ('field', array(
	'type'           => 'tel',
	'field'          => 'listing_phone_1',
	'label'          => __('Telephone Number','simple-dir'),
	'description'    => __('Primary Telephone Number','simple-dir'),
	'attributes'     => array(
		'class' =>'text'
	)


));

//The secondary phone Number

piklist ('field', array(
	'type'         => 'text',
	'field'        => 'listing_phone_2',
	'label'        => __('Telephone Number','simple-dir'),
	'description'  => __('Other Telephone Number','simple-dir'),
	'attributes'   => array(
		'class'      =>'text'
	)

));

//A custom label for the secondary phone Number
piklist ('field', array(
	'type'         => 'text'
	,'field'       =>'phone_2_label'
	,'label'       => __('Label for Other Phone Number','simple-dir')
	,'help'        =>__('Enter the label you want displayed with the other phone number.  Examples are \'mobile\' or \'toll free\'.','simple-dir')
	,'sanitize'      => array(
		array(
		'type' => 'text_field'
		))
		));




 ?>
