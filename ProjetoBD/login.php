<?php
session_start();
header('Access-Control-Allow-Origin: *');

require("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
$query_ = "SELECT * FROM usuario WHERE email ='$email' AND senha = '$senha'";
$result = $conn->query($query_);



if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $_SESSION['idusuario'] = $row['id_usuario'];
    $_SESSION['nome'] = $row['nome_usuario'];
    $_SESSION['autenticado'] = 'S';
    header('Location:home.php');
  }
} else {
  $_SESSION['autenticado'] = 'N';
  header('Location:index.php?login=erro1'); 
}
$conn->close();