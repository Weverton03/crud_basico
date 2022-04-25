<?php
    if(!$_SESSION['usuario']){
        session_start();
        header('location: formulario_login_usuario.php');
        exit();
    }