<?php
/*
Title: Listing Level
Post Type: listing
Context: side
Priority: high

*/

piklist('field', array(
	'type'        =>'select',
	'field'       =>'listing_status',
	'label'       =>__('Listing Level','simple-dir'),
  'help'        => __('Listings can be basic or premium.','simple-dir'),
	'attributes'   =>array(
		'class'      =>'text'
		),
	'value'        => 'basic',
	'choices'      =>array(
		'basic'      =>__('Basic','simple-dir')
		,'premium'    => __('Premium','simple-dir')
		)
		));
