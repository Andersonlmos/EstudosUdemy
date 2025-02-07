<div class="titulo">Map & Filter</div>

<?php
$notas = [
5.8, 
6.7, 
7.1, 
9.8, 
6.7, 
8.8, 
7.5
];
echo "Notas<br>";
print_r($notas);
echo '<br>';
// foreach ($notas as $nota) {
//     $notasFinais1[] = round($nota);
// }

// print_r($notasFinais1);

//Usando o Map -------
echo "Usando Map e arredodando no array notas<br>";
$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

echo '<br>';

//Usando Filter ----

function aprovados($nota) {
    return $nota >= 7;
}
echo "Usando Filter no array notas filtrando os aprovados<br>";
$apenasOsAprovados1 = array_filter($notas, 'aprovados');
print_r($apenasOsAprovados1);
echo '<br>';

function pontoAdicional ($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<br>';

$notasFinais = array_map('pontoAdicional', $notas);
print_r($notasFinais);