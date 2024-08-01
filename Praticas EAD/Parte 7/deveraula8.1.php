<?php
if(isset($_POST['btn-calcular'])){
    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];
    $campo3 = $_POST['campo3'];
    $campo4 = $_POST['campo4'];
    $campo5 = $_POST['campo5'];

    $multiplicar = $campo1 * 2 + $campo3 + $campo4 + $campo5;

    if(trim($multiplicar == '')){
        echo 'Preencher com número';
    }
        else if ($multiplicar == 100){
            echo 'Seu resultado foi igual de 100';
        }
        }
        
        else if($multiplicar < 100){
            echo 'Seu resultado foi acima de 100';
        }

        else if($multiplicar > 100){
            echo 'Seu resultado foi abaixo de 100';
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
    <form action="deveraula8.1.php" method="POST">
        <label>Campo 1</label>
        <input type="text" name="campo1" value="<?= isset($campo1) ? $campo1 : '' ?>">
        <br>
        <label>Campo 2</label>
        <input type="text" name="campo2" value="<?= isset($campo2) ? $campo2 : '' ?>">
        <br>
        <label>Campo 3</label>
        <input type="text" name="campo3" value="<?= isset($campo3) ? $campo3 : '' ?>">
        <br>
        <label>Campo 4</label>
        <input type="text" name="campo4" value="<?= isset($campo4) ? $campo4 : '' ?>">
        <br>
        <label>Campo 5</label>
        <input type="text" name="campo5" value="<?= isset($campo5) ? $campo5 : '' ?>">
        <br>
        <button name="btn-calcular" value="<?= isset($multiplicar) ? $multiplicar : '' ?>">Calcular</button>
        <input disabled>
    </form>
</body>

</html>