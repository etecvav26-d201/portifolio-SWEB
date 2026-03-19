<?php
    $valor = $_GET["n1"];
    $tipoTemp = $_GET["temp"];

    $escalaAtual = "";
    $escalaConvertida = "";
    $valorConvertido = "";

    if ($tipoTemp == "F" || $tipoTemp == "f") 
    {
        $escalaAtual = "Fahrenheit";
        $escalaConvertida = "Celsius";
        $valorConvertido = (5/9) * ($valor - 32);
    } 
    else if ($tipoTemp == "C" || $tipoTemp == "c")
    {
        $escalaAtual = "Celsius";
        $escalaConvertida = "Fahrenheit";
        $valorConvertido = (9/5) * $valor + 32;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversão de Temperatura</title>
</head>

<body>

    <p>
        A temperatura informada está em <?php echo $escalaAtual; ?>.
        Convertendo para <?php echo $escalaConvertida; ?> o valor será
        <?php echo $valorConvertido; ?>.
    </p>

</body>
</html>