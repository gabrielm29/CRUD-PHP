<?php
    // Importa o arquivo com a conexão
    require_once("conexao.php");

    // Pega o ID enviado pela URL
    $id = $_GET["id"] ?? "";

    $select_query = "SELECT * FROM usuarios WHERE id='$id'";
    $resultado = mysqli_query($conn, $select_query);

    // Transforma a variável $usuario em um array cujos índices correspondem aos valores da linha da tabela atribuída à $resultado
    $usuario = mysqli_fetch_assoc($resultado);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar</title>
</head>
<body>
    <main id="container">
        <form action="editar.php" method="post" autocomplete="on">
            <h1 id="titulo">EDITAR</h1>
            <input type="hidden" name="id" value="<?=$usuario["id"]?>">
            <div class="dados">
                <label for="nome_usuario"></label>
                <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Nome de Usuário" maxlength="10" required value="<?=$usuario["nome_usuario"]?>">
            </div>
            <div class="dados">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="E-mail" maxlength="50" required value="<?=$usuario["email"]?>">
            </div>
            <div class="dados">
                <label for="senha"></label>
                <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="50" required>
            </div>
            <input type="submit" value="EDITAR USUÁRIO">
        </form>
    </main>
</body>
</html>