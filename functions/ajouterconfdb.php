
<!DOCTYPE HTML>

<?php

	include("sort.php");

	function checkArg($str)
	{
		return isset($str) && ! empty($str);
	}
	function recupVar($varname)
	{
		return htmlspecialchars($_POST[$varname]);
	}
	
	$_id=recupVar("id");
	$_horaire = recupVar("horaire");
	$_titre = recupVar("titre");
	$_localisation = recupVar("lieu");
	$_intervenant = recupVar("intervenant");
	$_date = recupVar("date");
	

	if(checkArg($_id) && checkArg($_horaire) && checkArg($_titre) && checkArg($_localisation) && checkArg($_intervenant) && checkArg($_date))
	{
		$xml = simplexml_load_file("../db/conference.xml");
		$time = new DateTime($_date . "T" . $_horaire);
		
		$newconf=$xml->addChild('conference');
		$newconf->addAttribute('id', $_id);
		$newconf->addChild('titre', $_titre);
		$newconf->addChild('localisation', $_localisation);
		$newconf->addChild('intervenant', $_intervenant);
		$newconf->addChild('datetime', $time->format(DATE_ATOM));

		$xml->asXML("../db/conference.xml");
		
		sortConf();
		
		header("Location: ../pages/home.php");
	}
?>


