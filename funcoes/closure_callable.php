<div class="titulo">Closure & Callable</div>

<?php
$soma1 = function($a, $b) {
    return $a + $b;
};
function soma2($a, $b) {
    return $a + $b;
}

echo $soma1 (2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Nao') . '<br>';

echo soma2 (3, 4) . ' ';
echo (is_callable('soma2') ? 'Sim' : 'Nao') . '<br>';

var_dump($soma1);

function executar ($a, $b, $op, callable $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma1);