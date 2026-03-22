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