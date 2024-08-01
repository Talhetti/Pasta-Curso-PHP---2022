<?php

class calculo{
    public function SomarNumeros($n1, $n2, $n3){
        $soma = $n1 + $n2 + $n3;

        return $soma;
    }
    public function CalculadorCalculadora($n1, $n2, $operacoes){
       if(trim($n1) == '' || trim($n2) == '' || $operacoes == '' ){
        return 0;
       }

    }
    
    private function Somar($n1, $n2){
        $res = $n1 + $n2;
        return $res;
    }
}