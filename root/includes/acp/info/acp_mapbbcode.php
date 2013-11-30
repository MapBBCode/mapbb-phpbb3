<?php
/**
*
* @package acp
* @version $Id$
* @copyright (c) 2013 Ilya Zverev
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_mapbbcode_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_mapbbcode',
			'title'		=> 'ACP_MAPBBCODE_SETTINGS',
			'version'	=> '1.0.1',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_MAPBBCODE_SETTINGS', 'auth' => 'acl_a_bbcode', 'cat' => array('ACP_MESSAGES')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
?>
