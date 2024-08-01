<?php

if(isset($_POST['btn_enviar'])){
    $dia = $_POST['Dia'];
    $mes = $_POST['Mês'];
    $ano = $_POST['Ano'];

    echo $dia . ' de ' . $mes . ' de ' . $ano;
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
    <form action="ex4_formulario.php" method="POST">
        <label for="">Data de hoje:</label>
        <input name="Dia">
        <label>Mês Atual:</label>
        <input name="Mês">
        <label>Ano Atual:</label>
        <input name="Ano">
        <button name="btn_enviar">Enviar</button>
    </form>
</body>

</html>