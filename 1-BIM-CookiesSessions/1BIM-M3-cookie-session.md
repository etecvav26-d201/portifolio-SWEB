## Instituição 
`ETEC Vasco Antônio Venchiarutti`

---

## Curso
`Informática para Internet`

---

## Turma
`2°D`

---

## Autores
- `Alex dos Santos Apolinario`
- `Ana Carolina Bernal Santos`
- `Arthur Alexandre Dias Silva`
- `Helena Bianquini Carriço`

---

# Exercícios

## Exercício 1 - Pergunta conceitual - Explique a diferença entre cookies e sessions no PHP
Os Cookies e Sessions no PHP são sistemas que armazenam informações do usuário, se diferenciando na forma que são armazenados. Os Cookies armazenam a informação no próprio navegador do usuário, sendo úteis para guardar informações simples e não confidenciais, já que podem ser facilmente vistos e modificados. As Sessions criam um espaço para armazenar os dados do usuário e então associa eles a um ID próprio e único, sendo enviado ao navegador pelos cookies, em que a cada pedido, o servidor utiliza desse ID para recuperar os dados armazenados, como elas ficam no servidor, são muito mais seguras para informações sensíveis. Em situações para guardar idiomas de sites, temas do site, lembrar usuário e etc é recomendado o uso de Cookies por sua simplicidade, enquanto para armazenar logins, permissões e compras é preferível o uso de Sessions.

![Imagem dos cookies e sessions](./Exercicio3/imagemcookies.png)

---

## Exercício 2 - Pergunta de aplicação
Para uma loja virtual, pode ser utilizado ambos os Cookies como as Sessions para compor a funcionalidade e a segurança do site, para manter o usuário logado e armazenar itens no carrinho seriam utilizado as sessions, para que quando o usuário realizasse login, o servidor criaria uma sessão com as informações com o ID do usuário, e então no navegador ficando armazenado apenas o Cookie do identificador da sessão, de modo que os dados não conseguissem serem facilmente acessados. Para as preferências do usuário, seriam utilizado os Cookies, já que são informações que não são sensíveis e precisam continuar no site mesmo após fecharmos ele, sem necessidade também de armazenar em um servidor esses dados.

![Imagem dos cookies](./exercicio3/cokiessesions.png)

---

## Exercício 3 - Pergunta de investigação
Quando aberto o arquivo pela primeira vez, a mensagem que apareceu foi “Cookie ainda não disponível.”, e então quando reiniciei o Site, a mensagem exibida foi "Valor do Cookie: 1", para depois quando limpado os Cookies do site, voltar a mensagem inicial de Cookies ainda não disponíveis. Na primeira vez que entrei no Site, isso aconteceu porque "setcookie()" apenas envia o Cookie para o navegador, mas não sendo devolvido para o servidor imediatamente, então é por isso que quando atualizado a pagina, o navegador já possuia o acesso aos Cookies, mudando a mensagem para "Valor do Cookie: 1", já que primeiro o servidor envia o Cookie, e depois o navegador guarda ele.

![Imagem do Site php](./exercicio3/cookies.png)

---

## Exercício 4 — Pergunta de reflexão
As sessions são mais utilizadas para a autentificação de usuários porque oferecem justamente mais segurança do que os cookies, já que nas sessions os dados ficam guardados dentro do servidor, e não no navegador, reduzindo o risco de exposição a dados como senhas, emails e etc, já que nos cookies a informação poderia ser facilmente acessada e modificadas pelo usuário ou por hackers, diferentemente das sessions, em que os dados ficam no servidor, sendo menor o risco de exposição desses dados.