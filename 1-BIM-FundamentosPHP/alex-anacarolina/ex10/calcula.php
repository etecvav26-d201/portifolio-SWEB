<?php
    $n = $_GET["n"];
    $bissexto = "";

    if (($n%400 == 0) || ($n%4 == 0 && $n % 100 != 0)) {
        $bissexto = "é um ano bissexto";
    } else {
        $bissexto = "não é um ano bissexto";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcula</title>
</head>

<body>

    <p>O ano <?php echo $n ?> <?php echo $bissexto ?> </p>

</body>

</html>