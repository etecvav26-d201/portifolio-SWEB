<?php
    $n1 = $_GET["n1"];
    $resultado = "";

    if ($n1 >=100 || $n1<=200) {
        $resultado = "está no intervalo entre 100 e 200.";
    } 
    else
    {
        $resultado = "não está em um intervalo entre 100 e 200.";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <p>O número <?php echo $n1; ?> <?php echo $resultado; ?>

    <a href="index.php">Voltar</a>

</body>

</html>