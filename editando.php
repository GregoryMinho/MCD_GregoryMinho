<?php 
    require 'conexao.php'; 
    $id_prod = $_POST['id_prod'];
    $produto = $_POST['produto'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    
    $sql = $pdo->prepare("UPDATE Produtos SET produto = :produto , quantidade = :quantidade , preco = :preco WHERE id_prod = $id_prod");
    $sql->bindValue(':produto',$produto);
    $sql->bindValue(':quantidade',$quantidade);
    $sql->bindValue(':preco',$preco);

    $sql->execute();
    
header("Location:index.php");

?>