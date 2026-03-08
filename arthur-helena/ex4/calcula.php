<?php
    $n = $_GET["n"];
    $resultado = "";
    $i = 1;
        
    while ($i <= $n) {

        $j = 1;

        while ($j <= $i) {
            $resultado = $resultado . $j . " ";
            $j++;
        }

        $resultado = $resultado . "<br>";
        $i++;
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