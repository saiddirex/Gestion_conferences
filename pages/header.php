<?php

	if (!isset($_GET["lang"]))
	{
		$_SESSION["lang"] = "fr";
		include_once('../functions/fr.php');
	}
	elseif ($_GET["lang"] == "fr")
	{
		$_SESSION["lang"] = "fr";
		include_once('../functions/fr.php');
	}
	else
	{
		$_SESSION["lang"] = "en";
		include_once('../functions/en.php');
	}

?>

<nav class="fixed-top navbar navbar-toggleable-md navbar-inverse bg-inverse">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		<a class="navbar-brand" href="../index.php?lang=<?php echo $_SESSION['lang']; ?>"><span class="glyphicon glyphicon-th-large"></span><span style="color: #ED502E">  Z</span>Z_AGENDA</a>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<?php if (isset($_SESSION["connecte"])){?>
					<li class="nav-item">
						<a class="nav-link" href="home.php?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $pagePricipal ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.google.fr/maps/@45.7572147,3.1131139,15z?hl=fr"><?php echo $carte ?></a>
					</li>
					<?php if(isset($_SESSION["admin"])){ ?>
						<li class="nav-item">
							<a class="nav-link" href="administration.php?lang=<?php echo $_SESSION['lang']; ?>"><?php echo $administration ?></a>
						</li>
					<?php } ?>
				<?php } ?>
				<li class="dropdown , nav-item">
					<a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#"><?php echo $Language ?> </a>
					<ul class="dropdown-menu">
						<li><a href="?lang=fr"><?php echo $Francais ?></a></li>
						<li><a href="?lang=en"><?php echo $Anglais ?></a></li>                    
					</ul>
				</li>				
				<?php if (isset($_SESSION["connecte"])){?>
					<li>
						<a class="nav-link" href="../functions/logout.php?lang=<?php echo $_SESSION['lang']; ?>"><strong><?php echo $seDeconnecter ?></strong></a>
					</li>
				<?php } ?>
            </ul>
		</div>
</nav>


