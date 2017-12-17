
<!DOCTYPE HTML>

<?php

	session_start();
	include_once("../functions/functions.php");
	requireAdmin();
	

	$load_xml = simplexml_load_file('../db/conference.xml');
	$obj_xml = new SimpleXMLElement($load_xml->asXML());
	
	$_id = getVar("id");
	$_titleFr = getVar("titleFr");
	$_titleEn = getVar("titleEn");
	$_descFr = $_POST['descFr'];
	$_descEn = $_POST['descEn'];
	$_location = getVar("lieu");
	$_speaker = getVar("speaker");
	$_date = getVar("date");
	$_horaire = getVar("horaire");
	
	// Checks if one of the variables is undefined/empty
	if(checkArgs(array($_id, $_titleFr, $_titleEn, $_titleEn, $_descFr, $_descEn, $_location, $_speaker, $_date, $_horaire)))
	{
		// Search for the right conference
		foreach ($obj_xml->conference as $conference)
		{
			if ((int)$conference['id'] == (int)getVar('id'))
			{
				// Overwrite data
				
				$time = new DateTime(getVar("date") . "T" . getVar("horaire"));
				
				$conference->titleFr = getVar('titleFr');
				$conference->titleEn = getVar('titleEn');
				$conference->descFr = $_POST['descFr'];
				$conference->descEn = $_POST['descEn'];
				$conference->location = getVar('lieu');
				$conference->speaker = getVar('speaker');
				$conference->datetime = $time->format(DATE_ATOM);
				
				
				$obj_xml->asXML('../db/conference.xml');
			}
		
		}
	}
	
	header('Location: ../pages/home.php?lang=' . $_SESSION["lang"]);
	
?> 

