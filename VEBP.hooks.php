<?php
/**
 *
 * @author	Arantor
 * @porter	ahrasis http://sahabat.ahrasis.com
 * @license	BSD http://opensource.org/licenses/BSD-3-Clause
 * @addon	VEBA: View Enter Board Addon
 *
 */

// If we have found SSI.php and we are outside of ELK, then we are running standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('ELK'))
	require_once(dirname(__FILE__) . '/SSI.php');

// If we are outside ELK and can't find SSI.php, then throw an error
elseif (!defined('ELK'))
	die('<b>Error:</b> Cannot install - please verify you put this file in the same place as Elkarte\'s SSI.php.');

if (ELK == 'SSI')
	db_extend('packages');
	
// Define the hooks
$hook_functions = array(
	'integrate_pre_load' => 'VEBA_Texts|SOURCEDIR/addons/VEBA/VEBA.subs.php',
	'integrate_prepare_display_context' => 'VEBA_Outputs|SOURCEDIR/addons/VEBA/VEBA.subs.php',
	'integrate_load_permissions' => 'VEBA_Permissions|SOURCEDIR/addons/VEBA/VEBA.subs.php',
);

// Adding or removing them?
if (!empty($context['uninstalling']))
	$call = 'remove_integration_function';
else
	$call = 'add_integration_function';

// Do the deed
foreach ($hook_functions as $hook => $function)
	$call($hook, $function);

if (ELK == 'SSI')
   echo 'Congratulations! You have successfully installed this mod!';
   
?>