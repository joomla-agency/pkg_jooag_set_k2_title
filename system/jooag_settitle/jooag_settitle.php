<?php
/**
 * @package    JooAg_Shariff
 *
 * @author     Joomla Agentur <info@joomla-agentur.de>
 * @copyright  Copyright (c) 2009 - 2015 Joomla-Agentur All rights reserved.
 * @license    GNU General Public License version 2 or later;
 **/
defined('_JEXEC') or die;

class plgSystemJooag_Settitle extends JPlugin
{	
	public function onBeforeRender()
	{		
		$app = JFactory::getApplication();
		$jinput = $app->input;
		 	 
		if($jinput->get('option') == 'com_k2' and $jinput->get('view') == 'item' and !$app->isAdmin()){
			$db = JFactory::getDBO();
			$id = explode(":", JRequest::getVar('id')); 
			
			$query = "SELECT plugins FROM #__k2_items WHERE id =$id[0]";
			$db->setQuery($query);
			$rows = $db->loadObjectList();
			if($rows[0]->plugins){
				$browserTitle = (json_decode($rows[0]->plugins)->settitlebrowser_title);
				$doc = JFactory::getDocument();
				$doc->setTitle($browserTitle);
			}
		}
	}
}