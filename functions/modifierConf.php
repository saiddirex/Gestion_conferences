
<!DOCTYPE HTML>
<?php
       session_start();
//if(isset($_SESSION['admin']) && isset($_SESSION['connecte']))
	//{
		$load_xml = simplexml_load_file('../db/conference.xml');
		$obj_xml = new SimpleXMLElement($load_xml->asXML());
		foreach ($obj_xml->conference as $conference)
		{  
			if ((int)$conference['id'] == (int)$_GET['id'])
			{

				$conference->titreFr=$_GET['titreFr'];
				$conference->titreEn=$_GET['titreEn'];
				$conference->localisation=$_GET['lieu'];
				//$conference->horaire =$_GET['horaire'];
				$conference->intervenant =$_GET['intervenant'];
				$conference->datetime =new DateTime($_GET["date"]);
				$obj_xml->asXML('../db/conference.xml'); 
			}
		
		}
		
		header('Location: ../pages/home.php?lang='.$_SESSION["lang"].'');
	/*}
	else
	{
		header('Location: ../index.php?lang= '.$_SESSION["lang"].'');
	} */
?> 

