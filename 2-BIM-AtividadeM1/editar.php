<?php

require_once 'config/conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = :id";

$comando = $conexao->prepare($sql);

$comando->execute([
    ':id' => $id
]);

$produto = $comando->fetch(PDO::FETCH_ASSOC);

