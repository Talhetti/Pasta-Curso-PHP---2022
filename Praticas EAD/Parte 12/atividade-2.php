<?php

    require_once 'function.php';

    if(isset($_POST['btnCalcular'])){
        $salario = $_POST['salario'];
        $aumento = $_POST['aumento'];

        if($salario == '' || $aumento == ''){
            $msgError = 'Preencher todos os compos obrigatórios!';
        }else{
            $resultado = CalcularSalario($salario, $aumento);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <form action="atividade-2.php" method="POST">
        <label>Digite um Valor de Salário:</label>
        <input type="number" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label>Digite um Valor de Aumento:</label>
        <input type="number" name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <br>
    <span><input disabled value="<?= isset($resultado) ? $resultado : '' ?>"></span>
</body>
</html>