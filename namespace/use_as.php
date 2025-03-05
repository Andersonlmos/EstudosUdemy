<?php namespace Outro\Nome; ?>

<div class="titulo">Use/As</div>
<p>O 'use'e o 'as' em PHP servem para importar classes, interfaces ou funções de namespace e dar apelidos (alias) para evitar conflitos ou deixar o código mais limpo.</p>

<?php
include ('use_as_arquivo.php');

function soma( $a, $b) {
    return $a - $b;
}



// echo \Nome\Bem\Grande\constante . '<br>';

use const Nome\Bem\Grande\constante;
echo constante . '<br>';

use Nome\Bem\Grande as ctx;
echo soma(1, 2) . '<br>';
echo ctx\soma(3, 2) . '<br>';

$a = new \Nome\Bem\Grande\Classe ();
$a->func();

