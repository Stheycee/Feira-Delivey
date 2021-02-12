<?php
require "menu.php";
require "compras_cliente.php";

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
          <h5 class="card-header">Histórico de Compras</h5>
        </div>

        <table class="table table-success">
          <tr class="table-primary">
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>Total da compra</th>
         
            

          </tr>
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
                
              ?>
            </tr>
      </div>
    <?php } ?>
    </table>
    </div>
    <a type="button" class="btn btn-primary" href="home.php">Voltar</a>
    <a type="button" class="btn btn-primary" href="finalizar.php">Finalizar</a>
  </div>