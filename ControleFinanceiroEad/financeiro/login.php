<?php

require_once "../DAO/usuarioDAO.php";

if(isset($_POST['BtnLogar'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $objdao = new UsuarioDAO();
    $ret = $objdao->ValidarLogin($email, $senha);
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
include_once '_head.php';
?>

<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
               <?php require_once "_msg.php" ?>
                <h2> Controle financeiro : ACESSO</h2>

                <h5>( Faça seu login )</h5>
                <br />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> Entre com seus dados </strong>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="login.php">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" class="form-control" placeholder="Seu E-mail" name="email" id="email"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Sua senha" name="senha" id="senha"/>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" /> Me lembre
                                </label>
                                <span class="pull-right">
                                    <a href="#">Esqueceu a senha ? </a>
                                </span>
                            </div>

                            <button class="btn btn-primary" name="BtnLogar" onclick="return CampoLogar()">Logar agora</button>
                            <hr />
                            Não registrado ? <a href="cadastro.php">Clique aqui </a>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>



</body>

</html>