<?php
    require 'conexao.php';
    $id_prod = $_REQUEST ["id_prod"];

    $sql = $pdo->prepare ("DELETE FROM Produtos WHERE id_prod = :id_prod");
    $sql-> bindValue (":id_prod", $id_prod);
    $sql->execute();

    header("Location: index.php");
?>