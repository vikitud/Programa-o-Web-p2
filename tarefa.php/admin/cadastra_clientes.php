<?php 

    require_once = "config.inc.php"

    $sql = "INSERT_INTO clientes (cliente, cidade, estado)VALUES (
        '$_POST[nome]','$_POST[cidade]','$_POST[estado]'"