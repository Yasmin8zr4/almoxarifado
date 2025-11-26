<?php
session_start();

if (!$_SESSION["logado"]) {
    header("Location: public/formLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>Bem-vindo, Admin!</h1>
    <div class="total">
        <a href="public/formCadastroItem.php">Cadastrar Itens</a><br>
        <a href="public/listar.php">Listar Itens</a><br>
        <a href="public/logout.php">Sair</a>
    </div>
</body>
</html>