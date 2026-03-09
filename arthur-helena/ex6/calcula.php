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

