
<!DOCTYPE HTML>
<?php
	session_start();
	
	if(isset($_SESSION['admin']) && isset($_SESSION['connecte']))
	{
		
		$load_xml = simplexml_load_file('../db/conference.xml');
		$obj_xml = new SimpleXMLElement($load_xml->asXML());
		
		foreach ($obj_xml->conference as $conference)
		{
			if ((int)$conference['id'] == (int)$_POST['id'])
			{
				
				$time = new DateTime($_POST["date"] . "T" . $_POST["horaire"]);
				
				$conference->titreFr = $_POST['titreFr'];
				$conference->titreEn = $_POST['titreEn'];
				$conference->localisation = $_POST['lieu'];
				$conference->intervenant = $_POST['intervenant'];
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

