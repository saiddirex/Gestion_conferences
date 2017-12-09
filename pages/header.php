<?php
// Start the session
session_start();?>

<nav class="fixed-top navbar navbar-toggleable-md navbar-inverse bg-inverse">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
		<a class="navbar-brand" href="../index.php"><span class="glyphicon glyphicon-th-large"></span><span style="color: #ED502E">  Z</span>Z_AGENDA</a>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<?php if (isset($_SESSION["connecte"])){?>
					<li class="nav-item">
						<a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.google.fr/maps/@45.7572147,3.1131139,15z?hl=fr">Maps</a>
					</li>
					<?php if(isset($_SESSION["admin"])){ ?>
						<li class="nav-item">
							<a class="nav-link" href="administration.php">Administration</a>
						</li>
					<?php } ?>
				<?php } ?>
            </ul>
		</div>
</nav>


