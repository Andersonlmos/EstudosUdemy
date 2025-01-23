<div class="titulo">Foreach</div>

<?php
$array = [
    'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

foreach ($array as $valor) {
    echo "$valor <br>";
}

$array2 = [
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];
echo '<hr>';

foreach ($array2 as $indice => $valor){
    echo "$indice => $valor <br>";
}
echo '<hr>';

$matrix = [
    ['A', 'B', 'C', 'D'],
    ['a', 'b', 'c', 'd']
];

foreach ($matrix as $linha) {
    // echo "$linha <br>";
    foreach ($linha as $letra) {
        echo "$letra ";
    }
    echo '<br>';
}