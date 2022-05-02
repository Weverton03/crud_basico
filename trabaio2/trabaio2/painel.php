<?php
    session_start();
    include 'verifica_login.php';
    include_once 'menu.php';
    ?>
    <body class="dega">
        <h2 class="usua">Olá, <?php echo $_SESSION['usuario'];?></h2>
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/painel.css">    
    </body>

    