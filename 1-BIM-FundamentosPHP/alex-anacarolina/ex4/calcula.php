<?php
    $numero = $_GET["n1"];
    $saida = "";
    $linha = 1;

    while ($linha <= $numero) {

        $coluna = 1;

        while ($coluna <= $linha) {
            $saida .= $coluna . " ";
            $coluna++;
        }

        $saida .= "<br>";
        $linha++;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exibição do Resultado</title>
</head>

<body>

    <p><?php echo $saida; ?></p>

    <br>
    <a href="index.php">Voltar</a>
   
</body>
</html>