<?php
require "menu.php";
require "final.php";
?>
<?php

$compras = array();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <style>
    .container {
      width: 100vw;
      height: 80vh;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center
    }

    .box {
      width: 500px;
      height: 500px;
      background: #fff;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="box">
      <div class="card">

        <div class="card text-center black-text">
          <h5 class="card-header">Dados da Entrega</h5>
        </div>

        <table class="table table-success">
          <tr class="table-primary">
            <th>Rua</th>
            <th>N da casa/apart</th>
            <th>Referencia</th>
            <th>Pagamento</th>
            

          </tr>
          

            <tr>
            <?php foreach ($dados_compras as $compra) {
              $dados_compras = explode('#', $compra);

            ?>


          <tr>

            <?php


                echo "<td class='table-danger'>";
                echo $dados_compras[0];
                echo "</td>";
                echo "<td class='table-danger'>";
                echo $dados_compras[1];
                echo "</td>";
                echo "<td class='table-danger'>";
                echo $dados_compras[2];
                echo "</td>";
                echo "<td class='table-danger'>";
                echo $dados_compras[3];
                echo "</td>";
                
              ?>
            </tr>
      </div>
    <?php } ?>
    </table>
    </div>
    <a type="button" class="btn btn-primary" href="home.php">Voltar</a>
   
  </div>