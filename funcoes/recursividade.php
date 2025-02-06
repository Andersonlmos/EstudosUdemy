<div class="titulo">Recursividade</div>

<?php
function somaUmAte($numero) {
    $soma = 0;
    for($i =1; $i <= $numero; $i++){
        $soma += $i;
    }
    return $soma;
}
echo somaUmAte(150) . '<br>';

function somaRecursivaUmate($numero) {
    if($numero === 1){
        return 1;
    } else {
        return $numero + somaRecursivaUmate($numero -1);
    }
}
echo somaRecursivaUmate(100) . '<br>';

function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero -1);
}
echo somaRecursivaEconomica(10);