<?php
    include_once 'conexao.php';

    $id_empresa = $_GET['id'];
    
    $sql = "DELETE FROM empresas WHERE id_empresa = $id_empresa";

    $result = mysqli_query($conn, $sql);

    if($result == true){
        echo "excluido com sucesso";

    }else{
        echo "erro ao excluir";

    }

    ?>