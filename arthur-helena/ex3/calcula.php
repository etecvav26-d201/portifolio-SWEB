<?php
    $n1 = $_GET["n1"];
    $operacao = $_GET["operacao"];
    $n2 = $_GET["n2"];
    $resultado = "";

    if ($operacao == "+") {
        $resultado = $n1+$n2;
    }
    else if ($operacao == "-") {
        $resultado = $n1-$n2;
    } 
    else if ($operacao == "*") {
        $resultado = $n1*$n2;
    }if ($operacao == "/") {
        $resultado = $n1/$n2;
    } else {
        $resultado = "Caractere invalido para a operação."
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>


</body>

</html>