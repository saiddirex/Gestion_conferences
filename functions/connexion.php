
<?php
	session_start();
	
	include("functions.php");

	if(isset($_POST['submit']))
	{
		
		if( isUser(getPOSTVar('login'), getPOSTVar('password')) )
		{
			// Créé la variable. Valeurs inutiles
			$_SESSION['connecte'] = 0;
			if( isAdmin(getPOSTVar('login'),getPOSTVar('password')) )
			{
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

