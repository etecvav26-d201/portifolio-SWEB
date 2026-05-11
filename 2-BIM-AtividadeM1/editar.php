<?php

require_once 'config/conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = :id";

$comando = $conexao->prepare($sql);

$comando->execute([
    ':id' => $id
]);

$produto = $comando->fetch(PDO::FETCH_ASSOC);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "UPDATE produtos SET
            nome = :nome,
            fabricante = :fabricante,
            preco = :preco,
            estoque = :estoque
            WHERE id = :id";

    $comando = $conexao->prepare($sql);

    $comando->execute([
        ':nome' => $nome,
        ':fabricante' => $fabricante,
        ':preco' => $preco,
        ':estoque' => $estoque,
        ':id' => $id
    ]);

    header('Location: index.php');

    exit();

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>

    <h1>Editar Produto</h1>

    <form method="POST">

        <label>Nome:</label>

        <input 
            type="text"
            name="nome"
            value="<?php echo $produto['nome']; ?>"
            required
        >

        <label>Fabricante:</label>

        <input 
            type="text"
            name="fabricante"
            value="<?php echo $produto['fabricante']; ?>"
            required
        >

        <label>Preço:</label>

        <input 
            type="number"
            step="0.01"
            name="preco"
            value="<?php echo $produto['preco']; ?>"
            required
        >

        <label>Estoque:</label>

        <input 
            type="number"
            name="estoque"
            value="<?php echo $produto['estoque']; ?>"
            required
        >

        <button type="submit">
            Salvar Alterações
        </button>

    </form>

</body>
</html>
