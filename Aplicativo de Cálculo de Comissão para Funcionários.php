<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Salário com Comissão</title>
</head>
<body>
    <h2>Calcular Salário Final do Funcionário</h2>
    <form action="salario.php" method="post">
        <label for="salario">Salário fixo:</label><br>
        <input type="number" step="0.01" name="salario" id="salario" required><br><br>
        <label for="vendas">Total de vendas:</label><br>
        <input type="number" step="0.01" name="vendas" id="vendas" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php
$salario = $_POST["salario"];
$vendas = $_POST["vendas"];
$comissao = $vendas * 0.04;
$salario_final = $salario + $comissao;
echo "Salário fixo: R$ $salario<br>";
echo "Comissão (4% das vendas): R$ $comissao<br>";
echo "Salário final: R$ $salario_final<br>";
?>
