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
