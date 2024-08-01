<?php

    if(isset($_POST['btnCalcular'])){
        $vl1 = $_POST['vl1'];
        $vl2 = $_POST['vl2'];
        $vl3 = $_POST['vl3'];
        $vl4 = $_POST['vl4'];
        $vl5 = $_POST['vl5'];

        if($vl1 == '' || $vl2 == '' || $vl3 == '' || $vl4 == '' || $vl5 == ''){
            $msgError = 'Preencher todos os Campos Corretamente!<br>';
        }else{
            $resultado = (($vl1 + $vl2) * 2) + $vl3 + $vl4 + $vl5;

            if($resultado < 100){
                $situacao = 'Resultado MENOR que 100!';
            }else if($resultado > 100){
                $situacao = 'Resultado MAIOR que 100!';
            }else{
                $situacao = 'Resultado IGUAL a 100!';
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
    <title>Atividade - 1</title>
</head>
<body style="font-family: tahoma;">
    <form action="atividade_1.php" method="POST">
        <label>Primeiro Número:</label>
        <input type="number" name="vl1" value="<?= isset($vl1) ? $vl1 : '' ?>">
        <br>
        <label>Segundo Número:</label>
        <input type="number" name="vl2" value="<?= isset($vl2) ? $vl2 : '' ?>">
        <br>
        <label>Terceiro Número:</label>
        <input type="number" name="vl3" value="<?= isset($vl3) ? $vl3 : '' ?>">
        <br>
        <label>Quarto Número:</label>
        <input type="number" name="vl4" value="<?= isset($vl4) ? $vl4 : '' ?>">
        <br>
        <label>Quinto Número:</label>
        <input type="number" name="vl5" value="<?= isset($vl5) ? $vl5 : '' ?>">
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