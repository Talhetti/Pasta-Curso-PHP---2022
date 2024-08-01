<?php

    if(isset($_POST['btnEnviar'])){
        $fruta1 = ltrim(trim($_POST['fr1']));
        $fruta2 = ltrim(trim($_POST['fr2']));
        $fruta3 = ltrim(trim($_POST['fr3']));
        $fruta4 = ltrim(trim($_POST['fr4']));
        $fruta5 = ltrim(trim($_POST['fr5']));

        if($fruta1 == '' || $fruta2 == '' || $fruta3 == '' || $fruta4 == '' || $fruta5 == ''){
            $msgError = 'Preencher todos os campos obrigatórios!';
        }else{
            $frutas = array();

            $frutas[] = $fruta1; // Nesta Posição de número 0 do Array, vai ser armazenado o valor da variavel $fruta1 - Representa a posição 0.
            $frutas[] = $fruta2; // Nesta Posição de número 0 do Array, vai ser armazenado o valor da variavel $fruta2 - Representa a posição 1.
            $frutas[] = $fruta3; // Nesta Posição de número 0 do Array, vai ser armazenado o valor da variavel $fruta3 - Representa a posição 2.
            $frutas[] = $fruta4; // Nesta Posição de número 0 do Array, vai ser armazenado o valor da variavel $fruta4 - Representa a posição 3.
            $frutas[] = $fruta5; // Nesta Posição de número 0 do Array, vai ser armazenado o valor da variavel $fruta5 - Representa a posição 4.

            // 1º Teste:
            echo '<pre>';
            print_r($frutas);
            echo '</pre>';

            echo '=================================<br>';     

            // 2º Teste:
            echo '<pre>';
            var_dump($frutas);
            echo '</pre>';

            echo '=================================<br>';            

            for($i=0; $i < count($frutas); $i++){
                echo 'A Fruta da posição ' . $i . ' é ' . $frutas[$i] . '.<br>';
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
    <title>Atividade 2</title>
</head>
<body>
    <form action="atividade_2.php" method="POST">
    <label>Primeira Fruta:</label>
    <input type="text" name="fr1" value="<?= isset($fruta1) ? $fruta1 : '' ?>">
    <br>
    <label>Segunda Fruta:</label>
    <input type="text" name="fr2" value="<?= isset($fruta2) ? $fruta2 : '' ?>">
    <br>
    <label>Terceira Fruta:</label>
    <input type="text" name="fr3" value="<?= isset($fruta3) ? $fruta3 : '' ?>">
    <br>
    <label>Quarta Fruta:</label>
    <input type="text" name="fr4" value="<?= isset($fruta4) ? $fruta4 : '' ?>">
    <br>
    <label>Quinta Fruta:</label>
    <input type="text" name="fr5" value="<?= isset($fruta5) ? $fruta5 : '' ?>">
    <br>
    <button name="btnEnviar">ENVIAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>