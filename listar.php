<?php
    // Importa o arquivo com a conexão
    require_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="listar.css">
    <title>Listar</title>
</head>
<body>
    <main id="container">
        <h1 id="titulo">LISTAR</h1>
        <form action="listar.php" method="post" autocomplete="on">
            <div class="dados">
                <label for="nome">NOME: </label>
                <input type="search" name="nome" id="nome">
                <input name="pesquisar" type="submit" value="Pesquisar">
            </div>
        </form>
        <div id="tabela">
            <?php
                // Verificando se o usuário clicou no botão de pesquisar
                $pesquisar = $_POST["pesquisar"] ?? "";
                if($pesquisar){
                    // Obtendo o nome
                    $nome = $_POST["nome"] ?? "";

                    // Usando um comando sql para obter os dados de acordo com o nome informado
                    $select_sql = "SELECT * FROM usuarios WHERE nome_usuario LIKE '%$nome%'";

                    // Executando o comando
                    $resultado = mysqli_query($conn, $select_sql);
                }else{
                    // Usando um comando sql para obter todos os dados da tabela usuarios 
                    $select_query = "SELECT * FROM usuarios";

                    // Executando o comando 
                    $resultado = mysqli_query($conn, $select_query);
                }

                // Criando uma estrutura de repetição que retornará os dados de todas as linhas da tabela
                // A cada repetição, a função mysqli_fetch_assoc() retornará um array cujos índices são nomeados como as colunas da tabela. Quando nenhuma linha sobrar, a função retornará null e o while será encerrado
                echo "<table>";
                echo "<tr>";
                echo "<th scope='col'>ID</th>";
                echo "<th scope='col'>Nome de Usuário</th>";
                echo "<th scope='col'>E-mail</th>";
                echo "<th scope='col'>Ações</th>";
                echo "</tr>";
                while($linha = mysqli_fetch_assoc($resultado)){
                    echo "<tr>";
                    echo "<td>".$linha["id"]."</td>";
                    echo "<td>".$linha["nome_usuario"]."</td>";
                    echo "<td>".$linha["email"]."</td>";
                    echo "<td><a class='editar' href='form_editar.php?id=".$linha["id"]."'>Editar</a> ";
                    echo "<a class='deletar' href='deletar.php?id=".$linha["id"]."'>Deletar</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </div>
        <a href='index.php' target='_self' rel='prev'>CADASTRAR</a>
    </main>
</body>
</html>