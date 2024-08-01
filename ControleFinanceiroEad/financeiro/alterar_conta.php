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
                        <h2>Alterar conta</h2>
                        <h5>Aqui você poderá alterar suas contas. </h5>
                    
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="form-group">
                    <label>Nome do banco*</label>
                    <input class="form-control" placeholder="nome do banco." id="banco"/>
                </div>
                <div class="form-group">
                    <label>Agência*</label>
                    <input class="form-control" placeholder="Digite a agência." id="agencia"/>
                </div>
                <div class="form-group">
                    <label>Número da conta*</label>
                    <input class="form-control" placeholder="Digite o número da conta." id="numero" />
                </div>
                <div class="form-group">
                    <label>Saldo*</label>
                    <input class="form-control" placeholder="Digite o saldo da conta." id="saldo"/>
                </div>

                <button type="submit" class="btn btn-success" onclick="return ValidarConta()">Gravar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>