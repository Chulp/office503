<?php
/*
 *  @template   Office503 using twig
 *  @version  see info.php of this template
 *  @author   Gerard Smelt
 *  @copyright  2010-2016 Contracthulp B.V.
 *  @license  see info.php of this template
 *  @platform  see info.php of this template
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
$template_version  = '1.0.0';
$template_platform = 'Lepton 2.1.0'; //tested on this platform
$template_author = 'gerard smelt';
$template_license = 'GNU General Public License v2 or later';
$template_license_terms = 'Available as is, no support';
$template_description = 'Based on Design by http://themegrill.com/ transferred to standard Contracthulp 503 Template';
$template_guid = 'A25A0D38-9B1D-4CEF-BC4A-A1F8C565BE9E';

// some specific droplets are used 
// 

// OPTIONAL VARIABLES
  $menu[1] = 'Main';  // main menu in header
  $menu[2] = 'Foot'; // menu in the footer
  $menu[3] = 'Pseudomenu'; // menu provided in some page layouts

  $block[1] = 'Content1'; // main section
  $block[2] = 'Content2'; // section for side column
  $block[3] = 'Content3'; // left column on start page
  $block[4] = 'Content4'; // right column on start page
  $block[5] = 'Content5'; // last page wide column on start page
  $block[6] = 'Content0'; // illustration section on start page
?>