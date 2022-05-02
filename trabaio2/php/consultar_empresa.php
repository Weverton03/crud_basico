<?php
    
    include_once 'conexao.php';

    $sql = "SELECT * FROM empresas";

    $result = mysqli_query($conn, $sql);

    while($dados = mysqli_fetch_assoc($result)){
        $id_empresa = $dados['id_empresa'];
        $nome_empresa = $dados['nome_empresa'];
        $cnpj_empresa = $dados['cnpj_empresa'];
        $classificacao_empresa = $dados['classificacao_empresa'];
        $vagas_empresa = $dados['vagas_empresa'];

        

        echo "<tr>";
            echo "<td>$id_empresa<td>$nome_empresa<td>$cnpj_empresa<td>$classificacao_empresa<td>$vagas_empresa";
              echo "<td><a href='form_editar_empresa.php?id=$id_empresa' class='btn'>Editar</a>";
              echo "<td><a href='delete_empresa.php?id=$id_empresa' class='btn'>Excluir</a>";
        echo "<tr>";

    }