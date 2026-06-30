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
