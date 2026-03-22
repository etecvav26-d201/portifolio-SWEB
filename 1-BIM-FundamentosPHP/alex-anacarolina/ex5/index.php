<!--
Data: 16/03/2026
Autores: Ana Carolina Bernal Santos e Alex dos Santos Apolinario

Objetivo:
Exercício 5 - Somatório de Fatoriais
Criar um programa que receba 5 números inteiros e mostre a soma dos fatoriais desses números.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Somatório de Fatoriais</title>
</head>
<body>

  <h1>Somatório dos Fatoriais</h1>

  <form action="calcula.php" method="get">

    <label for="num1">Digite o primeiro número:</label>
    <input type="number" id="num1" name="n1" step="1" required>
    <br><br>

    <label for="num2">Digite o segundo número:</label>
    <input type="number" id="num2" name="n2" step="1" required>
    <br><br>

    <label for="num3">Digite o terceiro número:</label>
    <input type="number" id="num3" name="n3" step="1" required>
    <br><br>

    <label for="num4">Digite o quarto número:</label>
    <input type="number" id="num4" name="n4" step="1" required>
    <br><br>

    <label for="num5">Digite o quinto número:</label>
    <input type="number" id="num5" name="n5" step="1" required>
    <br><br>

    <input type="submit" value="Calcular Soma">

  </form>

</body>
</html>