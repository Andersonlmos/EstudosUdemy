<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    //Atributos
    public $nome = 'Anonimo';
    public $idade = 18;

    //Metodo
    public function apresentar() {
        return "Nome:{$this->nome} Idade: {$this->idade}";
    }
}

$cliente1 = new Cliente();
$cliente1->nome = 'Ana Silva';
$cliente1->idade = 27;

$cliente2 = new Cliente();
$cliente2->nome = 'Gabriel';
$cliente2->idade = 18;

echo $cliente1->apresentar(),'<br>';
echo $cliente2->apresentar(),'<br>';