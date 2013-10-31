<?php
/**
*
* mapbbcode [English]
*
* @package language
* @version $Id$
* @copyright (c) 2013 Ilya Zverev
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'MAPBB_LANGUAGE_JS' => 'English',
	'BBCODE_MAP_HELP' => 'Insert a map: [map]latitude,longitude(title); ...[/map]  (alt+m)',
	'MAPS_ARE_ON' => '[map] is <em>ON</em>',
	'MAPS_ARE_OFF' => '[map] is <em>OFF</em>',

	'INSTALLER_MAPBBCODE_ADD' => 'Added Map BBCode to the bbcode table',
	'INSTALLER_MAPBBCODE_REMOVE' => 'Removed Map BBCode from the bbcode table',
	'ACP_MAPBBCODE_SETTINGS' => 'MapBBCode',
	'LOG_CONFIG_MAPBBCODE' => '<strong>Altered MapBBCode settings</strong>',
	'MAPBB_TOO_MANY_BBCODES' => 'You cannot create any more BBCodes. Please remove one or more BBCodes then try again.',
	'MAPBB_GLOBAL' => 'Map BBCode Settings',
	'MAPS_ENABLE' => 'Allow maps',
	'MAPBB_CONFIG' => 'MapBBCode Configuration',
	'MAPBB_CONFIG_EXPLAIN' => 'This form allows you to customize map panels and layers in both view and edit modes.',
	'MAPBB_PANEL_CONFIG' => 'Map Panel Settings',
	'MAPBB_LAYERS' => 'Tile layers setup',
	'MAPBB_DEFAULT_ZOOM_POS' => 'Default zoom level and coordinates',
	'MAPBB_PANEL_SIZE' => 'View panel size',
	'MAPBB_FULL_HEIGHT' => 'Maximized panel size',
	'MAPBB_EDITOR_HEIGHT' => 'Inline editor panel height',
	'MAPBB_WINDOW_SIZE' => 'Editor window size',
	'MAPBB_OTHER' => 'Other Settings',
	'MAPBB_STANDARD_SWITCHER' => 'Hide layer list behind a button control',
	'MAPBB_OUTER_LINK' => 'External link template, if needed (parameters: {zoom}, {lat}, {lon})',
	'MAPBB_OUTER_LINK_EXAMPLE' => 'Example: http://www.openstreetmap.org/#map={zoom}/{lat}/{lon}',
	'MAPBB_ALLOWED_TAGS' => 'Allowed HTML tags in popups (regular expression)',
	'MAPBB_ENABLE_EXTERNAL' => 'Enable including and uploading maps to MapBBCode Share',
	'MAPBB_SHARE_SERVER' => 'MapBBCode Share server hostname'
));

?>
