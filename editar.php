<?php 
    // Importa o arquivo com a conexão
    require_once("conexao.php");

    // Pega os valores enviados pelo formulário
    $id = $_POST["id"] ?? "";
    $nome_usuario = $_POST["nome_usuario"] ?? "";
    $email = $_POST["email"] ?? "";
    $senha = md5($_POST["senha"] ?? "");

    // Inserindo um comando sql à uma variável
    $update_sql = "UPDATE usuarios SET nome_usuario='$nome_usuario', email='$email', senha='$senha' WHERE id='$id'";

    // Executa o comando sql
    $resultado = mysqli_query($conn, $update_sql);

    // Verifica se alguma linha foi alterada
    if(mysqli_affected_rows($conn)){
        header("Location: listar.php");
    }else{
        header("Location: listar.php");
    }
?>