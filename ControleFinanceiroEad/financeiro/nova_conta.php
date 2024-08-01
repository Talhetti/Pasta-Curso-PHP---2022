<?php

require_once "../DAO/ContaDAO.php";

if(isset($_POST['BtnSalvar'])){
    $banco = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $numero = $_POST['numero'];
    $saldo = $_POST['saldo'];

    $objdao = new ContaDAO();
   
    $ret = $objdao->CadastrarConta($banco, $agencia, $numero, $saldo);
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php 
include_once "_head.php";

?>

<body>
    <div id="wrapper">

        <?php 
include_once "_topo.php";
include_once "_menu.php";
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php require_once "_msg.php" ?>
                        <h2>Nova conta</h2>
                        <h5>Aqui você poderá cadastrar todas as suas contas. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_conta.php" method="POST">
                    <div class="form-group">
                        <label>Nome do banco*</label>
                        <input class="form-control" placeholder="Nome do banco..." name="banco" id="banco"/>
                    </div>
                    <div class="form-group">
                        <label>Agência*</label>
                        <input class="form-control" placeholder="Digite a agência." name="agencia" id="agencia"/>
                    </div>
                    <div class="form-group">
                        <label>Número da conta*</label>
                        <input class="form-control" placeholder="Digite o número da conta." name="numero" id="numero"/>
                    </div>
                    <div class="form-group">
                        <label>Saldo*</label>
                        <input class="form-control" placeholder="Digite o saldo da conta." name="saldo" id="saldo"/>
                    </div>

                    <button type="submit" class="btn btn-success" name="BtnSalvar" onclick="return ValidarConta()">Salvar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>