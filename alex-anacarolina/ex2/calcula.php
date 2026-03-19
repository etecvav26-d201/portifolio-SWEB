<?php
    $valor = $_GET["n1"];
    $tipoTemp = $_GET["temp"];

    $escalaAtual = "";
    $escalaConvertida = "";
    $valorConvertido = "";

    if ($tipoTemp == "F" || $tipoTemp == "f") 
    {
        $escalaAtual = "Fahrenheit";
        $escalaConvertida = "Celsius";
        $valorConvertido = (5/9) * ($valor - 32);
    } 
    else if ($tipoTemp == "C" || $tipoTemp == "c")
    {
        $escalaAtual = "Celsius";
        $escalaConvertida = "Fahrenheit";
        $valorConvertido = (9/5) * $valor + 32;
    }
?>