<?php

$texto = $_POST['texto'] ?? '';
$resultado = '';

if ($texto !== '') {
    $resultado = hash('sha512', $texto);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SHA-512 - PHP</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <h1>SHA-512</h1>

    <p>Secure Hash Algorithm 512 bits</p>

</header>


<main>

<section class="pagina">

    <h2>O que é SHA-512?</h2>

    <p>
        SHA-512 é outro algoritmo pertencente à família SHA-2.
        Ele transforma uma informação em um hash de 512 bits,
        normalmente representado por 128 caracteres hexadecimais.
    </p>


    <div class="info">

        <strong>Características:</strong>

        <p>
            O SHA-512 possui uma saída maior que o SHA-256.
            Assim como outros hashes criptográficos, ele é utilizado
            principalmente para verificação de integridade e outras
            aplicações de segurança.
        </p>

    </div>


    <h2>Teste o SHA-512</h2>

    <form method="POST">

        <label for="texto">
            Digite um texto:
        </label>

        <input
            type="text"
            id="texto"
            name="texto"
            placeholder="Exemplo: Meu texto"
            value="<?= htmlspecialchars($texto) ?>"
            required
        >

        <button type="submit">
            Gerar SHA-512
        </button>

    </form>


    <?php if ($resultado !== ''): ?>

        <div class="resultado">

            <h3>Hash gerado</h3>

            <div class="codigo">
                <?= htmlspecialchars($resultado) ?>
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