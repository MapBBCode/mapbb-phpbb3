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

function add_mapbbcode_variables(&$hook, $handle, $include_once, $template)
{
	global $user, $config;

	if (defined('MAPBBCODE') && $config['allow_maps']) {
		$user->add_lang('mods/mapbbcode');
		$template->assign_vars(array(
			"S_MAPBBCODE" => true,
			"LAYERS" => $config['mapbb_layers'],
			"DEFAULT_ZOOM" => $config['mapbb_default_zoom'],
			"DEFAULT_POS" => $config['mapbb_default_pos'],
			"VIEW_WIDTH" => $config['mapbb_view_width'],
			"VIEW_HEIGHT" => $config['mapbb_view_height'],
			"FULL_HEIGHT" => $config['mapbb_full_height'],
			"EDITOR_HEIGHT" => $config['mapbb_editor_height'],
			"WINDOW_WIDTH" => $config['mapbb_window_width'],
			"WINDOW_HEIGHT" => $config['mapbb_window_height'],
			"OUTER_LINK" => $config['mapbb_outer_link'],
			"ALWAYS_FULL" => $config['mapbb_always_full'] ? 'true' : 'false',
			"STANDARD_SWITCHER" => $config['mapbb_standard_switcher'] ? 'true' : 'false',
			"EDITOR_WINDOW" => $config['mapbb_editor_window'] ? 'true' : 'false',
			"ALLOWED_TAGS" => $config['mapbb_allowed_tags'])
		);
	}
}

if (!defined('ADMIN_START'))
{
	$phpbb_hook->register(array('template', 'display'), 'add_mapbbcode_variables');
}

?>
