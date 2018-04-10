<!DOCTYPE html>
<!-- Welcome page. Available for everyone -->
<!--coordonnee de connexion 
compte administrateur   login=admin  mdp=admin
compte utilisateur   login=notadmin   mdp=notadmin-->
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ZZ_AGENDA</title>

		<!-- Bootstrap -->
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="bootstrap\css\jquery.bxslider.css">
		

	</head>

	<body>
	<header>
		<?php session_start();
			if(!isset($_GET["lang"]))
			{
				$_SESSION["lang"] = "fr";
				include_once('functions/fr.php');
			}
			elseif($_GET["lang"] == "fr")
			{
				$_SESSION["lang"] = "fr";
				include_once('functions/fr.php');
			}
			else
			{
				$_SESSION["lang"] = "en";
				include_once('functions/en.php');
			}
		?>
        <nav div class="navbar navbar-default navbar-static-top" role="navigation">
        </nav>

        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navigation">
                <div class="container">
                    <div class="navbar-header">

                        <div class="navbar-brand">
                            <a>
                                <h1><?php echo $GestionDeConference; ?></h1>
                            </a>
                        </div>
                    </div>

                    <div class="navbar-collapse collapse">
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
							<?php if(!isset($_SESSION['connecte'])){?>   
                                <li role="presentation"><a class="active" href="pages/login.php?lang=<?php echo $_SESSION['lang']; ?>"><strong><?php echo $seConnecter; ?></strong></a></li>
                            <?php }else{ ?>  
								<li role="presentation"><a class="active" href="pages/home.php?lang=<?php echo $_SESSION['lang']; ?>"><strong><?php echo $pagePricipal; ?></strong></a></li>
                                <li role="presentation"><a class="active" href="functions/logout.php?lang=<?php echo $_SESSION['lang']; ?>"><strong><?php echo $seDeconnecter; ?></strong></a></li>
                            <?php } ?>
                                <li role="presentation"><a class="active" href="pages/signin.php?lang=<?php echo $_SESSION['lang']; ?>"><strong><?php echo $creerCompte; ?></strong></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>


	<div class="jumbotron">
		<h2><?php echo $apropos; ?></h2>
	</div>

	<div class="slider">
        <div class="img-responsive">
            <ul class="bxslider">
                <li><img height=300 width=1800 src="img\slider\5.jpg" alt="" /></li>
                <li><img height=300 width=1800 src="img/slider/7.jpg" alt="" /></li>
                <li><img height=300 width=1800 src="img/slider/8.jpg" alt="" /></li>
                <li><img height=300 width=1800 src="img/slider/9.jpg" alt="" /></li>
            </ul>
        </div>
    </div>

	<div class="our-services">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<div class="services ">
							<div class="icons">
								<i class="fa fa-cog fa-3x"></i>
								<h3><?php echo $createurSite; ?></h3>
								<p id="demo1" class="content">
									<strong> Said EL FARKH </strong><br>
									<strong> Pierre DUPUIS </strong>
								</p>
							</div>
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="services">
							<div class="icons">
								<i class="fa fa-key fa-3x"></i>
								<h3><?php echo $encadrant; ?></h3>
								<p id="demo2" class="content">
									<strong> M. David SANTIAGO</strong>
								</p>
							</div>
						</div>
					</div>
					<hr>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.12s">
						<div class="services">
							<div class="icons">
								<i class="fa fa-refresh fa-3x"></i>
								<h3><?php echo $MAJ; ?></h3>
								<p id="demo3" class="content">
									<strong> <?php echo date("Y-m-d"); ?></strong>
								</p>
							</div>
						</div>
					</div>
					<hr>
				</div>
			</div>

		</div>
	</div>

	<script src="bootstrap\js/jquery-2.1.1.min.js"></script>
    <script src="bootstrap\js/wow.min.js"></script>
    <script src="bootstrap\js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="bootstrap\js\bootstrap.min.js"></script>
    <script src="bootstrap\js/jquery.bxslider.min.js"></script>
    <script src="bootstrap\js/functions.js"></script>
    <script src="bootstrap\js\jquery.easing.1.3.js"></script>
	<script>
		wow = new WOW({

			})
			.init();
	</script>
</body>

</html>