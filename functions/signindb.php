<?php

	function checkArg($str)
	{
		return isset($str) && ! empty($str);
	}
	function recupVar($varname)
	{
		return htmlspecialchars($_POST[$varname]);
	}
	
	$_fname = recupVar("fname");
	$_name = recupVar("name");
	$_email = recupVar("email");
	$_pwd = hash("sha256", recupVar("pwd"));
	$_login = recupVar("login");
	

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
		$newconf->addChild('admin', 'false');


		$xml->asXML("../db/users.xml");
		
		header("Location: ../pages/login.php");
	}
	

?>