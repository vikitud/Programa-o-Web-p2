<?php
    require_once "config.inc.php";
    $sql = "SELECT * FROM clientes WHERE id $_POST[id]";
    $resultado = mysqli_querry($conexao, $sql);

    while ($cliente = mysqli_fetch_array($resultado)){
        $nome = $cliente['cliente']
        $cidade = $cliente['cuidade']
        $estado = $cliente['estado']
    }

<form action="?pg=altera_clientes method="post">
    <label>Nome do Cliente:
    <input type="text" name="nome" value="<?=$nome?>">
    <label>cidade:</label>
    <input type="text" name="cidade" value="<?=$cidade?>">
    <label>estado:</label>
    <input type="text" name="estado" value="<?=$estado?>">
    <input> 
    </label>
</form>