
<!DOCTYPE HTML>

<?php

	session_start();
	include("sort.php");
	include_once("../functions/functions.php");
	
	requireAdmin();
	
	$_id = getVar("id");
	$_titreFr = getVar("titreFr");
	$_titreEn = getVar("titreEn");
	$_localisation = getVar("lieu");
	$_intervenant = getVar("intervenant");
	$_date = getVar("date");
	$_horaire = getVar("horaire");
	

	if(checkArg($_id) && checkArg($_horaire) && checkArg($_titreFr) && checkArg($_titreEn) && checkArg($_localisation) && checkArg($_intervenant) && checkArg($_date))
	{
		$xml = simplexml_load_file("../db/conference.xml");
		$time = new DateTime($_date . "T" . $_horaire);
		
		$newconf = $xml->addChild('conference');
		$newconf->addAttribute('id', $_id);
		$newconf->addChild('titreFr', $_titreFr);
		$newconf->addChild('titreEn', $_titreEn);
		$newconf->addChild('localisation', $_localisation);
		$newconf->addChild('intervenant', $_intervenant);
		$newconf->addChild('datetime', $time->format(DATE_ATOM));

		$xml->asXML("../db/conference.xml");
		
		sortConf();
		
		header("Location: ../pages/home.php");
	}
?>


