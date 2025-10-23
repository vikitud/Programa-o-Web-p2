<?php 

    $conexao = mysqli_connect("localhost:3306", "root", "");

    $bd = mysqli_select_db($conexao, "projeto1");

    if(!$conexao){
        echo"Conexão realizada com banco de dados falhou!";
    }

