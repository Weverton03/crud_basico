<link rel="stylesheet" href="form_login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">





<body class="pintar">
<div class="row">
	<div class="container col-sm-6">
		<h1 class="display-4 text-center table-success">Lista de usário</h1>
		<table class="table table-hover table-striped ">
			<thead >
				<tr >
					<th>ID</th>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Senha</th>
					
				</tr>
			</thead>

			<tbody>
							
				<?php include_once 'consultar.php' ?>
				

			</tbody>

		</table>
		
					<a href="../form_cadastro.php" class="btn">Tela Cadastro</a>
			
	</div>		
</div>	
</body>
