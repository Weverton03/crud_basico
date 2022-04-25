<?php
    session_start();
    session_destroy();
    header('location: formulario_login_usuario.php');
    exit();