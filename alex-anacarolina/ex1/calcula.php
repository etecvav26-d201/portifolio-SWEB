<?php
    $valor = $_GET["numero"];
    $resultado = "";

    if ($valor >= 100 && $valor <= 200) {
        $resultado = "está entre 100 e 200.";
    } else {
        $resultado = "não está entre 100 e 200.";
    }
?>