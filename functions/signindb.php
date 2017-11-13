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
	$_pwd = recupVar("pwd");
	

	if(checkArg($_fname) && checkArg($_name) && checkArg($_email) && checkArg($_pwd))
	{
		$xml = simplexml_load_file("../db/users.xml");

		$newconf=$xml->addChild('user');
		
		$newconf->addChild('fname', $_fname);
		$newconf->addChild('name', $_name);
		$newconf->addChild('email', $_email);
		$newconf->addChild('pwd', $_pwd);

		$xml->asXML("../db/users.xml");
		
		header("Location: ../pages/home.php");
	}
	

?>