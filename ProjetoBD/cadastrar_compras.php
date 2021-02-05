<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$quant = $_POST['Quantidade'];

$total = $quant * 4;
$total = round($total, 2); 
$texto = $_POST['nome'] . '#' . $_POST['Quantidade'] .  '#' . $total . PHP_EOL;

$arquivo = fopen('arquivo_cadastro_compras.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location:home.php');
