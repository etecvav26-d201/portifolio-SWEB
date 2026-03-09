<?php
    $n1 = $_GET["n1"];

    function soma($n1) {
        $soma = 0;  
        
        for ($i = 0; $i <= $n1; $i++) {
            $soma += $i;  
        }
        
        return $soma;  
    }

    $resultado = soma($n1);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

    <p>A soma dos números é de <?php echo $resultado; ?></p>

</body>

</html>