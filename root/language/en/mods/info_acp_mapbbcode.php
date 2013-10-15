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
	// editor
	'MAPBB_VIEW' => 'View',
	'MAPBB_EDITOR' => 'Editor',
	'MAPBB_EDITINWINDOW' => 'Window',
	'MAPBB_EDITINPANEL' => 'Panel',
	'MAPBB_VIEWNORMAL' => 'Normal',
	'MAPBB_VIEWFULL' => 'Full width only',
	'MAPBB_VIEWTITLE' => 'Adjusting browsing panel',
	'MAPBB_EDITORTITLE' => 'Adjusting editor panel or window',
	'MAPBB_EDITINWINDOWTITLE' => 'Editor will be opened in a popup window',
	'MAPBB_EDITINPANELTITLE' => 'Editor will appear inside a page',
	'MAPBB_VIEWNORMALTITLE' => 'Map panel will have "fullscreen" button',
	'MAPBB_VIEWFULLTITLE' => 'Map panel will always have maximum size',
	'MAPBB_GROWTITLE' => 'Click to grow the panel',
	'MAPBB_SHRINKTITLE' => 'Click to shrink the panel',
	'MAPBB_SELECT_LAYER' => 'Select layer',
	'MAPBB_ADD_LAYER' => 'Add layer',
	'MAPBB_KEY_NEEDED' => 'This layer needs a developer key',
	'MAPBB_BING_KEY' => 'This layer needs a developer key (<a href="%s" target="bing">how to get it</a>)',

	'INSTALLER_MAPBBCODE_ADD' => 'Added Map BBCode to the bbcode table',
	'INSTALLER_MAPBBCODE_REMOVE' => 'Removed Map BBCode from the bbcode table',
	'ACP_MAPBBCODE_SETTINGS' => 'MapBBCode',
	'LOG_CONFIG_MAPBBCODE' => '<strong>Altered MapBBCode settings</strong>',
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
	'MAPBB_ALLOWED_TAGS' => 'Allowed HTML tags in popups (regular expression)'
));

?>
