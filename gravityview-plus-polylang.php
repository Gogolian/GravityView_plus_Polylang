<?php
/**
 * @package GravityView_plus_Polylang
 * @version 1.6
 */
/*
Plugin Name: GravityView Polylang labels
Plugin URI: https://kamilwezyk.pl/
Description: This is extreamly simple plugin to enable translations of GravityView Labels.
Author: Kamil Wężyk
Version: 0.9
Author URI: https://kamilwezyk.pl/
Text Domain: gravityview-plus-polylang
*/

add_filter( 'gravityview/template/field/label', 'gravityview_plus_polylang_function', 10, 1 );
function gravityview_plus_polylang_function( $label )
{
    return pll__($label);
}
