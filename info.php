<?php
/*
 *  @template       Office503 using twig
 *  @version        see info.php of this template
 *  @author         Gerard Smelt
 *  @copyright      2010-2014 Contracthulp B.V.
 *  @license        see info.php of this template
 *  @platform       see info.php of this template
 */

// include class.secure.php to protect this file and the whole CMS!
if ( defined( 'LEPTON_PATH' ) ) {
  include( LEPTON_PATH . '/framework/class.secure.php' );
} else {
  $oneback = "../";
  $root = $oneback;
  $level = 1;
  while ( ( $level < 10 ) && ( !file_exists( $root . '/framework/class.secure.php' ) ) ) {
    $root .= $oneback;
    $level += 1;
    } 
  if ( file_exists( $root . '/framework/class.secure.php' ) ) {
    include( $root . '/framework/class.secure.php' );
  } else {
    trigger_error( sprintf( "[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER[ 'SCRIPT_NAME' ] ), E_USER_ERROR );
  }
}
// end include class.secure.php

// OBLIGATORY VARIABLES
$template_directory = 'office503';
$template_name = 'office503';
$template_function = 'template';
$template_version  = '0.1.0';
$template_platform = 'Lepton 2.0';
$template_author = 'gerard smelt';
$template_license = 'All rights reserved';
$template_license_terms = 'All rights reserved';
$template_description = 'Standard Contracthulp 503 Template';
$template_guid = '4DB498AD-D5A6-48D5-BB5D-EC09391F2349';

// some specific droplets are used 

// OPTIONAL VARIABLES
 $menu[1]	= 'Main';
 $menu[2]	= 'Foot';
 $menu[3]	= 'Pseudomenu';
 $block[1]	= 'Content1';
 $block[2]	= 'Content2';
 $block[3]	= 'ContentA';
 $block[4]	= 'ContentB';
 $block[5]	= 'ContentC';
 $block[6]	= 'ContentD';
?>