<?php
    $n1 = $_GET["n1"];
    $temp = $_GET["temp"];
    $resultadotemp = "";
    $resultadoconversao = "";

    if ($temp == "F" || $temp == "f") 
    {
        $resultadotemp = "A temperatura registrada está em Fahreinheit.";
        $resultadoconversao = 5/9*($n1 - 32);
    } 
    else if ($temp =="C" || $temp == "c")
    {
        $resultadotemp = "A temperatura registrada está em Celsius.";
        $resultadoconversao = 9/5*($n1 + 32);
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