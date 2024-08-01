<?php

include_once 'aula 11 - função/função.php'; 
// require_once faz a mesma coisa que o include_once. Usar include_once.

$soma1 = '';
$soma2 = '';
$resultado = '';

if(isset($_POST['BtnSomar'])){
    $soma1 = $_POST['soma1'];
    $soma2 = $_POST['soma2'];

    if(trim($soma1) == ''){
       echo 'Preencher o campo';
    } 
    else if (trim($soma2) == ''){
        echo 'Preencher o campo 2';
    } 
    else {
        $resultado = Somar($soma1, $soma2);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo da função</title>
</head>

<body>
    <form action="função_exemplo.php" method="POST">
        <label>Número 1</label>
        <input name="soma1" value="<?= isset($soma1) ? $soma1 : '' ?>">
        <label>Número 2</label>
        <input name="soma2" value="<?= isset($soma2) ? $soma2 : '' ?>">

        <button name="BtnSomar">Somar</button>

        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    </form>
</body>

</html>