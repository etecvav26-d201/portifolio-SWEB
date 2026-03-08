<?php
    $n1 = $_GET["n1"];
    $temp = $_GET["temp"];
    $resultadotemp = "";
    $resultadoconversao = "";
    $oposto = "";

    if ($temp == "F" || $temp == "f") 
    {
        $resultadotemp = "Fahreinheit";
        $resultadoconversao = 5/9*($n1 - 32);
    } 
    else if ($temp =="C" || $temp == "c")
    {
        $resultadotemp = "Celsius";
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
    a conversão para ficaria <?php echo $resultadoconversao; ?></p>

</body>

</html>