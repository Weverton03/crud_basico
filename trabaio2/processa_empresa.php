<?php 
 
include_once 'conexao.php';

	$nome = isset($_POST['nome_empresa']) == true ?$_POST['nome_empresa']:"";
	$cnpj = isset($_POST['cnpj_empresa']) == true ?$_POST['cnpj_empresa']:"";
    $classificacao = isset($_POST['classificacao_empresa']) == true ?$_POST['classificacao_empresa']:"";

	//inserir dados no banco de dados.

	$sql = "INSERT INTO empresas (nome_empresa, cnpj_empresa, classificacao_empresa) VALUES ('$nome', '$cnpj', '$classificacao')";

		if ($conn->query($sql) == TRUE) {

			header('Location: mostrar_empresa.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();