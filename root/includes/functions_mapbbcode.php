<?php
/**
 * * @author Ilya Zverev
 * * @version $Id$
 * * @copyright (c) 2013 Ilya Zverev
 * * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * */
if (!defined('IN_PHPBB'))
{
	exit;
}
if (defined('F_MAPBB'))
{
	return;
}
define('F_MAPBB', true);

// You should also change includes/mapbbcode/mapbbcode-window.html accordingly!
function get_mapbbcode_addons($base)
{
	$addons = '';
	// put MapBBCode add-ons here
	//$addons .= '<script src="'.$base.'/proprietary/Esri.js"></script>';
	//$addons .= '<script src="'.$base.'/proprietary/Google.js"></script>';
	//$addons .= '<script src="'.$base.'/proprietary/Yandex.js"></script>';
	//$addons .= '<script src="'.$base.'/Handler.Length.js"></script>';
	return $addons;
}

?>
