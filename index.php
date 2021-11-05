<?php

require __DIR__ . "/app/db.php";
require __DIR__ . "/config/utils.php";
require __DIR__ . "/model/personaModel.php";
require __DIR__ . "/model/Persona.php";

$personamodel = new personaModel($pdo);

$rota = "personaController";

if (array_key_exists("router", $_GET)) {
	$rota = (string) $_GET["router"];
}

if (is_file("controller/{$rota}.php")) {
	require "controller/{$rota}.php";
} else {
	echo "Rota não encontrada";
}
