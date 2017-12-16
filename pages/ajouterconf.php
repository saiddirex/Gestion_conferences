<!DOCTYPE html>
<!-- This page allows an admin user to add a conference. -->
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Ajouter Conference</title>

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
	<?php
	
		session_start();
		include("header.php");
		include_once("../functions/functions.php");
		
		requireAdmin();
	?>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-5 text">
				<h1><strong><span style="color:red">Z</span>Z_Agenda</strong></h1>
			</div>
		</div>

		<div class="container">
			<div class="col-sm-10 offset-sm-1">
				<div class="form-area">	
					<!-- form to create a conference -->
					<form role="form" action="../functions/ajouterconfdb.php" method="post">
						<br style="clear:both">
						<h2 style="margin-bottom: 25px; text-align: center;"><strong><?php echo $ajouterConference; ?></strong></h2>
						<div class="form-group">
							<label for="titre"> <?php echo $id; ?> </label>
							<input type="text" class="form-control" id="id" name="id" required>
						</div>
						<div class="form-group">
							<label for="titleFr"> <?php echo $titleFr; ?> </label>
							<input type="text" class="form-control" id="titleFr" name="titleFr" required>
						</div>
						<div class="form-group">
							<label for="titleEn"> <?php echo $titleEn; ?> </label>
							<input type="text" class="form-control" id="titleEn" name="titleEn" required>
						</div>
						<div class="form-group">
							<label for="descFr"><?php echo $resume . " FR"; ?> </label>
							<textarea class="form-control" id="descFr" name="descFr" required> </textarea>
						</div>
						<div class="form-group">
							<label for="descEn"><?php echo $resume . " EN"; ?> </label>
							<textarea class="form-control" id="descEn" name="descEn" required> </textarea>
						</div>
						<div class="form-group">
							<label for="lieu"> <?php echo $lieu; ?> </label>
							<input type="text" class="form-control" id="lieu" name="lieu" required>
						</div>
						<div class="form-group">
							<label for="speaker"> <?php echo $nomIntervenant; ?> </label>
							<input type="text" class="form-control" id="speaker" name="speaker" required>
						</div>
						<div class="form-group">
							<label for="date"> <?php echo $date; ?> </label>
							<input type="date" class="form-control" id="date" name="date" required>
						</div>
						<div class="form-group">
							<label for="horaire"><?php echo $horaire; ?> </label>
							<input type="time" class="form-control" id="horaire" name="horaire" required>
						</div>
						<div class="row">
							<div class="col-sm-4 col-sm-offset-3">
								<button type="submit" id="submit" class="btn btn-primary pull-right"><?php echo $sauvegarder; ?></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>


		<br><br><br>
		<?php include("footer.php"); ?>
		

		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../js/nicEdit.js"></script>
		<script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // Adds format options to all textareas
		</script>
		<script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>


