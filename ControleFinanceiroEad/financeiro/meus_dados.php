<?php
require_once "../DAO/usuarioDAO.php";

if(isset($_POST['btngravar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $objdao = new UsuarioDAO();

    $ret = $objdao->GravarMeusDados($nome, $email);
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
                        <h2>Meus dados</h2>
                        <h5>Nesta página, você poderá alterar seus dados. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <?php include_once "_msg.php" ?>
                <form method="POST" action="meus_dados.php">
                    <div class="form-group">
                        <label>Nome</label>
                        <input class="form-control" placeholder="Digite seu nome" name="nome" id="nome" />
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" placeholder="Digite seu E-mail." name="email" id="email" />
                    </div>

                    <button onclick=" return ValidarMeusDados()" type="submit" class="btn btn-success" name="btngravar">Gravar</button>
                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
</body>

</html>