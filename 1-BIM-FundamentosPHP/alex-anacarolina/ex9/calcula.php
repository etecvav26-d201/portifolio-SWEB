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