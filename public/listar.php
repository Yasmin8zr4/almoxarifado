<?php
session_start();

if(!isset($_SESSION['logado'])) {
    header("Location: formLogin.php");
    exit;
}

$data= json_decode(file_get_contents("../app/data.json"), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de itens</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="opcoes">
        <h3>Opções</h3>
    
        <a href="formCadastroItem.php">Cadastrar Itens</a><br>
        <a href="../index.php">Início</a><br>
        <a href="logout.php">Sair</a>
    </div>

    <div class="total">
        <h1>Listagem de itens cadastrados</h1>
    
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
    
            <?php
                foreach($data as $item) {
                    ?>
                    <tr>
                        <td><?= $item['nome']?></td>
                        <td><?= $item['descricao']?></td>
                    </tr>
                <?php
                }
            ?>  
            </tbody>
        </table>
    </div>
</body>
</html>