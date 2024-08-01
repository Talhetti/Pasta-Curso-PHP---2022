<?php

    // Os Parametros de uma função, não é necessário ser iguais as nomenclaturas das Variaveis da tela on esta o Front-End!
    // Resolução do Primeiro Exercício! ===================================================================================
    function ValidarCaracteresNome($usuario){
        if(strlen($usuario) < 3){
            return -1;
        }else{
            return 1;
        }
    }

    function ValidarCaracteresDescricao($info){
        if(strlen($info) < 50){
            return -2;
        }else{
            return 1;
        }
    }

    function ValidarCaracteresSenha($password){
        if(strlen($password) < 6){
            return -3;
        }else{
            return 1;
        }        
    }

    function VerificarSenhas($password, $repPassword){
        if($password != $repPassword){
            return -4;
        }else{
            return 1;
        }
    }

    // Resolução do Primeiro Exercício! ===================================================================================
    function CalcularSalario($dinheiro, $percentual){
        $soma = $dinheiro + (($dinheiro * $percentual) / 100);
        return $soma;
    }