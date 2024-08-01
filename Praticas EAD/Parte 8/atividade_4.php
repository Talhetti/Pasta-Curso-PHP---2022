<?php

    if(isset($_POST['btnCalcular'])){
        $salario = $_POST['salario'];
        $aumento = $_POST['aumt'];

        if($salario == '' || $aumento == ''){
            $msgError = 'Preencher todos os Campos Corretamente!<br>';
        }else{
            // (fórmula: salario_final = salario +  (salario * aumento) / 100)
            $resultado = $salario+ (($salario * $aumento) / 100);

            // 1 - 0   - 100   : Aumento Nivel 1
            // 2 - 101 - 200   : Aumento Nivel 2
            // 3 - 201 - 300   : Aumento Nivel 3
            // 4 - 301 - 400   : Aumento Nivel 4
            // 5 - acima de 400: Aumento Nivel 5

            if($resultado <= 100){
                $situacao = 'Aumento Nivel 1!';
            }else if($resultado > 100 && $resultado <= 200){
                $situacao = 'Aumento Nivel 2!';
            }else if($resultado > 200 && $resultado <= 300){
                $situacao = 'Aumento Nivel 3!';
            }else if($resultado > 300 && $resultado <= 400){
                $situacao = 'Aumento Nivel 4!';
            }else{
                $situacao = 'Aumento Nivel 5!';
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
    <link rel="stylesheet" href="style.css">
    <title>Atividade - 4</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_4.php" method="POST">
        <label>Salário:</label>
        <input type="number" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label>Aumento:</label>
        <input type="number" name="aumt" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span class="msgError"><?= isset($msgError) ? $msgError : '' ?></span>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <br>
    <span>Situação: <?= isset($situacao) ? $situacao : '' ?></span>
</body>
</html>