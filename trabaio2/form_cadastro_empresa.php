
<?php 
	include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading display-4 text-center">Cadastro de empresa</div>
    					<form action="processa_empresa.php" method="post" accept-charset="utf-8" class="form-group">
    						<label for="nome_empresa">Nome da empresa:</label>
    						<input type="text" name="nome_empresa" class="form-control" required>
    						
    						<label for="cnpj_empresa">CNPJ da empresa:</label>
    						<input type="text" name="cnpj_empresa" class="form-control" required>

                            <label for="classificacao_empresa">Classificação da empresa:</label>
    						<input type="text" name="classificacao_empresa" class="form-control" required>


    						<br>
    						<input type="submit" name="btn" value="Cadastrar" class="btn btn-success">

    						<a href="mostrar_empresa.php" class="btn btn-info">Consultar</a>

   						</form>
				</div>
			</div>
		</div>			
	</div>
</body>
