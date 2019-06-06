<!DOCTYPE html>
<html>
	<head>
		<title>Saisie des sommes a payer</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<main>
			<form method="POST" action="">
			<h4>Saisie</h4>
			<div class="d-flex flex-row">

				<div class="col">
					<h6>Periode d'engagement</h6>
					<div class="form-group d-flex flex-row justify-content-around col-6">
						<label for="moiSaisie">Mois</label>
						<!--Mettre ici fonction javascript limitation de charactere-->
						<input type="text" id=moiSaisie name="moiSaisie"class="form-control" placeholder="2 chiffres">
						<label for="anneeSaisie">Années</label>
						<!--Mettre ici fonction javascript limitation de charactere-->
						<input type="text" id=anneeSaisie name="anneeSaisie"class="form-control" placeholder="4 chiffres">
					</div>	

				</div>

				<div class="col">
					<h6>Frais au forfait</h6>
					<div class="d-flex flex-row justify-content-around">
						<div class="form-group">
							<label for="repasmidiSaisie">Repas de midi</label>
							<input type=text id=repasmidiSaisie name="repasmidiSaisie" class="form-control">
							<label for="nuitesSaisie">Nuités</label>
							<input type=text id=nuitesSaisie name="nuitesSaisie" class="form-control">
						</div>
						<div class="form-group">
							<label for="etapeSaisie">Etapes</label>
							<input type=text id=etapeSaisie name="etapeSaisie" class="form-control">
							<label for="kmSaisie">KM</label>
							<input type=text id=kmSaisie name="kmSaisie" class="form-control">
						</div>
					</div>

				</div>

			</div>
			<hr>

			<div class="d-flex flex-row">

				<div class="col">
					<h6>Hors classification</h6>
					<div class="form-group col-6">
						<label for="justifSaisie">Nombre justificatifs</label>
						<input class="form-control" type=text id=justifSaisie name="justifSaisie">
						<label for="totalSaisie">Montant Total</label>
						<input class="form-control" type=text id=totalSaisie name="totalSaisie">
					</div>
				</div>

				<div class="col">
					<h6>Hors forfait</h6>
					<div class="form-group">
						
						<input type=date id=dateSaisie name="dateSaisie">
						<input type=text id=libelleSaisie name="libelleSaisie"placeholder="Libellé">
						<input type=number id=qteSaisie name="qteSaisie"placeholder="Quantité">
					</div>

				</div>

			</div>
			<div id="divMessageSaisie">
				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseMessageSaisie" aria-expanded="false" aria-controls="collapseExample">Laisser un message</button>
				<div id="collapseMessageSaisie" class="collapse">
					<textarea rows="5" cols="33" maxlength="1000" size="300" placeholder="Limité a 1000 characteres" id="messageSaisie"name="messageSaisie"></textarea>
				</div>
			</div>
			<div class="d-flex justify-content-center">
				<input type=submit class="btn btn-success" id="submitSaisie" name="submitSaisie"></input>
			</div>
			</form>
		</main>
		<footer>
			
		</footer>
	</body>
</html>