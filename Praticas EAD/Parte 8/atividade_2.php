<?php

    if(isset($_POST['btnCalcular'])){
        $valor1 = $_POST['vl1'];
        $valor2 = $_POST['vl2'];
        $valor3 = $_POST['vl3'];

        if($valor1 == '' || $valor2 == '' || $valor3 == ''){
            $msgError = 'Preencher todos os Campos Corretamente!<br>';
        }else{
            $resultado = $valor2 / 2;

            if($resultado > $valor1 && $resultado < $valor3){
                $situacao = 'O número ' .  $resultado . ' está entre o número ' . $valor1 . ' e ' . $valor3 . '!';
            }else{
                $situacao = 'O número ' .  $resultado . ' NÃO está entre o número ' . $valor1 . ' e ' . $valor3 . '!';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - 2</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_2.php" method="POST">
        <label>Primeiro Valor:</label>
        <input type="number" name="vl1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Segundo Valor:</label>
        <input type="number" name="vl2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <label>Terceiro Valor:</label>
        <input type="number" name="vl3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <br>
    <span>Situação: <?= isset($situacao) ? $situacao : '' ?></span>
</body>
</html>