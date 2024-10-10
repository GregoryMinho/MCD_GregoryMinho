<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>

<body>
    <h1>Excluir Produtos</h1>

    <?php
    require 'conexao.php';
    $id_prod = $_REQUEST['id_prod'];
    $dados = [];

    $sql = $pdo->prepare("SELECT * FROM Produtos WHERE id_prod = :id_prod");
    $sql->bindValue(":id_prod",  $id_prod);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $dados = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location:index.php");
        exit;
    }
    ?>

    <h2>Deseja excluir o produto?</h2>

    <form action="excluindo.php">
        <input type="hidden" name="id_prod" id="id_prod" value="<?= $dados['id_prod']; ?>">
        <label for="produto">
            Produto <input type="text" name="produto" id="produto" value="<?= $dados['produto']; ?>">
        </label>
        <label for="quantidade">
            Quantidade <input type="number" name="quantidade" id="quantidade" value="<?= $dados['quantidade']; ?>">
        </label>
        <label for="preco">
            Preço <input type="number" name="preco" id="preco" value="<?= $dados['preco']; ?>">
        </label>
        <button type="submit">Excluir</button>
    </form>
    
    <a href="index.php">Voltar</a>
</body>

</html>