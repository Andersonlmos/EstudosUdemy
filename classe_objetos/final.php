<div class="titulo">Modificador Final</div>
<?php
/* O modificador final é usado para impedir que classes sejam estendidas ou que métodos sejam sobrescritos por classes filhas. Ele pode ser aplicado tanto a classes quanto a métodos.
*/

abstract class Abstrata {
    abstract public function metodo1();

    final function metodo2() { 
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando metodo 1!<br>';
    }

    // public function metodo2() {
    //     echo 'Extendendo metodo 2<br>';
    // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();


final class unica {
    public $atributo = "Valor Unico";
}

$unica = new Unica();
echo $unica->atributo;
