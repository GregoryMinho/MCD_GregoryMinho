<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>

<body>

    <?php
    require 'conexao.php'
    ?>

    <?php
    $sql = $pdo->query("SELECT * FROM Produtos");

    $lista = [];
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h1 style="font-family: Arial, Helvetica, sans-serif;">Sistemas de Cadastro de Produtos</h1>

    <table border="1px">
        <tr>
            <td>ID</td>
            <td>PRODUTO</td>
            <td>QUANTIDADE</td>
            <td>PREÇO</td>
        </tr>

        <?php foreach ($lista as $dados) : ?>
            <tr>
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['produtos']; ?></td>
                <td><?php echo $dados['quantidade']; ?></td>
                <td><?php echo $dados['preco']; ?></td>
                <td>
                    <a href="editar.php?id=<?= $dados['id']; ?>">[Editar]</a>
                    <a href="excluir.php?id=<?= $dados['id']; ?>">[Excluir]</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>