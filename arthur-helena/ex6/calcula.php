<?php
    $n1 = $_GET["n1"];
    $resultado = "";
    $a = 0;
    $b = 1;
    $i = 0;

    while ($i < $n) {
        $resultado .= $a . " ";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
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

    <p>A sequencia de fibonacci ficaria <?php echo $resultado; ?></p>

    <br><a href="index.php">Voltar</a>

</body>

</html>