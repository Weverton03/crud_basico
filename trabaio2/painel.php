<?php
    session_start();
    include 'verifica_login.php';
    include_once 'menu.php';
    ?>

    <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
    <link rel="stylesheet" href="css/menu.css">