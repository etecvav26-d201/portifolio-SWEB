<?php

    $host = "localhost";
    $banco = "farmacia_vav";
    $usuario = "root";
    $senha = "";

    try {

        $conexao = new PDO(
            "mysql:host=$host;dbname=$banco;charset=utf8",
            $usuario,
            $senha
        );
    
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch (PDOException $erro) {
    
        die("Erro na conexão com o banco de dados: " . $erro->getMessage());
    
    }

?>