<?php
/**
 *
 * @author 		@See $wgExtensionCredits
 * @license		GPL
 * @package		VgiLink
 * @addtogroup  Extensions
 * @link		http://www.mediawiki.org/wiki/Extension:VgiLink
 *
 **/

class AddThisSmartHooks {
	/**
	 * Setup parser function
	 * @param parser from mediawiki
	 * @return must return true for next prasers
	 **/
	public static function setupAddThisSmart( $skin, &$text = '' ) {
	       
       $text .= AddThisSmartHooks::addAddThisSmart();
       return true;
	}
    public static function addAddThisSmart () {
        global $wgAddThisSmartConfArray;
        $json = json_encode($wgAddThisSmartConfArray);
        $html = <<<ADDTHIS
<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=dasch"></script>
<script type="text/javascript">
  addthis.layers({$json});
</script>
<!-- AddThis Smart Layers END -->
ADDTHIS;
        return $html;
    }
}
