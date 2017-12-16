<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Join us !</title>

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
	?>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-3 text">
			<h1><strong>ZZ_Agenda</strong> <?php echo $formulaireCreationCompte ?></h1>
		</div>
	</div>

	<div class="container">
		<form class="form-signin" action="../functions/signindb.php" method="post">
			<label for="inputFName"><?php echo $prenom ?></label>
			<input type="text" id="inputFName" name="fname" class="form-control" required autofocus>
			<label for="inputName"><?php echo $nom ?></label>
			<input type="text" id="inputName" name="name" class="form-control" required>
			<label for="inputEmail"><?php echo $email ?></label>
			<input type="email" id="inputEmail" name="email" class="form-control" required>
			<label for="inputLogin"><?php echo $username ?></label>
			<input type="text" id="inputLogin" name="login" class="form-control" required>
			<label for="inputPassword"><?php echo $mdp ?></label>
			<input type="password" id="inputPassword" name="pwd" class="form-control" required>
			<?php if(isset($_SESSION["admin"])) { ?>
				<label for="inputAdmin"><?php echo $admin?></label>
				<input type="checkbox" id="inputAdmin" name="admin" class="form-control">
				<br>
			<?php } ?>
			<button class="btn btn-lg btn-primary btn-block" type="submit"><?php echo $sauvegarder ?></button>
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
