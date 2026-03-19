<?php
    $valor = $_GET["numero"];
    $resultado = "";

    if ($valor >= 100 && $valor <= 200) {
        $resultado = "está entre 100 e 200.";
    } else {
        $resultado = "não está entre 100 e 200.";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <p>
        <?php 
            echo "O número " . $valor . " " . $resultado; 
        ?>
    </p>

    <br>
    <a href="index.php">Voltar para a página inicial</a>

</body>
</html>