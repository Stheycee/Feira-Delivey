<?php

$texto = $_POST['nome'] . '#' . $_POST['email'] .  '#' . $_POST['senha'] . PHP_EOL;

$arquivo = fopen('arquivo_cadastro.txt', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);
header('Location:home.php');