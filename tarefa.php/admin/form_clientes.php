<form>  
    <label>Nome do Cliente:
    <input type="text" name="nome" />
    <label>cidade:</label>
    <input type="text" name="cidade" />
    <label>estado:</label>
    <input type="text" name="estado" />
    <input> 
    </label>
</form>

<?php

require_once "config.inc.php";

$sql = "INSERT INTO (nome, cidade, estado)  clientes VALUES (
        '$_POST[nome]','$_POST[cidade]','$_POST[estado]')";
        

                    '$_POST[nome]',
                    '$_POST[cidade]',