<?php
    for ($i = 1; $i <= 8; $i++) {
        $n = $_GET["n$i"];
        if ($n >= 0) {
            $numerospositivos[] = $n;
        } else {
            $numerosnegativos[] = $n;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcula</title>
</head>

<body>

    <p>Estão dentro dos números positivos: <?php echo implode(", ", $numerospositivos); ?></p>
    <p>Estão dentro dos números negativos: <?php echo implode(", ", $numerosnegativos); ?></p>

</body>

</html>