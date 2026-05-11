<?php

    require_once 'config/conexao.php';

    $sql = "SELECT * FROM produtos ORDER BY id DESC";

    $resultado = $conexao->query($sql);

    $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem dos produtos</title>
</head>
<body>



</body>
</html>