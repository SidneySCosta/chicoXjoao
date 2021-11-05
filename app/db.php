<?php
require __DIR__ . "/conexao.php";

try {
    $pdo = new PDO(BD_DSN, BD_USER, BD_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $mensagem) {
    echo "Erro de conexao: " . $mensagem->getMessage();
    die();
}
