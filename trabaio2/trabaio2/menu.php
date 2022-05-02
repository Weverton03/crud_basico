<?php ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/69c6660b15.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/menu.css">
    <script src="js/menu.js"></script>
    <title>Menu</title>
</head>
<body>
    <header>
        <a href="#" class="btn-abrir" onclick="abrirMenu()">&#9776; Abrir</a>
        <h4 class="beon">BEON-EMPRESAS</h4>
        <img src="img/logoteste3.png" alt="">
        

    </header>
    

    <nav id="menu">
        
        <a href="#" onclick="fecharMenu()">&times; Fechar</a>
        <a href="php/mostrar.php"> <i class="fa-solid fa-list-check"></i> lista de usuários</a>
        <a href="php/mostrar_empresa.php"><i class="fa-solid fa-building"></i> lista de empresas</a>
        <a href="logout.php"> <i class="fa-solid fa-arrow-right-from-bracket"></i> sair</a>

    </nav>

    
</body>
</html>