<?php 

if(isset($_POST['bnt_mostrar'])){
    
    $nome = $_POST['nome_usuario'];
    $sobrenome = $_POST['sobrenome_usuario'];

    echo 'Seu nome: ' . $nome . 'Seu sobrenome: ' . $sobrenome;

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
    <form action="Aula.php" method="post">
        <label>Nome</label>
        <input name="nome_usuario">
        <label>Sobrenome</label>
        <input type="text" name="sobrenome_usuario">
        <button name="bnt-mostrar">Mostrar</button>
    </form>
</body> 

</html>