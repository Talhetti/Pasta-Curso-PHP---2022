<?php

if(isset($_POST['btn-verificar'])){
    $inicio = $_POST['inicio'];
    $meio = $_POST['meio'];
    $final = $_POST['final'];
}
    if(trim($inicio == '')){
        echo 'preencher com número';
    }
    else if(trim($meio == '')){
        echo 'preencher com número';
    }
    else if(trim($final == '')){
        echo 'preencher com número';
    }
        else{

            if($inicio <= $meio && $meio <= $final){
                echo 'O número ' . $meio . ' está entre ' . $inicio . ' e ' . $final;
            
            }else{
                echo 'O número ' . $meio . ' não está entre ' . $inicio . ' e ' . $final;
            }

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
    <form action="2 8.1 - Aula.php" method="POST">
        <label>Digite seu número 1</label>
        <input type="text" name="inicio" value="<?= isset($inicio) ? $inicio : '' ?>">
        <label>Digite seu número 2</label>
        <input type="text" name="meio" value="<?= isset($meio) ? $meio : '' ?>">
        <label>Digite seu número 3</label>
        <input type="text" name="final" value="<?= isset($final) ? $final : '' ?>">
        <button name="btn-verificar">verificar</button>
    </form>
</body>

</html>