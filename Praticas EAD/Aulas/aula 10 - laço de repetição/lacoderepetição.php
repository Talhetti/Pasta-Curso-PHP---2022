<?php

$total = '';

if(isset($_POST['btn-ver'])){
    $total = $_POST['qtd'];


echo'Inicio do laço de repetição<br><br>';


for($i=1; $i<$total; $i++){
    echo 'Valor da variável $i - ' . $i . '<br>';
}

echo '<br><br>Fim da repetição';
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
    <form action="lacoderepetição.php" method="POST">
        <label for="">informe a quantidade de vezes de repetição</label>
        <input type="text" name="qtd" value="<?= $total ?>">

        <button name="btn-ver">Ver resultado</button>
    </form>
</body>
</html>