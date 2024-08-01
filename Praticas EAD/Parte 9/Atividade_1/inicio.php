<?php

    if(isset($_POST['btnEnviar'])){
        $nome = ltrim(trim($_POST['nome']));
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        if($nome == '' || $peso == '' || $altura == ''){
            echo 'Preencher todos os Campos Obrigatórios!';
        }else{
            // Comando que vai executar o envio por GET, sera o PHP quem vai realizar a tarefa, e não o HTML!
            // O ? neste caso, possui o significado de GET (Enviar para URL do Browser).
            header("location: fim.php?nome=$nome&peso=$peso&altura=$altura");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - Início</title>
</head>
<body>
    <form action="inicio.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Seu Peso:</label>
        <input type="number" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Sua Altura:</label>
        <input type="number" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>