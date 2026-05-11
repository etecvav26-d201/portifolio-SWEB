<?php

    require_once 'config/conexao.php';

    $sql = "SELECT * FROM produtos ORDER BY id DESC";

    $resultado = $conexao->query($sql);

    $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>