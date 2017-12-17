
<!DOCTYPE HTML>

<?php

	session_start();
	include("sort.php");
	include_once("../functions/functions.php");
	
	requireAdmin();
	
	$_id = getVar("id");
	$_titleFr = getVar("titleFr");
	$_titleEn = getVar("titleEn");
	$_descFr = getVar("descFr");
	$_descEn = getVar("descEn");
	$_location = getVar("lieu");
	$_speaker = getVar("speaker");
	$_date = getVar("date");
	$_horaire = getVar("horaire");
	
	// Checks if one of the variables is undefined/empty
	if(checkArgs(array($_id, $_titleFr, $_titleEn, $_titleEn, $_descFr, $_descEn, $_location, $_speaker, $_date, $_horaire)))
	{
		$xml = simplexml_load_file("../db/conference.xml");
		$time = new DateTime($_date . "T" . $_horaire);
		
		// Creation of the new XML object
		$newconf = $xml->addChild('conference');
		$newconf->addAttribute('id', $_id);
		$newconf->addChild('titleFr', $_titleFr);
		$newconf->addChild('titleEn', $_titleEn);
		$newconf->addChild('descFr', $_descFr);
		$newconf->addChild('descEn', $_descEn);
		$newconf->addChild('location', $_location);
		$newconf->addChild('speaker', $_speaker);
		$newconf->addChild('datetime', $time->format(DATE_ATOM));

		$xml->asXML("../db/conference.xml");
		
		sortConf();
	}
	header("Location: ../pages/home.php");
	
?>


