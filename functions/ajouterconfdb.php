
<!DOCTYPE HTML>

<?php

	function checkArg($str)
	{
		return isset($str) && ! empty($str);
	}


	$_horaire = $_POST["horaire"];
	$_titre = $_POST["titre"];
	$_localisation = $_POST["lieu"];
	$_intervenant = $_POST["intervenant"];
	$_date = $_POST["date"];


	if(checkArg($_horaire) && checkArg($_titre) && checkArg($_localisation) && checkArg($_intervenant) && checkArg($_date))
	{
		$xml=simplexml_load_file("../db/conference.xml");

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


