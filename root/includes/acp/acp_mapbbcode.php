<?php
/**
*
* @package acp_mapbbcode
* @version $Id$
* @copyright (c) 2013 Ilya Zverev
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_mapbbcode
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$action	= request_var('action', '');
		$submit = (isset($_POST['submit'])) ? true : false;

		if ($mode != 'settings')
		{
			return;
		}

		$this->tpl_name = 'acp_mapbbcode';
		$this->page_title = 'MAPBB_CONFIG';

		$maps_enable		= request_var('maps_enable',		(bool)		$config['allow_maps']);
		$enable_external	= request_var('enable_external',	(bool)		$config['mapbb_enable_external']);
		$layers				= request_var('layers',				(string)	$config['mapbb_layers']);
		$default_zoom		= request_var('default_zoom',		(int)		$config['mapbb_default_zoom']);
		$default_pos		= request_var('default_pos',		(string)	$config['mapbb_default_pos']);
		$view_width			= request_var('view_width',			(int)		$config['mapbb_view_width']);
		$view_height		= request_var('view_height',		(int)		$config['mapbb_view_height']);
		$full_height		= request_var('full_height',		(int)		$config['mapbb_full_height']);
		$editor_height		= request_var('editor_height',		(int)		$config['mapbb_editor_height']);
		$window_width		= request_var('window_width',		(int)		$config['mapbb_window_width']);
		$window_height		= request_var('window_height',		(int)		$config['mapbb_window_height']);
		$always_full		= request_var('always_full',		(bool)		$config['mapbb_always_full']);
		$editor_window		= request_var('editor_window',		(bool)		$config['mapbb_editor_window']);
		$standard_switcher	= request_var('standard_switcher',	(bool)		$config['mapbb_standard_switcher']);
		$outer_link			= request_var('outer_link',			(string)	$config['mapbb_outer_link']);
		$allowed_tags		= request_var('allowed_tags',		(string)	$config['mapbb_allowed_tags']);
		$share_server		= request_var('share_server',		(string)	$config['mapbb_share_server']);

		$form_name = 'acp_mapbbcode';
		add_form_key($form_name);

		if ($submit)
		{
			if (!check_form_key($form_name))
			{
				trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
			}

			$error = array();

			set_config('allow_maps', $maps_enable);
			set_config('mapbb_enable_external', $enable_external);
			set_config('mapbb_layers', $layers);
			set_config('mapbb_default_zoom', $default_zoom);
			set_config('mapbb_default_pos', $default_pos);
			set_config('mapbb_view_width', $view_width);
			set_config('mapbb_view_height', $view_height);
			set_config('mapbb_full_height', $full_height);
			set_config('mapbb_editor_height', $editor_height);
			set_config('mapbb_window_width', $window_width);
			set_config('mapbb_window_height', $window_height);
			set_config('mapbb_always_full', $always_full);
			set_config('mapbb_editor_window', $editor_window);
			set_config('mapbb_standard_switcher', $standard_switcher);
			set_config('mapbb_outer_link', $outer_link);
			set_config('mapbb_allowed_tags', $allowed_tags);
			set_config('mapbb_share_server', $share_server);

			add_log('admin', 'LOG_CONFIG_MAPBBCODE');
			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		if( !function_exists('get_mapbbcode_addons') )
		{
			include($phpbb_root_path . 'includes/functions_mapbbcode.' . $phpEx);
		}

		$template->assign_vars(array(
			'U_ACTION'			=> $this->u_action,
			'MAPS_ENABLE'		=> $maps_enable,
			'ALLOW_MAPS'		=> $maps_enable,
			'ENABLE_EXTERNAL'	=> $enable_external,
			'LAYERS'			=> str_replace("'", "\\'", $layers),
			'DEFAULT_ZOOM'		=> $default_zoom,
			'DEFAULT_POS'		=> $default_pos,
			'VIEW_WIDTH'		=> $view_width,
			'VIEW_HEIGHT'		=> $view_height,
			'FULL_HEIGHT'		=> $full_height,
			'EDITOR_HEIGHT'		=> $editor_height,
			'WINDOW_WIDTH'		=> $window_width,
			'WINDOW_HEIGHT'		=> $window_height,
			'ALWAYS_FULL'		=> $always_full,
			'EDITOR_WINDOW'		=> $editor_window,
			'STANDARD_SWITCHER'	=> $standard_switcher,
			'OUTER_LINK'		=> $outer_link,
			'ALLOWED_TAGS'		=> $allowed_tags,
			'SHARE_SERVER'		=> $share_server,
			'MAPBBCODE_ADDONS'	=> get_mapbbcode_addons('../mapbbcode'),
		));
	}
}

?>
