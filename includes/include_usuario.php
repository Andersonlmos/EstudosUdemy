<?php
include_once ('include_pessoa.php');

class Usuario extends Pessoa1 {
    public function apresentar(){
        return "Olá, me chamo {$this->nome} e tenho {$this->idade} anos";
    }
}