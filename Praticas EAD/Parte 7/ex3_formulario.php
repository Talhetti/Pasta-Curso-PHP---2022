<?php

if(isset($_POST['btn-enviar'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    echo 'Sua mensagem foi enviada com sucesso!' . '<br> Nome: ' . $nome . ' <br>Sobrenome: ' . $sobrenome . '<br>Assunto: ' .  $assunto . '<br>Email: ' . $email . '<br>Mensagem: ' . $mensagem;

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
    <form action="ex3_formulario.php" method="POST">
        <label>Nome:</label>
        <input name="nome">
        <label>Sobrenome:</label>
        <input name="sobrenome">
        <label>Assunto:</label>
        <input name="assunto">
        <label>E-mail:</label>
        <input name="email">
        <label>Mensagem:</label>
        <input name="mensagem">
        <button name="btn-enviar">Enviar</button>
    </form>
</body>

</html>