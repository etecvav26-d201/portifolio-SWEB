<!--
Data: 08/03/2026
Autor: Arthur Alexandre Dias Silva, Helena Bianquini Carriço
Objetivo:

Exercício 4 - Triângulo Numérico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

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
  <title>Triângulo Numérico</title>
</head>
<body>

    <h1>Triângulo Numérico</h1>

    <form action="calcula.php" method="get">
        <label>Digite um número para o triângulo númerico:</label>
        <input type="number" name="n1" step="any" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>