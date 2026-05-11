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

    <h1>Listagem</h1>

    <?php foreach($produtos as $produto){ ?>

        <h2>
            <?php echo $produto['nome']; ?>
        </h2>

        <p>
            <strong>Fabricante:</strong>
            <?php echo $produto['fabricante']; ?>
        </p>

        <p>
            <strong>Preço:</strong>
            R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
        </p>

        <p>
            <strong>Estoque:</strong>
            <?php echo $produto['estoque']; ?>
        </p>

    <?php } ?>

</body>
</html>