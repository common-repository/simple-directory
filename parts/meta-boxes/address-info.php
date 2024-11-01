<?php
/*
* Title: Address Information
* Post Type: listing
*/


piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_street_address',
	'label'=> __('Street Address','simple-dir'),
	'description' => __('Street Address','simple-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_city',
	'label'=> __('City','simple-dir'),
	'description' => __('City','simple-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_state',
	'label'=> __('State/Province','simple-dir'),
	'description' => '',
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_country',
	'label'=> __('Country','simple-dir'),
	'description' => '',
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_postalcode',
	'label'=> __('ZIP/Postal Code','simple-dir'),
	'description' => '',
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));


 ?>
