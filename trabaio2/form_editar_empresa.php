<?php

    $id_emp = $_GET['id'];

    include_once 'conexao.php';

    $sql = "SELECT * FROM empresas  WHERE id_empresa = $id_emp";

    $result = mysqli_query($conn, $sql);

    $dados = mysqli_fetch_assoc($result);

    $nome_empresa = $dados['nome_empresa'];
    $cnpj_empresa = $dados['cnpj_empresa'];
    $classificacao_empresa = $dados['classificacao_empresa'];
    $id_empresa = $dados['id_empresa'];

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

    				<form action="alterar_empresa.php" method="POST"
    						 method="post" accept-charset="utf-8" class="form-group">

    					<label for="id">ID:</label>
    					<input type="text" readonly name="id_empresa" value="<?php echo $id_empresa?>" class="form-control">
    						
    					<label for="nome">Nome da empresa:</label>
    					<input type="text" name="nome_empresa" value="<?php echo $nome_empresa?>" class="form-control">

    					<label for="cnpj">CNPJ da empresa:</label>
    					<input type="text" name="cnpj_empresa" value="<?php echo $cnpj_empresa?>" class="form-control">

                        <label for="classificacao">Classificação da empresa:</label>
    					<input type="text" name="classificacao_empresa" value="<?php echo $classificacao_empresa?>" class="form-control">

    					<br>
    					<input type="submit" name="btn" value="ALTERAR" class="btn btn-success">
    					<a href="mostrar_empresa.php" class="btn red">Cancelar</a>

    				</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>