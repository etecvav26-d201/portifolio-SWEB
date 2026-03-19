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
    }
?>