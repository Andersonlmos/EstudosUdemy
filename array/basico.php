<div class="titulo">Arrays</div>

<?php
$lista = array(1, 3, 4.6, "texto");

var_dump($lista);
echo '<br>';
print_r($lista);
echo '<br>';

$lista[0] = 1234;
print_r($lista);

echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
//var_dump($lista[4]); retorna NULL

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // Cuidado gera problemas
echo '<br>' . mb_substr($texto, 10, 1);
