<?php

    include_once 'conexao.php';

    $sql = "SELECT * FROM usuarios";

    $result = mysqli_query($conn, $sql);

    while($dados = mysqli_fetch_assoc($result)){
        $id_usuario = $dados['id_usuario'];
        $nome_usuario = $dados['nome_usuario'];
        $senha_usuario = $dados['senha_usuario'];

        echo "<tr>";
            echo "<td>$id_usuario<td>$nome_usuario<td>$senha_usuario";
            echo "<td><a href='form_editar.php?id=$id_usuario' class='btn'>Editar</a>";
            echo "<td><a href='delete.php?id=$id_usuario' class='btn'>Excluir</a>";
        echo "<tr>";

    }