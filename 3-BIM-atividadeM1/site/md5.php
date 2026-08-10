<?php

$texto = $_POST['texto'] ?? '';
$resultado = '';

if ($texto !== '') {
    $resultado = md5($texto);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MD5 - Criptografia PHP</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <h1>MD5</h1>

    <p>Message-Digest Algorithm 5</p>

</header>


<main>

<section class="pagina">

    <h2>O que é MD5?</h2>

    <p>
        MD5 é uma função de hash desenvolvida para transformar uma
        informação de tamanho variável em uma sequência de tamanho fixo.
        O resultado possui 128 bits, normalmente representados por
        32 caracteres hexadecimais.
    </p>

    <div class="info">

        <strong>Importante:</strong>

        <p>
            Atualmente, MD5 não é considerado seguro para aplicações
            que necessitam de proteção contra colisões. Por isso,
            não deve ser utilizado para armazenar senhas.
        </p>

    </div>


    <h2>Como funciona?</h2>

    <p>
        Ao fornecer um texto, o PHP aplica o algoritmo MD5 e produz
        um hash. Mesmo que dois textos sejam muito semelhantes,
        seus hashes normalmente serão completamente diferentes.
    </p>


    <h2>Teste o MD5</h2>

    <form method="POST">

        <label for="texto">
            Digite um texto:
        </label>

        <input
            type="text"
            id="texto"
            name="texto"
            placeholder="Exemplo: senha123"
            value="<?= htmlspecialchars($texto) ?>"
            required
        >

        <button type="submit">
            Gerar Hash MD5
        </button>

    </form>


    <?php if ($resultado !== ''): ?>

        <div class="resultado">

            <h3>Resultado</h3>

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