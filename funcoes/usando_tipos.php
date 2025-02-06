<div class="titulo">Usando Tipos</div>
<!-- algumas estao em absoleto-->
<?php
function somar1($a, $b) {
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(1.7, 2.5 ) . '<br>';
echo somar1(1, '4dois') . '<br>';



function somar2(int $a, int $b) {
    echo " Somando $a + $b = ";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(1.7, 2.5) . '<br>';
echo somar2(1, '4dois') . '<br>';



function somar3($a, $b): int {
    echo "Somando $a + $b = ";
    return $a + $b;
}

echo somar3(2, 3) . '<br>';