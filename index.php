<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>
<body>
    <main id="container">
        <form action="cadastrar.php" method="post" autocomplete="on">
        <h1 id="titulo">CADASTRAR</h1>
            <div class="dados">
                <label for="nome_usuario"></label>
                <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Nome de Usuário" maxlength="10" required>
            </div>
            <div class="dados">
                <label for="email"></label>
                <input type="email" name="email" id="email" placeholder="E-mail" maxlength="50" required>
            </div>
            <div class="dados">
                <label for="senha"></label>
                <input type="password" name="senha" id="senha" placeholder="Senha" maxlength="50" required>
            </div>
            <input type="submit" value="CADASTRAR USUÁRIO">
        </form>
        <a href="listar.php" target="_self" rel="next">VER USUÁRIOS</a>
    </main>
</body>
</html>