<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Facilita - Problema 1</title>
	<link rel="stylesheet" href="src/css/bootstrap.css">
</head>

<body>
	<div class="card text-center">
		<div class="container">
			<div class="card-header">
				Problema 1

			</div>
			<div class="card-body">
				<h5 class="card-title">Descrição:</h5>
				<p class="card-text">Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construa um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.</p>
				<a href="index.php?view=altura" class="btn btn-primary">Calcular</a>
				<a href="index.php?view=delete" class="btn btn-danger">Zerar</a>
			</div>

		</div>
		<div class="container">
			<?php
			if ($_GET) {
				$view = $_GET['view'];
				include $view . '.php';
			} else {
				include "altura.php";
			}
			?>
		</div>
</body>

</html>