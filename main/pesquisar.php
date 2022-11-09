<?php

require 'config.php';
require 'head.php';

$query = [];

$sql = $pdo->query("SELECT * from usuario");

if($sql->rowCount() > 0) {
    $query = $sql->fetchall(PDO::FETCH_ASSOC);
}

$nome = filter_input(INPUT_GET, 'nome');
$sobrenome = filter_input(INPUT_GET, 'sobrenome');
$idade = filter_input(INPUT_GET, 'idade');
$cargo = filter_input(INPUT_GET, 'cargo');

$query = $pdo->query("SELECT * FROM usuario WHERE nome LIKE'%$nome%' and sobrenome LIKE'%$sobrenome%' and idade LIKE'%$idade%' and cargo LIKE'%$cargo%'");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Home </title>
</head>
<body>

        <div> <h1> Pesquisa </h1> </div>

        <div>
            <form action="" method="get">

                <input type="search" name="nome" placeholder="Buscar por nome...">

                <input type="search" name="sobrenome" placeholder="Buscar por sobrenome...">

                <input type="search" name="idade" placeholder="Buscar por idade...">

                <input type="search" name="cargo" placeholder="Buscar por cargo...">

                <input type="submit" value="Buscar">

            </form> <br>

            <table>

                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Idade</th>
                    <th>Cargo</th>

                </tr>

                <?php foreach($query as $resultado): ?>
                    <tr>
                        <td> <?= $resultado['nome']; ?> </td>
                        <td> <?= $resultado['sobrenome']; ?> </td>
                        <td> <?= $resultado['idade']; ?> </td>
                        <td> <?= $resultado['cargo']; ?> </td>
                    </tr>
                <?php endforeach; ?>

            </table>

        </div>

    </div> <br> <br>
    
    <div> <a href="cadastrar.php"> Cadastrar </a> </div>

</body>
</html>