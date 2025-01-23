<div class="titulo">Laço for</div>

<?php
for($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}
echo '<hr>';

for (;$cont <= 10; $cont++) {
    echo "$cont <br>"; 
}
echo '<hr>';

for (;$cont <= 20;) {
    echo "$cont <br>";
    $cont++;
}
echo '<hr>';

$array = [
    'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
];

for($i = 0; $i < count($array); $i++) {
    echo "{$array[$i]} <br>";
}

echo '<hr>';

$matrix = [
    [
        'A', 'B', 'C', 'D'
    ],
    [
        'a', 'e', 'i', 'o', 'u']
    ];

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        echo "{$matrix[$i] [$j]}" ;
    }
    echo '<br>';
}