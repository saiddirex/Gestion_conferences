<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>Sign In</title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/sticky-footer-navbar.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/signin.css" rel="stylesheet">
	</head>

	<body>
		<?php include("header.php"); ?>
		
		<div class="container">
		  <form class="form-signin">
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="checkbox">
			  <label>
				<input type="checkbox" value="remember-me"> Remember me
			  </label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		  </form>
		</div> <!-- /container -->
		
		<?php include("footer.php"); ?>

		<?php 
			// Checks if a user's credentials are correct
			function isUser($id, $pwd)
			{
				$res = json_decode(file_get_contents("users.json"));
				foreach($res->{'users'} as $user)
				{
					if($user->{'id'} == $id && $user->{'pwd'} == $pwd)
					{
						return true
					}
				}
				return false;
			}
			
			// Checks if a user has admin rights or not
			function isUserAdmin($id)
			{
				$res = json_decode(file_get_contents("users.json"));
				foreach($res->{'users'} as $user)
				{
					if($user->{'id'} == $id)
					{
						return $user->{'admin'};
					}
				}
				return false;
			}
		?>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
