<!--
Data: 09/03/2026
Autor: Arthur Alexandre Dias Silva, Helena Bianquini Carriço
Objetivo:

Exercício 10 - Ano Bissexto
Leia um ano e informe se ele é bissexto.

Um ano é bissexto se:
É múltiplo de 400
ou
É múltiplo de 4 e não é múltiplo de 100
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Ano Bissexto</title>
</head>
<body>

    <h1>Ano Bissexto</h1>

    <form action="calcula.php" method="get">
        <label>Informe um número:</label>
        <input type="number" name="n1" step="any" required>
        <br><br>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>