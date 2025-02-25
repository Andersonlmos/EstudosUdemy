<div class="titulo">Polimorfismo</div>
<?php

abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class ArrozAgrega extends Arroz {

}

class Feijao extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso)
    {
        $this->peso = $peso;
    }

    public function comer ( Comida $comida) {
        $this->peso += $comida->peso;
    }
}

$c1= new Arroz ();
$c1->peso = 0.65;

$c2= new ArrozAgrega ();
$c2->peso = 0.85;

$c3= new Sorvete ();
$c3->peso = 1.55;

$pessoa = new Pessoa(84.5);
$pessoa->comer($c1);
$pessoa->comer($c2);
$pessoa->comer($c3);

echo $pessoa->peso;