<?php
    $ano = $_GET["ano"];
    $ano = $_GET["ano"];
    $bissexto = "";

    if (($ano%400 == 0) || ($ano%4 == 0 && $ano % 100 != 0)) {
        $bissexto = "é um ano bissexto";
    } else {
        $bissexto = "não é um ano bissexto";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <p>O ano <?php echo $ano ?> <?php echo $bissexto ?> </p>

</body>

</html>