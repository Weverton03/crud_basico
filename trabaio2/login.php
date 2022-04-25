<?php
    session_start();
    include_once 'conexao.php';

    if(empty($_POST['nome']) || empty($_POST['senha'])) {
        header('location: formulario_login_usuario.php');
        exit();
    }

    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    $query = "SELECT id_usuario, nome_usuario FROM usuarios WHERE nome_usuario = '{$nome}' AND senha_usuario = '{$senha}'";
    //$query = "select * from usuarios where nome_usuario = '$nome' and senha_usuario = '$senha'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        $_SESSION['usuario'] = $nome;
        header('Location: painel.php');
        exit();
    }else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: formulario_login_usuario.php');
        exit();
    }