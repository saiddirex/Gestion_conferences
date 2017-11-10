
<!DOCTYPE HTML>

<?php

	function checkArg($str)
	{
		return isset($str) && ! empty($str);
	}
	function recupVar($varname)
	{
		return htmlspecialchars($_POST[$varname]);
	}
	
	$_horaire = recupVar("horaire");
	$_titre = recupVar("titre");
	$_localisation = recupVar("lieu");
	$_intervenant = recupVar("intervenant");
	$_date = recupVar("date");
	

	if(checkArg($_horaire) && checkArg($_titre) && checkArg($_localisation) && checkArg($_intervenant) && checkArg($_date))
	{
		$xml = simplexml_load_file("../db/conference.xml");

		$newconf=$xml->addChild('conference');
		
		$newconf->addChild('horaire', $_horaire);
		$newconf->addChild('titre', $_titre);
		$newconf->addChild('localisation', $_localisation);
		$newconf->addChild('intervenant', $_intervenant);
		$newconf->addChild('date', $_date);

		$xml->asXML("../db/conference.xml");
		
		header("Location: ../pages/home.php");
	}
?>


