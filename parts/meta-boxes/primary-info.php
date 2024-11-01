<?php
/*
Title: Primary Information
Post Type: listing
Priority: High
*/
//Is the listing for an individual or an organization?
piklist ('field', array(
	'type'           => 'radio'
	,'field'         => 'listing_type'
	,'label'         =>__('Type','simple-dir')
	,'value'         =>'organization'
	,'attributes'    => array(
		  'class'        =>'text'
	)
	,'choices'       => array(
	     'individual'   => __('Individual','simple-dir')
	    ,'organization' => __('Organization')
	)
	));

//For Individuals
//What organization are they a part of?
piklist ('field', array(
		'type'          => 'text'
		,'field'        =>'listing_ind_org'
		,'label'        => __('Organization','simple-dir')
    ,'help'         => __('What organization is this person a part of?','simple-dir')
		,'attributes'   => array(
			   'class' => 'text'
			)
		,'conditions'   => array(
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
      		'type'        =>'text'
      		,'field'      =>'listing_ind_title'
      		,'label'      =>__('Position/Title','simple-dir')
      		,'attributes' =>array(
      			'class' =>'text'
      			)
      		,'conditions' => array(
      			array(
      				'field'   => 'listing_type'
      				,'value'  =>'individual'
      				))
      		,'sanitize' => array(
            array(
              'type' => 'text_field'
            )
          )
      			));
 ?>
