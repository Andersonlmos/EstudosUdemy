<div class="titulo">Básico de Variáveis</div>

<?php
$numeroA = 16;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';

$a = 3;
$b = 4;
$somaDosNumeros = $a + $b;
echo '<br>';
echo $somaDosNumeros;
echo '<br>';
$somaDosNumeros = 0;
echo '<br>';

echo isset($somaDosNumeros);

echo '<br>';
$variavel = 10;
echo '<br>' . $variavel;
$variavel = "Agora eu sou uma string!";
echo '<br>' . $variavel;

// Nomes de variável
$var = 'valida';
$var2 = "valida";
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar!

// $6var = 'inavalida';
//$%var7 = 'invalida';
// $var8% = 'invalida';