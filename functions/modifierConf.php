
<!DOCTYPE HTML>
<?php
	if(isset($_SESSION['admin']) && isset($_SESSION['connecte']))
	{
		$load_xml = simplexml_load_file('../db/conference.xml');
		$obj_xml = new SimpleXMLElement($load_xml->asXML());
		foreach ($obj_xml->conference as $conference)
		{  
			if ((int)$conference['id'] == (int)$_GET['id'])
			{

				$conference->titre=$_GET['titre'];
				$conference->localisation=$_GET['lieu'];
				$conference->horaire =$_GET['horaire'];
				$conference->intervenant =$_GET['intervenant'];
				$conference->date =$_GET['date'];
				$obj_xml->asXML('../db/conference.xml'); 
			}
		
		}
		
		header("Location: ../pages/home.php");
	}
	else
	{
		header("Location: ../index.php");
	}
?> 

