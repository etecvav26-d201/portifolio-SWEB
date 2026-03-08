<!--
Data: 08/03/2026
Autor: Arthur Alexandre Dias Silva, Helena Bianquini Carriço
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Calculadora Aritmética</title>
</head>
<body>

    <h1>Calculadora Arimética.</h1>

    <form action="calcula.php" method="get">
        <label>Digite o primeiro número:</label>
        <input type="number" name="n1" step="any" required>
        <br><br>

        <label>Digite qual operação deseja fazer (+, -, *, /)</label>
        <input type="text" name="operacao" step="any" required>
        <br><br>

        <label>Digite o segundo número:</label>
        <input type="number" name="n2" step="any" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>
 
</body>
</html>