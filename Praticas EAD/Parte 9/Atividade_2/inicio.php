<?php

    if(isset($_POST['btnCalc'])){
        $nome = ltrim(trim($_POST['nome']));
        $investimento = $_POST['invest'];
        $ganhoPerda = ltrim(trim($_POST['siglaGP']));
        $bancos = ltrim(trim($_POST['siglaBancos']));

        // if($nome == '' || $investimento == '' || $ganhoPerda == '' || $bancos == ''){
        //     echo 'Preencher todos os Campos Obrigatórios!<hr>';
        // }else if($ganhoPerda != 'G' && $ganhoPerda != 'g' && $ganhoPerda != 'P' && $ganhoPerda != 'p'){
        //     echo 'Digite a Sigla de Percentual correta (G ou P)!';
        // }else if($bancos != 'SA' && $bancos != 'IT' && $bancos != 'SI' && $bancos != 'sa' && $bancos != 'it' && $bancos != 'si'){
        //     echo 'Digite a Sigla do Banco desejado (SA | IT | SI)!';
        // }else{
        //     header("location: final.php?nome=$nome&invest=$investimento&ganhoPerda=$ganhoPerda&banco=$bancos");
        //     exit;
        // }

        if($nome == '' || $investimento == '' || $ganhoPerda == '' || $bancos == ''){
            echo 'Preencher todos os Campos Obrigatórios!<hr>';
        }else if($ganhoPerda != 'G' && $ganhoPerda != 'P'){
            echo 'Digite a Sigla de Percentual correta (G ou P)!';
        }else if($bancos != 'SA' && $bancos != 'IT' && $bancos != 'SI'){
            echo 'Digite a Sigla do Banco desejado (SA | IT | SI)!';
        }else{
            header("location: final.php?nome=$nome&invest=$investimento&ganhoPerda=$ganhoPerda&banco=$bancos");
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
    <title>Atividade 2 - Inicio</title>
</head>
<body>
    <form action="inicio.php" method="POST">
        <label>Nome:</label>
        <input name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Valor do Investimento:</label>
        <input type="number" name="invest" value="<?= isset($investimento) ? $investimento : '' ?>">
        <hr>
        <h4>Porcentagem:</h4>
        <br>
        <label>Siglas permitidas: G - Ganho | P - Perda.</label>
        <br>
        <!-- <input type="text" name="siglaGP" value="<?= isset($ganhoPerda) ? $ganhoPerda : '' ?>"> -->
        <select name="siglaGP">
            <option value="">selecione</option>
            <option value="G">Ganho</option>
            <option value="P">Perda</option>
        </select>
        <hr>
        <h4>Bancos:</h4>
        <br>
        <label>Siglas permitidas: SA - Santander | IT - Itau | SI - Sicredi.</label>
        <br>
        <!-- <input type="text" name="siglaBancos" value="<?= isset($bancos) ? $bancos : '' ?>"> -->
        <select name="siglaBancos">
            <option value="">selecione</option>
            <option value="SA">Santander</option>
            <option value="IT">Itau</option>
            <option value="SI">Sicredi</option>
        </select>
        <br>
        <button name="btnCalc">CALCULAR</button>
    </form>
</body>
</html>