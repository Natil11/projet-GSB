<!DOCTYPE html>
<html>
	<head>
		<title>Connexion GSB</title>
		<?php include("head.php"); ?>
		<?php require("../controller/index.php");?>
	</head>
	<body>
		<header>
			<nav>
				<div class="col-3">
					<h4>Suivis du remboursement des frais</h4>
				</div>
			</nav>
		</header>
			<main class="d-flex justify-content-center align-items-center">
				<form method="POST" action="">
					<div class="d-flex justify-content-center flex-column" id="formconnect">
						<div class="form-group d-flex justify-content-around flex-column">
							<input class="form-control" type='text' placeholder='Login' id=login id='login' name='login'>
							<br>
							<input class="form-control"type='password' placeholder='Mot de Passe' id='password' name='password'>
						</div>
					<button type="submit" class="btn btn-success" id="startsession" name="startsession">Connexion</button>
					</div>
				</form>
			</main>
		<footer>
			
		</footer>
		<script>
			<?php include("js/index.js"); ?>

		</script>
	</body>
</html>