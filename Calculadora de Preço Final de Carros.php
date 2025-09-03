<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Preço do Carro</title>
</head>
<body>
    <h2>Calcular Preço ao Consumidor</h2>
    <form action="calculo.php" method="post">
        <label for="custo">Digite o custo de fábrica:</label><br>
        <input type="number" step="0.01" name="custo" id="custo" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>


<?php
$custo = $_POST["custo"];
$distribuidor = 0;
$impostos = 0;
if ($custo <= 39999.99) {
    $distribuidor = $custo * 0.05; 
    $impostos = 0; 
} elseif ($custo <= 69999.99) {
    $distribuidor = $custo * 0.10; 
    $impostos = $custo * 0.15;     
} else {
    $distribuidor = $custo * 0.15; 
    $impostos = $custo * 0.20;  
}
$preco_final = $custo + $distribuidor + $impostos;
echo "Custo de fábrica: R$ $custo<br>";
echo "Distribuidor: R$ $distribuidor<br>";
echo "Impostos: R$ $impostos<br>";
echo "Preço ao consumidor: R$ $preco_final<br>";
?>
