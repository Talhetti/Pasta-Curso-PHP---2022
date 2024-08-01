<?php

class ContaDAO{

    public function CadastrarConta($banco, $agencia, $numero, $saldo){

        if(trim($banco) == ''|| trim($agencia) == ''|| trim($numero) == ''|| trim($saldo) == ''){
            return 0;
        }

    }


}