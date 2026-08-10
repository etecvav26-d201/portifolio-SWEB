<?php

$texto = $_POST['texto'] ?? '';
$resultado = '';

if ($texto !== '') {
    $resultado = hash('sha256', $texto);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SHA-256 - PHP</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <h1>SHA-256</h1>

    <p>Secure Hash Algorithm 256 bits</p>

</header>


<main>

<section class="pagina">

    <h2>O que é SHA-256?</h2>

    <p>
        SHA-256 é um algoritmo da família SHA-2 utilizado para gerar
        valores de hash. O resultado possui 256 bits, normalmente
        representados por 64 caracteres hexadecimais.
    </p>


    <div class="info">

        <strong>Tipo:</strong>

        <p>
            SHA-256 é uma função de hash. Isso significa que o resultado
            não deve ser tratado como uma informação que possa ser
            descriptografada para recuperar o texto original.
        </p>

    </div>


    <h2>Teste o SHA-256</h2>

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
            Gerar SHA-256
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