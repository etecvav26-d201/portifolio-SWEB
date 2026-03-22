<?php
    $n1 = $_GET["n1"];
    $resultado = "";
    $i = 1;
        
    while ($i <= $n1) {

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

    <p><?php echo $resultado; ?></p>

    <br><a href="index.php">Voltar</a>
   
</body>

</html>