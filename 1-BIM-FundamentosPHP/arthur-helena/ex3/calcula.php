<?php
    $n1 = $_GET["n1"];
    $operacao = $_GET["operacao"];
    $n2 = $_GET["n2"];
    $resultado = "";
    $nomenclatura = "";

    if ($operacao == "+") {
        $resultado = $n1+$n2;
        $nomenclatura = "somado por";
    }
    else if ($operacao == "-") {
        $resultado = $n1-$n2;
        $nomenclatura = "subtraído por";
    } 
    else if ($operacao == "*") {
        $resultado = $n1*$n2;
        $nomenclatura = "multiplicado por";
    }else if ($operacao == "/") {
        $resultado = $n1/$n2;
        $nomenclatura = "dividido por";
    } else {
        $resultado = "Inválida, já que possui um caractere inválido para a operação.";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <p> O resultado da operação <?php echo $n1; ?> <?php echo $nomenclatura; ?> 
    <?php echo $n2; ?> é <?php echo $resultado; ?></p>

    <br><a href="index.php">Voltar</a>

</body>

</html>