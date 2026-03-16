<?php

$n1 = $_GET["n1"];

$n2 = $_GET["n2"];

$soma = $n1 + $n2;

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Resultado (GET)</title>

</head>

<body>

<h1>Resultado da Soma (GET)</h1>

<p>Primeiro número: <?php echo $n1; ?></p>

<p>Segundo número: <?php echo $n2; ?></p>

<p><strong>Soma: <?php echo $soma; ?></strong></p>

<a href="index.php">Voltar</a>

</body>

</html>