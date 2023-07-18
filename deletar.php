<?php
    // Importa o arquivo com a conexão
    require_once("conexao.php");

    // Pega o ID enviado pela URL
    $id = $_GET["id"] ?? "";

    // Verifica se algum valor foi atribuído ao id
    if(empty($id)){
        header("Location: listar.php");
    }else{
        // Inserindo um comando sql para deletar uma linha da tabela
        $delete_sql = "DELETE FROM usuarios WHERE id='$id'";

        // Executando o comando sql no banco de dados de $conn
        $resultado = mysqli_query($conn, $delete_sql);

        // Verifica se alguma linha foi alterada, para saber se a exclusão foi realizada com sucesso
        if(mysqli_affected_rows($conn)){
            header("Location: listar.php");
        }else{
            header("Location: listar.php");
        }
    }
?>