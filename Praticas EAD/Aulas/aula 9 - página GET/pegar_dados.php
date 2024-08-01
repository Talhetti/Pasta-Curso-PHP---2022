<?php

if(isset($_POST['btn-mostrar'])){
    $nome = $_POST['nome_usuario'];
    $sobre = $_POST['sobrenome_usuario'];

    if(trim($nome) == ''){
        echo 'Preencher o campo NOME';
    }
    else if(trim($sobre) == ''){
        echo 'Preencher o campo SOBRENOME';
    }else{
        header("location: mostrar_dados.php?nome=$nome=usuario&sobrenome=$sobre");
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
    <form action="pegar_dados.php" method="POST">
        <label for="">nome:</label>
        <input type="text" name="nome_usuario" value="<?= isset($nome) ? $nome : '' ?> ">
        <label for="">sobrenome:</label>
        <input type="text" name="sobrenome_usuario" value="<?= isset($sobrenome) ? $sobrenome : '' ?> ">
        <button name="btn-mostrar">Mostrar</button>
    </form>
</body>

</html>