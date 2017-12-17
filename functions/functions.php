<?php
	
	// Checks if the given login/pwd match a user in the "database"
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
	
	// Check if a variable is undefined/empty
	function checkArg($str)
	{
		return isset($str) && ! empty($str);
	}
	
	//  Check if one of the variables given as an array is undefined/empty
	function checkArgs($arr)
	{
		$nb = count($arr);
		$valid = true;
		for ($i = 0; $i < $nb && $valid; $i++)
		{
			$valid = checkArg($arr[$i]);
		}
		return $valid;
	}
	
	// return the POST variable
	function getVar($varPOST)
	{
		return htmlspecialchars($_POST[$varPOST]);
	}
	
	// Check that the user is connected. If not, redirect to the first page
	function requireConnected()
	{
		if(!isset($_SESSION["connecte"]))
		{
			header("Location: ../index.php");
		}
	}

	// Check that the user is connected and an admin. If not, redirect to the Home page
	function requireAdmin()
	{
		requireConnected();
		if(!isset($_SESSION["admin"]))
		{
			header("Location: ../pages/home.php");
		}
	}
	
?>