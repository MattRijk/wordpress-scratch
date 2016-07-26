<?php


//* Register front page widget area
genesis_register_sidebar( array(
	'id'            => 'home-welcome',
	'name'          => __( 'Home Welcome', 'scratch' ),
	'description'   => __( 'This is a home widget area that will show on the front page', 'themename' ),
) );


genesis_register_sidebar( array(
	'id'            => 'call-to-action',
	'name'          => __( 'Call to Action', 'scratch' ),
	'description'   => __( 'This is a call-to-action widget area that will show on the front page', 'scratch' ),
) );