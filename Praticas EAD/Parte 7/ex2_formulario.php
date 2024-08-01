<?php 

    if(isset($_POST['btn_enviar'])){
        $empresa = $_POST['empresa'];
        $site = $_POST['site'];
        $face = $_POST['face'];
        $insta = $_POST['insta'];
        $desc = $_POST['desc'];
    
        echo 'Nome da empresa: ' . $empresa . '<br> Site: ' . $site . '<br> Facebook: ' . $face . '<br> Instagram: ' . $insta . '<br> Descrição da empresa: ' . $desc;

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
    <form action="ex2_formulario.php" method="POST">
        <label>Nome da empresa:</label>
        <input name="empresa">
        <label>Site:</label>
        <input name="site">
        <label>Facebook:</label>
        <input name="face">
        <label>Instagram:</label>
        <input name="insta">
        <label>Descrição da empresa:</label>
        <input name="desc">
        <button name="btn_enviar">Enviar</button>
    </form>
</body>

</html>