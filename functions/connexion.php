
<?php
	session_start();
	
	include("functions.php");
	include_once("../functions/functions.php");

	if(isset($_POST['submit']))
	{
		
		if( isUser(getVar('login'), getVar('password')) )
		{
			// Create the variable(s). Value is useless
			// User is connected
			$_SESSION['connecte'] = 0;
			if( isAdmin(getVar('login'), getVar('password')) )
			{
				// User is an admin
				$_SESSION['admin'] = 0;
				header('Location: ../pages/administration.php');
			}
			else
			{
				header('Location: ../pages/home.php');
			}
		}
		else
		{
			header('Location: ../pages/login.php');
		}
	}

?>

