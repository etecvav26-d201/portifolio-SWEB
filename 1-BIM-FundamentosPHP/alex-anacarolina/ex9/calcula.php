<?php
    function media($v) {
        $soma = 0;
        $quantidade = count($v);

        if ($quantidade == 0) {
            return 0; 
        }

        foreach ($v as $numero) {
            $soma += $numero;
        }

        return $soma / $quantidade;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcula</title>
</head>

<body>

    <p>A média é <?php echo $resultado; ?></p>

</body>

</html>