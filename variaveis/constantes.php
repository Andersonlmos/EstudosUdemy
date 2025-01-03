<div class="titulo">Constantes</div>

<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;

//Outra forma de constante

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;
//echo '<br>' . $TAXA_DE_JUROS; nao funciona
$valorVariavel = 2.8;
//define('NOVISSIMA_TAXA', $valorVariavel);
//const NOVISSIMA_TAXA = $valorVariavel; nao funciona
const NOVISSIMA_TAXA = 2.8 + 1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> linha: ' . __LINE__;
echo '<br> linha: ' . __FILE__;