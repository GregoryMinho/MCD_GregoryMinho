<?php
    require 'conexao.php';
    $id_prod = $_POST['id_prod'];

    $sql = $pdo->prepare ("DELETE FROM Produtos WHERE id_prod = :id_prod");
    $sql-> bindValue (":id_prod", $id_prod);
    $sql->execute();

    echo "Registro excluído com sucesso!";
    echo "<br><a href='index.php'>Voltar para a tabela</a>";
?>
