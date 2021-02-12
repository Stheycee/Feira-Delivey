<?php

session_start();
header('Access-Control-Allow-Origin: *');


require("conexao.php");
$nome = $_POST['nome'];
$quant = $_POST['Quantidade'];
$total = $quant * 4;
$id_usuario = $_SESSION['idusuario'];
$stmt = $conn->prepare("INSERT INTO carrinho (ce_id_compras,Produto,Quantidade,Total) VALUES (?,?,?,?)");
$stmt->bind_param("isss", $id_usuario, $nome, $quant, $total);
$stmt->execute();
$conn->close();
header('Location:home.php'); 

