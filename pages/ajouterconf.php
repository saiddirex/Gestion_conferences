<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Ajout de conférence</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/ajouterconf.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>

	<!-- Fixed navbar -->
	<?php include("header.php"); ?>

	<div class="container">
		<div class="col-sm-10 offset-sm-1">
			<div class="form-area">	 
				<form role="form" action="../functions/ajouterconfdb.php" method="post">
					<br style="clear:both">
					<h3 style="margin-bottom: 25px; text-align: center;">Ajouter une conférence</h3>
					<div class="form-group">
						<label for="titre"> Titre </label>
						<input type="text" class="form-control" id="titre" name="titre" required>
					</div>
					<div class="form-group">
						<label for="lieu"> Lieu </label>
						<input type="text" class="form-control" id="lieu" name="lieu" required>
					</div>
					<div class="form-group">
						<label for="intervenant"> Intervenant </label>
						<input type="text" class="form-control" id="intervenant" name="intervenant" required>
					</div>
					<div class="form-group">
						<label for="date"> Date </label>
						<input type="text" class="form-control" id="date" name="date" required>
					</div>
					<div class="form-group">
						<label for="horaire"> Horaire </label>
						<input type="text" class="form-control" id="horaire" name="horaire" required>
					</div>
					<button type="submit" id="submit" class="btn btn-primary pull-right">Créer la conférence</button>
				</form>
			</div>
		</div>
	</div>



	<br><br><br>
	<?php include("footer.php"); ?>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>








































