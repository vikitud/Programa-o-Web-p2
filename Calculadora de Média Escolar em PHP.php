<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média do Aluno</title>
</head>
<body>
    <h2>Calcular Média do Aluno</h2>
    <form action="media.php" method="post">
        <label for="nome">Nome do aluno:</label><br>
        <input type="text" name="nome" id="nome" required><br><br>
        <label for="nota1">Nota 1:</label><br>
        <input type="number" step="0.1" name="nota1" id="nota1" required><br><br>
        <label for="nota2">Nota 2:</label><br>
        <input type="number" step="0.1" name="nota2" id="nota2" required><br><br>
        <input type="submit" value="Calcular Média">
    </form>
</body>
</html>

<?php
$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$media = ($nota1 + $nota2) / 2;
echo "O aluno $nome ficou com $media de média.";
?>
