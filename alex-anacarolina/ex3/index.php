<!--
Data: 12/03/2026
Autores: Alex dos Santos Apolinario e Ana Carolina Bernal Santos

Objetivo:
Exercício 3 - Calculadora
Criar um programa que receba dois números e um operador matemático
(+, -, * ou /) e mostre o resultado da operação escolhida.
-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Calculadora Aritmética</title>
</head>
<body>

    <h1>Calculadora Aritmética</h1>

    <form action="calcula.php" method="get">

        <label for="num1">Informe o primeiro número:</label>
        <input type="number" id="num1" name="n1" step="any" required>
        
        <br><br>

        <label for="op">Digite a operação (+, -, *, /):</label>
        <input type="text" id="op" name="operacao" maxlength="1" required>
        
        <br><br>

        <label for="num2">Informe o segundo número:</label>
        <input type="number" id="num2" name="n2" step="any" required>
        
        <br><br>

        <input type="submit" value="Calcular resultado">

    </form>
 
</body>
</html>