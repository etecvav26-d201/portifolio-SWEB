<!--
Data: 12/03/2026
Autores: Ana Carolina Bernal Santos e Alex dos Santos Apolinario

Objetivo:
Exercício 4 - Formação de Triângulo Numérico
Criar um programa que leia um número n e mostre um triângulo
com os números de 1 até n em cada linha.

Exemplo para n = 6:

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Gerador de Triângulo Numérico</title>
</head>
<body>

    <h1>Gerador de Triângulo Numérico</h1>

    <form action="calcula.php" method="get">

        <label for="numero">Informe um número para gerar o triângulo:</label>
        <input type="number" id="numero" name="n1" step="1" required>

        <br><br>

        <input type="submit" value="Gerar Triângulo">

    </form>

</body>
</html>