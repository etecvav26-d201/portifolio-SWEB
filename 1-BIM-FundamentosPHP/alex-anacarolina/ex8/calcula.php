<?php
    $n = $_GET["n"];

    function soma($n) {
        $soma = 0;  
        
        for ($i = 0; $i <= $n; $i++) {
            $soma += $i;  
        }
        
        return $soma;  
    }

    $resultado = soma($n);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcula</title>
</head>

<body>

    <p>A soma é <?php echo $resultado; ?></p>

</body>

</html>