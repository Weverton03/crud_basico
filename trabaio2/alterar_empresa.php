<?php

    include_once 'conexao.php';

    $id_empresa = $_POST["id_empresa"];
    $nome_empresa = $_POST["nome_empresa"];
    $cnpj_empresa = $_POST["cnpj_empresa"];
    $classificacao_empresa = $_POST["classificacao_empresa"];

    $sql = "UPDATE empresas SET nome_empresa = '$nome_empresa', cnpj_empresa = '$cnpj_empresa', classificacao_empresa = '$classificacao_empresa' WHERE id_empresa = $id_empresa";

    $result = mysqli_query($conn, $sql);

    if($result == true){
        echo "alterado com sucesso";

    }else{
        echo "erro ao alterar";

    }
