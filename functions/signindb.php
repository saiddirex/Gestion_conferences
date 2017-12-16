<?php

	include_once("../functions/functions.php");
	
	$_fname = getVar("fname");
	$_name = getVar("name");
	$_email = getVar("email");
	$_pwd = hash("sha256", getVar("pwd"));
	$_login = getVar("login");
	
	if(getVar("admin") == "on")
	{
		$_admin = "true";
	}
	else
	{
		$_admin = "false";
	}
	

	if(checkArg($_fname) && checkArg($_name) && checkArg($_email) && checkArg($_pwd) && checkArg($_login))
	{
		$_id = hash("sha1", $_email);
		$xml = simplexml_load_file("../db/users.xml");
		
		$newconf = $xml->addChild('user');
		$newconf->addAttribute('id', $_id);
		$newconf->addChild('fname', $_fname);
		$newconf->addChild('name', $_name);
		$newconf->addChild('email', $_email);
		$newconf->addChild('login', $_login);
		$newconf->addChild('pwd', $_pwd);
		$newconf->addChild('admin', $_admin);


		$xml->asXML("../db/users.xml");
		
		if(isset($_SESSION["connecte"]))
		{
			header("Location: ../index.php");
		}
		else
		{
			header("Location: ../pages/login.php");
		}
	}
	

?>