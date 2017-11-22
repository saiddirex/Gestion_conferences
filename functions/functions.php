<?php
	
	function connect($id, $pwd, $db = "../db/users.xml")
	{
		
		$xml = simplexml_load_file($db) or die("Error: Cannot create object");
		foreach($xml->children() as $user)
		{
			if($user->login == $id && $user->pwd == $pwd)
			{  
                $_SESSION['connecte']=true;
				return true;
				
            }
           
		}
		return false;
    }

	// Checks if a user has admin rights or not
	function isUserAdmin($login,$pwd, $db = "../db/users.xml")
	{
		
		$xml=simplexml_load_file($db) or die("Error: Cannot create object");
		foreach($xml->children() as $user)
		{
			if($user->login == $login && $user->pwd == $pwd )
			{
				if($user->admin == "true") {
					
					$_SESSION['admin'] = true;
					return true ;
				}
				
			}
			
		}
		$_SESSION['admin'] = false;
		return false;
    }
	
?>