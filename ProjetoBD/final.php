<?php
header('Access-Control-Allow-Origin: *');
require("conexao.php");
$id_usuario = $_SESSION['idusuario'];
$query_ = "SELECT * FROM dados WHERE ce_id_dados = '$id_usuario'ORDER BY nome_rua ASC";
$result = $conn->query($query_);
$dados_compras = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
  
        $dados_compras[] = $row['nome_rua'] . '#' . $row['numero'] . "#" . $row['referencia'] . "#" . $row['pagamento'] ;
    }
  } else {
  
    header('Location:home.php');
  }


$conn->close();
