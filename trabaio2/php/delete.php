<?php
    include_once 'conexao.php';

    $id_usuario = $_GET['id'];
    
    $sql = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";

    $result = mysqli_query($conn, $sql);

    if($result == true){
        echo "excluido com sucesso";

    }else{
        echo "erro ao excluir";

    }

    ?>