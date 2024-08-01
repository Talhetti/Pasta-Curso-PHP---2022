<?php

    if(isset($_POST['btnCalcular'])){
        $tab = $_POST['tabuada'];

        if($tab == ''){
            echo 'Preencher todos os campos obrigatórios!<br>';
        }else{
            for($i=0; $i <= 10; $i++){
                echo $tab . ' X ' . ' = ' . ($tab*$i) . '<br>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <form action="atividade_4.php" method="POST">
        <label>Selecione a Tabuada desejada:</label>
        <select name="tabuada">
            <option value="">Selecione</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
</body>
</html>