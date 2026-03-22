<?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    $n5 = $_GET["n5"];
    $soma = 0;
    $numeros = [$n1, $n2, $n3, $n4, $n5];
    $i = 0;

    while ($i < 5) {

        $n = $numeros[$i];

        $fatorial = 1;
        $j = $n;

        while ($j > 1) {
            $fatorial = $fatorial * $j;
            $j--;
        }

        $soma = $soma + $fatorial;

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

    <p>A soma dos fatoriais de cada número é de <?php echo $soma; ?></p>

    <br><a href="index.php">Voltar</a>

</body>

</html>