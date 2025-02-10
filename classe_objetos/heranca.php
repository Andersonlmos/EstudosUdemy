<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        return 'Pessoa Criada! <br>';
    }

    public function apresentar() {
        return "{$this->nome}, {$this->idade} anos";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login)
    {
        $this->nome = $nome;   
        $this->idade = $idade;   
        $this->login = $login;
        echo 'Usuario Criado!<br>';   
    }

    public function apresentar() {
        return "@{$this->login}: {$this->nome}, {$this->idade} anos";
    }
}

$usuario = new Usuario('Anderson', 30, 'anderson_souza');
echo $usuario->apresentar();