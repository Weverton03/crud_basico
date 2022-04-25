<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="row">
	<div class="container col-sm-6">
		<h1 class="display-4 text-center">Listar de empresas</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th >ID</th>
					<th>Nome da empresa</th>
					<th>cnpj</th>
                    <th>classificação</th>
				</tr>
			</thead>

			<tbody>
							
				<?php include_once 'consultar_empresa.php' ?>
				

			</tbody>

		</table>
		
					<a href="form_cadastro_empresa.php" class="btn">Tela Cadastro</a>
			
	</div>		
</div>	