<?php
    $valor1 = $_GET["n1"];
    $valor2 = $_GET["n2"];
    $op = $_GET["operacao"];

    $resultado = "";
    $descricao = "";

    if ($op == "+") {
        $resultado = $valor1 + $valor2;
        $descricao = "somado com";
    }
    else if ($op == "-") {
        $resultado = $valor1 - $valor2;
        $descricao = "menos";
    }
    else if ($op == "*") {
        $resultado = $valor1 * $valor2;
        $descricao = "multiplicado por";
    }
    else if ($op == "/") {
        $resultado = $valor1 / $valor2;
        $descricao = "dividido por";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo</title>
</head>

<body>

    <p>
        O resultado de <?php echo $valor1; ?> <?php echo $descricao; ?> 
        <?php echo $valor2; ?> é <?php echo $resultado; ?>.
    </p>

    <br>
    <a href="index.php">Voltar</a>

</body>
</html>