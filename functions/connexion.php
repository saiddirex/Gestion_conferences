
<?php
	session_start();
	
	include("functions.php");

	if(isset($_POST['submit']))
	{
		
		$tmp = connect(getPOSTVar('login'), getPOSTVar('password'));
		
		if($tmp)
		{
			$isAdmin = isUserAdmin(getPOSTVar('login'),getPOSTVar('password'));

			if($isAdmin)
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

