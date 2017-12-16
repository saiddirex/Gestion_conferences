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
	function isAdmin($login, $pwd, $db = "../db/users.xml")
	{
		$pwd = hash("sha256", $pwd);
		
		$xml=simplexml_load_file($db) or die("Error: Cannot create object");
		
		foreach($xml->children() as $user)
		{
			if($user->login == $login && $user->pwd == $pwd )
			{
				if($user->admin == "true")
				{
					return true;
				}
			}
		}
		return false;
    }
	
	function checkArg($str)
	{
		return isset($str) && ! empty($str);
	}
	function getVar($varPOST)
	{
		return htmlspecialchars($_POST[$varPOST]);
	}
	
	function requireConnected()
	{
		if(!isset($_SESSION["connecte"]))
		{
			header("Location: /Projet/index.php");
		}
	}

	function requireAdmin()
	{
		requireConnected();
		if(!isset($_SESSION["admin"]))
		{
			header("Location: /Projet/pages/home.php");
		}
	}
	
?>