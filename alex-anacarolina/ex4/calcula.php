<?php
    $numero = $_GET["n1"];
    $saida = "";
    $linha = 1;

    while ($linha <= $numero) {

        $coluna = 1;

        while ($coluna <= $linha) {
            $saida .= $coluna . " ";
            $coluna++;
        }

        $saida .= "<br>";
        $linha++;
    }
?>