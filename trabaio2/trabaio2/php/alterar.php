<?php

    include_once 'conexao.php';

    $id_usuario = $_POST["id_usuario"];
    $nome_usuario = $_POST["nome_usuario"];
    $email_usuario = $_POST["email_usuario"];
    $senha_usuario = $_POST["senha_usuario"];

    $sql = "UPDATE usuarios SET nome_usuario = '$nome_usuario', email_usuario = '$email_usuario', senha_usuario = '$senha_usuario' WHERE id_usuario = $id_usuario";

    $result = mysqli_query($conn, $sql);

    if($result == true){
        echo "alterado com sucesso";

    }else{
        echo "erro ao alterar";

    }
