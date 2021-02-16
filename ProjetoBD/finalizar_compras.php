<?php
/*
$texto = $_POST['endereço'] . '#' . $_POST['numero'] .  '#' . $_POST['referencia'] .  '#' . $_POST['pagamento']  . PHP_EOL;

$arquivo = fopen('arquivo_pedido.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);


header('Location:home.php');
*/

session_start();
header('Access-Control-Allow-Origin: *');
  
require("conexao.php");
$endereço = $_POST['endereço'];
$numero = $_POST['numero'];
$referencia = $_POST['referencia'];
$pagamento = $_POST['pagamento'];
$id_usuario = $_SESSION['idusuario'];
  
  
$stmt = $conn->prepare("INSERT INTO dados (ce_id_dados,nome_rua,numero,referencia,pagamento) VALUES (?,?,?,?,?)");
$stmt->bind_param("isiss", $id_usuario, $endereço, $numero, $referencia,$pagamento);
$stmt->execute();
$conn->close();
header('Location:home.php'); 
    