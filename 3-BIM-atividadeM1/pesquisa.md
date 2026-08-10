# Relatório — Criptografia no PHP

## Introdução

A criptografia e as funções de hash são utilizadas para proteger informações em aplicações web. No site desenvolvido, foram apresentados exemplos de **AES, MD5, SHA-256, SHA-512 e `password_hash()`**, mostrando diferentes formas de proteção de dados no PHP.

É importante destacar que o **AES é um algoritmo de criptografia**, enquanto MD5, SHA-256 e SHA-512 são algoritmos de **hash**. O `password_hash()` é uma função específica do PHP para proteger senhas.

## 1. AES

O **AES (Advanced Encryption Standard)** é um algoritmo de criptografia simétrica. Ele utiliza uma chave para criptografar os dados e a mesma chave, ou uma chave derivada dela, para descriptografá-los.

No PHP, pode ser utilizado através das funções `openssl_encrypt()` e `openssl_decrypt()`.

```php
$criptografado = openssl_encrypt($dados, 'AES-256-CBC', $chave, 0, $iv);

$descriptografado = openssl_decrypt($criptografado, 'AES-256-CBC', $chave, 0, $iv);
```

No site desenvolvido, o AES serve como exemplo de proteção de informações que precisam ser recuperadas posteriormente.

## 2. MD5

O **MD5 (Message-Digest Algorithm 5)** é uma função de hash que gera um valor de 128 bits.

No PHP:

```php
$hash = md5('texto');
```

O MD5 é considerado **inseguro para aplicações que exigem proteção criptográfica**, principalmente para senhas, devido às vulnerabilidades conhecidas.

No site, seu uso pode ser demonstrado para fins didáticos e de comparação com algoritmos mais modernos.

## 3. SHA-256

O **SHA-256** pertence à família SHA-2 e gera um hash de 256 bits.

No PHP:

```php
$hash = hash('sha256', 'texto');
```

É mais seguro que o MD5 e pode ser utilizado em situações como verificação de integridade de dados.

Porém, não é recomendado utilizar SHA-256 diretamente para armazenar senhas, pois seu processamento é muito rápido para essa finalidade.

## 4. SHA-512

O **SHA-512** também pertence à família SHA-2 e produz um hash de 512 bits.

No PHP:

```php
$hash = hash('sha512', 'texto');
```

Assim como o SHA-256, o SHA-512 é uma função de hash e não permite recuperar diretamente o conteúdo original.

Pode ser utilizado em aplicações de integridade e outras funções criptográficas, mas não deve ser utilizado sozinho para armazenamento de senhas.



