<?php 

require 'config.php';

include 'head.php';

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div> <h1> Cadastrar </h1> </div>

    <div>

        <form method="post" action="cadastrar_action.php">
            
            <label for="">
                Nome:
                <input type="text" name="nome">
            </label>

            <label for="">
                Sobrenome:
                <input type="text" name="sobrenome">
            </label>
            
            <label for="">
                Idade:
                <input type="number" name="idade">
            </label>

            <label for="">
                Cargo:
                <input type="text" name="cargo">
            </label>

            <input type="submit" value="cadastrar">

        </form>
        
    </div>
    
    <div> <a href="pesquisar.php"> Pesquisar </a> </div>
</body>
</html>