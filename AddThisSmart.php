<?php
/** 
* @addtogroup Extensions 
*/
// Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

/* Configuration */

// Credits
$wgExtensionCredits['other'][] = array (
	'path'=> __FILE__ ,
	'name'=>'AddThisSmart',
	'url'=>'http://www.mediawiki.org/wiki/Extension:AddThis Smart',
	'description'=>'Adding AddThis SmartLayer.',
//	'descriptionmsg' => 'AddThisSmart-desc',
	'author'=>'[http://www.daschmedia.de DaSch]',
	'version'=>'0.9',
);

$dir = dirname( __FILE__ ) . '/';

//$wgExtensionMessagesFiles['AddThisSmart']      = $dir . 'AddThisSmart.i18n.php';
//$wgExtensionMessagesFiles['AddThisSmartAlias'] = $dir . 'AddThisSmart.alias.php';

$wgAutoloadClasses[ 'AddThisSmartHooks' ]    = $dir . 'AddThisSmart.hooks.php';
$wgHooks['SkinAfterBottomScripts'][] = 'AddThisSmartHooks::setupAddThisSmart';