<?php

    if(isset($_POST['btnEnviar'])){
        $nome = ltrim(trim($_POST['nome']));
        $idade = ltrim(trim($_POST['id']));
        $valor = $_POST['valor'];

        if($nome == '' || $idade == '' || $valor == ''){
            $msgError = 'Preencher todos os campos obrigatórios!';
        }else{
            for($i=1; $i <= $valor; $i++){
                echo'Meu nome é ' . $nome . ', tenho ' . $idade . ' anos de idade. Número de repetições digitado: ' . $valor . '.Posição: ' . $i . '.<br>';
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
    <title>Atividade 1</title>
</head>
<body>
    <form action="atividade_1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite sua Idade:</label>
        <input type="text" name="id" value="<?= isset($idade) ? $idade : '' ?>">
        <br>
        <label>Digite o número de repetições desejado:</label>
        <input type="number" name="valor" value="<?= isset($valor) ? $valor : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>