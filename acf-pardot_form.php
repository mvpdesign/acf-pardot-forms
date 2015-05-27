<?php

/*
Plugin Name: Advanced Custom Fields: Pardot Form
Plugin URI: https://github.com/mvpdesign/acf-pardot-forms
Description: Add pardot forms to ACF...
Version: 1.0.0
Author: Adrian Gonzales & Chris Wilson
Author URI: http://adgodev.com/ & http://github.com/heychris
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// NOTE: Adrian's version doesn't work but the pardot API info was taken from his version
// https://github.com/adriangonzales/acf-pardot-forms



// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-pardot_form', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_pardot_form( $version ) {

	include_once('acf-pardot_form-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_pardot_form');



?>
