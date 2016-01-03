<?php
/*
 *  @template       Office Template 502 using twig
 *  @version        see info.php of this template
 *  @author         Gerard Smelt
 *  @copyright      2010-2015 Contracthulp B.V.
 *  @license        see info.php of this template
 *  @platform       see info.php of this template
 */
// include class.secure.php to protect this file and the whole CMS!
if ( defined( 'LEPTON_PATH' ) ) { include( LEPTON_PATH . '/framework/class.secure.php' );
} else { 
  $oneback = "../"; $root = $oneback; $level = 1;
  while ( ( $level < 10 ) && ( !file_exists( $root . '/framework/class.secure.php' ) ) ) { $root .= $oneback; $level += 1; } 
  if ( file_exists( $root . '/framework/class.secure.php' ) ) { include( $root . '/framework/class.secure.php' );
  } else { trigger_error( sprintf( "[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER[ 'SCRIPT_NAME' ] ), E_USER_ERROR ); }
}
// end include class.secure.php

// Template-engines settings.
global $parser, $loader; //initialize twig template engine
if (!isset($parser)) require_once( LEPTON_PATH."/modules/lib_twig/library.php" );
$loader->prependPath( dirname(__FILE__)."/css/" ); // ensure, twig is looking in correct folder first
require_once (LEPTON_PATH."/modules/lib_twig/classes/class.twig_utilities.php");
$twig_util = new twig_utilities( $parser, $loader );
// End of template-engines settings.

/*
 * select template
 */

switch (PAGE_ID ) {
	case 1: 
		$template_name = "site.lte";
		break;
	default:
		$template_name = "site.lte";
}
/*
 * any news definition

$config = array(
  'group_id_type' => 'group_id',
  'group_id' => 0,
  'display_mode' => 1,
  'start_news_item' => 0,
  'max_news_items' => 10,
  'max_news_length' => -1,
  'strip_tags' => true,
  'allowed_tags' => '<p><a><img>',
  'custom_placeholder' => false,
  'sort_by' => 1,
  'sort_order' => 1,
  'not_older_than' => 0,
  'lang_id' => 'AUTO',
  'lang_filter' => false,
);
	$anynews_html = $twig_util->capture_echo( "displayNewsItems( $GLOBALS['config'] );");
*/
/*
 * page_content definition
 */
  $h1='<span class="[class]">';
//$h2 = '';
  $h3 = "this.src='".TEMPLATE_DIR."/img/foot3a.png';";
 
$page_content = array   (

  /*  general  */
  
  'DEFAULT_CHARSET' => defined('DEFAULT_CHARSET') ? DEFAULT_CHARSET : 'utf-8',
  'get_page_headers' => $twig_util->capture_echo("get_page_headers();"),
  'page_title' => $twig_util->capture_echo("page_title();"),
  'description' => $twig_util->capture_echo("page_description();"),
  'keywords' => $twig_util->capture_echo("page_keywords();"),
  'TEMPLATE_DIR' => TEMPLATE_DIR,
  'page_id' => PAGE_ID,
  'home_url' => LEPTON_URL,
  'meertalig'=> $twig_util->capture_echo("easymultilang_menu();"),
  
  /*  set some customs  */	
  
  'headertext' => $twig_util->capture_echo("page_header();"),
  
  /*  set standard content  */
  
  'content1' => $twig_util->capture_echo("page_content(1);"),
  'content2' => $twig_util->capture_echo("page_content(2);"),
  
  /*  navigation  */	
  
  'mainmenu' => $twig_util->capture_echo ("show_menu2(1, SM2_ROOT, SM2_START, SM2_TRIM|SM2_PRETTY|SM2_XHTML_STRICT,'<li>[a]<span>[menu_title]</span></a></li>', '', '', '', false, false );"),
  'bottommenu' => $twig_util->capture_echo ("show_menu2(2, SM2_ROOT, SM2_START+2, SM2_TRIM|SM2_PRETTY|SM2_XHTML_STRICT, '<li>[a][menu_title]</a></li>','', '', '', false, false );"),
  'sidemenu' => $twig_util->capture_echo ("show_menu2(3, SM2_ROOT, SM2_ALL, SM2_ALL,'<li>[a]<span>[menu_title]</span></a></li>', ' ', ' ', ' ', false, false );"),
  'crumbstart' => "<a href='".WB_URL."'>Kruimelpad </a>",
  'crumbs' => $twig_util->capture_echo ("show_menu2(1, SM2_ROOT, SM2_CURR, SM2_CRUMB,'".$h1." &raquo; [a][menu_title]</a></span>', '', '', '', '&raquo; ".$h1."[a][menu_title]</a></span>');"),
 
 /*  foot block  */
 
           
  'foottext' =>'[[Gsm_foot?lang='.LANGUAGE.']]',
  'contact' => '<h2>Contact</h2><a href="[wblink4]"><img src="'.TEMPLATE_DIR.'/img/foot2a.png" alt="Contact Us" width="64" height="64" /></a>', 	
 // 'done' => '<h2>Realised</h2><a href="[wblink7]"><img onmouseover="'.$h3.'" src="'.TEMPLATE_DIR.'/img/foot3b.png" alt="Nieuws" width="85" height="64" /></a>',
  'done' => '',
  'footer' => $twig_util->capture_echo("page_footer();"),
  'power' => '<a href="http://www.contracthulp.nl">Powered by <span style="font: normal 16px impact,chicago; color: #ff0000; ">ContractHulp</span></a>',
);

echo $parser->render( 
	$template_name,	//	template-filename
	$page_content	//	template-data
);
?>