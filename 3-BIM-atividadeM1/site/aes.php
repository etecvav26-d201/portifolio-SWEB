<?php

$texto = $_POST['texto'] ?? '';

$criptografado = '';
$descriptografado = '';

$chave = 'minha-chave-secreta';

$metodo = 'AES-256-CBC';


if ($texto !== '') {

    /*
     * A chave precisa possuir 32 bytes
     * para o AES-256.
     *
     * hash() transforma nossa chave em
     * exatamente 32 bytes.
     */

    $chaveAES = hash(
        'sha256',
        $chave,
        true
    );


    /*
     * Criação do IV.
     */

    $tamanhoIV = openssl_cipher_iv_length($metodo);

    $iv = random_bytes($tamanhoIV);


    /*
     * CRIPTOGRAFIA
     */

    $dadosCriptografados = openssl_encrypt(
        $texto,
        $metodo,
        $chaveAES,
        OPENSSL_RAW_DATA,
        $iv
    );


    /*
     * Juntamos o IV com os dados
     * criptografados.
     */

    $dadosFinais = $iv . $dadosCriptografados;


    /*
     * Base64 facilita a exibição
     * do resultado.
     */

    $criptografado = base64_encode(
        $dadosFinais
    );


    /*
     * DESCRIPTOGRAFIA
     */

    $dados = base64_decode(
        $criptografado
    );


    $ivRecebido = substr(
        $dados,
        0,
        $tamanhoIV
    );


    $conteudo = substr(
        $dados,
        $tamanhoIV
    );


    $descriptografado = openssl_decrypt(
        $conteudo,
        $metodo,
        $chaveAES,
        OPENSSL_RAW_DATA,
        $ivRecebido
    );
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AES-256 - PHP</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <h1>AES-256-CBC</h1>

    <p>Criptografia simétrica utilizando OpenSSL</p>

</header>


<main>

<section class="pagina">

    <h2>O que é AES?</h2>

    <p>
        AES significa Advanced Encryption Standard.
        É um algoritmo de criptografia simétrica utilizado
        para proteger informações.
    </p>

    <p>
        Na criptografia simétrica, a mesma chave é utilizada
        para criptografar e descriptografar os dados.
    </p>


    <div class="info">

        <strong>Método utilizado:</strong>

        <p>
            AES-256-CBC
        </p>

        <strong>Chave:</strong>

        <p>
            Uma chave secreta é utilizada para realizar
            a criptografia e a descriptografia.
        </p>

    </div>


    <h2>Teste a criptografia</h2>

    <form method="POST">

        <label for="texto">
            Digite um texto:
        </label>

        <input
            type="text"
            id="texto"
            name="texto"
            placeholder="Exemplo: Informação secreta"
            value="<?= htmlspecialchars($texto) ?>"
            required
        >

        <button type="submit">
            Criptografar
        </button>

    </form>


    <?php if ($criptografado !== ''): ?>

        <div class="resultado">

            <h3>Texto criptografado</h3>

            <div class="codigo">
                <?= htmlspecialchars($criptografado) ?>
            </div>


            <h3>Texto descriptografado</h3>

            <div class="codigo">
                <?= htmlspecialchars($descriptografado) ?>
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