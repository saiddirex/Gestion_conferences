
<!DOCTYPE HTML>

<?php

	session_start();
	include("sort.php");
	include_once("../functions/functions.php");
	
	requireAdmin();
	
	$_id = getVar("id");
	$_titreFr = getVar("titreFr");
	$_titreEn = getVar("titreEn");
	$_resumeFr = getVar("resumeFr");
	$_resumeEn = getVar("resumeEn");
	$_localisation = getVar("lieu");
	$_intervenant = getVar("intervenant");
	$_date = getVar("date");
	$_horaire = getVar("horaire");
	
	if(checkArgs(array($_id, $_titreFr, $_titreEn, $_titreEn, $_resumeFr, $_resumeEn, $_localisation, $_intervenant, $_date, $_horaire)))
	{
		$xml = simplexml_load_file("../db/conference.xml");
		$time = new DateTime($_date . "T" . $_horaire);
		
		$newconf = $xml->addChild('conference');
		$newconf->addAttribute('id', $_id);
		$newconf->addChild('titreFr', $_titreFr);
		$newconf->addChild('titreEn', $_titreEn);
		$newconf->addChild('resumeFr', $_resumeFr);
		$newconf->addChild('resumeEn', $_resumeEn);
		$newconf->addChild('localisation', $_localisation);
		$newconf->addChild('intervenant', $_intervenant);
		$newconf->addChild('datetime', $time->format(DATE_ATOM));

		$xml->asXML("../db/conference.xml");
		
		sortConf();
		
		header("Location: ../pages/home.php");
	}
	else
	{
		header("Location: ../pages/home.php");
	}
?>


