<?php
/*
Title:Listing Type
Post Type: listing
Priority: high
*/
piklist ('field', array(
	'type' => 'radio'
	,'field' => 'listing_type'
	,'label' =>__('Type','simple-dir')
	,'value' =>'organization'
	,'attributes' => array(
		'class' =>'text'
	)
	,'choices' => array(
	'individual' => __('Individual','simple-dir')
	,'organization' => __('Organization')
	)
	));

piklist ('field', array(
		'type' => 'text'
		,'field' =>'listing_ind_org'
		,'label' => __('Organization','simple-dir')
    ,'help'   => __('The organization that the individual works for or is associated with.','simple-dir')
		,'attributes' => array(
			'class' => 'text'
			)
		,'conditions' => array(
		array(
			'field' => 'listing_type'
			,'value' =>'individual'
			))
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
			));
piklist ('field' ,array(
		'type' =>'text'
		,'field' =>'listing_ind_title'
		,'label' =>__('Title','simple-dir')
    ,'help'   => __('The individual\'s title or job description within the organization.','simple-dir')
		,'attributes'=>array(
			'class' =>'text'
			)
		,'conditions' => array(
			array(
				'field' => 'listing_type'
				,'value' =>'individual'
				))
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));
