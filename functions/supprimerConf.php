
<!DOCTYPE HTML>

<?php
	session_start();
	$load_xml = simplexml_load_file('../db/conference.xml');
	$obj_xml = new SimpleXMLElement($load_xml->asXML());
	
	foreach ($obj_xml->conference as $conference)
	{  
		if ($conference['id'] == $_GET['id'])
		{
			$dom = dom_import_simplexml($conference);
			$dom->parentNode->removeChild($dom);
			$obj_xml->asXML('../db/conference.xml');
		}
	}
	header('Location: ../pages/administration.php?lang='.$_SESSION["lang"].'');

?>