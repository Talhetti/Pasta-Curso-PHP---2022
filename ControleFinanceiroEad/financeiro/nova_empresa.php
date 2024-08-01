<?php
require_once "../DAO/EmpresaDAO.php";
if(isset($_POST['BtnGravar'])){
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $endereco = $_POST['endereco'];

    $objdao = new EmpresaDAO();

    $ret = $objdao->CadastrarEmpresa($nome, $tel, $endereco);
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
                        <h2>Nova empresa</h2>
                        <h5>Aqui você poderá cadastrar todas as suas empresas. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="nova_empresa.php" method="POST">
                    <div class="form-group">
                        <label>Nome da empresa*</label>
                        <input class="form-control" placeholder="nome da empresa." name="nome" id="nomeempresa"/>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input class="form-control" placeholder="Digite o telefone da empresa (opcional)." name="tel"/>
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" placeholder="Digite o endereço da empresa (opcional)." name="endereco"/>
                    </div>

                    <button type="submit" class="btn btn-success" name="BtnGravar" onclick="return ValidarEmpresa()">Gravar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>