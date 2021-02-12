<?php
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
} else {

  echo ("<script>
        window.alert('Você não possui compras cadastradas.')
        window.location.href='../Login/home.php';
    </script>");
}
$conn->close();
