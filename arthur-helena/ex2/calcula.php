<?php
    $n1 = $_GET["n1"];
    $temp = $_GET["temp"];
    $resultadotemp = "";

    if ($temp == "F" && $temp == "f") 
    {
        $resultadotemp = "A temperatura registrada está em Fahreinheit.";
    } 
    else if ($temp =="C" && $temp == "c")
    {
        $resultadotemp = "A temperatura registrada está em Celsius.";
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