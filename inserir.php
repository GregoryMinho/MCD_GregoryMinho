<?php
require 'conexao.php';

$lista = [];
$sql = $pdo->query('SELECT*FROM Produtos');
$lista = [];
if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Banco de Dados</title>
</head>

<body>
    <main>
        <h1>BANCO</h1><br>

        <form action="DT_Mercado_SeuJose.php" method="post">
            <label for="produto">Insira o produto</label>
            <input type="text" name="produto"><br><br>
            <label for="quantidade">Insira a quantidade</label>
            <input type="number" name="quantidade"><br><br>
            <label for="preco">Insira a preço</label>
            <input type="number" name="preco"><br><br>
            <button type="submit">ENVIAR</button>
        </form><br>

    </main>
    <?php
    $produto = $_POST['produto'] ?? null;
    $quantidade = $_POST['quantidade'] ?? null;
    $preco = $_POST['preco'] ?? null;

    if (isset($_POST['ENVIAR'])) {
        $produto = $_POST['produto'] ?? null;
        $quantidade = $_POST['quantidade'] ?? null;
        $preco = $_POST['preco'] ?? null;
    }
    ?>
</body>
</html>