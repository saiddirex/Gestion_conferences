
<?php
	session_start();
	
	include("functions.php");

	if(isset($_POST['submit']))
	{
		
		if( isUser(getPOSTVar('login'), getPOSTVar('password')) )
		{

			if( isAdmin(getPOSTVar('login'),getPOSTVar('password')) )
			{
				$_SESSION['admin'] = true;
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

