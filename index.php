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
if ( defined( 'LEPTON_PATH' ) )
{
  include( LEPTON_PATH . '/framework/class.secure.php' );
} 
else
{
  $oneback = "../";
  $root = $oneback;
  $level  = 1;
  while ( ( $level < 10 ) && ( !file_exists( $root . '/framework/class.secure.php' ) ) )
  {
    $root .= $oneback;
    $level += 1;
  } 
  if ( file_exists( $root . '/framework/class.secure.php' ) )
  {
    include( $root . '/framework/class.secure.php' );
  } 
  else
  {
    trigger_error( sprintf( "[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER[ 'SCRIPT_NAME' ] ), E_USER_ERROR );
  }
}
// end include class.secure.php

//initialize twig template engine
global $parser, $loader;
if (!isset($parser)) { require_once( LEPTON_PATH."/modules/lib_twig/library.php" ); }

// prependpath to make sure, twig is looking in this module template folder first
$loader->prependPath( dirname(__FILE__)."/css/" );

//load classes
require_once (LEPTON_PATH."/modules/lib_twig/classes/class.twig_utilities.php");
$twig_util = new twig_utilities( $parser, $loader );
// End of template-engines settings.

// ----------------- edit cases depending on the pages ----------------- 
switch (PAGE_ID ) {
  case 1: 
    $template_name = "start.lte";
    break;
  case 100: 
    $template_name = "left_sidebar.lte";
    break;
  case 2: 
  case 3:  
    $template_name = "full_width.lte";
    break; 
  case 101: 
    $template_name = "no_sidebar_centered.lte";
    break;  
  default:
    $template_name = "right_sidebar.lte";
}
/*
 * All the fixed page_content is defined here...
 */
$page_content=array (
/* set standard parameters */
  'DEFAULT_CHARSET'=> defined('DEFAULT_CHARSET') ? DEFAULT_CHARSET : 'utf-8',
  'simplepagehead'=> $twig_util->capture_echo("simplepagehead();"),
  'page_title1'  => $twig_util->capture_echo("page_title();"),
  'page_title' => PAGE_TITLE, 
  'description' => $twig_util->capture_echo("page_description();"),
  'keywords' => $twig_util->capture_echo("page_keywords();"),
  'TEMPLATE_DIR' => TEMPLATE_DIR,
  'page_id' => PAGE_ID,
  'home_url' => LEPTON_URL,
  'viewport' => "<meta name='viewport' content='width=device-width, initial-scale=1'>",
  'meta_ie' => "<meta http-equiv='X-UA-Compatible' content='IE=EmulateIE7' />", 
  'ie6_no' => "<!--[if lte IE 6]><script type='text/javascript' charset='utf-8' src='" . TEMPLATE_DIR."/ie_js/ie6_no.js'></script><![endif]-->",
  'ie7_no' => "<!--[if lte IE 7]><script type='text/javascript' charset='utf-8' src='" . TEMPLATE_DIR."/ie_js/ie7_no.js'></script><![endif]-->", 
  'css_ie' => "<!--[if lte IE 8]><style type='text/css' media='all'>@import '".TEMPLATE_DIR."/css/css-ie.css'</style><![endif]-->",
/* include jquery core and migrate */ 
  'jquery' => "<script type='text/javascript' src='".LEPTON_URL."/modules/lib_jquery/jquery-core/jquery-core.min.js' ></script>",
  'migrate' => "<script type='text/javascript' src='".LEPTON_URL."/modules/lib_jquery/jquery-core/jquery-migrate.min.js' ></script>",
  'custom' => "<script type='text/javascript' src='".TEMPLATE_DIR."/js/spacious-custom.js' ></script>", 
/* include page headers */  
  'get_page_headers' => $twig_util->capture_echo("get_page_headers();"),  
/* set some customs */ 
  'lep_header' => $twig_util->capture_echo("page_header();"),
//  'logo'  => "",
  'logo' => "<a href='".LEPTON_URL."'><img src='".TEMPLATE_DIR."/img/logo.png' width='100' height='100' alt='home' title='logo' /></a>",
//  'home' => "<a href='".LEPTON_URL."'><img src='".TEMPLATE_DIR."/img/blank.gif' width='900' height='180' alt='home' title='home' /></a>",
// ----------------- edit the web name in below title ----------------- 
  'my_name' => "<a href='".LEPTON_URL."' title='de website titel' rel='home'><span style='font: normal 32px impact,chicago; color: #ff0000; '>de website titel</span></a>",  
  'headimage' => "<a href='".LEPTON_URL."'><img class='head_img' src='".TEMPLATE_DIR."/img/1.jpg' width='900' height='180' alt='home' title='home'/></a>",
  'menu_name' => "Menu", 
/* set standard content */
  'content1' => $twig_util->capture_echo("page_content(1);"),
  'content2' => $twig_util->capture_echo("page_content(2);"),
  'content3' => $twig_util->capture_echo("page_content(3);"),
  'content4' => $twig_util->capture_echo("page_content(4);"),
  'content5' => $twig_util->capture_echo("page_content(5);"),
  'content0' => $twig_util->capture_echo("page_content(6);"),  
/* navigation */ 
  'navimain' => show_menu2( 1, SM2_ROOT, SM2_ALL, SM2_TRIM|SM2_BUFFER|SM2_PRETTY),
  'navipsdo' => show_menu2( 3, SM2_ROOT, SM2_ALL, SM2_TRIM|SM2_BUFFER|SM2_PRETTY),
  'breadcrumb'=> show_menu2( 1, SM2_ROOT, SM2_MAX+1, SM2_CRUMB|SM2_BUFFER, '<span class="[class]"> >> [a][menu_title]</a>', '</span>', '', '', 'Kruimelpad: <span class="[class]" >> [a][menu_title]</a>'),
  'navifoot' => show_menu2( 2, SM2_ROOT, SM2_START, SM2_TRIM|SM2_BUFFER|SM2_PRETTY),  
/* set js files in footer */
  'cycle' => "<script type='text/javascript' src='".TEMPLATE_DIR."/js/jquery.cycle.all.min.js' ></script>",
  'slider' => "<script type='text/javascript' src='".TEMPLATE_DIR."/js/spacious-slider-setting.js' ></script>",
  'navigation'=> "<script type='text/javascript' src='".TEMPLATE_DIR."/js/navigation.js' ></script>",
/* foot section */ 
  'footer1' => "title 1",
  'footer1_text'=> "<p>Een eerste vaste tekst of wat je ervan maakt in index.php die op alle pagina's komt</p>",
  'footer2' => "Titel 2",
  'footer2_text'=> "<p>Een tweede vaste tekst of wat je ervan maakt in index.php die op alle pagina's komt</p>",
  'footer3' => "Links",
  'footer4' => "Contact",
  'footer4_text' => '<a href="[wblink5]"><img src="'.TEMPLATE_DIR.'/img/foot2a.png" alt="Contact Us" width="64" height="64" /></a>',  // pas de wblink<nr> aan
/* footer block */ 
  'power' => '<a href="http://www.contracthulp.nl">Powered by <span style="font: normal 16px impact,chicago; color: #ff0000; ">ContractHulp</span></a>',
  'lep_footer'=> $twig_util->capture_echo("page_footer();").'<a href="[wblink4]"> Website Eigenaar</a>',  // pas de wblink<nr> aan
);
echo $parser->render( 
  $template_name, // template-filename
  $page_content // template-data
);
?>