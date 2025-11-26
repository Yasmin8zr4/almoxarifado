<?php
session_start();
require "../app/functions.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = htmlspecialchars(trim($_POST['usuario'])) ?? '';
    $pass = htmlspecialchars(trim($_POST['senha'])) ?? '';

    if (findUser($user, $pass)) {
        $_SESSION['logado'] = true;
        header("Location: ../index.php");
        exit;
    } else {
        $_SESSION[""];
        $_SESSION['error'] = "Usuário não encontrado";
        header("Location: formLogin.php");
        exit;
    }
}