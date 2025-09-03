<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Simulador de Investimento</title>
</head>
<body>
    <h2>Calcular rendimento do investimento</h2>
    <form action="calculo.php" method="post">
        <label for="valor">Digite o valor do investimento:</label><br>
        <input type="number" step="0.01" name="valor" id="valor" required><br><br>

        <label for="tipo">Escolha o tipo de investimento:</label><br>
        <select name="tipo" id="tipo" required>
            <option value="1">1 - Poupança (3%)</option>
            <option value="2">2 - Fundos de renda fixa (4%)</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php
$valor = $_POST["valor"];
$tipo = $_POST["tipo"];
$rendimento = 0;
if ($tipo == 1) {
    $rendimento = $valor * 0.03; 
    $descricao = "Poupança";
} elseif ($tipo == 2) {
    $rendimento = $valor * 0.04; 
    $descricao = "Fundos de Renda Fixa";
}
$valor_corrigido = $valor + $rendimento;
echo "Tipo de investimento escolhido: $descricao<br>";
echo "Valor inicial: R$ $valor<br>";
echo "Rendimento do mês: R$ $rendimento<br>";
echo "Valor corrigido: R$ $valor_corrigido<br>";
?>
