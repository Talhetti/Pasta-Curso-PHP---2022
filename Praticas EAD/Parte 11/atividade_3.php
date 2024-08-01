<?php

    if(isset($_POST['btnEnviar'])){
        $numero = $_POST['number'];

        if($numero == ''){
            $msgError = 'Preencher todos os campos obrigatórios!';
        }else{
            echo '============ INÍCO DO LAÇO DE REPETIÇÃO! ============<br> ';
            
            for($i=1; $i <= $numero; $i++){
                echo 'Valor digitado foi: ' . $numero . '.Valor de Variável $i - ' . $i . '.<br>';
            }
            
            echo '============ FIM DO LAÇO DE REPETIÇÃO! ============<br> ';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <form action="atividade_3.php" method="POST">
        <labrl>Digite um número que informe a quantidade de repetição que o Laço de Repetição irá realizar:</labrl>
        <input type="number" name="number" value="<?= isset($numero) ? $numero : '' ?>">
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>