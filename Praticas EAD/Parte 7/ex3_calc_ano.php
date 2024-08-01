<?php

if(isset($_POST['btn-calcular'])){
    $ganhojaneiro = $_POST['ganhojaneiro'];
    $ganhofevereiro = $_POST['ganhofevereiro'];
    $ganhomarço = $_POST['ganhomarço'];
    $ganhoabril = $_POST['ganhoabril'];
    $ganhomaio = $_POST['ganhomaio'];
    $ganhojunho = $_POST['ganhojunho'];
    $ganhojulho = $_POST['ganhojulho'];
    $ganhoagosto = $_POST['ganhoagosto'];
    $ganhosetembro = $_POST['ganhosetembro'];
    $ganhooutubro = $_POST['ganhooutubro'];
    $ganhonovembro = $_POST['ganhonovembro'];
    $ganhodezembro =  $_POST['ganhodezembro'];

    $perdajaneiro = $_POST['perdajaneiro'];
    $perdafeveiro = $_POST['perdafevereiro'];
    $perdamarço = $_POST['perdamarço'];
    $perdaabril = $_POST['perdaabril'];
    $perdamaio = $_POST['perdamaio'];
    $perdajunho = $_POST['perdajunho'];
    $perdajulho = $_POST['perdajulho'];
    $perdaagosto = $_POST['perdaagosto'];
    $perdasetembro = $_POST['perdasetembro'];
    $perdaoutubro = $_POST['perdaoutubro'];
    $perdanovembro = $_POST['perdanovembro'];
    $perdadezembro = $_POST['perdadezembro'];

    $somadoano = $ganhojaneiro + $ganhofevereiro + $ganhomarço + $ganhoabril + $ganhomaio + $ganhojunho + $ganhojulho + $ganhoagosto + $ganhosetembro + $ganhooutubro + $ganhonovembro + $ganhodezembro;

    $totaldeperdadoano = $perdajaneiro + $perdafeveiro + $perdamarço + $perdaabril + $perdamaio + $perdajunho + $perdajulho + $perdaagosto + $perdasetembro + $perdaoutubro + $perdanovembro + $perdadezembro;

    $lucroano = $somadoano - $totaldeperdadoano;

    $lucrojan = $ganhojaneiro - $perdajaneiro;
    $lucrofev = $ganhofevereiro - $perdafevereiro;
    $lucromar = $ganhomarco - $perdamarco;
    $lucroeabr = $ganhoabril - $perdaabril;
    $lucromai = $ganhomaio - $perdamaio;
    $lucrojun = $ganhojunho - $perdajunho;
    $lucrojul = $ganhojulho - $perdajulho;
    $lucroago = $ganhoagosto - $perdaagosto;
    $lucroset = $ganhosetembro - $perdasetembro;
    $lucroout = $ganhooutubro - $perdaoutubro;
    $lucronov = $ganhonovembro - $perdanovembro;
    $lucrodez = $ganhodezembro - $perdadezembro;



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
        <form action="ex3_calc_ano.php" method="POST">
            <label>Ganho do mês de janeiro:</label>
            <input type="text" name="ganhojaneiro" value="<?= isset($ganhojaneiro) ? $ganhojaneiro : '' ?>">
            <br>
            <label>Ganho do mês de fevereiro:</label>
            <input type="text" name="ganhofevereiro" value="<?= isset($ganhofevereiro) ? $ganhofevereiro : '' ?>">
            <br>
            <label>Ganho do mês de Março:</label>
            <input type="text" name="ganhomarço" value="<?= isset($ganhomarço) ? $ganhomarço : '' ?>">
            <br>
            <label>Ganho do mês de Abril:</label>
            <input type="text" name="ganhoabril" value="<?= isset($ganhoabril) ? $ganhoabril : '' ?>">
            <br>
            <label>Ganho do mês de Maio:</label>
            <input type="text" name="ganhomaio" value="<?= isset($ganhomaio) ? $ganhomaio : '' ?>">
            <br>
            <label>Ganho do mês de Junho:</label>
            <input type="text" name="ganhojunho" value="<?= isset($ganhojunho) ? $ganhojunho : '' ?>">
            <br>
            <label>Ganho do mês de Julho:</label>
            <input type="text" name="ganhojulho" value="<?= isset($ganhojulho) ? $ganhojulho : '' ?>">
            <br>
            <label>Ganho do mês de Agosto:</label>
            <input type="text" name="ganhoagosto" value="<?= isset($ganhoagosto) ? $ganhoagosto : '' ?>">
            <br>
            <label>Ganho do mês de Setembro:</label>
            <input type="text" name="ganhosetembro" value="<?= isset($ganhosetembro) ? $ganhosetembro : '' ?>">
            <br>
            <label>Ganho do mês de Outubro:</label>
            <input type="text" name="ganhooutubro" value="<?= isset($ganhooutubro) ? $ganhooutubro : '' ?>">
            <br>
            <label>Ganho do mês de Novembro:</label>
            <input type="text" name="ganhonovembro" value="<?= isset($ganhonovembro) ? $ganhonovembro : '' ?>">
            <br>
            <label>Ganho do mês de Dezembro:</label>
            <input type="text" name="ganhodezembro" value="<?= isset($ganhodezembro) ? $ganhodezembro : '' ?>">
    </div>
    <div class="coluna2">
        <label>Perca do mês de janeiro:</label>
        <input type="text" name="perdajaneiro" value="<?= isset($perdajaneiro) ? $perdajaneiro : '' ?>">
        <br>
        <label>Perca do mês de fevereiro:</label>
        <input type="text" name="perdafevereiro" value="<?= isset($perdafeveiro) ? $perdafeveiro : '' ?>">
        <br>
        <label>Perca do mês de Março:</label>
        <input type="text" name="perdamarço" value="<?= isset($perdamarço) ? $perdamarço : '' ?>">
        <br>
        <label>Perca do mês de Abril:</label>
        <input type="text" name="perdaabril" value="<?= isset($perdaabril) ? $perdaabril : '' ?>">
        <br>
        <label>Perca do mês de Maio:</label>
        <input type="text" name="perdamaio" value="<?= isset($perdamaio) ? $perdamaio : '' ?>">
        <br>
        <label>Perca do mês de Junho:</label>
        <input type="text" name="perdajunho" value="<?= isset($perdajunho) ? $perdajunho : '' ?>">
        <br>
        <label>Perca do mês de Julho:</label>
        <input type="text" name="perdajulho" value="<?= isset($perdajulho) ? $perdajulho : '' ?>">
        <br>
        <label>Perca do mês de Agosto:</label>
        <input type="text" name="perdaagosto" value="<?= isset($perdaagosto) ? $perdaagosto : '' ?>">
        <br>
        <label>Perca do mês de Setembro:</label>
        <input type="text" name="perdasetembro" value="<?= isset($perdasetembro) ? $perdasetembro : '' ?>">
        <br>
        <label>Perca do mês de Outubro:</label>
        <input type="text" name="perdaoutubro" value="<?= isset($perdaoutubro) ? $perdaoutubro : '' ?>">
        <br>
        <label>Perca do mês de Novembro:</label>
        <input type="text" name="perdanovembro" value="<?= isset($perdanovembro) ? $perdanovembro : '' ?>">
        <br>
        <label>Perca do mês de Dezembro:</label>
        <input type="text" name="perdadezembro" value="<?= isset($perdadezembro) ? $perdadezembro : '' ?>">

    </div class="calcular">
    <div>
        <button name="btn-calcular">calcular</button>

        <p>Total de ganho do ano</p>
        <input disabled value="<?= isset($somadoano) ? $somadoano : '' ?>">
        <br>
        <p>Total de perca do ano</p>
        <input disabled value="<?= isset($totaldeperdadoano) ? $totaldeperdadoano : '' ?>">
        <br>
        <p>Total de lucro do ano</p>
        <input disabled value="<?= isset($lucroano) ? $lucroano : '' ?>">
        <br>
        <div class="meses">
            <p>Total de lucro de janeiro</p>
            <input disabled value="<?= isset($lucrojan) ? $lucrojan : '' ?>">
            <p>Total de lucro de fevereiro</p>
            <input disabled value="<?= isset($lucrofev) ? $lucrofev : '' ?>">
            <p>Total de lucro de março</p>
            <input disabled value="<?= isset($lucromar) ? $lucromar : '' ?>">
            <p>Total de lucro de abril</p>
            <input disabled value="<?= isset($lucroeabr) ? $lucroeabr : '' ?>">
            <p>Total de lucro de maio</p>
            <input disabled value="<?= isset($lucromai) ? $lucromai : '' ?>">
            <p>Total de lucro de junho</p>
            <input disabled value="<?= isset($lucrojun) ? $lucrojun : '' ?>">
            <p>Total de lucro de julho</p>
            <input disabled value="<?= isset($lucrojul) ? $lucrojul : '' ?>">
            <p>Total de lucro de agosto</p>
            <input disabled value="<?= isset($lucroago) ? $lucroago : '' ?>">
            <p>Total de lucro de setembro</p>
            <input disabled value="<?= isset($lucroset) ? $lucroset : '' ?>">
            <p>Total de lucro de outubro</p>
            <input disabled value="<?= isset($lucroout) ? $lucroout : '' ?>">
            <p>Total de lucro de novembro</p>
            <input disabled value="<?= isset($lucronov) ? $lucronov : '' ?>">
            <p>Total de lucro de dezembro</p>
            <input disabled value="<?= isset($lucrodez) ? $lucrodez : '' ?>">
        </div>

        </form>
</body>

</html>