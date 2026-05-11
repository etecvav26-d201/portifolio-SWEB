<?php

require_once 'config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "INSERT INTO produtos 
            (nome, fabricante, preco, estoque)
            VALUES
            (:nome, :fabricante, :preco, :estoque)";

    $comando = $conexao->prepare($sql);

    $comando->execute([
        ':nome' => $nome,
        ':fabricante' => $fabricante,
        ':preco' => $preco,
        ':estoque' => $estoque
    ]);

    echo "Produto cadastrado com sucesso!";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Teste</title>
</head>
<body>

    <h1>Cadastro Teste</h1>

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label>Fabricante:</label>
        <input type="text" name="fabricante" required><br><br>

        <label>Preço:</label>
        <input type="number" step="0.01" name="preco" required><br><br>

        <label>Estoque:</label>
        <input type="number" name="estoque" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>
</html>