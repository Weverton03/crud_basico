<?php
    if(!$_SESSION['usuario']){
        session_start();
        header('formulario_login_usuario.php');
        exit();
    }