<?php
/**
 * Dagsen weekly list module
 * 
 * @package    Joomla
 * @subpackage Modules
 * @license    MIT, see LICENSE.php
 * @link       NULL
 */
    
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
$joomlaLangMap = Array('sv-SE' => 'sv', 'fi-FI' => 'fi', 'en-GB' => 'en');
$joomlaLang = JFactory::getLanguage();
$joomlaLangTag = $joomlaLang->getTag();
$taffaAPI = new taffaAPI($joomlaLangMap[$joomlaLangTag]);
$menuHTML = $taffaAPI->getWeek();
/**
 * @todo Comment out the echo below, should be outputted by tmpl/default.php, but this file is not getting ran
 * in my configuration. Might just be me tho, or some override.
 */
echo $menuHTML;
