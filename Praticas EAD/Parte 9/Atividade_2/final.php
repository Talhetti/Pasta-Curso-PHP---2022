<?php
    if(
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['invest']) && $_GET['invest'] != '' &&
        isset($_GET['ganhoPerda']) && $_GET['ganhoPerda'] != '' &&
        isset($_GET['banco']) && $_GET['banco'] != ''
    ){
        $usuario = '';
        $aumento = '';
        $gp = '';
        $bank = '';

        $usuario = $_GET['nome'];
        $aumento = $_GET['invest'];
        $gp = $_GET['ganhoPerda'];
        $bank = $_GET['banco'];

        if($gp == 'G' || $gp == 'g'){
            $resultado = $aumento + (($aumento * 3) / 100);
        }else if($gp == 'P' || $gp == 'p'){
            $resultado = $aumento - (($aumento * 5) / 100);
        }
    }else{
        header("location: inicio.php");
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
    <span>Nome Usuário: <?= isset($usuario) ? $usuario : '' ?></span>
    <br>
    <span>Valor do Investimento: <?= isset($aumento) ? $aumento : '' ?></span>
    <br>
    <span>Situação: <?= isset($gp) ? $gp : '' ?></span>
    <br>
    <span>Banco escolhido: <?= isset($bank) ? $bank : '' ?></span>
    <br>
    <span>Reultado do Calculo: <?= isset($resultado) ? $resultado : '' ?></span>
    <hr>
    <p>
        CLIENTE <?= $usuario ?>, seu valor de investimento foi de <?= $aumento ?>, a sigla de sua simulação escolhida foi 
        <?= $gp ?>. O banco escolhido foi <?= $bank ?> e o resultado é de R$ <?= $resultado ?>.
    </p>
</body>
</html>