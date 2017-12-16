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
		<link href="../css/administration.css" rel="stylesheet">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Custom styles for this template -->
		<link href="../css/sticky-footer-navbar.css" rel="stylesheet">
	
	</head>

	<body>

		<?php
			session_start();
			include("header.php"); 
			include_once("../functions/functions.php");
			
			requireAdmin();
		?>
		
		

		<div class="container">
		<?php $xml=simplexml_load_file("../db/conference.xml") or die("Error: Cannot create object");?>

				<div class="row">
						<div class="col-sm-10 col-sm-offset-2 text">
								<h1><strong>ZZ_Agenda</strong> <?php echo $administrationForm ?></h1>
						</div>
						<div class="col-sm-2 col-sm-offset-10">
						<a class="active" href="ajouterConf.php?lang=<?php echo $_SESSION['lang']; ?>" ><button type="button" class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-plus"></span> <?php echo $ajouter ?></button></a>

						</div>
				</div>

				<table class="table">
						<thead>
								<tr>
										<th style="text-align:left"><?php echo $titre ?></th>
										<th style="text-align:left"><?php echo $nomIntervenant ?></th>
										<th style="text-align:left"><?php echo $lieu ?></th>
										<th style="text-align:left"><?php echo $date ?></th>
										<th style="text-align:left"><?php echo $action ?></th>
								</tr>
						</thead>
						<tbody>
						<?php foreach($xml->children() as $conference) { 
							$datetime = DateTime::createFromFormat(DATE_ATOM, $conference->datetime);
						?>
								<tr>
								        <?php if ($_SESSION['lang']=="fr"){ ?>
											<td style="text-align:left"><?php echo $conference->titreFr;   ?></td>
										<?php } else { ?>
											<td style="text-align:left"><?php echo $conference->titreEn;   ?></td>
										<?php }  ?>
										<td style="text-align:left"><?php echo $conference->intervenant;   ?></td>
										<td style="text-align:left"><?php echo $conference->localisation;   ?></td>
										<td style="text-align:left"><?php echo $datetime->format("d/m/Y H:i"); ?></td>
										<td style="text-align:left">
										<a class="active" href="../pages/modifierConfForm.php?id=<?php echo $conference['id']; ?>&lang=<?php echo $_SESSION['lang'];?>" ><button type="button" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-pencil"></span> <?php echo $modifier ?></button></a>
										<a class="active" href="../functions/supprimerConf.php?id=<?php echo $conference['id']; ?>" ><button type="button" class="btn btn-danger  btn-sm"><span class="glyphicon glyphicon-remove"></span> <?php echo $supprimer ?></button></a>
										</td>

								</tr>
						<?php } ?>
						</tbody>
				</table>
		</div>

		<br><br><br><br><br>
		
		<?php include("footer.php"); ?>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="../js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
