<?php
session_start();

if(!isset($_SESSION['logado'])) {
    header("Location: formLogin.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $descricao = htmlspecialchars(trim($_POST['descricao']));


if (isset($nome) && isset($descricao) && !empty($nome) && !empty($descricao)) {
    $novo = [
        'nome' => $nome,
        'descricao' => $descricao
    ];

    $dados = json_decode(file_get_contents("../app/data.json"), true);

    $dados[] = $novo;

    file_put_contents("../app/data.json", json_encode($dados));

    header("Location: listar.php");
    exit;

} else {
    $_SESSION['erro'] = "Preencha todos os campos.";
    header("Location: formCadastroItem.php");
    exit;
}
}