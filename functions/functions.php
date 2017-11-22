<?php
	
	function isUser($id, $pwd, $db = "../db/users.xml")
	{
		$pwd = hash("sha256", $pwd);
		
		$xml = simplexml_load_file($db) or die("Error: Cannot create object");
		foreach($xml->children() as $user)
		{
			if($user->login == $id && $user->pwd == $pwd)
			{
				return true;
            }
           
		}
		return false;
    }

	// Checks if a user has admin rights or not
	function isAdmin($login,$pwd, $db = "../db/users.xml")
	{
		$pwd = hash("sha256", $pwd);
		
		$xml=simplexml_load_file($db) or die("Error: Cannot create object");
		
		foreach($xml->children() as $user)
		{
			if($user->login == $login && $user->pwd == $pwd )
			{
				if($user->admin == "true") {
					
					return true;
				}
				
			}
			
		}
		return false;
    }
	
	function getPOSTVar($varPOST)
	{
		return htmlspecialchars($_POST[$varPOST]);
	}
	
?>