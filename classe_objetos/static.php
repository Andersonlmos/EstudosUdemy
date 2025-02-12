<div class="titulo">Membros Estáticos</div>

<?php
//propriedades Estáticas
class A {
    public $naoStatic = 'Variavel de instancia';
    public static $static = 'Variavel de classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        echo "Estatica = " . self::$static . "<br>";
    }
}

$objA = new A ();
$objA->mostrarA();


//Exemplo 01 ----------
class Exemplo {
    public static $contador = 0;

    public function __construct()
    {
        self::$contador++; // Acessa e modifica a propriedade estática
    }
}

$objeto1 = new Exemplo();
$objeto2 = new Exemplo();
$objeto3 = new Exemplo();

echo Exemplo::$contador;
echo '<br>';

// Métodos Estáticos-----------
class Exemplo2 {
    public static $mensagem = "Olá, mundo!<br>";

    public static function saudacao(){
        echo self::$mensagem; // Acessa a propriedade estática
    }
}
//Chamando o método estático diretamente pela classe
Exemplo2::saudacao();


class Banco {
    public static $saldoTotal = 0; //Propriedade estática para o saldo total
    public $saldo; //Propriedade não estática para o saldo individual

    public function __construct($saldoInicial)
    {
        $this->saldo = $saldoInicial;
        self::$saldoTotal +=$saldoInicial;
    }

    public static function mostrarSaldoTotal() {
        echo "Saldo total: " . self::$saldoTotal . "<br>";
    }

    public function mostrarSaldoIndividual() {
        echo "Seu saldo: {$this->saldo} <br>";
    }
}

//Criando instâncias
$conta1 = new Banco(1000);
$conta2 = new Banco(700);

//Acessando o saldo total (método estático)
Banco::mostrarSaldoTotal(); // Exibir saldo total

//Acessando saldo individual de cada conta
$conta1->mostrarSaldoIndividual();
$conta2->mostrarSaldoIndividual();