<?php

$texto = $_POST['endereço'] . '#' . $_POST['numero'] .  '#' . $_POST['referencia'] .  '#' . $_POST['pagamento']  . PHP_EOL;

$arquivo = fopen('arquivo_pedido.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);


header('Location:home.php');
/*
header('Access-Control-Allow-Origin: *');
require("conexao.php");
$id_usuario = $_SESSION['idusuario'];
$query_ = "SELECT * FROM carrinho WHERE ce_id_compras = '$id_usuario'ORDER BY Produto ASC";
$result = $conn->query($query_);
$dados_compras = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    $dados_compras[] = $row['Produto'] . '#' . $row['Quantidade'] . "#" . $row['Total'] ;
  }

}
$conn->close();


  header('Location:index.php'); */ 
