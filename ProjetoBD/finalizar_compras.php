<?php

$texto = $_POST['endereço'] . '#' . $_POST['numero'] .  '#' . $_POST['referencia'] .  '#' . $_POST['pagamento']  . PHP_EOL;

$arquivo = fopen('arquivo_pedido.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);


header('Location:home.php');