<div class="titulo">Abstract</div>

<?php
abstract class Animal {
    abstract function fazerSom(); // Método abstrato

    function dormir(){
        return "Zzz...";
    }
}

class Cachorro extends Animal {
    function fazerSom()
    {
        return "Au, Au";
    }
}

class Gato extends Animal {
    function fazerSom()
    {
        return "Miau";
    }
}

$cachorro = new Cachorro();
echo $cachorro->fazerSom(), '<br>';
echo $cachorro->dormir(), '<br>';

$gato = new Gato();
echo $gato->fazerSom(), '<br>';

//Exemplo 02 --------------

abstract class Usuario {
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    abstract public function getPermissoes(); // Metado abstrato

    public function getNome() {
        return $this->nome;
    }
}

class Admin extends Usuario {
    function getPermissoes()
    {
        return ['Criar', 'editar', 'excluir'];
    }
}

class Client extends Usuario {
    function getPermissoes()
    {
        return ['Vizualizar'];
    }
}


$admin = new Admin("Joao");
echo $admin->getNome(), '<br>';
print_r($admin->getPermissoes());

$cliente = new Client("Maria");
echo $cliente->getNome();
print_r($cliente->getPermissoes());