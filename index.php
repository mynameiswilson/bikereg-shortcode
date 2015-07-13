<?php
/*
Plugin Name: BikeReg Registration Form Shortcode
Plugin URI: http://github.com/mynameiswilson
Description: Simple plugin to allow BikeReg registration forms to be dropped into Wordpress posts
Version: 1.0
Author: Ben Wilson
Author URI: http://benwilson.org
License: CC Share-alike
*/

function bikereg_form_shortcode( $attributes, $event_id = null ) {
	extract( shortcode_atts( array(
		'class' => ''
	), $attributes ) );

	if (is_numeric($event_id)):
		return 	'<div class="'.$class.'" style="max-width:800px;margin:auto;" id="regWrapper"> '.
        		'<script src="https://www.bikereg.com/Scripts/athleteRegWidget.js"></script> '.
          		'<iframe src="https://www.bikereg.com/'.$event_id.'?if=1" style="height:100%;width:100%;border-radius:7px;" frameBorder="0" id="regFrame"></iframe> '.
          		'</div>';
	else:
		return false;
	endif;

}

add_shortcode('bikereg', 'bikereg_form_shortcode');

?>