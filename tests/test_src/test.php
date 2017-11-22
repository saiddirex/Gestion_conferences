<?php

// On va chercher le VRAI fichier de fonctions.
include("functions/functions.php");


class DBTest extends PHPUnit_Framework_TestCase
{
	// On va chercher le fichier db de test (Chemin different car Travis part de la racine du projet)
	public $db = "tests/db/users.xml";
	
    public function testIsUser()
    {
        $this->assertEquals(true, isUser("notadmin", "notadmin", $this->db));
        $this->assertEquals(true, isUser("admin", "admin", $this->db));
    }
    public function testIsAdmin()
    {
        $this->assertEquals(false, isUAdmin("notadmin", "notadmin", $this->db));
        $this->assertEquals(true, isAdmin("admin", "admin", $this->db));
    }
}
?>
