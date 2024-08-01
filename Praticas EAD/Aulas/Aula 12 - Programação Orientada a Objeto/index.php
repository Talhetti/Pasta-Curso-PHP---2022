<?php
require_once 'Aulas/Classe/calculo.php';

if(isset($_POST['BtnSomar'])){
    $Número1 = $_POST['n1'];
    $Número2 = $_POST['n2'];
    $Número3 = $_POST['n3'];

    $objcalculo = new calculo();

    $Resultado = $objcalculo->SomarNumeros($Número1, $Número2, $Número3);

}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Programação Orientada a Objeto</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="">Campo 1</label>
        <input type="text" name="n1" value="<?= isset($Número1) ? $Número1 : '' ?>">
        <label for="">Campo 2</label>
        <input type="text" name="n2" value="<?= isset($Número2) ? $Número2 : '' ?>">
        <label for="">Campo 3</label>
        <input type="text" name="n3" value="<?= isset($Número3) ? $Número3 : '' ?>">

        <button name="BtnSomar">Somar</button>

        <br><br>

        <input disabled value="<?= isset($Resultado) ? $Resultado: '' ?>">
    </form>

</body>

</html>