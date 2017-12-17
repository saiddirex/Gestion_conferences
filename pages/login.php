<!DOCTYPE html>
<!-- This page allow someone to login to his account -->
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>Login</title>

		<!-- Bootstrap core CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- Custom styles for this template -->
		<link href="../css/signin.css" rel="stylesheet">
		<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
	</head>

	<body>
		<?php 
		
			session_start();
			include("header.php");
		
			if(isset($_SESSION["connecte"]))
			{									// Prevent user from trying to connect when he already is
				header('Location: ../index.php?lang='.$_SESSION["lang"].'');
			}
		?>

		<div class="row">
			<div class="col-sm-6 col-sm-offset-4 text">
				<h1><strong>ZZ_Agenda  </strong><?php echo $loginForm; ?></h1>
			</div>
		</div>

		<div class="container">
			<form  method="post" class="form-signin"  action="../functions/connexion.php" >
				<label for="login" class="sr-only">Login</label>
				<input type="text" name="login" id="login" class="form-control" placeholder="<?php echo $saisirLogin ?>" required>
				<label for="password" class="sr-only">Password</label>
				<input type="password" name="password" class="form-control"  placeholder="<?php echo $saisirMdp ?>" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit" onclick='rememberLogin()'><?php echo $login; ?></button>
			</form>

		</div>
		
		<!-- /container -->
		<br><br><br>
		<?php include("footer.php"); ?>

		<script>
			// From https://www.w3schools.com/js/js_cookies.asp : creates a temporary cookie
			var rememberLogin = function()
			{
				var d = new Date();
				d.setTime(d.getTime() + (1*24*60*60*1000)); // 1 day
				var expires = "expires="+ d.toUTCString();
				document.cookie = "login=" + document.getElementById("login").value + ";"; + expires;
			}
			// From https://www.w3schools.com/js/js_cookies.asp  : return the value of the 'cname' cookie (extract it from the string)
			function getCookie(cname)
			{
				var name = cname + "=";
				var decodedCookie = decodeURIComponent(document.cookie);
				var ca = decodedCookie.split(';');
				for(var i = 0; i <ca.length; i++)
				{
					var c = ca[i];
					while (c.charAt(0) == ' ')
					{
						c = c.substring(1);
					}
					if (c.indexOf(name) == 0)
					{
						return c.substring(name.length, c.length);
					}
				}
				return "";
			}
			
			document.getElementById("login").value = getCookie("login");
		</script>

		<script src="../js/ie10-viewport-bug-workaround.js"></script>
	</body>

</html>
