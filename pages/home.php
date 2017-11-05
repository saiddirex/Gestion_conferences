<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Home</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/home.css" rel="stylesheet">

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
	<div class="row">
		<div class="col-sm-6 col-sm-offset-5 text">
			<h1><strong>ZZ_Agenda</strong></h1>
		</div>
	</div>

	<br>
	
	<?php $xml=simplexml_load_file("../db/conference.xml") or die("Error: Cannot create object");?>




	<table class="table">
	
		<thead>
			<tr>
				<th style="text-align:left">Horaire</th>
				<th style="text-align:left">Details</th>
				<th style="text-align:left"></th>


			</tr>
		</thead>
		<tbody>
		<?php foreach($xml->children() as $conference) { ?>
			<tr>
				<td style="text-align:left"><span class="	glyphicon glyphicon-time"></span><?php echo $conference->horaire;   ?></td>
				<td style="text-align:left">
					<table>
						<tr>
							<td><strong> <span class="	glyphicon glyphicon-pencil"></span>  Titre        :    </strong></td>
							<td> <?php  echo $conference->titre;  ?></td>

						</tr>
						<tr>
							<td><strong><span class="	glyphicon glyphicon-map-marker"></span>   Localisation  :  </strong></td>
							<td> <?php  echo $conference->localisation;  ?></td>

						</tr>

						<tr>
							<td><strong><span class="	glyphicon glyphicon-user"></span>   Intervenants  : </strong></td>
							<td> <?php  echo $conference->intervenant; ?></td>

						</tr>


					</table>
				</td>
				<td> <span class="glyphicon glyphicon-heart " style="font-size:48px;color:red ;text-shadow:2px 2px 4px #000000;"></span></td>
			</tr>
		<?php } ?>
			


		</tbody>
	</table>
</div>

	<br><br><br>
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
