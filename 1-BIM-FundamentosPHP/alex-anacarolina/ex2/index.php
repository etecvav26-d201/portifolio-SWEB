<!--
Data: 12/03/2026
Autores: Alex dos Santos Apolinario e Ana Carolina Bernal Santos

Objetivo:
Exercício 2 - Converter Temperatura
Criar um programa que receba um valor de temperatura e uma letra (F ou C),
indicando a unidade. Em seguida, realizar a conversão para a outra escala.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Conversor de Temperaturas</title>
</head>
<body>

    <h1>Conversor de Temperaturas</h1>

    <form action="calcula.php" method="get">

        <label for="tempValor">Informe a temperatura:</label>
        <input type="number" id="tempValor" name="n1" step="any" required>
        
        <br><br>

        <label for="tipoTemp">Informe a unidade (F ou C):</label>
        <input type="text" id="tipoTemp" name="temp" maxlength="1" required>
        
        <br><br>

        <input type="submit" value="Converter">

    </form>

</body>
</html>