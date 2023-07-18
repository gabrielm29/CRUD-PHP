<?php 
    // Dados da Conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco_de_dados = "crud_teste";
    
    // Realizando a Conexão criando um objeto
    $conn = mysqli_connect($servidor, $usuario, $senha, $banco_de_dados);

    // Verifica se ocorreu algum erro na conexão
    if(!$conn){
        die('Erro na conexão'.mysqli_connect_error());
    }
?>