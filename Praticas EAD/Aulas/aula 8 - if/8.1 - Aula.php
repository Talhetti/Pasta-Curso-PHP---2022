<?php

if(isset($_POST['btn-verificar'])){
    
    $numero = $_POST['numero'];

    if(trim($numero) == ''){
        echo 'Preencher o campo número';
    }
    else{
        
        if($numero > 100){
            echo 'O número '.$numero.' é maior do que 100';
        }
   
        else if($numero == 100){
            echo 'O número ' .$numero. ' é igual a 100';
        }
    
        if($numero < 100){
            echo 'O número '.$numero. ' é menor que 100';
        }
    
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
    <form action="8.1 - Aula.php" method="post">
        <label>Número digitado</label>
        <input type="text" name="numero">
        <button name="btn-verificar">Verificar</button>
    </form>

</body>
</html>