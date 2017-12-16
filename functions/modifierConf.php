
<!DOCTYPE HTML>
<?php

	session_start();
	include_once("../functions/functions.php");
	requireAdmin();
	
	
	if(isset($_SESSION['admin']) && isset($_SESSION['connecte']))
	{
		
		$load_xml = simplexml_load_file('../db/conference.xml');
		$obj_xml = new SimpleXMLElement($load_xml->asXML());
		
		foreach ($obj_xml->conference as $conference)
		{
			if ((int)$conference['id'] == (int)getVar('id'))
			{
				
				$time = new DateTime(getVar("date") . "T" . getVar("horaire"));
				
				$conference->titreFr = getVar('titreFr');
				$conference->titreEn = getVar('titreEn');
				$conference->localisation =  getVar('lieu');
				$conference->intervenant = getVar('intervenant');
				$conference->datetime = $time->format(DATE_ATOM);
				
				$obj_xml->asXML('../db/conference.xml');
			}
		
		}
		
		header('Location: ../pages/home.php?lang=' . $_SESSION["lang"]);
	}
	else
	{
		header('Location: ../index.php?lang=' . $_SESSION["lang"]);
	} 
?> 

