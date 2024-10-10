<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<h1>Editar Info Produtos</h1>

<?php
require 'conexao.php';

$id_prod = $_REQUEST["id_prod"];
$dados = [];
$sql = $pdo->prepare("SELECT * FROM Produtos WHERE id_prod = :id_prod");
$sql->bindValue(":id_prod", $id_prod);
$sql->execute();

if ($sql->rowCount() > 0) {
    $dados = $sql->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location:index.php");
    exit;
}
?>

<form action="editando.php" method="POST">
    <input type="hidden" name="id_prod" id="id_prod" value="<?= $dados['id_prod']; ?>">
    <label for="produto">
        Produto <input type="text" name="produto" value="<?= $dados['produto']; ?>">
    </label>
    <label for="quantidade">
        Quantidade <input type="number" name="quantidade" value="<?= $dados['quantidade']; ?>">
    </label>
    <label for="preco">
        Preço <input type="number" name="preco" value="<?= $dados['preco']; ?>">
    </label>
    <button type="submit">Salvar</button>
</form>
</body>

</html>