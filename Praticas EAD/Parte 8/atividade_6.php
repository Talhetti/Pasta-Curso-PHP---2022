<?php

    if(isset($_POST['btnCalcular'])){
        $salario = ltrim(trim($_POST['salario']));

        if($salario == ''){
            $msgError = '<div class="msgError">Preencher todos os Campos Corretamente!</div><br>';
        }else{
            $primeiroAumento = ($salario * 15) / 100;
            $segundoAumento = ($salario * 18) / 100;
            $totalAumentos = $primeiroAumento + $segundoAumento;
            $totalReal = $salario + $totalAumentos;

            // 0 - 100 : exibir a mensagem "Aumento RUIM"
            // 101 - 200 : exibir a mensagem "Aumento RAZOAVEL"
            // 201 - 300 : exibir a mensagem "Aumento BOM"
            // 301 - 400 : exibir a mensagem "Aumento ÓTIMO"
            // acima de 401: exibir a mensagem "Aumento EXCELENTE"

            if($totalAumentos <= 100){
                $situacao = 'Aumento RUIM!';
            }else if($totalAumentos > 100 && $totalAumentos <= 200){
                $situacao = 'Aumento RAZOAVEL!';
            }else if($totalAumentos > 200 && $totalAumentos <= 300){
                $situacao = 'Aumento BOM!';                
            }else if($totalAumentos > 300 && $totalAumentos <= 400){
                $situacao = 'Aumento ÓTIMO!';
            }else{
                $situacao = 'Aumento EXCELENTE!';
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
    <title>Atividade - 6</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_6.php" method="POST">
        <label>Salário:</label>
        <input type="text" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <span>Aumento de 15%:</span>
    <input disabled value="<?= isset($primeiroAumento) ? $primeiroAumento : '' ?>">
    <br>
    <span>Aumento de 18%:</span>
    <input disabled value="<?= isset($segundoAumento) ? $segundoAumento : '' ?>">
    <br>
    <span>Total de Aumento:</span>
    <input disabled value="<?= isset($totalAumentos) ? $totalAumentos : '' ?>">
    <br>
    <span>Total Final:</span>
    <input disabled value="<?= isset($totalReal) ? $totalReal : '' ?>">
    <br>
    <span>Situação: <?= isset($situacao) ? $situacao : '' ?></span>
</body>
</html>