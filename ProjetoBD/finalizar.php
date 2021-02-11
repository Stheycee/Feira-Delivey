<?php
require "menu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
  <br />
  <div class="container">
    <div class="box">
      <div class="card ">
        <div class="card-content black-text">
          <span class="card-title">Finalizar Pedido</span>

        </div>

      </div>
      <form action="finalizar_compras.php" method="POST">

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Endereço</label>
          <input name="endereço" type="text" class="form-control">
          <div id="emailHelp" class="form-text">Digite o seu endereço</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">N° da casa/apartamento</label>
          <input name="numero" type="number" step="any" class="form-control">
          <div id="emailHelp" class="form-text">Digite o número da casa ou apartamento</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Referencia</label>
          <input name="referencia" type="text" step="any" class="form-control">
          <div id="emailHelp" class="form-text">Digite um local de referencia do seu endereço</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Forma de Pagamento</label>
          <input name="pagamento" type="text" step="any" class="form-control">
          <div id="emailHelp" class="form-text">Digite a forma de pagamento</div>
        </div>
        </div>
        <a type="button" class="btn btn-primary" href="historico_compras.php">Voltar</a>
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </form>
    </div>
</body>

</html>
