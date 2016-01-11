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
$taffaAPI = new taffaAPI('sv');
$menuHTML = $taffaAPI->getWeek();