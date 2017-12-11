<?php

// On va chercher le VRAI fichier de fonctions.
include("functions/functions.php");
include("functions/sort.php");

class DBTest extends PHPUnit_Framework_TestCase
{
	// On va chercher le fichier db de test (Chemin different car Travis part de la racine du projet)
	public $db = "tests/db/users.xml";
	
    public function testIsUser()
    {
        $this->assertEquals(true, isUser("notadmin", "notadmin", $this->db));
        $this->assertEquals(true, isUser("admin", "admin", $this->db));
        $this->assertEquals(false, isUser("hacker", "malveillant", $this->db));
    }
    public function testIsAdmin()
    {
        $this->assertEquals(false, isAdmin("notadmin", "notadmin", $this->db));
        $this->assertEquals(true, isAdmin("admin", "admin", $this->db));
    }
	
	public function testSortDB()
	{
		sortConf("tests/db/conference.xml", "tests/db/sorted_conference.xml");
		$xml = simplexml_load_file("tests/db/sorted_conference.xml");
		
		$i = 1;
		foreach($xml->conference as $conf)	// Test the order
		{
			$this->assertEquals(strval($i), $conf->titre);
			$i++;
		}
		
		
	}
	
}
?>
