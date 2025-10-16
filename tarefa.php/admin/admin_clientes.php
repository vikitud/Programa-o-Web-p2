<?php

    require_once "config.inc.php";

    $sql = "SELECT * FROM clientes";

    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $dados = mysqli_fetch_array($resultado);

        ?>

<?php echo $dados['id'];?><br>
<?= $dados['nome'];?><br>
<?php echo $dados['email'];?><br>
<?php echo $dados['telefone'];?><br>
