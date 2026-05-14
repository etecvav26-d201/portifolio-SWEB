<?php

require_once 'config/conexao.php';

$sql = "SELECT * FROM produtos ORDER BY id DESC";

$resultado = $conexao->query($sql);

$produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);

require_once 'includes/header.php';

?>

<main>


    <div class="acoes-topo">

        <a href="cadastro.php" class="btn botao-cadastro">
            Cadastrar Produto
        </a>

    </div>

    <section class="cards">

        <?php foreach($produtos as $produto){ ?>

            <div class="card">

                <h2>
                    <?php echo $produto['nome']; ?>
                </h2>

                <p>

                    <strong>Fabricante:</strong>

                    <?php echo $produto['fabricante']; ?>

                </p>

                <p>

                    <strong>Preço:</strong>

                    R$
                    <?php echo number_format($produto['preco'], 2, ',', '.'); ?>

                </p>

                <p>

                    <strong>Estoque:</strong>

                    <?php echo $produto['estoque']; ?>

                </p>

                <br>

                <a
                    href="editar.php?id=<?php echo $produto['id']; ?>"
                    class="btn"
                >
                    Editar
                </a>

                <a
                    href="excluir.php?id=<?php echo $produto['id']; ?>"
                    class="btn excluir"
                >
                    Excluir
                </a>

            </div>

        <?php } ?>

    </section>

</main>

<?php require_once 'includes/footer.php'; ?>