<?php

require_once 'config/conexao.php';

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "INSERT INTO produtos
            (nome, fabricante, preco, estoque)
            VALUES
            (:nome, :fabricante, :preco, :estoque)";

    $comando = $conexao->prepare($sql);

    $comando->execute([
        ':nome' => $nome,
        ':fabricante' => $fabricante,
        ':preco' => $preco,
        ':estoque' => $estoque
    ]);

    $mensagem = "Produto cadastrado com sucesso!";
}

require_once 'includes/header.php';

?>

<main>

    <section class="hero">

        <h1>Cadastro de Produtos</h1>

        <p>
            Adicione novos medicamentos e produtos
            ao sistema da Farmácia VAV.
        </p>

    </section>

    <div class="card">

        <?php if ($mensagem != '') : ?>

            <div class="mensagem-sucesso">

                <?php echo $mensagem; ?>

            </div>

        <?php endif; ?>

        <form method="POST">

            <label for="nome">
                Nome do Produto
            </label>

            <input
                type="text"
                name="nome"
                id="nome"
                placeholder="Digite o nome do produto"
                required
            >

            <label for="fabricante">
                Fabricante
            </label>

            <input
                type="text"
                name="fabricante"
                id="fabricante"
                placeholder="Digite o fabricante"
                required
            >

            <label for="preco">
                Preço
            </label>

            <input
                type="number"
                step="0.01"
                name="preco"
                id="preco"
                placeholder="Digite o preço"
                required
            >

            <label for="estoque">
                Estoque
            </label>

            <input
                type="number"
                name="estoque"
                id="estoque"
                placeholder="Quantidade disponível"
                required
            >

            <button type="submit">

                Cadastrar Produto

            </button>

        </form>

    </div>

</main>

<?php require_once 'includes/footer.php'; ?>