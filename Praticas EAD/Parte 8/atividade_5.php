<?php

    if(isset($_POST['btnCalcular'])){
        $peso = ltrim(trim($_POST['peso']));
        $altura = ltrim(trim($_POST['altura']));

        if($peso == '' || $altura == ''){
            $msgError = '<div class="msgError">Preencher todos os Campos Corretamente!</div><br>';
        }else{
            $imc = $peso / ($altura * $altura);

            // 0  a 20 : Magro
            // 21 a 25 : Peso ideal
            // 26 a 30 : Obeso
            // acima de 30 : Muito Obeso

            if($imc <= 20){
                $situacao = 'Magro!';
            }else if($imc > 20 && $imc <= 25){
                $situacao = 'Peso Ideal!';
            }else if($imc > 25 && $imc <= 30){
                $situacao = 'Obeso!';
            }else{
                $situacao = 'Muito Obeso!';
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
    <link rel="stylesheet" href="style.css">
    <title>Atividade - 5</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_5.php" method="POST">
        <label>Peso:</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Altura:</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($imc) ? $imc : '' ?>">
    <br>
    <span>Situação: <?= isset($situacao) ? $situacao : '' ?></span>
</body>
</html>