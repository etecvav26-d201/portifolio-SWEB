<?php
    function media($v) {
        return array_sum($v) / count($v);
    }


    $valores = $_GET['valores'] ?? [];


    $resultado = media($valores);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <p>A média é de <?php echo $resultado; ?></p>

</body>

</html>