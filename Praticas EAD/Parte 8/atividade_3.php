<?php

    if(isset($_POST['btnCalcular'])){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];

        if($nota1 == ''  || $nota2 == '' || $nota3 == '' || $nota4 == ''){
            $msgError = 'Preencher todos os Campos Corretamente!<br>';
        }else{
            $resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

            if($resultado >= 0 && $resultado < 40){
                $situacao = 'REPROVADO!';
            }else if($resultado >= 40 && $resultado < 60){
                $situacao = 'EXAME!';
            }else{
                $situacao = 'APROVADO!';
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
    <title>Atividade - 3</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_3.php" method="POST">
        <label>1º Bimestre:</label>
        <input type="number" name="nota1" value="<?= isset($nota1) ? $nota1 : '' ?>">
        <br>
        <label>2º Bimestre:</label>
        <input type="number" name="nota2" value="<?= isset($nota2) ? $nota2 : '' ?>">
        <br>
        <label>3º Bimestre:</label>
        <input type="number" name="nota3" value="<?= isset($nota3) ? $nota3 : '' ?>">
        <br>
        <label>4º Bimestre:</label>
        <input type="number" name="nota4" value="<?= isset($nota4) ? $nota4 : '' ?>">
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