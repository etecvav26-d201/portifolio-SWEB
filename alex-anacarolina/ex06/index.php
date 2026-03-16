<!--
Data: 02/03/2026
Autor: Alex dos Santos Apolinario e Ana Carolina Bernal Santos bem safada
Objetivo: Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.

Exercício Exercício 6 - Série de Fibonacci
Leia um número n e mostre os n primeiros termos da sequência de Fibonacci.

Exemplo:
n = 12
Resultado:
0 1 1 2 3 5 8 13 21 34 55 89
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Série de Fibonacci</title>
</head>
<body>
    <h1>Série de Fibonacci</h1>
    <form action="calcula.php" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
