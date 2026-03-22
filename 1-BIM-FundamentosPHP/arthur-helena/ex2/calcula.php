<?php
    $n1 = $_GET["n1"];
    $temp = $_GET["temp"];
    $resultadotemp = "";
    $resultadoconversao = "";
    $oposto = "";

    if ($temp == "F" || $temp == "f") 
    {
        $resultadotemp = "Fahreinheit";
        $oposto = "Celsius";
        $resultadoconversao = 5/9*($n1 - 32);
    } 
    else if ($temp =="C" || $temp == "c")
    {
        $resultadotemp = "Celsius";
        $oposto = "Fahreinheit";
        $resultadoconversao = (9/5)*$n1 + 32;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <p>A temperatura registrada está em <?php echo $resultadotemp; ?>, 
    a conversão para <?php echo $oposto; ?> ficaria <?php echo $resultadoconversao; ?></p>

    <br><a href="index.php">Voltar</a>

</body>

</html>