<?php
    for ($i = 1; $i <= 8; $i++) {
        $n = $_GET["n$i"];
        if ($n >= 0) {
            $positivos[] = $n;
        } else {
            $negativos[] = $n;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <p>Os números positivos são <?php echo implode(", ", $positivos); ?></p>
    <p>Os números negativos são <?php echo implode(", ", $negativos); ?></p>

</body>

</html>