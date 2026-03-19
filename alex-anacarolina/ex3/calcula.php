<?php
    $valor1 = $_GET["n1"];
    $valor2 = $_GET["n2"];
    $op = $_GET["operacao"];

    $resultado = "";
    $descricao = "";

    if ($op == "+") {
        $resultado = $valor1 + $valor2;
        $descricao = "somado com";
    }
?>