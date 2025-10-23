<?php

    require_once "config.inc.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "<h2>cliente excluído do sistema"
    }