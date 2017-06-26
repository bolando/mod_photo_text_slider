<?php
/**
 * Photo text slider
 *
 * @package 	Photo text slider
 * @subpackage 	Photo text slider
 * @version   	3.6
 * @author    	Gopi Ramasamy
 * @copyright 	Copyright (C) 2010 - 2016 www.gopiplus.com, LLC
 * @license   	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 * http://www.gopiplus.com/extensions/2012/03/photo-text-slider-joomla-module/
 *
 */

// no direct access
defined('_JEXEC') or die;

class modPTS
{
	public static function loadScripts(&$params)
	{
		$doc = JFactory::getDocument();
		$pts_jquery = $params->get("pts_jquery","yes");	
		if($pts_jquery == "yes")	
		{
			$doc->addScript(JURI::Root(true).'/modules/mod_photo_text_slider/script/jquery.min.js');
		}
		$doc->addScript(JURI::Root(true).'/modules/mod_photo_text_slider/script/jquery.cycle.all.min.js');
		$doc->addStyleSheet(JURI::Root(true).'/modules/mod_photo_text_slider/script/mod_photo_text_slider.css');
	}
	
	public static function getInformation($args)
	{
		$items	= array();
		$j = 0;
		for($i=1; $i<=8; $i++)
		{
			$pts_title = "pts_title" . $i;
			$pts_link = "pts_link" . $i;
			$pts_imge = "pts_imge" . $i;
			$pts_desc = "pts_desc" . $i;
			
			if($args[$pts_title] <> "")
			{
				$items[$j] = new stdClass;
				$items[$j]->pts_title	= $args[$pts_title];
				$items[$j]->pts_link	= $args[$pts_link];
				$items[$j]->pts_imge	= $args[$pts_imge];
				$items[$j]->pts_desc	= $args[$pts_desc];
				$j = $j+1;
			}
		}
		return $items;
    }	
}
?>