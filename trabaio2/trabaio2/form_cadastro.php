
<?php 
	include_once 'php/conexao.php';
	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/form_ca.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/menu.css">


</head>
<body class="box">
	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading display-4 text-center">Cadastro do usuário</div>
    					<form action="php/processa.php" method="post" accept-charset="utf-8" class="form-group">
    						<label for="nome">Nome:</label>
    						<input type="text" name="nome" class="form-control" required>
    						
							<label for="email">E-mail:</label>
    						<input type="email" name="email" class="form-control" required>

    						<label for="senha">Senha:</label>
    						<input type="pasword" name="senha" class="form-control" required>


    						<br>
    						<input type="submit" name="btn" value="Cadastrar" class="btn btn-success">

    						<a href="php/mostrar.php" class="btn btn-info">Consultar</a>

   						</form>
				</div>
			</div>
		</div>			
	</div>
</body>
