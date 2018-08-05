<?php
/**
 * @copyright	Copyright © 2018 - All rights reserved.
 * @license		GNU General Public License v2.0
 */
defined('_JEXEC') or die;

//Database e Query
$db = JFactory::getDBO();
$query = $db->getQuery(true);

$query->select(array('events.*', 'cat.title AS catname', 'cat.color AS catcol'))
	->from($db->quoteName('#__icagenda_events', 'events'))
	->join('INNER', $db->quoteName('#__icagenda_category', 'cat') . ' ON (' . $db->quoteName('events.catid') . ' = ' . $db->quoteName('cat.id') . ')')
	->where('startdate > NOW() ORDER BY startdate');

$db->setQuery($query); 
$events = $db->loadObjectList();

//Recupero impostazioni
$displaylimit = (int)$params->get('display_limit', 4);
$themeClass = $params->get('themesClass', '1');
$doc = JFactory::getDocument();

if($themeClass == "0") {
	$theme = $params->get('icThemes', 'default');
	require_once __DIR__."/themes/".$theme."/".$theme.".php";
	$doc->addStyleSheet(JURI::root()."/components/com_icagenda/themes/packs/".$theme."/css/".$theme."_component.css");
}
else {
	$theme = $params->get('csThemes', 'default');
	require_once __DIR__."/themes/".$theme."/".$theme.".php";
	$doc->addStyleSheet(JURI::root()."modules/mod_news_list/themes/".$theme."/".$theme.".css");
}


//VARIABILI USATE
$page = "";
$tmp = array();
$data = array();

if(count($events)) {

	$data['formtitle'] = "Prossimi eventi";
	$page = sprintf($openTag, $data['formtitle']);

    foreach($events as $e) {
		
		if($displaylimit == 0)
			break;

		unset($tmp);
		$tmp = array();

		$displaylimit = $displaylimit - 1;	

        $data['url'] = $e->id . "-" . str_replace(" ", "-", $e->title);
        $data['title'] = $e->title;
        $data['category'] = $e->catname;
    	$data['shortdesc'] = $e->shortdesc;
		$data['color'] = $e->catcol;
		
        $data['startdate'] = strtotime($e->startdate);
        $data['enddate'] = strtotime($e->enddate);
        $data['day'] = date('d', $data['startdate']);
        $data['month'] = date('M', $data['startdate']);
        $data['year'] = date('Y', $data['startdate']);
		$data['starttime'] = date('H', $data['startdate']) .":" . date('i', $data['startdate']);
		$data['endtime'] = date('H', $data['enddate']) .":" . date('i', $data['enddate']);
		$data['separator'] = "-";

		if($data['starttime'] == $data['endtime']) {
			$data['endtime'] = "";
			$data['separator'] = "";
		}
			
		foreach($items as $i)
			array_push($tmp, $data[$i]);

		$page .= vsprintf($eventTag, $tmp);
	}
}

else {
	$data['formtitle'] = "Nessun Evento in Programma";
	$page = sprintf($openTag, $data['formtitle']);
}

	$page .= $closeTag;
	
require JModuleHelper::getLayoutPath('mod_news_list', $params->get('layout', 'default'));