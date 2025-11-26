<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="opcoes">
        <a href="formCadastro.php">Não possui uma conta? Cadastrar</a><br>
    </div>

    <h1>Página de Login</h1>

    <div class="total">
        <?php
            if (isset($_SESSION["error"])) {
                ?>
                    <p style="color:red"><?= $_SESSION["error"] ?></p>
                <?php
            }
        ?>

        <form action="login.php" method="post">
            <input type="text" name="usuario" placeholder="Usuário"><br><br>
            <input type="password" name="senha" placeholder="Senha"><br><br>
            <input type="submit" value="Entrar">
        </form>
    </div>

</body>
</html>