<div class="titulo">Construtor & Destrutor</div>
<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade)
    {
        echo 'Construtor invocado!<br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'destruido!<br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

$pessoaA = new Pessoa ('Anderson Souza', 30) ;
$pessoaA->apresentar();

$pessoaB = new Pessoa ('Pedro Lucas', 20);
$pessoaB->apresentar();