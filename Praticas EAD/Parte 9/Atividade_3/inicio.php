<?php

    if(isset($_POST['btnCalc'])){
        $valor1 = $_POST['vl1'];
        $valor2 = $_POST['vl2'];
        $valor3 = $_POST['vl3'];
        $valor4 = $_POST['vl4'];
        $valor5 = $_POST['vl5'];

        if($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == ''){
            echo 'Preencher todos os campos obrigatórios!<hr>';
        }else{
            header("location: final.php?primeiroValor=$valor1&segundoValor=$valor2&terceiroValor=$valor3&quartoValor=$valor4&quintoValor=$valor5");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <form action="inicio.php" method="POST">
        <label>Primeiro Valor:</label>
        <input type="number" name="vl1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Segundo Valor:</label>
        <input type="number" name="vl2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <label>Terceiro Valor:</label>
        <input type="number" name="vl3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>
        <label>Quarto Valor:</label>
        <input type="number" name="vl4" value="<?= isset($valor4) ? $valor4 : '' ?>">
        <br>
        <label>Quinto Valor:</label>
        <input type="number" name="vl5" value="<?= isset($valor5) ? $valor5 : '' ?>">
        <br>
        <br>
        <button name="btnCalc">CALCULAR</button>
    </form>
</body>
</html>