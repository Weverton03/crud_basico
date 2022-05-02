<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/form_login.css">

</head>
<body class="pintar">
	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading display-4 text-center">Login</div>
                    <?php
                        if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="aviso">ERRO: Usuário ou senha invalidos</div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
    					<form action="login.php" method="post" accept-charset="utf-8" class="form-group">
    						<label for="nome">Nome:</label>
    						<input type="text" name="nome" class="form-control" required>
    						
    						<label for="senha">Senha:</label>
    						<input type="pasword" name="senha" class="form-control" required>


    						<br>
    						<input type="submit" name="btn" value="Logar" class="btn btn-success">

    						

   						</form>
				</div>
			</div>
		</div>			
	</div>
</body>
