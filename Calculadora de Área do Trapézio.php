<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área do Trapézio</title>
</head>
<body>
    <h2>Calcular Área do Trapézio</h2>
    <form action="calcula.php" method="post">
        <label for="base_maior">Base Maior:</label><br>
        <input type="number" name="base_maior" id="base_maior" required><br><br>

        <label for="base_menor">Base Menor:</label><br>
        <input type="number" name="base_menor" id="base_menor" required><br><br>

        <label for="altura">Altura:</label><br>
        <input type="number" name="altura" id="altura" required><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php
$base_maior = $_POST["base_maior"];
$base_menor = $_POST["base_menor"];
$altura = $_POST["altura"];
$area = ($base_maior + $base_menor) / 2 * $altura;
?>

