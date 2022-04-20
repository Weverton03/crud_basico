<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="row">
	<div class="container col-sm-6">
		<h1 class="display-4 text-center">Consulta de Registro</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th >ID</th>
					<th>Nome</th>
					<th>Senha</th>
				</tr>
			</thead>

			<tbody>
							
				<?php include_once 'consultar.php' ?>
				<tr>
					<a href="form_cadastro.php" class="btn">Tela Cadastro</a>
				</tr>

			</tbody>

		</table>
	</div>		
</div>	