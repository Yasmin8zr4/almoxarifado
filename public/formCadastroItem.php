<?php
session_start();

if(!isset($_SESSION['logado'])) {
    header("Location: formLogin.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Itens</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="opcoes">
        <h3>Opções</h3>
    
        <a href="listar.php">Listar Itens</a><br>
        <a href="../index.php">Início</a><br>
        <a href="logout.php">Sair</a>
    </div>

    <div class="total">
        <h2>Cadastro de Itens</h2>
    
        <form action="cadastroItem.php" method="post" onsubmit="return validar()">
            <input type="text" name="nome" placeholder="Nome do Item"><br><br>
            <input type="text" name="descricao" placeholder="Descrição de itens"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <script src="js/validar.js"></script>
</body>
</html>
