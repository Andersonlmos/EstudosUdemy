<div class="titulo">Visibilidade</div>
<?php
class A {
    public $publico = 'Publico';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';
    
    public function mostrarA() {
        
        return "Class A) Publico = {$this->publico}<br>".
         "Class A) Protegido = {$this->protegido}<br>".
         "Class A) Privado = {$this->privado}<br>";
    }

    private function naoMostrarA() {
        echo 'Não vou imprimir!<br>';
    }
}

$a = new A();
echo $a->mostrarA();


class B extends A {
    public function mostrarB() {
        echo "Classe B) Publico = {$this->publico}<br>";
        echo "Classe B) Protegido = {$this->protegido}<br>";
        // echo "Classe B) Privado = {$this->privado}<br>"; nao acessa por herança
    }
}

echo '<br>';
$b = new B();
echo $b->mostrarB().'<br>';

echo $b->mostrarA();