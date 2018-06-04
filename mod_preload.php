<?php
/**
 * @version    2.0.x
 * @package    SP Preload Module
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;

$preloadType    = $params->get('preloader-type');
$preloadColor   = $params->get('preloader-color');
$preloadBgColor = $params->get('preloader-bgcolor');

$document = JFactory::getDocument();
$document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/loaders.min.css');
$document->addStyleSheet(JUri::base(true).'/modules/'.$module->module.'/css/mod_preload.min.css');
$customStyle  = "/* SPEDI PRELOAD CUSTOM STYLE */ \n";
$customStyle .= ".loader-inner > div{background: ".$preloadColor.";} \n";
$document->addStyleDeclaration($customStyle);
$document->addScript(JUri::base(true).'/modules/'.$module->module.'/js/loaders.min.js');
// $document->addScript(JUri::base(true).'/modules/'.$module->module.'/js/init_sppreload.min.js');

require JModuleHelper::getLayoutPath($module->module, $params->get('layout', 'default'));
