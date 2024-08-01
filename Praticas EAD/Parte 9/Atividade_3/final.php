<?php
    if(
        isset($_GET['primeiroValor']) && $_GET['primeiroValor'] != '' &&
        isset($_GET['segundoValor']) && $_GET['segundoValor'] != '' &&
        isset($_GET['terceiroValor']) && $_GET['terceiroValor'] != '' &&
        isset($_GET['quartoValor']) && $_GET['quartoValor'] != '' &&
        isset($_GET['quintoValor']) && $_GET['quintoValor'] != ''
    ){
        $vl1 = '';
        $vl2 = '';
        $vl3 = '';
        $vl4 = '';
        $vl5 = '';
        $calculo = '';

        $vl1 = $_GET['primeiroValor'];
        $vl2 = $_GET['segundoValor'];
        $vl3 = $_GET['terceiroValor'];
        $vl4 = $_GET['quartoValor'];
        $vl5 = $_GET['quintoValor'];
        $calculo = ($vl1 + $vl2 + $vl3) / ($vl4 * $vl5);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fim</title>
</head>
<body>
    <span>Primeiro Valor Digitado: <b><?= $vl1 ?>.</b></span>
    <br>
    <span>Segundo Valor Digitado: <b><?= $vl2 ?>.</b></span>
    <br>
    <span>Terceiro Valor Digitado: <b><?= $vl3 ?>.</b></span>
    <br>
    <span>Quarto Valor Digitado: <b><?= $vl4 ?>.</b></span>
    <br>
    <span>Quinto Valor Digitado: <b><?= $vl5 ?>.</b></span>
    <br>
    <span>Resultado Final: <b><?= $calculo ?>.</b></span>
</body>
</html>