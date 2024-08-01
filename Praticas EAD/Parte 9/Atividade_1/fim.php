<?php
    if(
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['peso']) && $_GET['peso'] != '' &&
        isset($_GET['altura']) && $_GET['altura'] != ''
    ){
        $n = $_GET['nome'];
        $p = $_GET['peso'];
        $a = $_GET['altura'];

        $imc = $p / ($a * $a);

        if($imc >= 0 && $imc <= 20){
        $situacao = 'Está pessoa está muito MAGRA.';
        }else if($imc > 20 && $imc <= 25){
        $situacao =  'Está pessoa está com PESO IDEAL.';
        }else if($imc > 25 && $imc <= 30){
        $situacao =  'Está pessoa está OBESA.';
        }else if($imc > 30){
        $situacao =  'Está pessoa está MUITO OBESA!';
        }
    }else{
        header('location: inicio.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final!</title>
</head>
<body>
    <span>Nome: <?= isset($n) ? $n : '' ?>.</span>
    <br>
    <span>Resultado do IMC: <?= isset($imc) ? $imc : '' ?>.</span>
    <br>
    <span>Situação: <?= isset($situacao) ? $situacao : '' ?></span>
    <br>
</body>
</html>