<div class="titulo">While/Do-While</div>

<?php

const VALOR_LIMITE = 10;
$cont = 0;
while($cont <= VALOR_LIMITE) {
    echo "While $cont <br>";
    $cont++;
}
echo '<hr>';

$cont = 1;
do {
    echo "do-while $cont <br>";
    $cont++;
} while ($cont <= VALOR_LIMITE);

echo '<hr>';

$contador = 0;
while(true) {
    echo "While-true $contador <br>";
    $contador++;
    if($contador > VALOR_LIMITE) break;
} 