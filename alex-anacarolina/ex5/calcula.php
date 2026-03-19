<?php
    $num1 = $_GET["n1"];
    $num2 = $_GET["n2"];
    $num3 = $_GET["n3"];
    $num4 = $_GET["n4"];
    $num5 = $_GET["n5"];

    $totalSoma = 0;
    $valores = [$num1, $num2, $num3, $num4, $num5];
    $indice = 0;

    while ($indice < count($valores)) {

        $atual = $valores[$indice];

        $fatorial = 1;
        $contador = $atual;

        while ($contador > 1) {
            $fatorial *= $contador;
            $contador--;
        }
        
        $totalSoma += $fatorial;

        $indice++;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma dos Fatoriais</title>
</head>

<body>

    <p>A soma dos fatoriais dos números informados é: <?php echo $totalSoma; ?></p>

</body>
</html>