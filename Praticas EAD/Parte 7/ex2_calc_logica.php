<?php

if(isset($_POST['btn-calcular'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];

    $calcular = ($num1 + $num2 + $num3) / ($num4 * $num5);

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
    <div class="coluna">
        <form action="ex2_calc_logica.php" method="POST">
            <label for="">Número 1:</label>
            <input type="text" name="num1" value="<?= isset($num1) ? $num1 : '' ?>">
            <br>
            <label for="">Número 2:</label>
            <input type="text" name="num2" value="<?= isset($num2) ? $num2 : '' ?>">
            <br>
            <label for="">Número 3:</label>
            <input type="text" name="num3" value="<?= isset($num3) ? $num3 : '' ?>">
            <br>
            <label for="">Número 4:</label>
            <input type="text" name="num4" value="<?= isset($num4) ? $num4 : '' ?>">
            <br>
            <label for="">Número 5:</label>
            <input type="text" name="num5" value="<?= isset($num5) ? $num5 : '' ?>">
            <br>
            <button name="btn-calcular">calcular</button>

            <input disabled value="<?= isset($calcular) ? $calcular : '' ?>">
    </div>
    </form>
</body>

</html>