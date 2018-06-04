<?php
/**
 * @version    2.0.x
 * @package    SP Preload Module
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;
?>
<div id="preloader" style="background-color: <?php echo $preloadBgColor ?>">
	<div id="preloader__load">
		<div class="loader">
			<div class="loader-inner <?php echo $preloadType ?>"></div>
		</div>
	</div>
</div>
<?php

$document->addScriptDeclaration('
	jQuery(document).ready(function(e) {
		$(".loader-inner").loaders()
	  e(window).load(function() {
	    // e("#preloader__load").fadeOut()
	    e("#preloader").delay(2500).fadeOut("slow")
	    e("body").delay(3000).css({overflow: "visible"})
	  })
	});
');

 ?>
