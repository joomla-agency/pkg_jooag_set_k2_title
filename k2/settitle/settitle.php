<?php

// no direct access
defined('_JEXEC') or die ;

// Load the K2 Plugin API
JLoader::register('K2Plugin', JPATH_ADMINISTRATOR.'/components/com_k2/lib/k2plugin.php');

// Initiate class to hold plugin events
class plgK2Settitle extends K2Plugin
{
	var $pluginName = 'settitle';
	var $pluginNameHumanReadable = 'Set Title';

	function plgK2Example(&$subject, $params)
	{
		parent::__construct($subject, $params);
	}
	
	function onK2PrepareContent(&$item, &$params, $limitstart)
	{
		$mainframe = JFactory::getApplication();
		//$item->text = 'It works! '.$item->text;
	}
} // END CLASS
