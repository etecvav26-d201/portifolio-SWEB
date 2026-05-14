<?php

require_once 'config/conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = :id";

$comando = $conexao->prepare($sql);

$comando->execute([
    ':id' => $id
]);

$produto = $comando->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "UPDATE produtos SET
            nome = :nome,
            fabricante = :fabricante,
            preco = :preco,
            estoque = :estoque
            WHERE id = :id";

    $comando = $conexao->prepare($sql);

    $comando->execute([
        ':nome' => $nome,
        ':fabricante' => $fabricante,
        ':preco' => $preco,
        ':estoque' => $estoque,
        ':id' => $id
    ]);

    header('Location: index.php');

    exit();
}

require_once 'includes/header.php';

?>

<main>

    <section class="hero">

        <h1>Editar Produto</h1>

        <p>
            Atualize as informações do produto
            cadastrado no sistema.
        </p>

    </section>

    <div class="card">

        <form method="POST">

            <label for="nome">
                Nome do Produto
            </label>

            <input
                type="text"
                name="nome"
                id="nome"
                value="<?php echo $produto['nome']; ?>"
                required
            >

            <label for="fabricante">
                Fabricante
            </label>

            <input
                type="text"
                name="fabricante"
                id="fabricante"
                value="<?php echo $produto['fabricante']; ?>"
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
                value="<?php echo $produto['preco']; ?>"
                required
            >

            <label for="estoque">
                Estoque
            </label>

            <input
                type="number"
                name="estoque"
                id="estoque"
                value="<?php echo $produto['estoque']; ?>"
                required
            >

            <button type="submit">

                Salvar Alterações

            </button>

        </form>

    </div>

</main>

<?php require_once 'includes/footer.php'; ?>