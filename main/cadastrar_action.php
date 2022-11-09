<?php

require 'config.php';

$dados = filter_input_array (INPUT_POST, FILTER_DEFAULT); 

if ($dados) { 

        $sql = $pdo->prepare("INSERT into usuario (nome, sobrenome, idade, cargo) VALUES (:nome, :sobrenome, :idade, :cargo)"); 
        $sql->bindValue(":nome", $dados['nome']);
        $sql->bindValue(":sobrenome", $dados['sobrenome']); 
        $sql->bindValue(":idade", $dados['idade']);
        $sql->bindValue(":cargo", $dados['cargo']); 
        $sql->execute();

        header("Location: cadastrar.php");  
        exit;
    }