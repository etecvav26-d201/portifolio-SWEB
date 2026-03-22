<!--
Data: 09/03/2026
Autor: Alex dos Santos Apolinario, Ana Carolina Bernal Santos
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Leia 8 números inteiros e separe em dois vetores:

Um vetor com números positivos
Um vetor com números negativos
--> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Separar números positivos dos negativos</title>
</head>
<body>

    <h1>Separar números positivos dos negativos</h1>

    <form action="calcula.php" method="get">
        <?php for ($i = 1; $i <= 8; $i++): ?>
            <label for="num<?php echo $i; ?>">Número <?php echo $i; ?>:</label>
            <input type="number" name="n<?php echo $i; ?>" required><br>
        <?php endfor; ?>

        <input type="submit" value="Calcular">
    </form>

</body>
</html>