<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criptografia PHP</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <header>
            <h1>Criptografia no PHP</h1>
            <p>Conheça e teste diferentes métodos de segurança disponíveis no PHP.</p>
        </header>

        <main>

            <section class="introducao">

                <h2>Escolha um método</h2>

                <p>
                    O PHP possui diferentes funções e extensões relacionadas à
                    segurança de dados. Nesta aplicação você poderá conhecer
                    alguns dos principais métodos e testar seu funcionamento.
                </p>

            </section>


            <section class="cards">

                <a href="md5.php" class="card">
                    <h2>MD5</h2>
                    <p>
                        Função de hash que transforma um texto em uma sequência
                        de 128 bits.
                    </p>
                    <span>Conhecer</span>
                </a>

                <a href="sha256.php" class="card">
                    <h2>SHA-256</h2>
                    <p>
                        Algoritmo da família SHA-2 que gera um hash de 256 bits.
                    </p>
                    <span>Conhecer</span>
                </a>

                <a href="sha512.php" class="card">
                    <h2>SHA-512</h2>
                    <p>
                        Algoritmo SHA-2 que produz um hash de 512 bits.
                    </p>
                    <span>Conhecer</span>
                </a>

                <a href="password.php" class="card">
                    <h2>Password Hash</h2>
                    <p>
                        Método recomendado pelo PHP para armazenar senhas
                        de forma segura.
                    </p>
                    <span>Conhecer</span>
                </a>

                <a href="aes.php" class="card">
                    <h2>AES-256-CBC</h2>
                    <p>
                        Criptografia simétrica utilizando a extensão OpenSSL.
                    </p>
                    <span>Conhecer</span>
                </a>

            </section>

        </main>

    </body>
</html>
