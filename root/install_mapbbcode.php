<?php
/**
 *
 * @author Zverik (Ilya Zverev) zverik@textual.ru
 * @version $Id$
 * @copyright (c) 2013 Ilya Zverev
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @ignore
 */
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'MapBBCode';

/*
* The name of the config variable which will hold the currently installed version
* UMIL will handle checking, setting, and updating the version itself.
*/
$version_config_name = 'mapbb_version';


// The language file which will be included when installing
$language_file = 'mods/info_acp_mapbbcode';


/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
//$logo_img = 'styles/prosilver/imageset/site_logo.gif';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	'0.9.0' => array(

		'config_add' => array(
			array('allow_maps', '1', 0),
			array('mapbb_default_zoom', '2', 0),
			array('mapbb_default_pos', '22,11', 0),
			array('mapbb_view_width', '600', 0),
			array('mapbb_view_height', '300', 0),
			array('mapbb_full_height', '600', 0),
			array('mapbb_always_full', '', 0),
			array('mapbb_editor_height', '400', 0),
			array('mapbb_window_width', '800', 0),
			array('mapbb_window_height', '500', 0),
			array('mapbb_editor_window', '1', 0),
			array('mapbb_outer_link', '', 0),
			array('mapbb_allowed_tags', '[auib]|span|br|em|strong|tt', 0),
			array('mapbb_standard_switcher', '1', 0),
			array('mapbb_layers', 'OpenStreetMap', 0),
		),

		'module_add' => array(
			array('acp', 'ACP_MESSAGES', array(
					'module_basename'	=> 'mapbbcode',
					'module_langname'   => 'ACP_MAPBBCODE_SETTINGS',
					'module_mode'       => 'settings',
					'module_auth'       => 'acl_a_bbcode',
			)),
		),

		'custom' => 'mapbbcode_bbcode',
		'cache_purge' => '',
	),
);

function mapbbcode_bbcode($action, $version)
{
	global $db, $template, $user;

	if( $action != 'install' && $action != 'update' )
	{
		if( $action == 'uninstall' )
		{
			$sql = 'DELETE FROM ' . BBCODES_TABLE . " WHERE bbcode_tag = 'map'";
			$result = $db->sql_query($sql);
			return $user->lang['INSTALLER_MAPBBCODE_REMOVE'];
		}
		return;
	}

	// Find next bbcode id
	$sql = 'SELECT MAX(bbcode_id) as max_bbcode_id FROM ' . BBCODES_TABLE;
	$result = $db->sql_query($sql);
	$row = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	if ($row)
	{
		$next_bbcode_id = $row['max_bbcode_id'];
		if ($next_bbcode_id <= NUM_CORE_BBCODES)
		{
			$next_bbcode_id = NUM_CORE_BBCODES;
		}
	}
	else
	{
		$next_bbcode_id = NUM_CORE_BBCODES;
	}

	if ($next_bbcode_id > BBCODE_LIMIT)
	{
		trigger_error($user->lang['TOO_MANY_BBCODES']);
	}
	$next_bbcode_id++;

	// Check if exists
	$sql = 'SELECT * FROM ' . BBCODES_TABLE . " WHERE LOWER(bbcode_tag) = 'map'";
	$result = $db->sql_query($sql);
	$row_exist = $db->sql_fetchrow($result);
	$db->sql_freeresult($result);

	if (!$row_exists)
	{
		$sql_ary = array(
			'bbcode_id'				=> (int) $next_bbcode_id,
			'bbcode_tag'			=> 'map',
			'bbcode_helpline'		=> '',
			'display_on_posting'	=> 0,
			'bbcode_match'			=> '[map]{TEXT}[/map]',
			'bbcode_tpl'			=> '<div id="map{DIVID}">[map]{TEXT}[/map]</div><script language="javascript">if(mapBBcode) mapBBcode.show(\'map{DIVID}\');</script>',
			'first_pass_match'		=> '!\[map(=[0-9,.]+)?\](.*?)\[/map\]!ies',
			'first_pass_replace'	=> '\'[map:$uid${1}]\'.str_replace(array("\\r\\n", \'\\"\', \'\\\'\', \'(\', \')\'), array("\n", \'"\', \'&#39;\', \'&#40;\', \'&#41;\'), trim(\'${2}\')).\'[/map:$uid]\'',
			'second_pass_match'		=> '!\[map:($uid)(=[0-9,.]+)?\](.*?)\[/map:$uid\]!se',
			'second_pass_replace'	=> '\'<div id="map${1}\'.$i.\'">[map${2}]${3}[/map]</div><script language="javascript">if(mapBBcode) mapBBcode.show(\\\'map${1}\'.($i++).\'\\\');</script>\'',
		);
		$result = $db->sql_query('INSERT INTO ' . BBCODES_TABLE . $db->sql_build_array('INSERT', $sql_ary));
	}
	return $user->lang['INSTALLER_MAPBBCODE_ADD'];
}

// Include the UMIL Auto file, it handles the rest
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);
