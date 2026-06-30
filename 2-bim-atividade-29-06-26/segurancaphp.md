# Integrantes

`Alex dos Santos Apolinario`

`Ana Carolina Bernal Santos`

`Arthur Alexandre Dias Silva`

`Helena Bianquini Carriço`

## Introdução

A segurança da informação é um dos aspectos mais importantes no desenvolvimento de 
aplicações web. Com o crescimento do uso da Internet para serviços bancários, comércio 
eletrônico, redes sociais e sistemas corporativos, tornou-se essencial proteger dados 
contra acessos não autorizados, vazamentos e ataques cibernéticos.

A linguagem PHP disponibiliza diversos recursos para criptografia, geração de hashes, 
codificação de dados e proteção contra vulnerabilidades comuns. Nesta pesquisa serão 
apresentados os principais conceitos e funções utilizadas para aumentar a segurança 
de aplicações desenvolvidas em PHP.
![Seguranca PHP](imagens/phpseguranca.jfif)

## 1. Segurança em Aplicações Web

### O que é segurança da informação?

A segurança da informação é o conjunto de práticas, tecnologias e procedimentos utilizados 
para proteger informações contra acesso, alteração, divulgação ou destruição não autorizada.

### Por que proteger os dados dos usuários?

A proteção dos dados garante a privacidade dos usuários, evita prejuízos financeiros, reduz 
riscos de fraudes e fortalece a confiança nos sistemas.

### Principais riscos em aplicações web

Vazamento de dados, roubo de senhas, SQL Injection, Cross-Site Scripting (XSS), 
Cross-Site Request Forgery (CSRF), ataques de força bruta e sequestro de sessões.

## 2. Criptografia, Hash e Codificação

### Criptografia

A criptografia transforma informações legíveis em dados ilegíveis utilizando algoritmos e 
chaves específicas. Apenas quem possui a chave correta pode recuperar a informação original.

**Exemplos de utilização:**

Comunicação segura via HTTPS, proteção de arquivos sigilosos e transações bancárias.

### Hash

Hash é um processo matemático que transforma uma informação em uma sequência única de caracteres. 
É um processo unidirecional, ou seja, não pode ser revertido.

**Exemplos de utilização:**

Armazenamento de senhas e verificação de integridade de arquivos.

### Codificação (Encoding)

Codificação é a conversão de dados para outro formato visando armazenamento ou transmissão.

**Exemplos de utilização:**

Conversão de arquivos para Base64 e envio de imagens em APIs.

### Comparação

| Técnica | Pode ser revertida? | Objetivo |
|----------|----------|----------|
| Criptografia | Sim | Proteger dados |
| Hash | Não | Verificar e armazenar informações |
| Codificação | Sim | Compatibilidade e transmissão |

## 3. Funções de Hash no PHP

### password_hash()

Função utilizada para gerar hashes seguros de senhas.

**Para que serve?**

Armazenar senhas de forma segura no banco de dados.

**Quando utilizar?**

Durante o cadastro ou alteração de senha de usuários.

### password_verify()

Função responsável por verificar se uma senha corresponde ao hash armazenado.

**Para que serve?**

Validar credenciais durante o login.

**Quando utilizar?**

Durante o processo de autenticação do usuário.

### hash()

Função genérica utilizada para gerar hashes utilizando diversos algoritmos.

**Para que serve?**

Verificação de integridade de dados e arquivos.

**Quando utilizar?**

Quando for necessário gerar hashes SHA-256, SHA-512 e outros algoritmos.

### Algoritmos recomendados atualmente

- Bcrypt;
- Argon2i;
- Argon2id.

## 4. Funções de Codificação

### base64_encode()

Converte dados para o formato Base64.

### base64_decode()

Recupera os dados originalmente codificados em Base64.

### Situações de uso

Transmissão de arquivos em APIs, conversão de imagens para texto e armazenamento temporário de dados binários.

### Por que Base64 não é criptografia?

Base64 apenas converte os dados para outro formato. Qualquer pessoa pode recuperar a informação original utilizando Base64 Decode. Portanto, não oferece segurança nem proteção dos dados.

## 5. Criptografia no PHP

### O que é OpenSSL?

OpenSSL é uma biblioteca amplamente utilizada para implementação de recursos de criptografia e comunicação segura.

### Para que serve?

- Criptografar informações;
- Descriptografar dados;
- Gerenciar certificados digitais;
- Implementar conexões HTTPS.

### Principais funções

| Função | Objetivo |
|----------|----------|
| openssl_encrypt() | Criptografar dados |
| openssl_decrypt() | Descriptografar dados |
| openssl_random_pseudo_bytes() | Gerar dados aleatórios |

## 6. Proteção de Senhas

### Como uma senha deve ser armazenada corretamente?

Utilizando funções de hash seguras, como `password_hash()`, nunca em texto puro.

### Por que nunca devemos salvar senhas em texto puro?

Caso o banco de dados seja comprometido, todas as senhas ficarão visíveis aos invasores.

### O que é Salt?

Salt é uma sequência aleatória adicionada à senha antes da geração do hash, dificultando ataques por tabelas pré-computadas.

### O que torna um algoritmo de hash seguro?

Uso de algoritmos modernos, inclusão automática de salt, alto custo computacional e resistência a ataques de força bruta.

## 7. Proteção contra Ataques

### SQL Injection

Ataque que consiste na inserção de comandos SQL maliciosos em formulários ou URLs.

#### Formas de prevenção

- Prepared Statements;
- PDO;
- Validação de entradas.

### Cross-Site Scripting (XSS)

Ataque que injeta códigos JavaScript maliciosos em páginas web.

#### Formas de prevenção

- Uso de `htmlspecialchars()`;
- Sanitização de entradas;
- Validação de dados.

### Cross-Site Request Forgery (CSRF)

Ataque que força usuários autenticados a executar ações sem autorização.

#### Formas de prevenção

- Tokens CSRF;
- Verificação de origem das requisições;
- Sessões protegidas.

## 8. Aplicações Práticas

Esses recursos são utilizados em diversos sistemas modernos.

| Sistema | Importância |
|----------|----------|
| Sistemas de Login | Proteção de credenciais |
| Comércio Eletrônico | Segurança de pagamentos |
| Internet Banking | Proteção financeira |
| Redes Sociais | Privacidade dos usuários |
| Sistemas Escolares | Proteção de dados acadêmicos |
| Gerenciamento de Usuários | Controle de acesso |

A utilização dessas técnicas reduz significativamente os riscos de vazamento de dados e acessos não autorizados.

## 9. Boas Práticas de Segurança

- Validar todas as entradas do usuário;
- Utilizar consultas preparadas (Prepared Statements);
- Utilizar HTTPS;
- Armazenar senhas com `password_hash()`;
- Proteger sessões;
- Limitar tentativas de login;
- Atualizar regularmente o PHP;
- Proteger arquivos de configuração;
- Implementar controle de acesso adequado.

## 10. Conclusão

A segurança em aplicações web é fundamental para proteger informações sensíveis e garantir a confiabilidade dos sistemas. Durante esta pesquisa foi possível compreender a diferença entre criptografia, hash e codificação, além de conhecer os principais recursos disponibilizados pelo PHP para proteção de dados.

Entre os recursos estudados, destaca-se o uso de `password_hash()` e `password_verify()`, que oferecem uma maneira segura de armazenar e validar senhas. O grupo também adquiriu conhecimentos sobre prevenção de ataques, boas práticas de desenvolvimento seguro e utilização da biblioteca OpenSSL para criptografia de informações.
