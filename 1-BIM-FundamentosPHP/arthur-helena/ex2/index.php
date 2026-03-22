<!--
Data: 08/03/2026
Autor: Arthur Alexandre Dias Silva, Helena Bianquini Carriço
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.
Depois, o programa deve converter para a outra unidade.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

    <h1>Conversão de temperatura</h1>

    <form action="calcula.php" method="get">
        <label>Digite a temperatura:</label>
        <input type="number" name="n1" step="any" required>
        <br><br>

        <label>Digite a unidade da temperatura (F ou C):</label>
        <input type="text" name="temp" maxlength="1" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>