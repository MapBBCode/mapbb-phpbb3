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

function add_mapbbcode_variables(&$hook, $handle, $include_once, $tpl = false)
{
	global $user, $config, $template;

	if (defined('MAPBBCODE') && $config['allow_maps']) {
		$user->add_lang('mods/info_acp_mapbbcode');
                $inportal = defined('IN_PORTAL'); // board3
		$vars = array(
			"S_MAPBBCODE" => true,
			"LAYERS" => $config['mapbb_layers'],
			"DEFAULT_ZOOM" => $config['mapbb_default_zoom'],
			"DEFAULT_POS" => $config['mapbb_default_pos'],
			"VIEW_WIDTH" => $config['mapbb_view_width'],
			"VIEW_HEIGHT" => $config['mapbb_view_height'],
			"FULL_HEIGHT" => $config[$inportal ? 'mapbb_view_height' : 'mapbb_full_height'],
			"EDITOR_HEIGHT" => $config['mapbb_editor_height'],
			"WINDOW_WIDTH" => $config['mapbb_window_width'],
			"WINDOW_HEIGHT" => $config['mapbb_window_height'],
			"OUTER_LINK" => $config['mapbb_outer_link'],
			"SHARE_SERVER" => $config['mapbb_share_server'],
			"S_ENABLE_EXTERNAL" => $config['mapbb_enable_external'],
			"ENABLE_EXTERNAL" => $config['mapbb_enable_external'] ? 'true' : 'false',
			"ALWAYS_FULL" => $inportal || $config['mapbb_always_full'] ? 'true' : 'false',
			"STANDARD_SWITCHER" => $config['mapbb_standard_switcher'] ? 'true' : 'false',
			"EDITOR_WINDOW" => $config['mapbb_editor_window'] ? 'true' : 'false',
			"ALLOWED_TAGS" => $config['mapbb_allowed_tags']
		);
		if( $tpl )
		{
			$tpl->assign_vars($vars);
		}
		else
		{
			$template->assign_vars($vars);
		}
	}
}

if (!defined('ADMIN_START'))
{
	$phpbb_hook->register(array('template', 'display'), 'add_mapbbcode_variables');
}

?>
