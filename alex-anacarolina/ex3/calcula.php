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
    else if ($op == "-") {
        $resultado = $valor1 - $valor2;
        $descricao = "menos";
    }
    else if ($op == "*") {
        $resultado = $valor1 * $valor2;
        $descricao = "multiplicado por";
    }
    else if ($op == "/") {
        $resultado = $valor1 / $valor2;
        $descricao = "dividido por";
    }
?>