<?php

$senha = $_POST['senha'] ?? '';
$hash = '';

if ($senha !== '') {

    $hash = password_hash(
        $senha,
        PASSWORD_DEFAULT
    );

}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Password Hash - PHP</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <h1>Password Hash</h1>

    <p>Proteção de senhas no PHP</p>

</header>


<main>

<section class="pagina">

    <h2>O que é password_hash()?</h2>

    <p>
        A função <strong>password_hash()</strong> é fornecida pelo PHP
        para criar hashes seguros destinados ao armazenamento de senhas.
    </p>

    <p>
        Diferentemente de simplesmente utilizar MD5 ou SHA-256,
        o PHP utiliza um algoritmo próprio para senhas e adiciona
        automaticamente um salt ao processo.
    </p>


    <div class="info">

        <strong>Recomendação:</strong>

        <p>
            Para sistemas que possuem login e senha, o ideal é utilizar
            password_hash() para armazenar a senha e password_verify()
            para verificar posteriormente se a senha digitada está correta.
        </p>

    </div>


    <h2>Teste o Password Hash</h2>

    <form method="POST">

        <label for="senha">
            Digite uma senha:
        </label>

        <input
            type="password"
            id="senha"
            name="senha"
            placeholder="Digite uma senha"
            required
        >

        <button type="submit">
            Gerar Hash
        </button>

    </form>


    <?php if ($hash !== ''): ?>

        <div class="resultado">

            <h3>Hash da senha</h3>

            <div class="codigo">
                <?= htmlspecialchars($hash) ?>
            </div>

        </div>

    <?php endif; ?>


    <a href="index.php" class="voltar">
        Voltar para os métodos
    </a>

</section>

</main>

</body>
</html>