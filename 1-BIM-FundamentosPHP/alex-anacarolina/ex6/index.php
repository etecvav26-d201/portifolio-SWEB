<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Soma com PHP (GET)</title>
</head>
<body>

  <h1>Soma de dois números (GET)</h1>

  <form action="calcula.php" method="get">
    <label>Primeiro número:</label>
    <input type="number" name="n1" step="any" required>
    <br><br>

    <label>Segundo número:</label>
    <input type="number" name="n2" step="any" required>
    <br><br>

    <input type="submit" value="Calcular soma">
  </form>

</body>
</html>

