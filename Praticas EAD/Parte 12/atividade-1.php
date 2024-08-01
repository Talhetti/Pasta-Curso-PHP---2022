<?php

    require_once 'function.php';

    if(isset($_POST['btnEnviar'])){
        $nome = ltrim(trim($_POST['nome']));
        $descricao = ltrim(trim($_POST['desc']));
        $senha = ltrim(trim($_POST['senha']));
        $repSenha = ltrim(trim($_POST['repSenha']));
        
        if($nome == '' || $descricao == '' || $senha == '' || $repSenha == ''){
            $msgError = 'Preencher todos os campos obrigatórios!';
        }else if(ValidarCaracteresNome($nome) == -1){
            echo 'Nome deverá conter no mínimo 3 caracteres.' . '<hr>';
        }else if(ValidarCaracteresDescricao($descricao) == -2){
            echo 'Descrição deverá conter no mínimo 50 caracteres.' . '<hr>';
        }else if(ValidarCaracteresSenha($senha) == -3){
            echo 'Senha deverá conter no mínimo 6 caracteres.' . '<hr>';
        }else if(VerificarSenhas($senha, $repSenha) == -4){
            echo 'Os campos Senha e Repetir Senha deverão ser iguais!' . '<hr>';
        }else{
            echo 'Formulário preenchido corretamente!';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <form action="atividade-1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Faça uma Descrição:</label>
        <input type="text" name="desc" value="<?= isset($descricao) ? $descricao : '' ?>">
        <br>
        <label>Digite sua Senha:</label>
        <input type="password" name="senha" value="<?= isset($senha) ? $senha : '' ?>">
        <br>
        <label>Digite novamente sua Senha:</label>
        <input type="password" name="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>