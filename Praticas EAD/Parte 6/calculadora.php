<?php

$numero1 = '';
$numero2 = '';

$numero3 = '';
$numero4 = '';

$numero5 = '';
$numero6 = '';

$numero7 = '';
$numero8 = '';

$soma = '';
$subtrair = '';
$multiplicar = '';
$dividir = '';

if(isset($_POST['btn-somar'])){
    $numero1 = $_POST['n1'];
    $numero2 = $_POST['n2'];

    $soma = $numero1 + $numero2;

}

if(isset($_POST['btn-subtrair'])){
    $numero3 = $_POST['n3'];
    $numero4 = $_POST['n4'];

    $subtrair = $numero3 - $numero4;
}

if(isset($_POST['btn-multiplicar'])){
    $numero5 = $_POST['n5'];
    $numero6 = $_POST['n6'];

    $multiplicar = $numero5 * $numero6;
}

if(isset($_POST['btn-dividir'])){
    $numero7 = $_POST['n7'];
    $numero8 = $_POST['n8'];

    $dividir = $numero7 / $numero8;

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="calculadora.php" method="POST">

        <label>Número 1</label>
        <input type="number" name="n1" value="<?= $numero1 ?>">

        <label>Número 2</label>
        <input type="number" name="n2" value="<?= $numero2 ?>">

        <button name="btn-somar">Somar</button>

        <input disabled value="<?= $soma ?>">

    </form>

    <form action="calculadora.php" method="POST">
        Número 3
        <input type="text" name="n3" value="<?= $numero3 ?>">

        Número 4
        <input type="text" name="n4" value="<?= $numero4 ?>">

        <button name="btn-subtrair">Subtrair</button>

        <input disabled value="<?= $subtrair ?>">
    </form>

    <form action="calculadora.php" method="POST">
        <label>Número 5</label>
        <input type="text" name="n5" value="<?= $numero5 ?>">

        <label>Número 6</label>
        <input type="text" name="n6" value="<?= $numero6 ?>">

        <button name="btn-multiplicar">Multiplicar</button>
        <input disabled value="<?= $multiplicar ?>">
    </form>

    <form action="calculadora.php" method="POST">
        <label>Número 7</label>
        <input type="text" name="n7" value="<?= $numero7?>">

        <label>Número 8</label>
        <input type="text" name="n8" value="<?= $numero8 ?>">

        <button name="btn-dividir">Dividir</button>

        <input disabled value="<?= $dividir ?>">
    </form>

</body>

</html>