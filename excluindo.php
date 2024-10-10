<?php
    require 'conexao.php';

    $id_prod =  $_POST['id_prod'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sql = $pdo->prepare("DELETE from Produtos WHERE id_prod = :id_prod");
    $sql->bindValue(':id_prod', $id_prod);

    $sql->execute();

    header("Location:index.php");
?>
