<?php
    // Importa o arquivo com a conexão
    require_once ("conexao.php");

    // Pega os valores enviados pelo usuário e os atribui a variáveis 
    $nome_usuario = $_POST["nome_usuario"] ?? "";
    $email = $_POST["email"] ?? "";
    $senha = md5($_POST["senha"] ?? "");

    // Inserindo um comando sql a uma variável
    $insert_sql = "INSERT INTO usuarios(nome_usuario, email, senha) VALUES ('$nome_usuario', '$email', '$senha')";

    // Executa o comando sql no banco de dados que fora atribuído à $conn
    $resultado = mysqli_query($conn, $insert_sql);

    // Verifica o último id gerado pela função INSERT, para saber se algum dado foi cadastrado com sucesso. Após isso, nos manda para a página de cadastro novamente
    if(mysqli_insert_id($conn)){
        header("Location: index.php");
    }else{
        header("Location: index.php");
    }
?>