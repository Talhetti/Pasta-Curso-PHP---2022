function ValidarMeusDados(){
    // var nome = document.getElementById("nome").value;
    // var email = $("#email").val();

    if(nome.trim() == ''){
        alert("Preencher o campo NOME!")
        $("#nome").focus();
        return false;
    }if(email.trim() == ''){
        alert("Preencher o campo EMAIL!")
        $("#email").focus();
        return false;
    }
          
}

function ValidarCategoria(){
    if($("#nomecategoria").val().trim() == ''){
        alert("Preencher o campo NOME DA CATEGORIA!");
        $("#nomecategoria").focus();
        return false;
    }
}

function ValidarEmpresa(){
    if($("#nomeempresa").val().trim() == ''){
        alert("Preencher o CAMPO DA EMPRESA");
        $("nomeempresa").focus();
        return false;
    }
}

function ValidarConta(){
    if($("#banco").val().trim() == ''){
        alert("Preencher o campo BANCO");
        $("#banco").focus();
        return false;
    }if($("#agencia").val().trim() == ''){
        alert("Preencher o campo AGÊNCIA");
        $("#banco").focus();
        return false;
    }if($("#numero").val().trim() == ''){
        alert("Preencher o campo NÚMERO DA CONTA");
        $("#numero").focus();
        return false
    }if($("#saldo").val().trim() == ''){
        alert("Preencher o campo SALDO");
        $("#saldo").focus();
        return false;
    }

}

function ValidarMovimento(){
    if($("#tipo").val() == ''){
        alert("Selecione o TIPO");
        $("#tipo").focus();
        return false;
    }if($("#data").val() == ''){
        alert("Preencha o campo DATA");
        $("#data").focus();
        return false;
    }if($("#valor").val().trim() == ''){
        alert("Preencher o campo vVALOR");
        $("#valor").focus();
        return false;
    }if($("#categoria").val() == ''){
        alert("Preencher o campo CATEGORIA");
        $("#categoria").focus();
        return false;
    }if($("#empresa").val() == ''){
        alert("Preencher o campo EMPRESA");
        $("#empresa").focus();
        return false;
    }if($("#conta").val() == ''){
        alert("Preencher o campo CONTA");
        $("#conta").focus();
        return false;
    }
}

function ValidarConsultaPeriodo(){
    if($("#inicio").val() == ''){
        alert("Preencher o campo DATA INICIAL")
        $("#inicio").focus();
        return false;
    }if($("#final").val() == ''){
        alert("Preencher o campo DATA FINAL");
        $("#final").focus();
        return false;
    }
}

function CampoLogar(){
    if($("#email").val() == ''){
        alert("Preencher o campo EMAIL");
        $("#email").focus();
        return false;
    }if($("#senha").val() == ''){
        alert("Preencher o campo SENHA");
        $("#senha").focus();
        return false;
    }

}

function ValidarCadastro(){
    if($("#nome").val().trim() == ''){
        alert("Preencher o campo NOME");
        $("#nome").focus();
        return false;
    }if($("#email").val().trim() == ''){
        alert("Preencher o campo EMAIL");
        $("#email").focus();
        return false;
    }if($("#senha").val().trim() == ''){
        alert("Preencher a PRIMEIRA SENHA");
        $("#senha").focus();
        return false;
    }if($("#senha").val().trim().lenght < 6){ 
        alert("A senha deverá conter no mínimo 6 caracteres");
        $("#senha").focus();
        return false;
    }if($("#senha").val().trim() != $("#rsenha").val().trim()){
        alert("O campo SENHA e REPETIR SENHA devem ser iguais");
        $("#rsenha").focus();
        return false
    }
}