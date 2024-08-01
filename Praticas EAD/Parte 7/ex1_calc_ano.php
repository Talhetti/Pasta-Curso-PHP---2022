<?php


if(isset($_POST['btn-calcular'])){
    $janeiro = $_POST['janeiro'];
    $fevereiro = $_POST['fevereiro'];
    $março = $_POST['março'];
    $abril = $_POST['abril'];
    $maio = $_POST['maio'];
    $junho = $_POST['junho'];
    $julho = $_POST['julho'];
    $agosto = $_POST['agosto'];
    $setembro = $_POST['setembro'];
    $outubro = $_POST['outubro'];
    $novembro = $_POST['novembro'];
    $dezembro = $_POST['dezembro'];
    
    $calcular = $janeiro + $fevereiro + $março + $abril + $maio + $junho + $julho + $agosto + $setembro + $outubro + $novembro + $dezembro;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="coluna1">
        <form action="ex1_calc_ano.php" method="POST">
            <label>Ganho do mês de Janeiro: </label>
            <input type="text" name="janeiro" value="<?= isset($janeiro) ? $janeiro : '' ?>">
            <br>
            <label>Ganho do mês de Fevereiro: </label>
            <input type="text" name="fevereiro" value="<?= isset($fevereiro) ? $fevereiro : '' ?>">
            <br>
            <label>Ganho do mês de Março: </label>
            <input type="text" name="março" value="<?= isset($março) ? $março : '' ?>">
            <br>
            <label>Ganho do mês de Abril: </label>
            <input type="text" name="abril" value="<?= isset($abril) ? $abril : '' ?>">
            <br>
            <label>Ganho do mês de Maio: </label>
            <input type="text" name="maio" value="<?= isset($maio) ? $maio : '' ?>">
            <br>
            <label>Ganho do mês de Junho: </label>
            <input type="text" name="junho" value="<?= isset($junho) ? $junho : '' ?>">
            <br>
            <label>Ganho do mês de Julho: </label>
            <input type="text" name="julho" value="<?= isset($julho) ? $julho : '' ?>">
            <br>
            <label>Ganho do mês de Agosto: </label>
            <input type="text" name="agosto" value="<?= isset($agosto) ? $agosto : '' ?>">
            <br>
            <label>Ganho do mês de Setembro: </label>
            <input type="text" name="setembro" value="<?= isset($setembro) ? $setembro : '' ?>">
            <br>
            <label>Ganho do mês de Outubro: </label>
            <input type="text" name="outubro" value="<?= isset($outubro) ? $outubro : '' ?>">
            <br>
            <label>Ganho do mês de Novembro: </label>
            <input type="text" name="novembro" value="<?= isset($novembro) ? $novembro : '' ?>">
            <br>
            <label>Ganho do mês de Dezembro: </label>
            <input type="text" name="dezembro" value="<?= isset($dezembro) ? $dezembro : '' ?>">
            <br>

            <button name="btn-calcular">Calcular</button>

            <input disabled value="<?= isset($calcular) ? $calcular: '' ?>">

        </form>
    </div>
</body>

</html>