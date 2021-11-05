<?php

$pessoa = $personamodel->listar();

$pessoa1 = new Persona();
$pessoa2 = new Persona();

$ano = 0;

$pessoa1->setNome("Chico");
$pessoa1->setAltura(1.50);
$pessoa1->setVerifica(0.02);

$pessoa2->setNome("Juca");
$pessoa2->setAltura(1.10);
$pessoa2->setVerifica(0.03);

$verifica1 = convert($pessoa1->getVerifica());
$verifica2 = convert($pessoa2->getVerifica());

$altura1 = convert($pessoa1->getAltura());
$altura2 = convert($pessoa2->getAltura());

if (!$pessoa1->getId()) {
    $id = $personamodel->pesquisar(1);
    if ($id == null) {
        $personamodel->salvar($pessoa1);
    }
}

if (!$pessoa2->getId()) {
    $id = $personamodel->pesquisar(2);
    if ($id == null) {
        $personamodel->salvar($pessoa2);
    }
}

while ($altura1 <> $altura2) {
    $altura1 = $altura1 + $verifica1;
    $altura2 = $altura2 + $verifica2;

    $ano++;
}

require __DIR__ . "/../view/template.php";
