<?php
/**
 *
 * @author	Arantor
 * @porter	ahrasis http://sahabat.ahrasis.com
 * @license	BSD http://opensource.org/licenses/BSD-3-Clause
 * @addon	VEBA: View Enter Board Addon
 *
 */ 

if (!defined('ELK')) 
	die('Hacking attempt...');

function VEBA_Outputs(&$output, &$message)
{	
}

function VEBA_Texts()
{
	// Load language(s)
	loadLanguage('VEBA/VEBA');
}

function VEBA_Permissions(&$permissionGroups, &$permissionList)
{
	// Add permission(s) for members
	$permissionList['board']['view_board'] = array(false, 'general_board', 'view_board');
	$permissionList['board']['enter_board'] = array(false, 'general_board', 'view_board');
}
