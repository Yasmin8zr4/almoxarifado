<?php

require "../app/functions.php";

$usersData = "../app/usersData.json";
$itens = loadJson($usersData);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = htmlspecialchars(trim($_POST['nomeDeUsuario'])) ?? '';
    $password = htmlspecialchars(trim($_POST['senha'])) ?? '';

    if (!isset($username) || !isset($password) || empty($username)  || empty($password)) {
        $_SESSION['erro'] = "Preencha todos os campos";
        header("Location: formCadastro.php");
        exit;
    } else {
        $_SESSION['erro'] = "Usuário cadastrado";
    }

    $novo = [
        "username" => $username,
        "password" => password_hash($password, PASSWORD_DEFAULT)
    ];

    $itens[] = $novo;
    savejson($usersData, $itens);
}