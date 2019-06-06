<!DOCTYPE html>
<html>
	<head>
		<title>Remboursement des frais</title>
		<?php include("head.php"); ?>
	</head>
	<body>
		<header>
			<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});
</script>
		</header>
		<main id="mainRembourse" class="">
			<h2>Periode</h2>
			<label for="choosedateRembourse">Choisissez une date</label>
			<input type="date" id="choosedateRembourse">

			<div class="d-flex flex-column">
				<div class="d-flex justify-content-around">
					<div>
						<h4>Frais au forfait</h4>
						<table class="table d-inline-flex">
							<thead>
								<tr>
									<th>Repas midi</th>
									<th>Nuités</th>
									<th>Etape</th>
									<th>Km</th>
									<th>Situation</th>
									<th>Date d'opération</th>
								</tr>
							</thead>
							<!--Place de la fonction php-->
						</table>
					</div>
				</div>
				<div>
					<div>
						<h4>Hors forfait</h4>
						<table class="table d-inline-flex">
							<thead>
								<tr>
									<th>Date</th>
									<th>Libellé</th>
									<th>Montant</th>
									<th>Situation</th>
									<th>Date d'opération</th>
								</tr>
							</thead>
							<!--Place de la fonction php-->
						</table>
					</div>
				</div>
				<div>
					<div>
						<h4>Hors classification</h4>
						<table class="table d-inline-flex">
							<thead>
								<tr>
									<th>Nb justificatifs</th>
									<th>Montant</th>
									<th>Situation</th>
									<th>Date d'opération</th>
								</tr>
							</thead>
							<!--Place de la fonction php-->
						</table>
					</div>
				</div>
				<p>This is a paragraph.</p>

<button>Toggle between hide() and show()</button>
			</div>
		</main>
		<footer>
			
		</footer>
	</body>
</html>