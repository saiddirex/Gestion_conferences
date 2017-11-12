<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>LOGIN</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Custom styles for this template -->
	<link href="../css/signin.css" rel="stylesheet">
</head>

<body>
	<?php include("header.php"); ?>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-4 text">
			<h1><strong>ZZ_Agenda</strong> Sign In Form</h1>
		</div>
	</div>

	<div class="container">
		<form class="form-signin" action="../functions/signindb.php" method="post">
			
			<label for="inputFName">First Name</label>
			<input type="text" id="inputFName" class="form-control" required autofocus>
			<label for="inputName">Second Name</label>
			<input type="text" id="inputName" class="form-control" required>
			<label for="inputEmail">Email address</label>
			<input type="email" id="inputEmail" class="form-control" required>
			<label for="inputPassword">Password</label>
			<input type="password" id="inputPassword" class="form-control" required>
			

			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
	<!-- /container -->
	<br><br><br>
	<?php include("footer.php"); ?>


	<!-- Bootstrap core JavaScript
		================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
