<?php
require 'conexao.php';

$produto = $_POST['produto'] ?? null;
$quantidade = $_POST['quantidade'] ?? null;
$preco = $_POST['preco'] ?? null;

if ($nome && $email && $preco) {
    $sql = $pdo->prepare("INSERT INTO Produtos (produto, quantidade, preco) VALUES (:produto, :quantidade, :preco)");
    $sql->bindValue(':produto', $produto);
    $sql->bindValue(':quantidade', $quantidade);
    $sql->bindValue(':preco', $preco);

    if ($sql->execute()) {
        header("Location: inserir.php");
    } else {
        echo "Error: " . $sql->errorInfo()[2];
    }
} else {
    echo "NULO";
}
?>