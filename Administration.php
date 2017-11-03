<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Administration</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/Administration.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Custom styles for this template -->
	<link href="css/sticky-footer-navbar.css" rel="stylesheet">
	
  </head>

  <body>

	<!-- Fixed navbar -->
	<?php include("header.php"); ?>
	
	<body>
	<div class="container">
	<?php $xml=simplexml_load_file("conference.xml") or die("Error: Cannot create object");?>

			<div class="row">
					<div class="col-sm-6 col-sm-offset-2 text">
							<h1><strong>ZZ_Agenda</strong> Administration Form</h1>
					</div>
					<div class="col-sm-2 col-sm-offset-10">
					<button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Ajouter</button>

					</div>
			</div>

			<table class="table">
					<thead>
							<tr>
									<th style="text-align:left">Titre</th>
									<th style="text-align:left">Nom Intervenant</th>
									<th style="text-align:left">Localisation</th>
									<th style="text-align:left">Date</th>
									<th style="text-align:left">Action</th>
							</tr>
					</thead>
					<tbody>
					<?php foreach($xml->children() as $conference) { ?>
							<tr>
									<td style="text-align:left"><?php echo $conference->titre;   ?></td>
									<td style="text-align:left"><?php echo $conference->intervenant;   ?></td>
									<td style="text-align:left"><?php echo $conference->localisation;   ?></td>
									<td style="text-align:left"><?php echo $conference->date;   ?></td>
									<td style="text-align:left">
											<button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> Modifier</button>
											<button type="button" class="btn btn-danger  btn-sm"><span class="glyphicon glyphicon-remove"></span> Supprimer</button>
									</td>

							</tr>
					<?php } ?>
					</tbody>
			</table>
	</div>

</body>
<br><br><br><br><br>
	
	<?php include("footer.php"); ?>


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="../../dist/js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
