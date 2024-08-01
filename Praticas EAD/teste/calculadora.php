<?php
if(isset($_POST['BtnCalcular'])){
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    $resultado = $Valor1 + $valor2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>valor 1</label>
    <input name="valor1">
    <br>
    <label> valor 2</label>
    <input name="valor2">
    <br></br>
    <button name="BtnCalcular">calcular</button>
    <input disabled <?= isset($resultado) ? $resultado : '' ?>>
</body>
</html>