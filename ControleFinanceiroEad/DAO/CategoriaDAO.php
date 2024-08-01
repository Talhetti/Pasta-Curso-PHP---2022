<?php

class CategoriaDAO{
    public function CadastrarCategoria($nome){
        if(trim($nome) == ''){
            return 0;
        }
    }
}