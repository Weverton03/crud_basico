<?php

    $id_usu = $_GET['id'];

    include_once 'conexao.php';

    $sql = "SELECT * FROM usuarios  WHERE id_usuario = $id_usu";

    $result = mysqli_query($conn, $sql);

    $dados = mysqli_fetch_assoc($result);

    $nome_usuario = $dados['nome_usuario'];
    $senha_usuario = $dados['senha_usuario'];
    $id_usuario = $dados['id_usuario'];

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
					<div class="panel-heading text-center display-4">ALTERAR DADOS</div>

    				<form action="alterar.php" method="POST"
    						 method="post" accept-charset="utf-8" class="form-group">

    					<label for="id">ID:</label>
    					<input type="text" readonly name="id_usuario" value="<?php echo $id_usuario?>" class="form-control">
    						
    					<label for="nome">Nome:</label>
    					<input type="text" name="nome_usuario" value="<?php echo $nome_usuario?>" class="form-control">

    					<label for="senha">Senha:</label>
    					<input type="password" name="senha_usuario" value="<?php echo $senha_usuario?>" class="form-control">

    					<br>
    					<input type="submit" name="btn" value="ALTERAR" class="btn btn-success">
    					<a href="mostrar.php" class="btn red">Cancelar</a>

    				</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>