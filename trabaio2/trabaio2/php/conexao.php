<?php 
	


	$conn = mysqli_connect("localhost", "wellington", "590712", "cobaia3"); //or die ("Erro de Conexão.");
	//$conn->set_charset('utf8'); //Configurar acentuação dentro do banco de dados.

	if(!$conn){
			die("Falha na conexao: " . mysqli_connect_error());
		}else{
		
		//echo "Conexão realizada com sucesso...";
	}

?>