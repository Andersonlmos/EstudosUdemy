<div class="titulo">Desafio Erros</div>

<?php

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        return "estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    public $text;
    function __construct($parametro2)
    {
        $this->text = $parametro2;
    }

    function metodo1()
    {
        return 'tambem estou funcionando';
    }

    function metodo2($parametro)
    {
        return 'tambem estou funcionando';
    }
}

$exemplo = new Classe('text');
echo $exemplo->text . '<br>';
echo $exemplo->metodo3();