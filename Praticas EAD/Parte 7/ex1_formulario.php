<?php
    if(isset($_POST['btn-enviar'])){
        $prato = ltrim(ltrim($_POST['NomePrato']));
        $descrição = ltrim(ltrim($_POST['Descrição']));
        $preço = ltrim(ltrim($_POST['preço']));
        $ingrediente = ltrim(ltrim($_POST['ingrediente']));
    }
    echo '<div class="msgRetorno"> Nome do prato: ' . $prato . ' <br> Descrição: ' . $descrição . '<br> Preço: ' . $preço . ' <br> Ingredientes: ' . $ingrediente . '.</div>';
    echo '<hr>';
    echo "Nome do prato: $prato.<br>Descrição: $descrição.<br>Preço: $preço.Ingrediente: $ingrediente"

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <hr>
    <form action="ex1_formulario.php" method="post">
        <label>Nome do prato:</label>
        <input name="NomePrato" class="campText" placeholder="Digite o nome do prato aqui...">

        <label>Descrição:</label>
        <input name="Descrição" class="campText" placeholder="Digite a Descrição aqui...">

        <label>Preço:</label>
        <input name="preço" class="campText" placeholder="Digite o preço aqui...">

        <label>Ingrediente:</label>
        <input name="ingrediente" class="campText" placeholder="Digite os ingredientes aqui...">

        <button name="btn-enviar" class="btn">Enviar</button>
    </form>

</body>

</html>