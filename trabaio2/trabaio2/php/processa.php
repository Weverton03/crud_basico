<?php 
 
include_once 'conexao.php';

	$nome = isset($_POST['nome']) == true ?$_POST['nome']:"";
	$email = isset($_POST['email']) == true ?$_POST['email']:"";
	$senha = isset($_POST['senha']) == true ?$_POST['senha']:"";

	//inserir dados no banco de dados.

	$sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario) VALUES ('$nome','$email', '$senha')";

		if ($conn->query($sql) == TRUE) {

			header('Location: mostrar.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();