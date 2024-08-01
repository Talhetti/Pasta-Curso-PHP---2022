<?php
require_once "../DAO/MovimentoDAO.php";

if(isset($_POST['BtnGravar'])){
    $tipo = $_POST['tipo'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $categoria = $_POST['categoria'];
    $empresa = $_POST['empresa'];
    $conta = $_POST['conta'];
    $obs = $_POST['obs'];

    $objdao = new MovimentoDAO();
   
    $ret = $objdao->RealizarMovimento($tipo, $data, $valor, $categoria, $empresa, $conta, $obs);
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
                        <?php include_once "_msg.php" ?>
                        <h2>Realizar movimento</h2>
                        <h5>Aqui você poderá realizar seus movimento de entrada e saida. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="realizar_movimento.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipo do movimento*</label>
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="">Selecione</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saída</option>
                            </select>
                        </div>
                       
                       
                        <div class="form-group">
                            <label>Data*</label>
                            <input type="date" class="form-control" placeholder="Coloque a data do movimento." name="data" id="data"/>
                        </div>
                       
                       
                        <div class="form-group">
                            <label>Valor*</label>
                            <input class="form-control" placeholder="Digite o valor do movimento." name="valor" id="valor"/>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Categoria*</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                        
                       
                        <div class="form-group">
                            <label>Empresa*</label>
                            <select class="form-control" name="empresa" id="empresa">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                        
                       
                        <div class="form-group">
                            <label>Conta*</label>
                            <select class="form-control" name="conta" id="conta">
                                <option value="">Selecione</option>
                            </select>
                        </div>
                    </div>
                   
                    <div class="col-md-12" class="form-group">
                        <label>Observação(opcional)</label>
                        <textarea class="form-control" rows="3" name="obs"></textarea>
                        <button type="submit" class="btn btn-success" name="BtnGravar" onclick="return ValidarMovimento()">Finalizar lançamento</button>
                    </div>

            </div>
            </form>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>

</body>

</html>