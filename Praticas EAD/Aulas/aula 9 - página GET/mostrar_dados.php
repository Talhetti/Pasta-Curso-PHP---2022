<?php

    if(isset($_GET['nome']) && $_GET['nome'] != '' && 
    isset($_GET['sobrenome']) && $_GET['sobrenome'] != ''
    ){

        
        $nome_usuario = $_GET['nome'];
        $sobrenome_usuario = $_GET['sobrenome'];

        $nome_completo = $nome_usuario . ' ' . $sobrenome_usuario;

    }else{
        header('location: pegar_dados.php');
        exit;
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
    <label>Nome completo: <?= $nome_completo ?></label>
</body>
</html>