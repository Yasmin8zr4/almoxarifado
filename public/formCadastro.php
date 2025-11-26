<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="opcoes">
        <a href="formLogin.php">Já possui uma conta? Fazer Login</a><br>
    </div>

    <h1>Criar uma conta</h1>

    <div class="total">
        <form action="cadastro.php" method="post" onsubmit="return validar()">
            <input type="text" name="nomeDeUsuario" placeholder="Nome de usuário"><br><br>
            <input type="password" name="senha" placeholder="Senha"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <script src="js/validacao.js"></script>
</body>
</html>